<?php
class Directors extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->directorModel = $this->model('Director');
        $this->commonModel = $this->model('Common');
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Ezymanage',
        ];

        $this->view('directors/index', $data);
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
        $this->view('directors/viewDetails', $data);
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

        $this->view('directors/viewDetails-principal', $data);
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

        $this->view('directors/viewDetails-directors', $data);
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

        $this->view('directors/viewDetails-schoolClerks', $data);
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

        $this->view('directors/viewDetails-transferClerks', $data);
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

        $this->view('directors/viewDetails-zonalClerks', $data);
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

        $this->view('directors/viewDetails-schools', $data);
    }

    public function viewMoreSchoolDetails($id)
    {
        // Get school details
        $schools = $this->commonModel->getSchoolById($id);

        $data = [
            'schools' => $schools,
        ];

        $this->view('directors/viewMoreSchoolDetails', $data);
    }

    public function viewMorePrincipalDetails($id)
    {
        // Get school details
        $principals = $this->commonModel->getPrincipalById($id);

        $data = [
            'principals' => $principals,
        ];

        $this->view('directors/viewMorePrincipalDetails', $data);
    }

    public function viewMoreTeacherDetails($id)
    {
        // Get school details
        $teachers = $this->commonModel->getTeacherById($id);

        $data = [
            'teachers' => $teachers,
        ];

        $this->view('directors/viewMoreTeacherDetails', $data);
    }

    public function viewMoreDirectorDetails($id)
    {
        // Get school details
        $directors = $this->commonModel->getDirectorById($id);

        $data = [
            'directors' => $directors,
        ];

        $this->view('directors/viewMoreDirectorDetails', $data);
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
                    'users' => $this->directorkModel->getUser($id),
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
                        redirect('directors/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('directors/profile', $data);
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
                        redirect('directors/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('directors/profile', $data);
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
                        redirect('directors/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('directors/profile', $data);
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
                        redirect('directors/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('directors/profile', $data);
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
                        redirect('directors/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('directors/profile', $data);
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
                $this->view('directors/profile', $data);
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
            $this->view('directors/profile', $data);
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
            $users = $this->directorModel->getUser($id);

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
                'zonal' => trim($_POST['zonal']),
                'designation' => trim($_POST['designation']),
                'NIC' => trim($_POST['nic']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirmPassword']),
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
            if ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }

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
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //rename image
                $target_dir = "D:/installed apps/XAMPP/htdocs/Ezymanage/public/img/uploads/";
                $img_name = basename("$id." . pathinfo($_FILES["fileImg"]["name"], PATHINFO_EXTENSION));
                $target_file = $target_dir . basename("$id." . pathinfo($_FILES["fileImg"]["name"], PATHINFO_EXTENSION));
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                //register user
                if ($this->directorModel->updateprofile($data, $img_name)) {
                    if (move_uploaded_file($_FILES["fileImg"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["fileImg"]["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    flash('update_success');
                    redirect('directors/profile');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                die('Something went wrong');
                $this->view('directors/editProfile', $data);
            }
        } else {
            $users = $this->directorModel->getUser($id);
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
            //load viewappointments
            $this->view('directors/editProfile', $data);
        }
    }

    //appointments
    public function appointments()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $appointments = $this->directorModel->getAppointments();
            $data = [
                'title' => 'appointment_tbl',
                'appointments' => $appointments,
                'form_id' => trim($_POST['form_id']),
                'status' => trim($_POST['status']),
                'search' => trim($_POST['search']),
                'form_id_err' => '',
            ];

            if ($this->directorModel->updateStatus($data)) {
                redirect('directors/appointments');
            } else {
                die('Something went wrong');
            }
        } else {
            $appointments = $this->directorModel->getAppointments();
            $data = [
                'title' => '',
                'appointments' => $appointments,
                'form_id' => '',
                'status' => '',
                'search' => '',
                'form_id_err' => '',
            ];
            $this->view('directors/appointments', $data);
        }
    }

    public function school_management()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $leaves = $this->directorModel->getLeaves();
            $karyasadana = $this->directorModel->getKaryasadana();
            $issues = $this->directorModel->getIssues();
            // $userid = $leaves->emp_no || $karyasadana->emp_no || $issues->emp_no;
            // $userroleFromLeave = $leaves->designation || $karyasadana->designation || $issues->designation;

            $data = [
                'title' => trim($_POST['title']),
                'leaves' => $leaves,
                'karyasadana' => $karyasadana,
                'issues' => $issues,
                // 'school' => $this->commonModel->getSchoolByUserId($userid, $userroleFromLeave),
                'form_id' => trim($_POST['form_id']),
                'status' => trim($_POST['status']),
                'leave_id_err' => '',
            ];

            if ($this->directorModel->updateStatus($data)) {
                redirect('directors/school_management');
            } else {
                die('Something went wrong');
            }
        } else {
            $leaves = $this->directorModel->getLeaves();
            $karyasadana = $this->directorModel->getKaryasadana();
            $issues = $this->directorModel->getIssues();
            $data = [
                'title' => '',
                'leaves' => $leaves,
                'karyasadana' => $karyasadana,
                'issues' => $issues,
                'leave_id' => '',
                'status' => '',
                'leave_id_err' => '',
            ];
            $this->view('directors/school_management', $data);
        }
    }

    //projects
    public function projects()
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
                $data['projects'] = $this->commonModel->getProjectDeatail();
            } else {
                $data['projects'] = $this->commonModel->searchProjects($data);
            }
        } else {
            $data = [
                'projects' => $this->commonModel->getProjectDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('directors/project', $data);
    }

    //View More Project Details
    public function viewMoreProjects($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $projects = $this->commonModel->getProjectById($id);
            $data = [
                'title' => 'project_tbl',
                'status' => trim($_POST['status']),
                'form_id' => trim($_POST['form_id']),
                'projects' => $projects,
            ];
            
            if ($this->directorModel->updateStatus($data)) {
                redirect('directors/viewMoreProjects/'. $id);
            } else {
                die('Something went wrong');
            }
        } else {
            $projects = $this->commonModel->getProjectById($id);
            $data = [
                'title' => '',
                'status' => '',
                'form_id' => '',
                'projects' => $projects,
            ];
            $this->view('directors/viewMoreProjects', $data);
        }
    }
}
