<?php
class TransferClerks extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->transferClerkModel = $this->model('TransferClerk');
        $this->userModel = $this->model('User');
    }

    public function index()
    {

        $data = [
            //'teachers' => $teachers
        ];

        $this->view('transferclerks/index', $data);
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
        $this->view('transferClerks/viewDetails', $data);
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

        $this->view('transferClerks/viewDetails-principal', $data);
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

        $this->view('transferClerks/viewDetails-directors', $data);
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

        $this->view('transferClerks/viewDetails-schoolClerks', $data);
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

        $this->view('transferClerks/viewDetails-transferClerks', $data);
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

        $this->view('transferClerks/viewDetails-zonalClerks', $data);
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

        $this->view('transferClerks/viewDetails-schools', $data);
    }

    public function viewMoreSchoolDetails($id)
    {
        // Get school details
        $schools = $this->transferClerkModel->getSchoolById($id);

        $data = [
            'schools' => $schools,
        ];

        $this->view('transferClerks/viewMoreSchoolDetails', $data);
    }

    public function viewMorePrincipalDetails($id)
    {
        // Get school details
        $principals = $this->transferClerkModel->getPrincipalById($id);

        $data = [
            'principals' => $principals,
        ];

        $this->view('transferClerks/viewMorePrincipalDetails', $data);
    }

    public function viewMoreTeacherDetails($id)
    {
        // Get school details
        $teachers = $this->transferClerkModel->getTeacherById($id);

        $data = [
            'teachers' => $teachers,
        ];

        $this->view('transferClerks/viewMoreTeacherDetails', $data);
    }

    public function viewMoreDirectorDetails($id)
    {
        // Get school details
        $directors = $this->transferClerkModel->getDirectorById($id);

        $data = [
            'directors' => $directors,
        ];

        $this->view('transferClerks/viewMoreDirectorDetails', $data);
    }

    public function profile()
    {
        // Get teachers
        $id = $_SESSION['user_id'];
        $users = $this->transferClerkModel->getUser($id);

        $data = [
            'users' => $users

        ];

        $this->view('transferClerks/profile', $data);
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
                    redirect('transferClerks/profile');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                die('Something went wrong');
                $this->view('transferClerks/editProfile', $data);
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
            $this->view('transferClerks/editProfile', $data);
        }
    }

    //transfers
    public function transfers()
    {

        $data = [
            //'teachers' => $teachers
        ];

        $this->view('transferclerks/transfers', $data);
    }
}
