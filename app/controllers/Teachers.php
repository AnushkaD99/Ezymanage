<?php
    class Teachers extends Controller {
        //public function __construct(){
        //     if(!isLoggedIn()){
        //         redirect('users/login');
        //     }

        //     $this->teacherModel = $this->model('Teacher');
        //     $this->userModel = $this->model('User');
        // }

        public function index(){
            // Get teachers
            //$teachers = $this->teacherModel->getTeachers();

            $data = [
                //'teachers' => $teachers
            ];

            $this->view('teachers/index', $data);
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
                    'casual_leaves' => trim($_POST['casual']),
                    'medical_leaves' => trim($_POST['medical']),
                    'other_leaves' => trim($_POST['other']),
                    'userId' => $_SESSION['user_id'],
                    'commencing_date_err' => '',
                    'resuming_date_err' => '',
                    'total_leaves_err' => '',
                    'interval_err' => '',
                    'date1' => strtotime('commencing_date'),
                    'date2' => strtotime('resuming_date'),
                ];

                function calInterval(){
                    $interval = $data['date2'] - $data['date1'];
                    $interval = $interval / (60 * 60 * 24);
                    return $interval;
                }

                $interval = calInterval();

                //Validate Commencing Date
                if($interval < 0){
                    $data['commencing_date_err'] = "*Commencing date must be less than resuming date";
                } else {
                    if($interval > 42){
                        $data['resuming_date_err'] = "*Resuming date must be less than 42 days";
                    }
                    else{
                        if(abs($interval) != $data['casual'] + $data['medical'] + $data['other']){
                            $data['interval_err'] = "*Sum of casual, medical and other leaves must be equal to interval";
                        }
                        else{
                            if($data['reason'] != null && $data['commencing_date'] != null && $data['resuming_date'] != null){
                                //$sql = "INSERT INTO leave_details (reason, commencing_date, resuming_date, casual, medical, other, userId, submitted_date) VALUES ('$reason', '$commencing_date', '$resuming_date', '$casual', '$medical', '$other', '$Userid', '$submittedDate')";
                                if ($this->teacherModel->leaveForm($data)) {
                                    echo "<script> alert(\"New record created successfully!\"); </script>";
                                } else {
                                    echo "<script> alert(\"Submition Failed please try again!\"); </script>";
                                }
                            }
                        }
                    } 
                }


            }else {
                // Init data
                $data = [
                    'title' => 'Leave Form',
                    'reason' => '',
                    'commencing_date' => '',
                    'resuming_date' => '',
                    'casual_leaves' => '',
                    'medical_leaves' => '',
                    'other_leaves' => '',
                    'commencing_date_err' => '',
                    'resuming_date_err' => '',
                    'total_leaves_err' => '',
                    'date1' => '',
                    'date2' => '',
                    'interval' => '',
                    'interval_err' => '',
                ];
            }
            // Load view
            $this->view('teachers/leaveForm', $data);
        }
    }