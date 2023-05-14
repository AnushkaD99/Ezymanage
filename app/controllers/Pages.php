<?php
  class Pages extends Controller {
    public function __construct(){
      $this->pageModel = $this->model('Page');
    }
    
    public function index(){
      $data = [
        'title' => 'Ezymanage',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    //volunteer registration
    public function volunteerRegistration(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data = [
          'title' => 'Volunteer Registration',
          'first_name' => trim($_POST['first_name']),
          'last_name' => trim($_POST['last_name']),
          'gender' => trim($_POST['gender']),
          'birthday' => trim($_POST['birthday']),
          'nic' => trim($_POST['nic']),
          'address' => trim($_POST['address']),
          'contact_num' => trim($_POST['contact_num']),
          'email' => trim($_POST['email']),
          'subjects' => trim($_POST['subjects']),
          'qualifications' => trim($_POST['qualifications']), // 'qualifications' => '
          'other' => trim($_POST['other']),
          'first_name_err' => '',
          'last_name_err' => '',
          'gender_err' => '',
          'birthday_err' => '',
          'nic_err' => '',
          'address_err' => '',
          'contact_num_err' => '',
          'email_err' => '',
          'subjects_err' => '',
        ];

        // Validate data
        if(empty($data['first_name'])){
          $data['first_name_err'] = 'Please enter first name';
        }
        if(empty($data['last_name'])){
          $data['last_name_err'] = 'Please enter last name';
        }
        if(empty($data['birthday'])){
          $data['birthday_err'] = 'Please enter Birthday';
        }
        if(empty($data['nic'])){
          $data['nic_err'] = 'Please enter NIC';
        }
        if(empty($data['address'])){
          $data['address_err'] = 'Please enter Address';
        }
        if(empty($data['contact_num'])){
          $data['contact_num_err'] = 'Please enter Contact Number';
        }
        if(empty($data['email'])){
          $data['email_err'] = 'Please enter Email';
        }
        if(empty($data['subjects'])){
          $data['subjects_err'] = 'Please enter Subjects';
        }
        if(empty($data['qualifications'])){
          $data['qualifications_err'] = 'Please enter Qualifications';
        }

        // Make sure errors are empty
        if(empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['birthday_err']) && empty($data['nic_err']) && empty($data['address_err']) && empty($data['contact_num_err']) && empty($data['email_err']) && empty($data['subjects_err'])){
          // Validated
          if($this->pageModel->register($data)){
            flash('register_success', 'You are registered as a volunteer');
            redirect('pages/index');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('pages/volunteerRegistration', $data);
        }

      } else {
        // Init data
        $data = [
          'title' => 'Volunteer Registration',
          'first_name' => '',
          'last_name' => '',
          'gender' => '',
          'birthday' => '',
          'nic' => '',
          'address' => '',
          'contact_num' => '',
          'email' => '',
          'subjects' => '',
          'qualifications' => '',
          'other' => '',
          'first_name_err' => '',
          'last_name_err' => '',
          'gender_err' => '',
          'birthday_err' => '',
          'nic_err' => '',
          'address_err' => '',
          'contact_num_err' => '',
          'email_err' => '',
          'subjects_err' => '',
        ];
    
        // Load view
        $this->view('pages/volunteerRegistration', $data);
      }
    }
  }