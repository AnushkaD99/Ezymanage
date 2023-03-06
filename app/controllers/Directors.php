<?php
  class Directors extends Controller {
    public function __construct(){
        if(!isLoggedIn()){
            redirect('users/login');
        }

        $this->directorModel = $this->model('Director');
        $this->userModel = $this->model('User');
    }
    
    public function index(){
      $data = [
        'title' => 'Ezymanage',
      ];
     
      $this->view('directors/index', $data);
    }

    public function viewDetails(){
        //form process
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            //init data
            $data = [
                'search' => trim($_POST['search']),
            ];
    
            if(empty($data['search'])){
                $data['schools'] = $this->directorModel->getSchoolDeatail();
                $data['principals'] = $this->directorModel->getPrincipalDeatail();
                $data['teachers'] = $this->directorModel->getTeacherDeatail();
            }else{
                $data['schools'] = $this->directorModel->searchSchools($data);
                $data['principals'] = $this->directorModel->searchPrincipals($data);
                $data['teachers'] = $this->directorModel->searchTeachers($data);
            }
        } else {
            $data = [
                'schools' => $this->directorModel->getSchoolDeatail(),
                'principals' => $this->directorModel->getPrincipalDeatail(),
                'teachers' => $this->directorModel->getTeacherDeatail(),
                'search' => '',
                'schools_err' => '',
            ];
        }
    
        //load view
        $this->view('directors/viewDetails', $data);
    }

    public function viewMoreSchoolDetails($id){
        // Get school details
        $schools = $this->directorModel->getSchoolById($id);

        $data = [
            'schools' => $schools,
        ];

        $this->view('directors/viewMoreSchoolDetails', $data);
    }

    public function viewMorePrincipalDetails($id){
        // Get school details
        $principals = $this->directorModel->getPrincipalById($id);

        $data = [
            'principals' => $principals,
        ];

        $this->view('directors/viewMorePrincipalDetails', $data);
    }

    public function viewMoreTeacherDetails($id){
        // Get school details
        $teachers = $this->directorModel->getTeacherById($id);

        $data = [
            'teachers' => $teachers,
        ];

        $this->view('directors/viewMoreTeacherDetails', $data);
    }

    public function profile(){
        // Get teachers
        $id = $_SESSION['user_id'];
        $users = $this->directorModel->getUser($id);

        $data = [
            'users' => $users
            
        ];

        $this->view('directors/profile', $data);
    }

    public function editProfile(){
        // Get teachers
        $id = $_SESSION['user_id'];

        //process form
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
            if($data['password'] != $data['confirm_password']){
                $data['confirm_password_err'] = 'Passwords do not match';
            }

            //check if email is valid
            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $data['email_err'] = 'Please enter the correct format';
            }

            //nic validation
            if((!preg_match("/^[0-9]{9}[vVxX]$/", $data['NIC'])) || ((strlen($data['NIC']) != 12) && (strlen($data['NIC']) != 10))){
                $data['NIC_err'] = 'Please enter the correct format';
            }

            //make sure errors are empty
            if(1==1){
                //validated
                //hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //rename image
                $target_dir = "D:/installed apps/XAMPP/htdocs/Ezymanage/public/img/uploads/";
                $img_name = basename("$id.".pathinfo($_FILES["fileImg"]["name"],PATHINFO_EXTENSION));
                $target_file = $target_dir . basename("$id.".pathinfo($_FILES["fileImg"]["name"],PATHINFO_EXTENSION));
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                //register user
                if($this->directorModel->updateprofile($data, $img_name)){
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
        }else{
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
            //load view
            $this->view('directors/editProfile', $data);
        }

    }

    //appointments
    public function appointments(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $appointments = $this->directorModel->getAppointments();
            $data = [
                'title' => trim($_POST['title']),
                'appointments' => $appointments,
                'form_id' => trim($_POST['form_id']),
                'status' => trim($_POST['status']),
                'form_id_err' => '',
            ];

            if($this->directorModel->updateStatus($data)){
                redirect('directors/appointments');
            } else {
                die('Something went wrong');
            }
        }else{
            $appointments = $this->directorModel->getAppointments();
            $data = [
                'title' => '',
                'appointments' => $appointments,
                'form_id' => '',
                'status' => '',
                'form_id_err' => '',
            ];
            $this->view('directors/appointments', $data);
        }
    }
  }