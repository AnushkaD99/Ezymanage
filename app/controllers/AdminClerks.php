<?php    
    class AdminClerks extends Controller {
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }

            $this->adminClerkModel = $this->model('AdminClerk');
            $this->userModel = $this->model('User');
        }

        public function index(){
            // Get teachers
            //$teachers = $this->teacherModel->getTeachers();

            $data = [
                //'teachers' => $teachers
            ];

            $this->view('adminclerks/index', $data);
        }

        public function viewDetails(){
            // Get teachers
            $schools = $this->adminClerkModel->getSchoolDeatail();
            $principals = $this->adminClerkModel->getPrincipalDeatail();
            $teachers = $this->adminClerkModel->getTeacherDeatail();

            $data = [
                'schools' => $schools,
                'principals' => $principals,
                'teachers' => $teachers
            ];

            $this->view('adminclerks/viewDetails', $data);
        }

        public function viewMoreSchoolDetails($id){
            // Get school details
            $schools = $this->adminClerkModel->getSchoolById($id);

            $data = [
                'schools' => $schools,
            ];

            $this->view('adminclerks/viewMoreSchoolDetails', $data);
        }

        public function viewMorePrincipalDetails($id){
            // Get school details
            $principals = $this->adminClerkModel->getPrincipalById($id);

            $data = [
                'principals' => $principals,
            ];

            $this->view('adminclerks/viewMorePrincipalDetails', $data);
        }

        public function viewMoreTeacherDetails($id){
            // Get school details
            $teachers = $this->adminClerkModel->getTeacherById($id);

            $data = [
                'teachers' => $teachers,
            ];

            $this->view('adminclerks/viewMoreTeacherDetails', $data);
        }

        public function volunteers(){
            // Get teachers
            $volunteers = $this->adminClerkModel->getVolunteerDetail();

            $data = [
                'volunteers' => $volunteers
            ];

            $this->view('adminclerks/volunteers', $data);
        }

        // public function show($id){
        //     $post = $this->postModel->getPostById($id);
        //     $user = $this->userModel->getUserById($post->user_id);
      
        //     $data = [
        //       'post' => $post,
        //       'user' => $user
        //     ];
      
        //     $this->view('posts/show', $data);
        // }

        public function profile(){
            // Get teachers
            $id = $_SESSION['user_id'];
            $users = $this->adminClerkModel->getUser($id);

            $data = [
                'users' => $users
                
            ];

            $this->view('adminclerks/profile', $data);
        }

        public function editProfile(){
            // Get teachers
            $id = $_SESSION['user_id'];

            //process form
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
                    move_uploaded_file($data['image_tmp'], 'public/img/uploads/'.$data['dp']);
                    //register user
                    if($this->adminClerkModel->updateprofile($data)){
                        //flash('register_success', 'You are registered and can log in');
                        redirect('adminclerks/profile');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    die('Something went wrong');
                    $this->view('adminclerks/editProfile', $data);

                }
            }else{
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
    }       