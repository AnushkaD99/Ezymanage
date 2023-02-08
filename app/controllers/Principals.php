<?php    
    class Principals extends Controller {
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }

            $this->principalModel = $this->model('Principal');
            $this->userModel = $this->model('User');
        }

        public function index(){
            $data = [
              'title' => 'Ezymanage',
            ];
           
            $this->view('principals/index', $data);
        }

        public function viewDetails(){
            // Get Details
            $schools = $this->principalModel->getSchoolDeatail();
            $principals = $this->principalModel->getPrincipalDeatail();
            $teachers = $this->principalModel->getTeacherDeatail();
    
            $data = [
                'schools' => $schools,
                'principals' => $principals,
                'teachers' => $teachers
            ];
    
            $this->view('principals/viewDetails', $data);
        }
    
        public function viewMoreSchoolDetails($id){
            // Get school details
            $schools = $this->principalModel->getSchoolById($id);
    
            $data = [
                'schools' => $schools,
            ];
    
            $this->view('principals/viewMoreSchoolDetails', $data);
        }
    
        public function viewMorePrincipalDetails($id){
            // Get school details
            $principals = $this->principalModel->getPrincipalById($id);
    
            $data = [
                'principals' => $principals,
            ];
    
            $this->view('principals/viewMorePrincipalDetails', $data);
        }
    
        public function viewMoreTeacherDetails($id){
            // Get school details
            $teachers = $this->principalModel->getTeacherById($id);
    
            $data = [
                'teachers' => $teachers,
            ];
    
            $this->view('principals/viewMoreTeacherDetails', $data);
        }
    
        public function profile(){
            // Get teachers
            $id = $_SESSION['user_id'];
            $users = $this->principalModel->getUser($id);
    
            $data = [
                'users' => $users
                
            ];
    
            $this->view('principals/profile', $data);
        }
    
        public function editProfile(){
            // Get teachers
            $id = $_SESSION['user_id'];
            $users = $this->principalModel->updateprofile($id);
    
            $data = [
                'users' => $users
                
            ];
    
            $this->view('principals/editProfile', $data);
        }

        public function leaveForm(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form

                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $data = [
                    'title' => 'Leave Form',
                    'reason' => trim($_POST['reason']),
                    'commencing_date' => trim($_POST['commencing_date']),
                    'resuming_date' => trim($_POST['resuming_date']),
                    'leave_type' => trim($_POST['leavetype']),
                    'userId' => $_SESSION['user_id'],
                    'submitted_date' => date('Y-m-d'),
                    'commencing_date_err' => '',
                    'resuming_date_err' => '',
                    'total_leaves_err' => '',
                    'interval_err' => '',
                    'leavetype_err' => '',
                    // 'date1' => strtotime('commencing_date'),
                    // 'date2' => strtotime('resuming_date'),
                ];

                // function calInterval(){
                //     $interval = $data['date2'] - $data['date1'];
                //     $interval = $interval / (60 2 60 2 24);
                //     return $interval;
                // }

                // $interval = calInterval();

                //Validate
                if(empty($data['reason'])){
                    $data['reason_err'] = 'Please enter a reason';
                }
                if(empty($data['commencing_date'])){
                    $data['commencing_date_err'] = 'Please enter a commencing date';
                }
                if(empty($data['resuming_date'])){
                    $data['resuming_date_err'] = 'Please enter a resuming date';
                }
                if(empty($data['leave_type'])){
                    $data['leavetype_err'] = 'Please select a leave type';
                }

                //make sure no errors
            
                if(empty($data['reason_err']) && empty($data['commencing_date_err']) && empty($data['resuming_date_err']) && empty($data['leavetype_err'])){
                    // Validated
                    if($this->principalModel->submitLeaveForm($data)){
                        redirect('principals/LeaveForm');
                    } else {
                        die('Something went wrong');
                    }
                }
                else {
                    // Load view with errors
                    $this->view('principals/leaveForm', $data);
                }



                // if($data['reason'] != null && $data['commencing_date'] != null && $data['resuming_date'] != null){
                //     //$sql = "INSERT INTO leave_details (reason, commencing_date, resuming_date, casual, medical, other, userId, submitted_date) VALUES ('$reason', '$commencing_date', '$resuming_date', '$casual', '$medical', '$other', '$Userid', '$submittedDate')";
                //     if ($this->principalModel->submitLeaveForm($data)) {
                //         echo "<script> alert(\"New record created successfully!\"); </script>";
                //         redirect('posts');
                //     } else {
                //         echo "<script> alert(\"Submition Failed please try again!\"); </script>";
                //     }
                // }


            }else {
                // Get leave details
                $leave_details = $this->principalModel->getLeaveDeatail();

                // Init data
                $data = [
                    'title' => 'Leave Form',
                    'reason' => '',
                    'commencing_date' => '',
                    'resuming_date' => '',
                    'leavetype' => '',
                    'commencing_date_err' => '',
                    'resuming_date_err' => '',
                    'total_leaves_err' => '',
                    'date1' => '',
                    'date2' => '',
                    'interval' => '',
                    'interval_err' => '',
                    'leavetype_err' => '',
                    'leave_details' => $leave_details,
                ];
                // Load view
                $this->view('principals/leaveForm', $data);
            }
        }

        public function LeaveView($id){
            // Get Leave Details
            $leave = $this->principalModel->getLeaveById($id);
            $leave_details = $this->principalModel->getLeaveDeatail();

            $data = [
                'leave' => $leave,
                'leave_details' => $leave_details,
            ];

            $this->view('principals/LeaveView', $data);
        }

        public function Karyasadanaya(){
            // process form
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $data = [
                    'title' => 'Karyasadanaya',
                    'start_date' => trim($_POST['start_date']),
                    'end_date' => trim($_POST['end_date']),
                    'tasks1' => trim($_POST['tasks1']),
                    'Indicators1' => trim($_POST['Indicators1']),
                    'Problems1' => trim($_POST['Problems1']),
                    'tasks2' => trim($_POST['tasks2']),
                    'Indicators2' => trim($_POST['Indicators2']),
                    'Problems2' => trim($_POST['Problems2']),
                    'tasks3' => trim($_POST['tasks3']),
                    'Indicators3' => trim($_POST['Indicators3']),
                    'Problems3' => trim($_POST['Problems3']),
                    'tasks4' => trim($_POST['tasks4']),
                    'Indicators4' => trim($_POST['Indicators4']),
                    'Problems4' => trim($_POST['Problems4']),
                    'tasks5' => trim($_POST['tasks5']),
                    'Indicators5' => trim($_POST['Indicators5']),
                    'Problems5' => trim($_POST['Problems5']),
                    'start_date_err' => '',
                    'end_date_err' => '',
                    'tasks1_err' => '',
                    'Indicators1_err' => '',
                    'Problems1_err' => '',
                    'tasks2_err' => '',
                    'Indicators2_err' => '',
                    'Problems2_err' => '',
                    'tasks3_err' => '',
                    'Indicators3_err' => '',
                    'Problems3_err' => '',
                    'tasks4_err' => '',
                    'Indicators4_err' => '',
                    'Problems4_err' => '',
                    'tasks5_err' => '',
                    'Indicators5_err' => '',
                    'Problems5_err' => '',
                ];

                //validate
                if(empty($data['start_date'])){
                    $data['start_date_err'] = 'Please enter a start date';
                }
                if(empty($data['end_date'])){
                    $data['end_date_err'] = 'Please enter a end date';
                }
                if(empty($data['tasks1'])){
                    $data['tasks1_err'] = 'Please enter a task';
                }
                if(empty($data['Indicators1'])){
                    $data['Indicators1_err'] = 'Please enter a indicator';
                }
                if(empty($data['Problems1'])){
                    $data['Problems1_err'] = 'Please enter a problem';
                }
                if(empty($data['tasks2'])){
                    $data['tasks2_err'] = 'Please enter a task';
                }
                if(empty($data['Indicators2'])){
                    $data['Indicators2_err'] = 'Please enter a indicator';
                }
                if(empty($data['Problems2'])){
                    $data['Problems2_err'] = 'Please enter a problem';
                }
                if(empty($data['tasks3'])){
                    $data['tasks3_err'] = 'Please enter a task';
                }
                if(empty($data['Indicators3'])){
                    $data['Indicators3_err'] = 'Please enter a indicator';
                }
                if(empty($data['Problems3'])){
                    $data['Problems3_err'] = 'Please enter a problem';
                }
                if(empty($data['tasks4'])){
                    $data['tasks4_err'] = 'Please enter a task';
                }
                if(empty($data['Indicators4'])){
                    $data['Indicators4_err'] = 'Please enter a indicator';
                }
                if(empty($data['Problems4'])){
                    $data['Problems4_err'] = 'Please enter a problem';
                }
                if(empty($data['tasks5'])){
                    $data['tasks5_err'] = 'Please enter a task';
                }
                if(empty($data['Indicators5'])){
                    $data['Indicators5_err'] = 'Please enter a indicator';
                }
                if(empty($data['Problems5'])){
                    $data['Problems5_err'] = 'Please enter a problem';
                }

                //make sure errors are empty
                if(empty($data['start_date_err'])
                    && empty($data['end_date_err'])
                    && empty($data['tasks1_err'])
                    && empty($data['Indicators1_err'])
                    && empty($data['Problems1_err'])
                    && empty($data['tasks2_err'])
                    && empty($data['Indicators2_err'])
                    && empty($data['Problems2_err'])
                    && empty($data['tasks3_err'])
                    && empty($data['Indicators3_err'])
                    && empty($data['Problems3_err'])
                    && empty($data['tasks4_err'])
                    && empty($data['Indicators4_err'])
                    && empty($data['Problems4_err'])
                    && empty($data['tasks5_err'])
                    && empty($data['Indicators5_err'])
                    && empty($data['Problems5_err'])){
                    //validated
                    if($this->principalModel->addKaryasadanaya($data)){
                        flash('karyasadanaya_message', 'Karyasadanaya Added');
                        redirect('principals/Karyasadanaya');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //load view with errors
                    $this->view('principals/Karyasadanaya', $data);
                }
            }else{
                //init data
                $data = [
                    'title' => 'Karyasadanaya',
                    'start_date' => '',
                    'end_date' => '',
                    'tasks1' => '',
                    'Indicators1' => '',
                    'Problems1' => '',
                    'tasks2' => '',
                    'Indicators2' => '',
                    'Problems2' => '',
                    'tasks3' => '',
                    'Indicators3' => '',
                    'Problems3' => '',
                    'tasks4' => '',
                    'Indicators4' => '',
                    'Problems4' => '',
                    'tasks5' => '',
                    'Indicators5' => '',
                    'Problems5' => '',
                    'start_date_err' => '',
                    'end_date_err' => '',
                    'tasks1_err' => '',
                    'Indicators1_err' => '',
                    'Problems1_err' => '',
                    'tasks2_err' => '',
                    'Indicators2_err' => '',
                    'Problems2_err' => '',
                    'tasks3_err' => '',
                    'Indicators3_err' => '',
                    'Problems3_err' => '',
                    'tasks4_err' => '',
                    'Indicators4_err' => '',
                    'Problems4_err' => '',
                    'tasks5_err' => '',
                    'Indicators5_err' => '',
                    'Problems5_err' => '',
                ];

                //load view
                $this->view('principals/Karyasadanaya', $data);
            }
        }

        //School Management
        public function school_management(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $leaves = $this->principalModel->getLeaves();
                $karyasadana = $this->principalModel->getKaryasadana();
                $issues = $this->principalModel->getIssues();
                $data = [
                    'title' => trim($_POST['title']),
                    'leaves' => $leaves,
                    'karyasadana' => $karyasadana,
                    'issues' => $issues,
                    'form_id' => trim($_POST['form_id']),
                    'status' => trim($_POST['status']),
                    'leave_id_err' => '',
                ];

                if($this->principalModel->updateStatus($data)){
                    redirect('principals/school_management');
                } else {
                    die('Something went wrong');
                }
            }else{
                $leaves = $this->principalModel->getLeaves();
                $karyasadana = $this->principalModel->getKaryasadana();
                $issues = $this->principalModel->getIssues();
                $data = [
                    'title' => '',
                    'leaves' => $leaves,
                    'karyasadana' => $karyasadana,
                    'issues' => $issues,
                    'leave_id' => '',
                    'status' => '',
                    'leave_id_err' => '',
                ];
                $this->view('principals/school_management', $data);
            }
        
        }
    }