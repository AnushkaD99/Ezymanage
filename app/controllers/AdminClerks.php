<?php
require_once "D:/installed apps/XAMPP/htdocs/Ezymanage/app/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class AdminClerks extends Controller
{
    private $adminClerkModel;
    private $commonModel;
    private $userModel;


    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->adminClerkModel = $this->model('AdminClerk');
        $this->commonModel = $this->model('Common');
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        // Get teachers
        

        $data = [
            'teacher_count' => $this->commonModel->getTeacherCount(),
            'principal_count' => $this->commonModel->getPrincipalCount(),
            'volunteer_count' => $this->commonModel->getVolunteerCount(),
            'schools_count' => $this->commonModel->getSchoolCount(),
        ];

        $this->view('adminclerks/index', $data);
    }

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
        $this->view('adminclerks/viewDetails', $data);
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

        $this->view('adminclerks/viewDetails-principal', $data);
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

        $this->view('adminclerks/viewDetails-directors', $data);
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

        $this->view('adminclerks/viewDetails-schoolClerks', $data);
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

        $this->view('adminclerks/viewDetails-transferClerks', $data);
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

        $this->view('adminclerks/viewDetails-zonalClerks', $data);
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

        $this->view('adminclerks/viewDetails-schools', $data);
    }

    public function viewMoreSchoolDetails($id)
    {
        // Get school details
        $schools = $this->adminClerkModel->getSchoolById($id);

        $data = [
            'schools' => $schools,
        ];

        $this->view('adminclerks/viewMoreSchoolDetails', $data);
    }

    public function viewMorePrincipalDetails($id)
    {
        // Get school details
        $principals = $this->adminClerkModel->getPrincipalById($id);

        $data = [
            'principals' => $principals,
        ];

        $this->view('adminclerks/viewMorePrincipalDetails', $data);
    }

    public function viewMoreTeacherDetails($id)
    {
        // Get school details
        $teachers = $this->adminClerkModel->getTeacherById($id);

        $data = [
            'teachers' => $teachers,
        ];

        $this->view('adminclerks/viewMoreTeacherDetails', $data);
    }

    public function viewMoreDirectorDetails($id)
    {
        // Get school details
        $directors = $this->adminClerkModel->getDirectorById($id);

        $data = [
            'directors' => $directors,
        ];

        $this->view('adminclerks/viewMoreDirectorDetails', $data);
    }

    public function volunteers()
    {
        // Get teachers
        $volunteers = $this->adminClerkModel->getVolunteerDetail();

        $data = [
            'volunteers' => $volunteers
        ];

        $this->view('adminclerks/volunteers', $data);
    }

    public function profile()
    {
        // Get teachers
        $id = $_SESSION['user_id'];
        $users = $this->adminClerkModel->getUser($id);

        $data = [
            'users' => $users

        ];

        $this->view('adminclerks/profile', $data);
    }

    public function editProfile()
    {
        // Get teachers
        $id = $_SESSION['user_id'];

        //process form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $users = $this->adminClerkModel->getUser($id);

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
                if ($this->adminClerkModel->updateprofile($data, $img_name)) {
                    if (move_uploaded_file($_FILES["fileImg"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["fileImg"]["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    flash('update_success');
                    redirect('adminclerks/profile');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                die('Something went wrong');
                $this->view('adminclerks/editProfile', $data);
            }
        } else {
            $users = $this->adminClerkModel->getUser($id);
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
            $this->view('adminclerks/editProfile', $data);
        }
    }

    //verify user
    public function reports()
    {
        $data = [
            'teacher_count' => $this->commonModel->getTeacherCount(),
            'principal_count' => $this->commonModel->getPrincipalCount(),
            'volunteer_count' => $this->commonModel->getVolunteerCount(),
            'schools_count' => $this->commonModel->getSchoolCount(),
        ];
        $this->view('adminclerks/reports',$data);
    }

    //add teacher
    public function add_teacher()
    {
        // Get teachers
        $id = $_SESSION['user_id'];
        // $data['school_list'] = $this->adminClerkModel->getSchoolDeatail();


        //process form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $school_list = $this->adminClerkModel->getSchoolDeatail();

            //init data
            $data = [
                'username' => '',
                'password' => '',
                'emp_no' => trim($_POST['emp_no']),
                'full_name' => trim($_POST['fullName']),
                'name_with_initials' => trim($_POST['nameWithInitials']),
                'gender' => trim($_POST['gender']),
                'birthday' => trim($_POST['birthday']),
                'nic' => trim($_POST['nic']),
                'address' => trim($_POST['address']),
                'contact' => trim($_POST['contact']),
                'email' => trim($_POST['email']),
                'dp' => 'default.png',
                'school' => trim($_POST['school']),
                'grade' => trim($_POST['grade']),
                'step' => trim($_POST['step']),
                'designation' => 'Teacher',
                'emp_no_err' => '',
                'designation_err' => '',
                'full_name_err' => '',
                'name_with_initials_err' => '',
                'gender_err' => '',
                'birthday_err' => '',
                'nic_err' => '',
                'address_err' => '',
                'contact_err' => '',
                'email_err' => '',
                'dp_err' => '',
                'school_err' => '',
                'grade_err' => '',
                'step_err' => '',
                'school_list' => $school_list
            ];

            //Craete User name
            $name = $data['full_name'];
            $words = explode(' ', $name);
            $data['username'] = $words[0];

            //Create password
            $data['password'] = $data['nic'];


            //validate
            //check if any of the fields are empty
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }
            if (empty($data['contact'])) {
                $data['contact_err'] = 'Please enter contact number';
            }
            if (empty($data['full_name'])) {
                $data['full_name_err'] = 'Please enter full name';
            }
            if (empty($data['name_with_initials'])) {
                $data['name_with_initials_err'] = 'Please enter name with initials';
            }
            if (empty($data['address'])) {
                $data['address_err'] = 'Please enter address';
            }
            if (empty($data['birthday'])) {
                $data['birthday_err'] = 'Please enter birthday';
            }
            if (empty($data['school'])) {
                $data['school_err'] = 'Please enter school';
            }
            if (empty($data['designation'])) {
                $data['designation_err'] = 'Please enter designation';
            }
            if (empty($data['nic'])) {
                $data['NIC_err'] = 'Please enter NIC';
            }
            if (empty($data['step'])) {
                $data['step_err'] = 'Please enter salary step';
            }

            //check if email is valid
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['email_err'] = 'Please enter the correct format';
            }

            //nic validation
            // if((!preg_match("/^[0-9]{9}[vVxX]$/", $data['NIC'])) || ((strlen($data['NIC']) != 12) && (strlen($data['NIC']) != 10))){
            //     $data['NIC_err'] = 'Please enter the correct format';
            // }

            //make sure errors are empty
            if (empty($data['email_err']) && empty($data['contact_err']) && empty($data['full_name_err']) && empty($data['name_with_initials_err']) && empty($data['address_err']) && empty($data['birthday_err']) && empty($data['school_err']) && empty($data['designation_err']) && empty($data['NIC_err'])) {
                //validated
                //hash password
                $data['hashed_password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //register user
                if ($this->adminClerkModel->addTeacher($data)) {
                    $data['result'] = true;
                    $id = $data['emp_no'];
                    $user_role = 'teacher';
                    $this->addAllowances($id, $user_role);
                    $this->addDeductions($id, $user_role);
                    $accessToken = $this->generateToken();
                    $data['token'] = $accessToken['code'];
                    $this->adminClerkModel->insertAccessToken($data);
                    if ($this->sendAccessEmail($data)) {
                        $data['result'] = true;
                    } else {
                        $data['result'] = false;
                        $data['alert'] = "Teacher registered but email not sent.";
                    }
                    $_SESSION['status'] = 'success';
                    $_SESSION['tittle'] = 'Success';
                    $_SESSION['message'] = 'Teacher added successfully';
                    redirect('adminclerks/viewDetails');
                } else {
                    $data['result'] = false;
                    $this->view('adminclerks/add_teacher');
                }
            } else {
                $this->view('adminclerks/add_teacher', $data);
            }
        } else {
            $school_list = $this->adminClerkModel->getSchoolDeatail();
            //init data
            $data = [
                'username' => '',
                'password' => '',
                'emp_no' => '',
                'designation' => '',
                'full_name' => '',
                'name_with_initials' => '',
                'gender' => '',
                'birthday' => '',
                'nic' => '',
                'address' => '',
                'contact' => '',
                'email' => '',
                'dp' => '',
                'school' => '',
                'grade' => '',
                'step' => '',
                'emp_no_err' => '',
                'username_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
                'designation_err' => '',
                'full_name_err' => '',
                'name_with_initials_err' => '',
                'gender_err' => '',
                'birthday_err' => '',
                'nic_err' => '',
                'address_err' => '',
                'contact_err' => '',
                'email_err' => '',
                'dp_err' => '',
                'school_err' => '',
                'grade_err' => '',
                'step_err' => '',
                'school_list' => $school_list
            ];
            //load view
            $this->view('adminclerks/add_teacher', $data);
        }
    }

    public function addAllowances($id, $user_role){
        $data=[
            'teacherAllowances' => $this->adminClerkModel->getTeacherAllowances(),
            'principalAllowances' => $this->adminClerkModel->getPrincipalAllowances(),
        ];
        if($user_role == 'teacher'){
            foreach($data['teacherAllowances'] as $allowance){
                $data['allowance_id'] = $allowance->id;
                $this->adminClerkModel->addAllowances($data,$id);
            }
        }
        else if($user_role == 'principal'){
            foreach($data['principalAllowances'] as $allowance){
                $data['allowance_id'] = $allowance->id;
                $this->adminClerkModel->addAllowances($data,$id);
            }
        }
        
    }

    public function addDeductions($id, $user_role){
        $data=[
            'teacherDeductions' => $this->adminClerkModel->getTeacherDeductions(),
            'principalDeductions' => $this->adminClerkModel->getPrincipalDeductions(),
        ];
        if($user_role == 'teacher'){
            foreach($data['teacherDeductions'] as $deductions){
                $data['deduction_id'] = $deductions->id;
                $this->adminClerkModel->addDeductions($data,$id);
            }
        }
        else if($user_role == 'principal'){
            foreach($data['principalDeductions'] as $deductions){
                $data['deduction_id'] = $deductions->id;
                $this->adminClerkModel->addDeductions($data,$id);
            }
        }
    }

    //add principal
    public function add_principal()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $school_list = $this->adminClerkModel->getSchoolDeatail();

            //init data
            $data = [
                'username' => '',
                'password' => '',
                'emp_no' => trim($_POST['emp_no']),
                'full_name' => trim($_POST['fullName']),
                'name_with_initials' => trim($_POST['nameWithInitials']),
                'gender' => trim($_POST['gender']),
                'birthday' => trim($_POST['birthday']),
                'nic' => trim($_POST['nic']),
                'address' => trim($_POST['address']),
                'contact' => trim($_POST['contact']),
                'email' => trim($_POST['email']),
                'dp' => 'default.png',
                'school' => trim($_POST['school']),
                'grade' => trim($_POST['grade']),
                'step' => trim($_POST['step']),
                'designation' => 'Principal',
                'emp_no_err' => '',
                'designation_err' => '',
                'full_name_err' => '',
                'name_with_initials_err' => '',
                'gender_err' => '',
                'birthday_err' => '',
                'nic_err' => '',
                'address_err' => '',
                'contact_err' => '',
                'email_err' => '',
                'dp_err' => '',
                'school_err' => '',
                'grade_err' => '',
                'step_err' => '',
                'school_list' => $school_list
            ];

            //Craete User name
            $name = $data['full_name'];
            $words = explode(' ', $name);
            $data['username'] = $words[0];

            //Create password
            $data['password'] = $data['nic'];

            //validate data
            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter username';
            }
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password';
            }
            if (empty($data['full_name'])) {
                $data['full_name_err'] = 'Please enter full name';
            }
            if (empty($data['name_with_initials'])) {
                $data['name_with_initials_err'] = 'Please enter name with initials';
            }
            if (empty($data['contact'])) {
                $data['contact_err'] = 'Please enter contact number';
            }
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }
            if (empty($data['grade'])) {
                $data['grade_err'] = 'Please enter grade';
            }
            if (empty($data['school'])) {
                $data['school_err'] = 'Please enter school';
            }

            //check if username exists
            if ($this->adminClerkModel->findUserByUsername($data['username'])) {
                $data['username_err'] = 'Username is already taken';
            }

            //check if email exists
            if ($this->adminClerkModel->findUserByEmail($data['email'])) {
                $data['email_err'] = 'Email is already taken';
            }

            //check if nic exists
            if ($this->adminClerkModel->findUserByNIC($data['nic'])) {
                $data['nic_err'] = 'NIC is already taken';
            }

            //check if contact exists
            if ($this->adminClerkModel->findUserByContact($data['contact'])) {
                $data['contact_err'] = 'Contact is already taken';
            }

            //check if all errors are empty
            if (empty($data['username_err']) && empty($data['full_name_err']) && empty($data['name_with_initials_err']) && empty($data['contact_err']) && empty($data['email_err']) && empty($data['grade_err']) && empty($data['school_err'])) {
                //validated
                //hash password
                $data['hashed_password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //register user
                if ($this->adminClerkModel->addPrincipal($data)) {
                    $data['result'] = true;
                    $id = $data['emp_no'];
                    $user_role = 'principal';
                    $this->addAllowances($id, $user_role);
                    $this->addDeductions($id, $user_role);
                    $accessToken = $this->generateToken();
                    $data['token'] = $accessToken['code'];
                    $this->adminClerkModel->insertAccessToken($data);
                    if ($this->sendAccessEmail($data)) {
                        $data['result'] = true;
                    } else {
                        $data['result'] = false;
                        $data['alert'] = "Teacher registered but email not sent.";
                    }
                    $_SESSION['status'] = 'success';
                    $_SESSION['tittle'] = 'Success';
                    $_SESSION['message'] = 'Principal added successfully';
                    redirect('adminclerks/viewDetails_principal');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load with errors
                $this->view('adminclerks/add_principal', $data);
            }
        }
        //init data
        $school_list = $this->adminClerkModel->getSchoolDeatail();
            //init data
            $data = [
                'username' => '',
                'password' => '',
                'emp_no' => '',
                'designation' => '',
                'full_name' => '',
                'name_with_initials' => '',
                'gender' => '',
                'birthday' => '',
                'nic' => '',
                'address' => '',
                'contact' => '',
                'email' => '',
                'dp' => '',
                'school' => '',
                'grade' => '',
                'step' => '',
                'emp_no_err' => '',
                'username_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
                'designation_err' => '',
                'full_name_err' => '',
                'name_with_initials_err' => '',
                'gender_err' => '',
                'birthday_err' => '',
                'nic_err' => '',
                'address_err' => '',
                'contact_err' => '',
                'email_err' => '',
                'dp_err' => '',
                'school_err' => '',
                'grade_err' => '',
                'step_err' => '',
                'school_list' => $school_list
            ];

        //load view
        $this->view('adminclerks/add_principal', $data);
    }

    //add director
    public function add_schoolClerk()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirmPassword']),
                'full_name' => trim($_POST['fullName']),
                'name_with_initials' => trim($_POST['nameWithInitials']),
                'gender' => trim($_POST['gender']),
                'birthday' => trim($_POST['birthday']),
                'nic' => trim($_POST['nic']),
                'address' => trim($_POST['address']),
                'contact' => trim($_POST['contact']),
                'email' => trim($_POST['email']),
                'dp' => 'default.jpg',
                'school' => trim($_POST['school']),
                'designation' => 'School Clerk',
                'username_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
                'designation_err' => '',
                'full_name_err' => '',
                'name_with_initials_err' => '',
                'gender_err' => '',
                'birthday_err' => '',
                'nic_err' => '',
                'address_err' => '',
                'contact_err' => '',
                'email_err' => '',
                'dp_err' => '',
                'school_err' => '',
                'school_list' => $this->adminClerkModel->getSchoolDeatail()
            ];

            //validate data
            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter username';
            }
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password';
            }
            if (empty($data['full_name'])) {
                $data['full_name_err'] = 'Please enter full name';
            }
            if (empty($data['name_with_initials'])) {
                $data['name_with_initials_err'] = 'Please enter name with initials';
            }
            if (empty($data['contact'])) {
                $data['contact_err'] = 'Please enter contact number';
            }
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }
            if (empty($data['school'])) {
                $data['school_err'] = 'Please enter school';
            }

            //check if passwords match
            if ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }

            //check if username exists
            if ($this->adminClerkModel->findUserByUsername($data['username'])) {
                $data['username_err'] = 'Username is already taken';
            }

            //check if email exists
            if ($this->adminClerkModel->findUserByEmail($data['email'])) {
                $data['email_err'] = 'Email is already taken';
            }

            //check if nic exists
            if ($this->adminClerkModel->findUserByNIC($data['nic'])) {
                $data['nic_err'] = 'NIC is already taken';
            }

            //check if contact exists
            if ($this->adminClerkModel->findUserByContact($data['contact'])) {
                $data['contact_err'] = 'Contact is already taken';
            }

            //check if all errors are empty
            if (empty($data['username_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) && empty($data['full_name_err']) && empty($data['name_with_initials_err']) && empty($data['contact_err']) && empty($data['email_err']) && empty($data['grade_err']) && empty($data['school_err'])) {
                //validated
                //hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //register user
                if ($this->adminClerkModel->addSchoolClerk($data)) {
                    $data['result'] = true;
                    $accessToken = $this->generateToken();
                    $data['token'] = $accessToken['code'];
                    $this->adminClerkModel->insertAccessToken($data);
                    if ($this->sendAccessEmail($data)) {
                        $data['result'] = true;
                    } else {
                        $data['result'] = false;
                        $data['alert'] = "Teacher registered but email not sent.";
                    }
                    $_SESSION['status'] = 'success';
                    $_SESSION['tittle'] = 'Success';
                    $_SESSION['message'] = 'school Clerk added successfully';
                    redirect('adminclerks/viewDetails_schoolClerk');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load with errors
                $this->view('adminclerks/add_schoolClerk', $data);
            }
        }
        //init data
        $data = [
            'username' => '',
            'password' => '',
            'confirm_password' => '',
            'full_name' => '',
            'name_with_initials' => '',
            'gender' => '',
            'birthday' => '',
            'nic' => '',
            'address' => '',
            'contact' => '',
            'email' => '',
            'dp' => '',
            'school' => '',
            'designation' => '',
            'username_err' => '',
            'password_err' => '',
            'confirm_password_err' => '',
            'designation_err' => '',
            'full_name_err' => '',
            'name_with_initials_err' => '',
            'gender_err' => '',
            'birthday_err' => '',
            'nic_err' => '',
            'address_err' => '',
            'contact_err' => '',
            'email_err' => '',
            'dp_err' => '',
            'school_err' => '',
            'school_list' => $this->adminClerkModel->getSchoolDeatail()
        ];

        //load view
        $this->view('adminclerks/add_schoolClerk', $data);
    }

    //add school
    public function add_school()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //init data
            $data = [
                'name' => trim($_POST['name']),
                'address' => trim($_POST['address']),
                'contact_num' => trim($_POST['contact_num']),
                'email' => trim($_POST['email']),
                'moto' => trim($_POST['moto']),
                'vision' => trim($_POST['vision']),
                'mission' => trim($_POST['mission']),
                'principal' => trim($_POST['principal']),
                'school_type' => trim($_POST['school_type']),
                'student_count' => trim($_POST['student_count']),
                'teacher_count' => trim($_POST['teacher_count']),
                'name_err' => '',
                'address_err' => '',
                'contact_num_err' => '',
                'email_err' => '',
                'moto_err' => '',
                'vision_err' => '',
                'mission_err' => '',
                'principal_err' => '',
                'school_type_err' => '',
                'student_count_err' => '',
                'teacher_count_err' => '',
                'principal_list' => $this->adminClerkModel->getPrincipalDeatail()
            ];
            //validate data
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter school name';
            }
            if (empty($data['address'])) {
                $data['address_err'] = 'Please enter school address';
            }
            if (empty($data['contact_num'])) {
                $data['contact_num_err'] = 'Please enter school contact number';
            }
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter school email';
            }
            if (empty($data['moto'])) {
                $data['moto_err'] = 'Please enter school moto';
            }
            if (empty($data['vision'])) {
                $data['vision_err'] = 'Please enter school vision';
            }
            if (empty($data['mission'])) {
                $data['mission_err'] = 'Please enter school mission';
            }
            if (empty($data['principal'])) {
                $data['principal_err'] = 'Please enter school principal';
            }
            if (empty($data['school_type'])) {
                $data['school_type_err'] = 'Please enter school type';
            }
            if (empty($data['student_count'])) {
                $data['student_count_err'] = 'Please enter student count';
            }
            if (empty($data['teacher_count'])) {
                $data['teacher_count_err'] = 'Please enter teacher count';
            }
            //make sure no errors
            if (empty($data['name_err']) && empty($data['address_err']) && empty($data['contact_num_err']) && empty($data['email_err']) && empty($data['moto_err']) && empty($data['vision_err']) && empty($data['mission_err']) && empty($data['principal_err']) && empty($data['school_type_err']) && empty($data['student_count_err']) && empty($data['teacher_count_err'])) {
                //validated
                if ($this->adminClerkModel->addSchool($data)) {
                    $_SESSION['status'] = 'success';
                    $_SESSION['tittle'] = 'Success';
                    $_SESSION['message'] = 'Teacher added successfully';
                    redirect('adminclerks/viewDetails_schools');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                $this->view('adminclerks/add_school', $data);
            }
        } else {
            //init data
            $data = [
                'name' => '',
                'address' => '',
                'contact_num' => '',
                'email' => '',
                'moto' => '',
                'vision' => '',
                'mission' => '',
                'principal' => '',
                'school_type' => '',
                'student_count' => '',
                'teacher_count' => '',
                'name_err' => '',
                'address_err' => '',
                'contact_num_err' => '',
                'email_err' => '',
                'moto_err' => '',
                'vision_err' => '',
                'mission_err' => '',
                'principal_err' => '',
                'school_type_err' => '',
                'student_count_err' => '',
                'teacher_count_err' => '',
                'principal_list' => $this->adminClerkModel->getPrincipalDeatail()
            ];
            //load view
            $this->view('adminclerks/add_school', $data);
        }
    }

    //add clerk of the zonal education office
    public function add_zonalClerk()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirmPassword']),
                'full_name' => trim($_POST['fullName']),
                'name_with_initials' => trim($_POST['nameWithInitials']),
                'gender' => trim($_POST['gender']),
                'birthday' => trim($_POST['birthday']),
                'nic' => trim($_POST['nic']),
                'address' => trim($_POST['address']),
                'contact' => trim($_POST['contact']),
                'email' => trim($_POST['email']),
                'dp' => 'default.jpg',
                'designation' => trim($_POST['designation']),
                'username_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
                'designation_err' => '',
                'full_name_err' => '',
                'name_with_initials_err' => '',
                'gender_err' => '',
                'birthday_err' => '',
                'nic_err' => '',
                'address_err' => '',
                'contact_err' => '',
                'email_err' => '',
                'dp_err' => '',
                'school_err' => '',
                'grade_err' => '',
                'principal_list' => $this->adminClerkModel->getZonalClerkDetail()
            ];

            //validate data
            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter username';
            }
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password';
            }
            if (empty($data['full_name'])) {
                $data['full_name_err'] = 'Please enter full name';
            }
            if (empty($data['name_with_initials'])) {
                $data['name_with_initials_err'] = 'Please enter name with initials';
            }
            if (empty($data['contact'])) {
                $data['contact_err'] = 'Please enter contact number';
            }
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }

            //check if passwords match
            if ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }

            //check if username exists
            if ($this->adminClerkModel->findUserByUsername($data['username'])) {
                $data['username_err'] = 'Username is already taken';
            }

            //check if email exists
            if ($this->adminClerkModel->findUserByEmail($data['email'])) {
                $data['email_err'] = 'Email is already taken';
            }

            //check if nic exists
            if ($this->adminClerkModel->findUserByNIC($data['nic'])) {
                $data['nic_err'] = 'NIC is already taken';
            }

            //check if contact exists
            if ($this->adminClerkModel->findUserByContact($data['contact'])) {
                $data['contact_err'] = 'Contact is already taken';
            }

            //check if all errors are empty
            if (empty($data['username_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) && empty($data['full_name_err']) && empty($data['name_with_initials_err']) && empty($data['contact_err']) && empty($data['email_err'])) {
                //validated
                //hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //register user
                if ($this->adminClerkModel->addZonalClerk($data)) {
                    $data['result'] = true;
                    $accessToken = $this->generateToken();
                    $data['token'] = $accessToken['code'];
                    $this->adminClerkModel->insertAccessToken($data);
                    if ($this->sendAccessEmail($data)) {
                        $data['result'] = true;
                    } else {
                        $data['result'] = false;
                        $data['alert'] = "Teacher registered but email not sent.";
                    }
                    $_SESSION['status'] = 'success';
                    $_SESSION['tittle'] = 'Success';
                    $_SESSION['message'] = 'Clerk added successfully';
                    redirect('adminclerks/viewDetails_zonalClerks');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load with errors
                $this->view('adminclerks/add_zonalClerk', $data);
            }
        }
        //init data
        $data = [
            'username' => '',
            'password' => '',
            'confirm_password' => '',
            'full_name' => '',
            'name_with_initials' => '',
            'gender' => '',
            'birthday' => '',
            'nic' => '',
            'address' => '',
            'contact' => '',
            'email' => '',
            'dp' => '',
            'designation' => '',
            'username_err' => '',
            'password_err' => '',
            'confirm_password_err' => '',
            'designation_err' => '',
            'full_name_err' => '',
            'name_with_initials_err' => '',
            'gender_err' => '',
            'birthday_err' => '',
            'nic_err' => '',
            'address_err' => '',
            'contact_err' => '',
            'email_err' => '',
            'dp_err' => '',
            'school_err' => '',
            'grade_err' => '',
            'principal_list' => $this->adminClerkModel->getZonalClerkDetail()
        ];

        //load view
        $this->view('adminclerks/add_zonalClerk', $data);
    }

    //view more details about volunteers
    public function volunteers_moreDetails($id)
    {
        //get volunteers
        $volunteers = $this->adminClerkModel->getVolunteerDetailsByID($id);

        $data = [
            'volunteers' => $volunteers
        ];

        $this->view('adminclerks/volunteers_moreDetails', $data);
    }

    public function generateToken()
    {
        $token['code'] = bin2hex(random_bytes(16));

        return $token;
    }

    //Start Reports--------------------------------------------------------------------------------

    public function teacher_Reports()
    {
        $data = [
            'teacher' => $this->commonModel->getTeacherDeatail(),
            'school' => $this->commonModel->getSchoolDeatail(),
            'teacher_count' => $this->commonModel->getTeacherCount(),
        ];

        $this->view('adminclerks/teacher_Reports', $data);
    }

    public function principal_Reports()
    {
        $data = [
            'principal' => $this->commonModel->getPrincipalDeatail(),
            'school' => $this->commonModel->getSchoolDeatail(),
            'principal_count' => $this->commonModel->getPrincipalCount(),
        ];

        $this->view('adminclerks/principal_Reports', $data);
    }

    public function volunteer_Reports()
    {
        $data = [
            'volunteer' => $this->adminClerkModel->getVolunteerDetail(),
            'volunteer_count' => $this->commonModel->getVolunteerCount(),
        ];

        $this->view('adminclerks/volunteer_reports', $data);
    }

    public function school_Reports()
    {
        $data = [
            'school' => $this->commonModel->getSchoolDeatail(),
            'schools_count' => $this->commonModel->getSchoolCount(),
        ];

        $this->view('adminclerks/school_reports', $data);
    }

    //End Reports ---------------------------------------------------------------------------------

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

    public function sendAccessEmail($data)
    {
        $accessLink = URLROOT . "/users/setPassword/{$data['token']}";
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
        $phpmailer->Subject = 'Link to access account';
        $phpmailer->msgHTML($this->getAccessEmail($accessLink));
        $phpmailer->AltBody = 'Use this link to access your account';


        if ($phpmailer->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAccessEmail($link)
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
        <a href=\"{$link}\">Access my account</a>
    </body>
    </html>
    ";
    }
}
