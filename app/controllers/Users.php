<?php
require_once "D:/installed apps/XAMPP/htdocs/Ezymanage/app/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Users extends controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'designation' => '',
                'username_err' => '',
                'password_err' => ''
            ];

            // Validate Username
            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter Username';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter Password';
            }

            // Check for user/username
            if ($this->userModel->findUserByUsername($data['username'])) {
                // User found
            } else {
                // User not found
                $data['username_err'] = 'No user found';
            }

            // Make sure errors are empty
            if (empty($data['username_err']) && empty($data['password_err'])) {
                // Validated
                // Check and set logged in user
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    // Create Session
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_err'] = 'Password incorrect';

                    $this->view('users/login', $data);
                }
            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }
        } else {
            // Init data
            $data = [
                'username' => '',
                'password' => '',
                'username_err' => '',
                'password_err' => ''
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }
    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->emp_no;
        $_SESSION['user_name'] = $user->username;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_designation'] = $user->designation;
        $_SESSION['dp'] = $user->dp;
        switch ($user->designation) {
            case 'Teacher':
                redirect('teachers/index');
                break;
            case 'Principal':
                redirect('principals/index');
                break;
            case 'Director':
                redirect('directors/index');
                break;
            case 'Clerk School':
                redirect('schoolClerks/index');
                break;
            case 'Clerk Salary':
                redirect('salaryclerks/index');
                break;
            case 'Clerk Transfer':
                redirect('transferclerks/index');
                break;
            case 'Admin':
                redirect('adminclerks/index');
                break;
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_username']);
        unset($_SESSION['user_email']);
        session_destroy();
        redirect('users/login');
    }

    //validate password
    function isValidPassword($password)
    {
        // Minimum length of 8 characters
        if (strlen($password) < 8) {
            $password_error = 'Password must be at least 8 characters long!';
            return $password_error;
        }

        // At least one uppercase letter
        if (!preg_match('/[A-Z]/', $password)) {
            $password_error = 'Password must contain at least one uppercase letter!';
            return $password_error;
        }

        // At least one lowercase letter
        if (!preg_match('/[a-z]/', $password)) {
            $password_error = 'Password must contain at least one lowercase letter!';
            return $password_error;
        }

        // At least one digit
        if (!preg_match('/\d/', $password)) {
            $password_error = 'Password must contain at least one digit!';
            return $password_error;
        }

        // At least one special character
        if (!preg_match('/[\W]+/', $password)) {
            $password_error = 'Password must contain at least one special character!';
            return $password_error;
        }

        // If all conditions are met, return true
        return true;
    }

    public function setPassword($token)
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // Init data
            $data = [
                'userData' => $this->userModel->findUserByToken($token),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'designation' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter Password';
            }

            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm Password';
            }

            if ($this->isValidPassword($data['password']) != true) {
                $data['password_err'] = $this->isValidPassword($data['password']);
            }

            if ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }

            // Make sure errors are empty
            if (empty($data['password_err']) && empty($data['confirm_password_err'])) {
                // Hash Password
                $data['hashed_password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $data['email'] = $data['userData']->email;
                $data['username'] = $data['userData']->username;

                //Change password
                if ($this->userModel->updatePassword($data)) {
                    // Validated
                    // Check and set logged in user
                    $this->userModel->deleteToken($data);
                    $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                    if ($loggedInUser) {
                        // Create Session
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['password_err'] = 'Password incorrect';

                        $this->view('users/setPassword', $data);
                    }
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('users/setPassword', $data);
            }
        } else {
            // Init data
            $data = [
                'token' => $token,
                'userData' => $this->userModel->findUserByToken($token),
                'confirm_password' => '',
                'password' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];


            // Load view
            $this->view('users/setPassword', $data);
        }
    }

    public function forgotPassword()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'email' => trim($_POST['email']),
                'emai_error' => ''
            ];

            //validate email
            if (!empty($data['email'])) {
                if ($this->userModel->getUserByEmail($data['email'])) {
                    $data['userData'] = $this->userModel->getUserByEmail($data['email']);
                    $data['otp'] = mt_rand(100000, 999999);
                    if ($this->userModel->addOtp($data)) {
                        $this->sendOtpEmail($data);
                        redirect('users/getOtp/' . $data['userData']->emp_no);
                    } else {
                        die('something went wrong');
                    }
                } else {
                    $data['email_err'] = 'No user found';
                    $this->view('users/forgotPassword', $data);
                }
            } else {
                die('4');
                $data['email_err'] = 'Please enter email';
                $this->view('users/forgotPassword', $data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'email_err' => ''
            ];

            // Load view
            $this->view('users/forgotPassword', $data);
        }
    }

    public function getOtp($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'userData' => $this->userModel->getUserById($id),
                'otp' => trim($_POST['otp']),
                'otp_error' => '',
            ];

            $email = $data['userData']->email;
            $data['realOtp'] = $this->userModel->getOtp($email);

            // Validate Password
            if (empty($data['otp'])) {
                $data['otp_err'] = 'Please enter OTP';
            }

            if ($data['otp'] != $data['realOtp']->access_token) {
                $data['otp_err'] = 'OTP is incorrect';
            }

            // Make sure errors are empty
            if (empty($data['otp_err'])) {
                redirect('users/changePassword/' . $id);
            } else {
                // Load view with errors
                $this->view('users/getOtp', $data);
            }
        } else {
            // Init data
            $data = [
                'userData' => $this->userModel->getUserById($id),
                'otp' => '',
                'otp_err' => '',
            ];

            // Load view
            $this->view('users/getOtp', $data);
        }
    }

    public function changePassword($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'id' => $id,
                'userData' => $this->userModel->getUserByID($id),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter Password';
            }

            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm Password';
            }

            if ($this->isValidPassword($data['password']) != true) {
                $data['password_err'] = $this->isValidPassword($data['password']);
            }

            if ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }

            // Make sure errors are empty
            if (empty($data['username_err']) && empty($data['password_err'])) {
                // Hash Password
                $data['hashed_password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $data['email'] = $data['userData']->email;
                $data['username'] = $data['userData']->username;

                //Change password
                if ($this->userModel->updatePassword($data)) {
                    // Validated
                    // Check and set logged in user
                    $this->userModel->deleteToken($data);
                    $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                    if ($loggedInUser) {
                        // Create Session
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['password_err'] = 'Password incorrect';

                        $this->view('users/changePassword', $data);
                    }
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('users/setPassword', $data);
            }
        } else {
            // Init data
            $data = [
                'id' => $id,
                'userData' => $this->userModel->getUserByID($id),
                'confirm_password' => '',
                'password' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];

            // Load view
            $this->view('users/changePassword', $data);
        }
    }


    //send Email
    public function sendEmail($to, $subject, $message)
    {
        // Load PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configure mail settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ezymanagems@gmail.com';
            $mail->Password = 'kgjaqizhqkzxfxlm';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // Set sender and recipient
            $mail->setFrom('ezymanagems@gmail.com', 'Ezymanage Admin');
            $mail->addAddress($to);

            // Set email content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            // Send the email
            $mail->send();
            return true;
        } catch (Exception $e) {
            // Log the error or display an error message
            error_log("Email could not be sent. PHPMailer Error: {$mail->ErrorInfo}");
            return false;
        }
    }

    public function sendOtpEmail($data)
    {
        $otp = $data['otp'];
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->Port = 465;
        $phpmailer->Username = 'ezymanagems@gmail.com';
        $phpmailer->Password = 'kgjaqizhqkzxfxlm';


        $phpmailer->setFrom('ezymanagems@gmail.com', 'Ezymanage Admin');
        $phpmailer->addAddress($data['email'], $data['full_name']);
        $phpmailer->Subject = 'OTP to change password';
        $phpmailer->msgHTML($this->getAccessEmail($otp));
        $phpmailer->AltBody = 'Use this Otp to change your password';


        if ($phpmailer->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAccessEmail($otp)
    {
        return "
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Account Access</title>
    </head>
    <body>
        <p><center>Welcome to <b>Ezymanage</b></center><br>
            Use the following link to access your account and change the password.
        </p>
        <p>Otp : <b>$otp</b></p>
    </body>
    </html>
    ";
    }
}
