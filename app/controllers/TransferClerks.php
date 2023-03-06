<?php    
    class TransferClerks extends Controller {
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }

            $this->transferClerkModel = $this->model('TransferClerk');
            $this->userModel = $this->model('User');
        }

        public function index(){

            $data = [
                //'teachers' => $teachers
            ];

            $this->view('transferclerks/index', $data);
        }

        //view deatils
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
                    $data['schools'] = $this->transferClerkModel->getSchoolDeatail();
                    $data['principals'] = $this->transferClerkModel->getPrincipalDeatail();
                    $data['teachers'] = $this->transferClerkModel->getTeacherDeatail();
                }else{
                    $data['schools'] = $this->transferClerkModel->searchSchools($data);
                    $data['principals'] = $this->transferClerkModel->searchPrincipals($data);
                    $data['teachers'] = $this->transferClerkModel->searchTeachers($data);
                }
            } else {
                $data = [
                    'schools' => $this->transferClerkModel->getSchoolDeatail(),
                    'principals' => $this->transferClerkModel->getPrincipalDeatail(),
                    'teachers' => $this->transferClerkModel->getTeacherDeatail(),
                    'search' => '',
                    'schools_err' => '',
                ];
            }
        
            //load view
            $this->view('transferclerks/viewDetails', $data);
        }
        

        public function viewMoreSchoolDetails($id){
            // Get school details
            $schools = $this->transferClerkModel->getSchoolById($id);

            $data = [
                'schools' => $schools,
            ];

            $this->view('transferclerks/viewMoreSchoolDetails', $data);
        }

        public function viewMorePrincipalDetails($id){
            // Get school details
            $principals = $this->transferClerkModel->getPrincipalById($id);

            $data = [
                'principals' => $principals,
            ];

            $this->view('transferclerks/viewMorePrincipalDetails', $data);
        }

        public function viewMoreTeacherDetails($id){
            // Get school details
            $teachers = $this->transferClerkModel->getTeacherById($id);

            $data = [
                'teachers' => $teachers,
            ];

            $this->view('transferclerks/viewMoreTeacherDetails', $data);
        }

    } 