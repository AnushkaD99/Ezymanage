<?php
class Principals extends Controller
{
    private $principalModel;
    private $commonModel;
    private $userModel;
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->principalModel = $this->model('Principal');
        $this->commonModel = $this->model('Common');
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Ezymanage',
        ];

        $this->view('principals/index', $data);
    }

    public function viewDetails()
    {
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

    public function viewMoreSchoolDetails($id)
    {
        // Get school details
        $schools = $this->principalModel->getSchoolById($id);

        $data = [
            'schools' => $schools,
        ];

        $this->view('principals/viewMoreSchoolDetails', $data);
    }

    public function viewMorePrincipalDetails($id)
    {
        // Get school details
        $principals = $this->principalModel->getPrincipalById($id);

        $data = [
            'principals' => $principals,
        ];

        $this->view('principals/viewMorePrincipalDetails', $data);
    }

    public function viewMoreTeacherDetails($id)
    {
        // Get school details
        $teachers = $this->principalModel->getTeacherById($id);

        $data = [
            'teachers' => $teachers,
        ];

        $this->view('principals/viewMoreTeacherDetails', $data);
    }

    public function profile()
    {
        // Get teachers
        $id = $_SESSION['user_id'];
        $users = $this->principalModel->getUser($id);

        $data = [
            'users' => $users

        ];

        $this->view('principals/profile', $data);
    }

    public function editProfile()
    {
        // Get principals
        $id = $_SESSION['user_id'];

        //process form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $users = $this->principalModel->getUser($id);

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
                'school' => trim($_POST['school']),
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
            if ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }

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
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //rename image
                $target_dir = "D:/installed apps/XAMPP/htdocs/Ezymanage/public/img/uploads/";
                $img_name = basename("$id." . pathinfo($_FILES["fileImg"]["name"], PATHINFO_EXTENSION));
                $target_file = $target_dir . basename("$id." . pathinfo($_FILES["fileImg"]["name"], PATHINFO_EXTENSION));
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                //register user
                if ($this->principalModel->updateprofile($data, $img_name)) {
                    if (move_uploaded_file($_FILES["fileImg"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["fileImg"]["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    flash('update_success');
                    redirect('principals/profile');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                die('Something went wrong');
                $this->view('principals/editProfile', $data);
            }
        } else {
            $users = $this->principalModel->getUser($id);
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
            $this->view('principals/editProfile', $data);
        }
    }

    //School Management
    public function school_management()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $leaves = $this->principalModel->getLeaves();
            $karyasadana = $this->principalModel->getKaryasadana();
            $issues = $this->principalModel->getIssues();
            // $userid = $leaves->emp_no || $karyasadana->emp_no || $issues->emp_no;
            // $userroleFromLeave = $leaves->designation || $karyasadana->designation || $issues->designation;

            $data = [
                'title' => trim($_POST['title']),
                'leaves' => $leaves,
                'karyasadana' => $karyasadana,
                'issues' => $issues,
                // 'school' => $this->commonModel->getSchoolByUserId($userid, $userroleFromLeave),
                'form_id' => trim($_POST['form_id']),
                'status' => trim($_POST['status']),
                'leave_id_err' => '',
            ];

            if ($data['status'] == 'Approve') {
                $status = 1;
            } else if ($data['status'] == 'Reject') {
                $status = -1;
            } else {
                // Set a default value for status
                $status = 0;
            }

            $arr_test = [
                'title' => $data['title'],
                'status' => $status,
                'form_id' => $data['form_id']
            ];

            if ($this->principalModel->updateStatus($arr_test)) {
                redirect('principals/school_management');
            } else {
                die('Something went wrong');
            }
        } else {
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

    public function paysheet()
    {

        $data = [
            //'teachers' => $teachers
        ];

        $this->view('principals/paysheet', $data);
    }

    //karyasadanaya
    public function Karyasadanaya()
    {
        // process form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $karyasadana_details = $this->commonModel->getKaryasadanaDeatail();
            // Init data
            $data = [
                'title' => 'Karyasadanaya',
                'userId' => $_SESSION['user_id'],
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
                'submittedDate' => date("Y-m-d"),
                'karyasadana_details' => $karyasadana_details
            ];

            //validate
            if (empty($data['start_date'])) {
                $data['start_date_err'] = 'Please enter a start date';
            }
            if (empty($data['end_date'])) {
                $data['end_date_err'] = 'Please enter a end date';
            }
            if (empty($data['tasks1'])) {
                $data['tasks1_err'] = 'Please enter a task';
            }
            if (empty($data['Indicators1'])) {
                $data['Indicators1_err'] = 'Please enter a indicator';
            }
            if (empty($data['Problems1'])) {
                $data['Problems1_err'] = 'Please enter a problem';
            }
            if (empty($data['tasks2'])) {
                $data['tasks2_err'] = 'Please enter a task';
            }
            if (empty($data['Indicators2'])) {
                $data['Indicators2_err'] = 'Please enter a indicator';
            }
            if (empty($data['Problems2'])) {
                $data['Problems2_err'] = 'Please enter a problem';
            }
            if (empty($data['tasks3'])) {
                $data['tasks3_err'] = 'Please enter a task';
            }
            if (empty($data['Indicators3'])) {
                $data['Indicators3_err'] = 'Please enter a indicator';
            }
            if (empty($data['Problems3'])) {
                $data['Problems3_err'] = 'Please enter a problem';
            }
            if (empty($data['tasks4'])) {
                $data['tasks4_err'] = 'Please enter a task';
            }
            if (empty($data['Indicators4'])) {
                $data['Indicators4_err'] = 'Please enter a indicator';
            }
            if (empty($data['Problems4'])) {
                $data['Problems4_err'] = 'Please enter a problem';
            }
            if (empty($data['tasks5'])) {
                $data['tasks5_err'] = 'Please enter a task';
            }
            if (empty($data['Indicators5'])) {
                $data['Indicators5_err'] = 'Please enter a indicator';
            }
            if (empty($data['Problems5'])) {
                $data['Problems5_err'] = 'Please enter a problem';
            }

            //make sure errors are empty
            if (
                empty($data['start_date_err'])
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
                && empty($data['Problems5_err'])
            ) {
                //validated
                if ($this->commonModel->addKaryasadanaya($data)) {
                    flash('karyasadanaya_message', 'Karyasadanaya Added');
                    redirect('principals/Karyasadanaya');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                $this->view('principals/Karyasadanaya', $data);
            }
        } else {
            // Get leave details
            $karyasadana_details = $this->commonModel->getKaryasadanaDeatail();

            //init data
            $data = [
                'title' => 'Karyasadanaya',
                'userId' => '',
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
                'karyasadana_details' => $karyasadana_details
            ];

            //load view
            $this->view('principals/Karyasadanaya', $data);
        }
    }

    //karyadasanaya view
    public function karyasadanaya_view($id)
    {
        // Get Leave Details
        $karyasadana = $this->principalModel->getKaryasadanaById($id);
        $karyasadana_details = $this->principalModel->getKaryasadanaDeatail();

        $data = [
            'karyasadana' => $karyasadana,
            'karyasadana_details' => $karyasadana_details,
        ];

        $this->view('principals/karyasadanaya_view', $data);
    }

    //leave form
    public function leaveForm()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
                'approval' => 'Pending',
                // 'date1' => strtotime('commencing_date'),
                // 'date2' => strtotime('resuming_date'),
            ];

            // function calInterval(){
            //     $interval = $data['date2'] - $data['date1'];
            //     $interval = $interval / (60 2 60 2 24);
            //     return $interval;
            // }
            // function calculateDifference() {
            //     $startDate = $date['commencing_date'];
            //     $endDate = $data['resuming_date'];
            //     $difference = $this->model->getDateDifference($startDate, $endDate);
            //     $interval = $difference->format('%a days');
            //     return $interval;
            // }

            // $interval = calInterval();

            //Validate
            if (empty($data['reason'])) {
                $data['reason_err'] = 'Please enter a reason';
            }
            if (empty($data['commencing_date'])) {
                $data['commencing_date_err'] = 'Please enter a commencing date';
            }
            if (empty($data['resuming_date'])) {
                $data['resuming_date_err'] = 'Please enter a resuming date';
            }
            if (empty($data['leave_type'])) {
                $data['leavetype_err'] = 'Please select a leave type';
            }

            //make sure no errors

            if (empty($data['reason_err']) && empty($data['commencing_date_err']) && empty($data['resuming_date_err']) && empty($data['leavetype_err'])) {
                // Validated
                $startDate = $data['resuming_date'];
                $endDate = $data['commencing_date'];
                $difference = $this->commonModel->getDateDifference($startDate, $endDate);
                $interval = $difference->format('%a days');
                if ($this->commonModel->submitLeaveForm($data, $interval)) {
                    redirect('principals/LeaveForm');
                } else {
                    die('Something went wrong');
                }
            } else {
                die('Something went wrong');
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


        } else {
            // Get leave details
            $leave_details = $this->commonModel->getLeaveDeatail();

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
                'approval' => ''
            ];
            // Load view
            $this->view('principals/leaveForm', $data);
        }
    }

    //leave view
    public function LeaveView($id)
    {
        // Get Leave Details
        $leave = $this->commonModel->getLeaveById($id);
        $leave_details = $this->commonModel->getLeaveDeatail();

        $data = [
            'leave' => $leave,
            'leave_details' => $leave_details,
        ];

        $this->view('principals/LeaveView', $data);
    }

    //report issue
    public function report_issue()
    {
        //process form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $submitted_issues = $this->commonModel->getSubmittedIssues($_SESSION['user_id']);

            $data = [
                'issue_type' => trim($_POST['issue_type']),
                'description' => trim($_POST['description']),
                'issue_cat' => trim($_POST['issue_cat']),
                'description_err' => '',
                'issue_cat_err' => '',
                'user_id' => $_SESSION['user_id'],
                'submitted_date' => date('Y-m-d'),
                'submitted_issues' => $submitted_issues,
            ];

            //validate description
            if (empty($data['description'])) {
                $data['description_err'] = '*Please enter description';
            }

            //validate description
            if (empty($data['issue_cat'])) {
                $data['issue_cat_err'] = '*Please choose ant issue category';
            }

            //make sure errors are empty
            if (empty($data['description_err']) && empty($data['issue_cat_err'])) {
                //validated
                if ($this->commonModel->addIssue($data)) {
                    flash('issue_message', 'Issue Added');
                    redirect('principals/report_issue');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                $this->view('principals/report_issue', $data);
            }
        } else {
            $submitted_issues = $this->commonModel->getSubmittedIssues($_SESSION['user_id']);
            //init data
            $data = [
                'issue_type' => '',
                'description' => '',
                'issue_cat' => '',
                'description_err' => '',
                'issue_cat_err' => '',
                'user_id' => '',
                'submitted_date' => '',
                'submitted_issues' => $submitted_issues
            ];

            //load view
            $this->view('principals/report_issue', $data);
        }
    }

    //appoinments
    public function appointments()
    {
        //process form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //$submitted_appointments = $this->principalModel->getSubmittedAppointments($_SESSION['user_id']);

            $data = [
                'reason' => trim($_POST['reason']),
                'date' => trim($_POST['date']),
                'start_time' => trim($_POST['start_time']),
                'end_time' => trim($_POST['end_time']),
                'reason_err' => '',
                'date_err' => '',
                'start_time_err' => '',
                'end_time_err' => '',
                'user_id' => $_SESSION['user_id'],
                'submitted_date' => date('Y-m-d'),
                //'submitted_appointments' => $submitted_appointments,
            ];

            //validate description
            if (empty($data['reason'])) {
                $data['reason_err'] = '*Please enter reason';
            }

            //make sure errors are empty
            if (empty($data['reason_err'])) {
                //validated
                if ($this->commonModel->addAppointment($data)) {
                    flash('appointment_message', 'Appointment Added');
                    redirect('principals/appointments');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                $this->view('principals/appointments', $data);
            }
        } else {
            //$submitted_appointments = $this->principalModel->getSubmittedAppointments($_SESSION['user_id']);
            //init data
            $data = [
                'reason' => '',
                'date' => '',
                'start_time' => '',
                'end_time' => '',
                'reason_err' => '',
                'date_err' => '',
                'start_time_err' => '',
                'end_time_err' => '',
                'user_id' => $_SESSION['user_id'],
                'submitted_date' => date('Y-m-d'),
                //'submitted_appointments' => $submitted_appointments
            ];

            //load view
            $this->view('principals/appointments', $data);
        }
    }

    //school details
    public function school_details()
    {
        // Get school details
        $school = $this->principalModel->getSchoolByUserId();
        $school_name = $school->school;

        $data = [
            'schools' => $this->commonModel->getSchoolDetails($school_name),
        ];

        $this->view('principals/school_details', $data);
    }
}
