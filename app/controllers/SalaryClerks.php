<?php
class SalaryClerks extends Controller
{
    private $commonModel;
    private $salaryClerkModel;
    private $transferClerkModel;
    private $userModel;

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->commonModel = $this->model('Common');
        $this->transferClerkModel = $this->model('TransferClerk');
        $this->salaryClerkModel = $this->model('SalaryClerk');
        $this->userModel = $this->model('User');
    }

    public function index()
    {

        $data = [
            //'teachers' => $teachers
        ];

        $this->view('salaryclerks/index', $data);
    }

    //view deatils
    public function viewDetails()
    {
        //form process
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'search' => trim($_POST['search']),
            ];

            if (empty($data['search'])) {
                $data['teachers'] = $this->commonModel->getTeacherDeatail();
            } else {
                $data['teachers'] = $this->commonModel->searchTeachers($data);
            }
        } else {
            $data = [
                'teachers' => $this->commonModel->getTeacherDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        //load view
        $this->view('salaryclerks/viewDetails', $data);
    }

    public function viewDetails_principal()
    {
        //form process
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'search' => trim($_POST['search']),
            ];

            if (empty($data['search'])) {
                $data['principals'] = $this->commonModel->getPrincipalDeatail();
            } else {
                $data['principals'] = $this->commonModel->searchPrincipals($data);
            }
        } else {
            $data = [
                'principals' => $this->commonModel->getPrincipalDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('salaryclerks/viewDetails-principal', $data);
    }

    public function viewDetails_directors()
    {
        //form process
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'search' => trim($_POST['search']),
            ];

            if (empty($data['search'])) {
                $data['directors'] = $this->commonModel->getDirectorDeatail();
            } else {
                $data['directors'] = $this->commonModel->searchDirectors($data);
            }
        } else {
            $data = [
                'directors' => $this->commonModel->getDirectorDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('salaryclerks/viewDetails-directors', $data);
    }

    public function viewDetails_schoolClerks()
    {
        //form process
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'search' => trim($_POST['search']),
            ];

            if (empty($data['search'])) {
                $data['schoolClerks'] = $this->commonModel->getSchoolClerksDetail();
            } else {
                $data['schoolClerks'] = $this->commonModel->searchSchoolClerks($data);
            }
        } else {
            $data = [
                'schoolClerks' => $this->commonModel->getSchoolClerksDetail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('salaryclerks/viewDetails-schoolClerks', $data);
    }

    public function viewDetails_transferClerks()
    {
        //form process
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'search' => trim($_POST['search']),
            ];

            if (empty($data['search'])) {
                $data['transferClerks'] = $this->commonModel->getTransferDeatail();
            } else {
                $data['transferClerks'] = $this->commonModel->searchTransferClerks($data);
            }
        } else {
            $data = [
                'transferClerks' => $this->commonModel->getTransferClerksDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('salaryclerks/viewDetails-transferClerks', $data);
    }

    public function viewDetails_zonalClerks()
    {
        //form process
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'search' => trim($_POST['search']),
            ];

            if (empty($data['search'])) {
                $data['zonalClerks'] = $this->commonModel->getZonalClerkDetail();
            } else {
                $data['zonalClerks'] = $this->commonModel->searchZonalClerks($data);
            }
        } else {
            $data = [
                'zonalClerks' => $this->commonModel->getZonalClerkDetail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('salaryclerks/viewDetails-zonalClerks', $data);
    }


    public function viewDetails_schools()
    {
        //form process
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'search' => trim($_POST['search']),
            ];

            if (empty($data['search'])) {
                $data['schools'] = $this->commonModel->getSchoolDeatail();
            } else {
                $data['schools'] = $this->commonModel->searchSchools($data);
            }
        } else {
            $data = [
                'schools' => $this->commonModel->getSchoolDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('salaryclerks/viewDetails-schools', $data);
    }

    public function viewMoreSchoolDetails($id)
    {
        // Get school details
        $schools = $this->commonModel->getSchoolById($id);

        $data = [
            'schools' => $schools,
        ];

        $this->view('salaryclerks/viewMoreSchoolDetails', $data);
    }

    public function viewMorePrincipalDetails($id)
    {
        // Get school details
        $principals = $this->commonModel->getPrincipalById($id);

        $data = [
            'principals' => $principals,
        ];

        $this->view('salaryclerks/viewMorePrincipalDetails', $data);
    }

    public function viewMoreTeacherDetails($id)
    {
        // Get school details
        $teachers = $this->commonModel->getTeacherById($id);

        $data = [
            'teachers' => $teachers,
        ];

        $this->view('salaryclerks/viewMoreTeacherDetails', $data);
    }

    public function viewMoreDirectorDetails($id)
    {
        // Get school details
        $directors = $this->commonModel->getDirectorById($id);

        $data = [
            'directors' => $directors,
        ];

        $this->view('salaryclerks/viewMoreDirectorDetails', $data);
    }

    public function profile()
    {
        // Get teachers
        $id = $_SESSION['user_id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['submit_per'])) {
                //sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //init data
                $data = [
                    'users' => $this->transferClerkModel->getUser($id),
                    'username' => trim($_POST['username']),
                    'full_name' => trim($_POST['full_name']),
                    'name_with_initials' => trim($_POST['name_with_initials']),
                    'birthday' => trim($_POST['birthday']),
                    'address' => trim($_POST['address']),
                    'contact_num' => trim($_POST['contact_num']),
                    'email' => trim($_POST['email']),
                    'username_err' => '',
                    'email_err' => '',
                ];

                //validate data-------------------------------------
                //check user name already exists
                if (!empty($data['username'])) {
                    if ($this->salaryClerkModel->findUserByUsername($data['username'])) {
                        $data['username_err'] = 'Username already exists';
                    }
                }

                //check email already exists
                if (!empty($data['email'])) {
                    if ($this->salaryClerkModel->findUserByEmail($data['email'])) {
                        $data['email_err'] = 'Email already exists';
                    }

                    //email validation
                    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                        $data['email_err'] = 'Please enter the correct format';
                    }
                }

                //make sure errors are empty
                if (empty($data['username_err']) && empty($data['email_err'])) {
                    //validated
                    if ($this->salaryClerkModel->updateProfile($data)) {
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Profile updated successfully';
                        redirect('salaryclerks/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/profile', $data);
                }
            } else if (isset($_POST['submit_pass'])) {
                //sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //init data
                $data = [
                    'users' => $this->transferClerkModel->getUser($id),
                    'current_password' => trim($_POST['current_password']),
                    'new_password' => trim($_POST['new_password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'hashed_password' => '',
                    'current_password_err' => '',
                    'new_password_err' => '',
                    'confirm_password_err' => '',
                ];

                //validate data-------------------------------------
                //check user name already exists
                //password validation--------------------
                if (empty($data['current_password'])) {
                    $data['current_password_err'] = 'Please enter current password';
                }

                if (empty($data['new_password'])) {
                    $data['new_password_err'] = 'Please enter new password';
                }

                if (empty($data['confirm_password'])) {
                    $data['confirm_password_err'] = 'Please enter confirm password';
                }

                if (!password_verify($data['current_password'], $data['users']->password)) {
                    $data['current_password_err'] = 'Current password is incorrect';
                }

                if ($data['new_password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Passwords do not match';
                }


                if (empty($data['current_password_err']) && empty($data['new_password_err']) && empty($data['confirm_password_err'])) {
                    //validated
                    $data['hashed_password'] = password_hash($data['new_password'], PASSWORD_DEFAULT);
                    if ($this->salaryClerkModel->updatePassword($data)) {
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Password changed successfully';
                        redirect('salaryclerks/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/profile', $data);
                }
            } else if (isset($_POST['submit_cn'])) {
                //sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //init data
                $data = [
                    'users' => $this->transferClerkModel->getUser($id),
                    'contact_num' => trim($_POST['contact_num']),
                    'contact_num_err' => '',
                ];

                //check empty
                if (empty($data['contact_num'])) {
                    $data['contact_num_err'] = 'Please enter contact number';
                }

                //check contact number already exists
                if ($this->salaryClerkModel->findUserByContact($data['contact_num'])) {
                    $data['contact_num_err'] = 'Contact number already exists';
                }

                //make sure errors are empty
                if (empty($data['contact_num_err'])) {
                    //validated
                    if ($this->salaryClerkModel->updateContactNum($data)) {
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Contact number updated successfully';
                        redirect('salaryclerks/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/profile', $data);
                }
            } else if (isset($_POST['submit_ad'])) {
                //sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //init data
                $data = [
                    'users' => $this->transferClerkModel->getUser($id),
                    'address' => trim($_POST['address']),
                    'address_err' => '',
                ];
                //ckeck adress empty
                if (empty($data['address'])) {
                    $data['address_err'] = 'Please enter address';
                }

                //make sure errors are empty
                if (empty($data['address_err'])) {
                    //validated
                    if ($this->salaryClerkModel->updateAddress($data)) {
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Address updated successfully';
                        redirect('salaryclerks/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/profile', $data);
                }
            } else if (isset($_POST['submit_em'])) {
                //sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //init data
                $data = [
                    'users' => $this->transferClerkModel->getUser($id),
                    'email' => trim($_POST['email']),
                    'address_err' => '',
                ];
                if (!empty($data['email'])) {
                    if ($this->salaryClerkModel->findUserByEmail($data['email'])) {
                        $data['email_err'] = 'Email already exists';
                    }

                    //email validation
                    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                        $data['email_err'] = 'Please enter the correct format';
                    }
                } else {
                    $data['email_err'] = 'Please enter email';
                }






                //make sure errors are empty
                if (empty($data['address_err'])) {
                    //validated
                    if ($this->salaryClerkModel->updateAddress($data)) {
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Address updated successfully';
                        redirect('salaryclerks/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/profile', $data);
                }
            } else {
                $data = [
                    'users' => $this->transferClerkModel->getUser($id),
                    'current_password' => '',
                    'new_password' => '',
                    'confirm_password' => '',
                    'hashed_password' => '',
                    'current_password_err' => '',
                    'new_password_err' => '',
                    'confirm_password_err' => '',
                ];
                //load view
                $this->view('salaryclerks/profile', $data);
            }
        } else {
            $data = [
                'users' => $this->commonModel->getUser($id),
                'username' => '',
                'full_name' => '',
                'name_with_initials' => '',
                'birthday' => '',
                'address' => '',
                'contact_num' => '',
                'email' => '',
                'current_password' => '',
                'new_password' => '',
                'confirm_password' => '',
                'username_err' => '',
                'email_err' => '',
                'current_password_err' => '',
                'new_password_err' => '',
                'confirm_password_err' => '',
            ];
            //load view
            $this->view('salaryclerks/profile', $data);
        }
    }

    public function editProfile()
    {
        // Get teachers
        $id = $_SESSION['user_id'];

        //process form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $users = $this->transferClerkModel->getUser($id);

            //init data
            $data = [
                'users' => $users,
                'dp' => $_FILES['fileImg']['name'],
                'image_tmp' => $_FILES['fileImg']['tmp_name'],
                'emp_number' => trim($_POST['emp_num']),
                'email' => trim($_POST['email']),
                'contact' => trim($_POST['contact']),
                'full_name' => trim($_POST['fullName']),
                'name_with_initials' => trim($_POST['nameWithInitials']),
                'address' => trim($_POST['address']),
                'birthday' => trim($_POST['birthday']),
                //'zonal' => trim($_POST['zonal']),
                'designation' => trim($_POST['designation']),
                'NIC' => trim($_POST['nic']),
                // 'password' => trim($_POST['password']),
                // 'confirm_password' => trim($_POST['confirmPassword']),
                'dp_err' => '',
                'emp_number_err' => '',
                'email_err' => '',
                'contact_err' => '',
                'full_name_err' => '',
                'name_with_initials_err' => '',
                'address_err' => '',
                'birthday_err' => '',
                'zonal_err' => '',
                'designation_err' => '',
                'NIC_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            //validate
            //check if any of the fields are empty
            // if(empty($data['dp'])){
            //     $data['dp_err'] = 'Please upload a profile picture';
            // }
            // if(empty($data['emp_number'])){
            //     $data['emp_number_err'] = 'Please enter employee number';
            // }
            // if(empty($data['email'])){
            //     $data['email_err'] = 'Please enter email';
            // }
            // if(empty($data['contact'])){
            //     $data['contact_err'] = 'Please enter contact number';
            // }
            // if(empty($data['full_name'])){
            //     $data['full_name_err'] = 'Please enter full name';
            // }
            // if(empty($data['name_with_initials'])){
            //     $data['name_with_initials_err'] = 'Please enter name with initials';
            // }
            // if(empty($data['address'])){
            //     $data['address_err'] = 'Please enter address';
            // }
            // if(empty($data['birthday'])){
            //     $data['birthday_err'] = 'Please enter birthday';
            // }
            // if(empty($data['zonal'])){
            //     $data['zonal_err'] = 'Please enter zonal';
            // }
            // if(empty($data['designation'])){
            //     $data['designation_err'] = 'Please enter designation';
            // }
            // if(empty($data['NIC'])){
            //     $data['NIC_err'] = 'Please enter NIC';
            // }
            // if(empty($data['password'])){
            //     $data['password_err'] = 'Please enter password';
            // }
            // if(empty($data['confirm_password'])){
            //     $data['confirm_password_err'] = 'Please confirm password';
            // }

            //check if password and confirm password match
            // if ($data['password'] != $data['confirm_password']) {
            //     $data['confirm_password_err'] = 'Passwords do not match';
            // }

            //check if email is valid
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['email_err'] = 'Please enter the correct format';
            }

            //nic validation
            if ((!preg_match("/^[0-9]{9}[vVxX]$/", $data['NIC'])) || ((strlen($data['NIC']) != 12) && (strlen($data['NIC']) != 10))) {
                $data['NIC_err'] = 'Please enter the correct format';
            }

            //make sure errors are empty
            if (1 == 1) {
                //validated
                //hash password
                //$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //rename image
                $target_dir = "D:/installed apps/XAMPP/htdocs/Ezymanage/public/img/uploads/";
                $img_name = basename("$id." . pathinfo($_FILES["fileImg"]["name"], PATHINFO_EXTENSION));
                $target_file = $target_dir . basename("$id." . pathinfo($_FILES["fileImg"]["name"], PATHINFO_EXTENSION));
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                //register user
                if ($this->transferClerkModel->updateprofile($data, $img_name)) {
                    if (move_uploaded_file($_FILES["fileImg"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["fileImg"]["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    flash('update_success');
                    redirect('salaryclerks/profile');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                die('Something went wrong');
                $this->view('salaryclerks/editProfile', $data);
            }
        } else {
            $users = $this->transferClerkModel->getUser($id);
            //init data
            $data = [
                'users' => $users,
                'dp' => '',
                'emp_number' => '',
                'email' => '',
                'contact' => '',
                'full_name' => '',
                'name_with_initials' => '',
                'address' => '',
                'birthday' => '',
                'zonal' => '',
                'designation' => '',
                'NIC' => '',
                'password' => '',
                'confirm_password' => '',
                'dp_err' => '',
                'emp_number_err' => '',
                'email_err' => '',
                'contact_err' => '',
                'full_name_err' => '',
                'name_with_initials_err' => '',
                'address_err' => '',
                'birthday_err' => '',
                'zonal_err' => '',
                'designation_err' => '',
                'NIC_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            //load view
            $this->view('salaryclerks/editProfile', $data);
        }
    }

    public function paysheet()
    {
        $data = [
            'paysheet' => $this->salaryClerkModel->getpaysheet(),
        ];

        $this->view('salaryclerks/paysheet', $data);
    }

    public function allowance()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($_POST['submit_allowance'])) {
                //init data
                $data = [
                    'allowance' => $this->salaryClerkModel->getallowance(),
                    'name' => trim($_POST['name']),
                    'amount' => trim($_POST['amount']),
                    'name_err' => '',
                    'amount_err' => '',
                    'step' => ''
                ];
                //validate basic salary
                if (empty($data['name'])) {
                    $data['name_err'] = 'Please enter the value';
                }
                if (empty($data['amount'])) {
                    $data['amount_err'] = 'Please enter the value';
                }

                //make sure errors are empty
                if (empty($data['name_err']) && empty($data['amount_err'])) {
                    if ($this->salaryClerkModel->add_allowance($data)) {
                        //die($data['name'] . ", " . $data['amount']);
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'New Allowance added successfully';
                        $this->view('salaryclerks/allowance', $data);
                    } else {
                        die($data['name_err']);
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/allowance', $data);
                }
            }

            if (isset($_POST['edit_allowance'])) {
                //init data
                $data = [
                    'allowance' => $this->salaryClerkModel->getallowance(),
                    'id' => trim($_POST['id']),
                    'name' => trim($_POST['name']),
                    'amount' => trim($_POST['amount']),
                    'name_err' => '',
                    'amount_err' => '',
                    'step' => ''
                ];
                //validate basic salary
                if (empty($data['name'])) {
                    $data['name_err'] = 'Please enter the value';
                }
                if (empty($data['amount'])) {
                    $data['amount_err'] = 'Please enter the value';
                }

                //make sure errors are empty
                if (empty($data['name_err']) && empty($data['amount_err'])) {
                    if ($this->salaryClerkModel->update_allowanace($data)) {
                        //die($data['name'] . ", " . $data['amount']);
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Allowance updated successfully';
                        $this->view('salaryclerks/allowance', $data);
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    die('Something went');
                    $this->view('salaryclerks/allowance', $data);
                }
            }

            //delete allowance
            if (isset($_POST['dlt'])) {
                $data = [
                    'allowance' => $this->salaryClerkModel->getallowance(),
                    'id' => trim($_POST['id']),
                ];
                if ($this->salaryClerkModel->delete_allowance($data)) {
                    $_SESSION['status'] = 'success';
                    $_SESSION['tittle'] = 'Success';
                    $_SESSION['message'] = 'Allowance deleted successfully';
                    $this->view('salaryclerks/allowance', $data);
                } else {
                    die('Something went wrong');
                }
            }
        } else {

            $data = [
                'allowance' => $this->salaryClerkModel->getallowance(),
                'name' => '',
                'amount' => '',
                'name_err' => '',
                'amount_err' => ''
            ];
            $this->view('salaryclerks/allowance', $data);
        }
    }

    public function deductions()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'deduction' => $this->salaryClerkModel->getdeductions(),
                'id' => '',
                'name' => trim($_POST['name']),
                'amount' => trim($_POST['amount']),
                'name_err' => '',
                'amount_err' => '',
                'step' => ''
            ];

            if (isset($_POST['submit_deduction'])) {
                //validate basic salary
                if (empty($data['name'])) {
                    $data['name_err'] = 'Please enter the value';
                }
                if (empty($data['amount'])) {
                    $data['amount_err'] = 'Please enter the value';
                }

                //make sure errors are empty
                if (empty($data['name_err']) && empty($data['amount_err'])) {
                    if ($this->salaryClerkModel->add_deduction($data)) {
                        //die($data['name'] . ", " . $data['amount']);
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'New deduction added successfully';
                        $this->view('salaryclerks/deductions', $data);
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/deduction', $data);
                }
            }

            if (isset($_POST['edit_deduction'])) {
                //init data
                $data = [
                    'deduction' => $this->salaryClerkModel->getdeductions(),
                    'all' => $this->salaryClerkModel->getall($_POST['deduction_id']),
                    'deduction_id' => trim($_POST['deduction_id']),
                    'deduction_name' => trim($_POST['deduction_name']),
                    'deduction_amount' => trim($_POST['deduction_amount']),
                    'deduction_name_err' => '',
                    'deduction_amount_err' => '',
                ];
            }
        } else {

            $data = [
                'deduction' => $this->salaryClerkModel->getdeductions(),
                'name' => '',
                'amount' => '',
                'name_err' => '',
                'amount_err' => ''
            ];
            $this->view('salaryclerks/deductions', $data);
        }
    }

    public function basicSalary()
    {
        // if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //     // Sanitize POST data
        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //     // Init data
        //     $data = [
        //         'class' => trim($_POST['class']),
        //         'step' => trim($_POST['step']),
        //         'b_salary' => ''
        //     ];

        //     $data['b_salary'] =56770 + (($data['step'] - 18) *1630);

        //     if(!empty($data['class']) && !empty($data['step']) && !empty($data['b_salary'])){
        //         if($this->salaryClerkModel->submitStep($data)){
        //             $_SESSION['status'] = 'success';
        //             $_SESSION['tittle'] = 'Success';
        //             $_SESSION['message'] = 'Salary Step Submitted';
        //             redirect('salaryclerks/basicSalary');
        //         } else {
        //             die('Something went wrong');
        //         }
        //     }
        // }




        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($_POST['submit_1'])) {
                //init data
                $data = [
                    'basic' => $this->salaryClerkModel->getBasicSalary(),
                    'st_basic_1' => trim($_POST['st_basic_1']),
                    'increment_1' => trim($_POST['increment_1']),
                    'st_basic_1_err' => '',
                    'increment_1_err' => '',
                    'basic_salary' => '',
                    'step' => ''
                ];

                //validate basic salary
                if (empty($data['st_basic_1'])) {
                    $data['st_basic_1_err'] = 'Please enter the value';
                }
                if (empty($data['increment_1'])) {
                    $data['increment_1_err'] = 'Please enter the value';
                }

                //make sure errors are empty
                if (empty($data['st_basic_1_err']) && empty($data['increment_1_err'])) {
                    if ($this->salaryClerkModel->updateClass_1($data)) {
                        //die($data['st_basic_1'] . ", " . $data['increment_1']);
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Basic Salary Submitted';
                        redirect('salaryclerks/basicSalary');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    die('Something went wrong111');
                    $this->view('salaryclerks/basicSalary', $data);
                }
            }

            if (isset($_POST['submit_2-i'])) {
                //init data
                $data = [
                    'basic' => $this->salaryClerkModel->getBasicSalary(),
                    'st_basic_2-i' => trim($_POST['st_basic_2-i']),
                    'increment_2-i' => trim($_POST['increment_2-i']),
                    'st_basic_2-i_err' => '',
                    'increment_2-i_err' => ''
                ];

                //validate basic salary
                if (empty($data['st_basic_2-i'])) {
                    $data['st_basic_2-i_err'] = 'Please enter the value';
                }
                if (empty($data['increment_2-i'])) {
                    $data['increment_2-i_err'] = 'Please enter the value';
                }

                //make sure errors are empty
                if (empty($data['st_basic_2-i_err']) && empty($data['increment_2-i_err'])) {
                    if ($this->salaryClerkModel->updateClass_2i($data)) {
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Basic Salary Submitted';
                        redirect('salaryclerks/basicSalary');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/basicSalary', $data);
                }
            }

            if (isset($_POST['submit_2-ii'])) {
                //init data
                $data = [
                    'basic' => $this->salaryClerkModel->getBasicSalary(),
                    'st_basic_2-ii' => trim($_POST['st_basic_2-ii']),
                    'increment_2-ii' => trim($_POST['increment_2-ii']),
                    'st_basic_2-ii_err' => '',
                    'increment_2-ii_err' => ''
                ];

                //validate basic salary
                if (empty($data['st_basic_2-ii'])) {
                    $data['st_basic_2-ii_err'] = 'Please enter the value';
                }
                if (empty($data['increment_2-ii'])) {
                    $data['increment_2-ii_err'] = 'Please enter the value';
                }

                //make sure errors are empty
                if (empty($data['st_basic_2-ii_err']) && empty($data['increment_2-ii_err'])) {
                    if ($this->salaryClerkModel->updateClass_2ii($data)) {
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Basic Salary Submitted';
                        redirect('salaryclerks/basicSalary');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/basicSalary', $data);
                }
            }

            if (isset($_POST['submit_3-i'])) {
                //init data
                $data = [
                    'basic' => $this->salaryClerkModel->getBasicSalary(),
                    'st_basic_3-i' => trim($_POST['st_basic_3-i']),
                    'increment_3-i' => trim($_POST['increment_3-i']),
                    'st_basic_3-i_err' => '',
                    'increment_3-i_err' => ''
                ];

                //validate basic salary
                if (empty($data['st_basic_3-i'])) {
                    $data['st_basic_3-i_err'] = 'Please enter the value';
                }
                if (empty($data['increment_3-i'])) {
                    $data['increment_3-i_err'] = 'Please enter the value';
                }

                //make sure errors are empty
                if (empty($data['st_basic_3-i_err']) && empty($data['increment_3-i_err'])) {
                    if ($this->salaryClerkModel->updateClass_3i($data)) {
                        $_SESSION['status'] = 'success';
                        $_SESSION['tittle'] = 'Success';
                        $_SESSION['message'] = 'Basic Salary Submitted';
                        redirect('salaryclerks/basicSalary');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('salaryclerks/basicSalary', $data);
                }
            }
        } else {

            $data = [
                'basic' => $this->salaryClerkModel->getBasicSalary(),
                'st_basic_1' => '',
                'increment_1' => '',
                'st_basic_2-i' => '',
                'increment_2-i' => '',
                'st_basic_2-ii' => '',
                'increment_2-ii' => '',
                'st_basic_3-i' => '',
                'increment_3-i' => '',
                'st_basic_1_err' => '',
                'increment_1_err' => '',
                'st_basic_2-i_err' => '',
                'increment_2-i_err' => '',
                'st_basic_2-ii_err' => '',
                'increment_2-ii_err' => '',
                'st_basic_3-i_err' => '',
                'increment_3-i_err' => ''
            ];
            $this->view('salaryclerks/basicSalary', $data);
        }
    }

    public function payslip($id)
    {
        $data = [
            'user' => $this->commonModel->getUser($id),
            'emp_no' => $id,
            'teacher' => $this->commonModel->getTeacher($id),
            'principal' => $this->commonModel->getPrincipal($id),
            'basic' => 0.00,
            'int_all_3' => 0.00,
            'c.o.l' => 0.0,
            'sub_total' => 0.00,
            'gross_pay' => 0.00,
            'w&op_rate' => $this->commonModel->getWANDOP(),
            'w&op' => 0.00,
            'stamp' => 0.00,
            'agrahara' => $this->commonModel->getAgraharaDed($id),
            'agrahara_amount' => 0.00,
            'other_ded' => 0.00,
            'total_ded' => 0.00,
            'net_sal' => 0.00,
            'all_amount' => 0.00,
            'ded_amount' => 0.00,
        ];
        //Salary Preparation

        //choose basic
        // $id = $data['paysheet'] -> id;
        $user = $this->commonModel->getUser($id);
        $user_role = $user->designation;

        $int_all_3 = $this->commonModel->getNecAll1();
        $data['int_all_3'] = $int_all_3->amount;

        $col = $this->commonModel->getCOL();
        $data['c.o.l'] = $col->amount;

        $stamp = $this->commonModel->getStampDed();
        $data['stamp'] = $stamp->amount;




        if ($user_role == 'Teacher') {
            $grade = $data['teacher']->grade;
            $step = $data['teacher']->step;
            $basic = $this->commonModel->getTeachersBasicSalary($grade, $step);
            $data['basic'] = $basic->basic_salary;
        }
        if ($user_role == 'Principal') {
            $grade = $data['principal']->grade;
            $step = $data['principal']->step;
            $basic = $this->commonModel->getPrincipalsBasicSalary($grade, $step);
            $data['basic'] = $basic->basic_salary;
        }

        //calculate sub total
        $data['sub_total'] = $data['basic'] + $data['int_all_3'];

        if ($user_role == 'Principal') {
            $data['telephone_all'] = $this->commonModel->getTlpAll();
            $data['executive_all'] = $this->commonModel->getExcAll();
            $data['allowances'] = $data['telephone_all'] + $data['executive_all'];
        }
        if ($user_role == 'Teacher') {
            $data['telephone_all'] = 0;
            $data['executive_all'] = 0;
            $data['allowances'] = 0;
            $data['allowances'] = $data['telephone_all'] + $data['executive_all'];
        }
        $data['gross_pay'] = $data['sub_total'] + $data['allowances'] + $data['c.o.l'];

        $data['w&op'] = $data['basic'] * ($data['w&op_rate']->amount / 100);



        //agrahara
        $agrahara = $data['agrahara']->agrahara;
        $agrahara_amount = $this->commonModel->getAgraharaAmount($agrahara);
        $data['agrahara_amount'] = $agrahara_amount->amount;

        //Total Deduction
        $data['total_ded'] = $data['w&op'] + $data['stamp'] + $data['agrahara_amount'] + $data['other_ded'];

        $data['net_sal'] = $data['gross_pay'] - $data['total_ded'];

        //allowances
        $allowances = $this->commonModel->getAllowances($id);
        foreach ($allowances as $allowance) :
            $all_id = $allowance->allowance_id;
            $all_amount = $this->commonModel->getAllowances_amount($all_id);
            $all_amount = $all_amount->amount;
            $data['all_amount'] += $all_amount;

        endforeach;

        //deductions
        $deductions = $this->commonModel->getDeductions($id);
        foreach ($deductions as $deduction) :
            $ded_id = $deduction->deduction_id;
            $ded_amount = $this->commonModel->getDeductions_amount($ded_id);
            $amount = $ded_amount->amount;
            if($ded_amount->name == 'W. & O. P.'){
                $amount = $data['basic'] * $amount / 100;
            }
            $data['ded_amount'] += $amount;

        endforeach;

        if ($this->salaryClerkModel->recordSalary($data)) {
            $_SESSION['status'] = 'success';
            $_SESSION['tittle'] = 'Success';
            $_SESSION['message'] = 'Salary Calculation Successfully';
            redirect('salaryclerks/paysheet');
        } else {
            die('Something went wrong');
        }
        //$this->view('salaryclerks/payslip', $data, $user_role);
    }
}
