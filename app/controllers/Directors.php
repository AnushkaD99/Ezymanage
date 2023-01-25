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
        // Get Details
        $schools = $this->directorModel->getSchoolDeatail();
        $principals = $this->directorModel->getPrincipalDeatail();
        $teachers = $this->directorModel->getTeacherDeatail();

        $data = [
            'schools' => $schools,
            'principals' => $principals,
            'teachers' => $teachers
        ];

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
        $users = $this->directorModel->updateprofile($id);

        $data = [
            'users' => $users
            
        ];

        $this->view('directors/editProfile', $data);
    }
  }