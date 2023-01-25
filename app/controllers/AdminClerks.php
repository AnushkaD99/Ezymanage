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
            $users = $this->adminClerkModel->updateprofile($id);

            $data = [
                'users' => $users
                
            ];

            $this->view('adminclerks/editProfile', $data);
        }
    }