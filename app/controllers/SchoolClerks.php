<?php
class SchoolClerks extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->transferClerkModel = $this->model('TransferClerk');
        //$this->schoolClerkModel = $this->model('SchoolClerk');
        $this->commonModel = $this->model('Common');
        $this->userModel = $this->model('User');
    }

    public function index()
    {

        $data = [
            //'teachers' => $teachers
        ];

        $this->view('schoolclerks/index', $data);
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
                $data['teachers'] = $this->transferClerkModel->getTeacherDeatail();
            } else {
                $data['teachers'] = $this->transferClerkModel->searchTeachers($data);
            }
        } else {
            $data = [
                'teachers' => $this->transferClerkModel->getTeacherDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        //load view
        $this->view('schoolclerks/viewDetails', $data);
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
                $data['principals'] = $this->transferClerkModel->getPrincipalDeatail();
            } else {
                $data['principals'] = $this->transferClerkModel->searchPrincipals($data);
            }
        } else {
            $data = [
                'principals' => $this->transferClerkModel->getPrincipalDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('schoolclerks/viewDetails-principal', $data);
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
                $data['directors'] = $this->transferClerkModel->getDirectorDeatail();
            } else {
                $data['directors'] = $this->transferClerkModel->searchDirectors($data);
            }
        } else {
            $data = [
                'directors' => $this->transferClerkModel->getDirectorDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('schoolclerks/viewDetails-directors', $data);
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
                $data['schoolClerks'] = $this->transferClerkModel->getSchoolClerksDetail();
            } else {
                $data['schoolClerks'] = $this->transferClerkModel->searchSchoolClerks($data);
            }
        } else {
            $data = [
                'schoolClerks' => $this->transferClerkModel->getSchoolClerksDetail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('schoolclerks/viewDetails-schoolClerks', $data);
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
                $data['transferClerks'] = $this->transferClerkModel->getTransferDeatail();
            } else {
                $data['transferClerks'] = $this->transferClerkModel->searchTransferClerks($data);
            }
        } else {
            $data = [
                'transferClerks' => $this->transferClerkModel->getTransferClerksDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('schoolclerks/viewDetails-transferClerks', $data);
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
                $data['zonalClerks'] = $this->transferClerkModel->getZonalClerkDetail();
            } else {
                $data['zonalClerks'] = $this->transferClerkModel->searchZonalClerks($data);
            }
        } else {
            $data = [
                'zonalClerks' => $this->transferClerkModel->getZonalClerkDetail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('schoolclerks/viewDetails-zonalClerks', $data);
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
                $data['schools'] = $this->transferClerkModel->getSchoolDeatail();
            } else {
                $data['schools'] = $this->transferClerkModel->searchSchools($data);
            }
        } else {
            $data = [
                'schools' => $this->transferClerkModel->getSchoolDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }

        $this->view('schoolclerks/viewDetails-schools', $data);
    }

    public function viewMoreSchoolDetails($id)
    {
        // Get school details
        $schools = $this->transferClerkModel->getSchoolById($id);

        $data = [
            'schools' => $schools,
        ];

        $this->view('schoolclerks/viewMoreSchoolDetails', $data);
    }

    public function viewMorePrincipalDetails($id)
    {
        // Get school details
        $principals = $this->transferClerkModel->getPrincipalById($id);

        $data = [
            'principals' => $principals,
        ];

        $this->view('schoolclerks/viewMorePrincipalDetails', $data);
    }

    public function viewMoreTeacherDetails($id)
    {
        // Get school details
        $teachers = $this->transferClerkModel->getTeacherById($id);

        $data = [
            'teachers' => $teachers,
        ];

        $this->view('schoolclerks/viewMoreTeacherDetails', $data);
    }

    public function viewMoreDirectorDetails($id)
    {
        // Get school details
        $directors = $this->transferClerkModel->getDirectorById($id);

        $data = [
            'directors' => $directors,
        ];

        $this->view('schoolclerks/viewMoreDirectorDetails', $data);
    }

    //add project
    public function projects()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $project_details = $this->commonModel->getSubmittedProjects();
            $data = [
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'school_name' => trim($_POST['school_name']),
                'estimate_date' => trim($_POST['estimate_date']),
                'drive_link' => trim($_POST['drive_link']),
                'project_details' => $project_details,
                'name_err' => '',
                'description_err' => '',
                'school_name_err' => '',
                'date_err' => '',
                'drive_link_err' => '',
                'submitted_date' => date('Y-m-d'),
            ];
            
            //validate name
            if (empty($data['name'])) {
                $data['name_err'] = '*Please enter Project name';
            }

            //validate description
            if (empty($data['description'])) {
                $data['description_err'] = '*Please enter Project description';
            }

            //validate school name
            if (empty($data['school_name'])) {
                $data['school_name_err'] = '*Please enter School name';
            }

            //validate date
            if (empty($data['estimate_date'])) {
                $data['date_err'] = '*Please enter Extimate date';
            }

            //validate drive link
            if (empty($data['drive_link'])) {
                $data['drive_link_err'] = '*Make sure you have uploaded the project to the drive and paste the link here'; 
            }

            //make sure errors are empty
            if (empty($data['name_err']) && empty($data['description_err']) && empty($data['school_name_err']) && empty($data['date_err']) && empty($data['drive_link_err'])) {
                //validated
                
                if ($this->commonModel->addProject($data)) {
                    redirect('schoolclerks/projects');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                $this->view('schoolclerks/project', $data);
            }

        } else {
            $project_details = $this->commonModel->getSubmittedProjects();
            
            //init data
            $data = [
                'name' => '',
                'description' => '',
                'estimate_date' => '',
                'drive_link' => '',
                'school_name' => '',
                'project_details' => $project_details,
                'name_err' => '',
                'description_err' => '',
                'school_name_err' => '',
                'date_err' => '',
                'drive_link_err' => '',
                'submitted_date' => date('Y-m-d'),
            ];

            //load view
            $this->view('schoolclerks/project', $data);
         }
    }

    public function profile()
    {
        // Get teachers
        $id = $_SESSION['user_id'];
        $users = $this->transferClerkModel->getUser($id);

        $data = [
            'users' => $users

        ];

        $this->view('schoolclerks/profile', $data);
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
                    redirect('schoolclerks/profile');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                die('Something went wrong');
                $this->view('schoolclerks/editProfile', $data);
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
            $this->view('schoolclerks/editProfile', $data);
        }
    }

    public function school_profile()
    {
        $id = $_SESSION['user_id'];
        $users = $this->transferClerkModel->getUser($id);
        $data = [
            'users' => $users
        ];
        $this->view('schoolclerks/school_profile', $data);
    }
}