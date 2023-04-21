<?php
    class Users extends controller {
        public function __construct(){
            $this->userModel = $this->model('User');
        }

        public function login(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form

                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $data =[
                    'username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'designation' => '',
                    'username_err' => '',
                    'password_err' => ''
                ];

                // Validate Username
                if(empty($data['username'])){
                    $data['username_err'] = 'Please enter Username';
                }

                // Validate Password
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter Password';
                }

                // Check for user/username
                if($this->userModel->findUserByUsername($data['username'])){
                    // User found
                } else {
                    // User not found
                    $data['username_err'] = 'No user found';
                }

                // Make sure errors are empty
                if(empty($data['username_err']) && empty($data['password_err'])){
                    // Validated
                    // Check and set logged in user
                    $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                    if($loggedInUser){
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
                $data =[
                    'username' => '',
                    'password' => '',
                    'username_err' => '',
                    'password_err' => ''
                ];

                // Load view
                $this->view('users/login', $data);
            }
        }
        public function createUserSession($user){
            $_SESSION['user_id'] = $user->emp_no;
            $_SESSION['user_name'] = $user->username;
            //$_SESSION['user_email'] = $user->email;
            $_SESSION['user_designation'] = $user->designation;
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

        public function logout(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_username']);
            // unset($_SESSION['user_email']);
            session_destroy();
            redirect('users/login');
        }

        
    }