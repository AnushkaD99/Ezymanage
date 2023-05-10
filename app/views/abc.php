//Salary Prepaeration
    public function  choose_basic($id){
        $user = $this->commonModel->getUser($id);
        $user_role = $user->designation;

        if($user_role == 'Teacher'){
            $teacher = $this->commonModel->getTeacher($id);
            $grade = $teacher->grade;
            $step = $teacher->step;
            $basic = $this->commonModel->getTeachersBasicSalary($grade, $step);
        }
        if($user_role == 'Principal'){
            $principal = $this->commonModel->getPrincipal($id);
            $grade = $principal->grade;
            $step = $principal->step;
            $basic = $this->commonModel->getPrincipalsBasicSalary();
        }
            
        return $basic;
    }

    public function  cal_gross_pay($id){
        $data = [
            'int_all_1' => $this->commonModel->getNecAll1(),
            'c.o.l' => $this->commonModel->getCOL(),
            'basic' => $this->choose_basic($id),
            'sub_total' => 0,
            'gross_pay' => 0,

        ];

        $data['sub_total'] = $data['basic'] + $data['int_all_1'];
        $user = $this->commonModel->getUser($id);
        $user_role = $user->designation;
        if($user_role == 'Principal'){
            $data=[
                'telephone_all' => $this->commonModel->getTlpAll(),
                'executive_all' => $this->commonModel->getExcAll(),
                'allowances' => 0
            ];
            $data['allowances'] = $data['telephone_all'] + $data['executive_all'];
        }
        else{
            $data=[
                'telephone_all' => 0,
                'executive_all' => 0,
                'allowances' => 0
            ]; 
            $data['allowances'] = $data['telephone_all'] + $data['executive_all'];
        }

        $data['gross_pay'] = $data['sub_total'] + $data['allowances'];

        return($data);
    }

    public function  cal_tot_ded($id){
        $data =[
            'w&op_rate' => $this->commonModel->getWANDOP(),
            'basic' => $this->choose_basic($id),
            'w&op' => 0,
            'stamp' => $this->commonModel->getStampDed(),
            'agrahara' => $this->commonModel->getAgraharaDed($id),
            'agrahara_amount' => 0,
            'other_ded' => 0,
            'total_ded' => 0,
        ];

        $data['w&op'] = $data['basic'] * $data['w&op_rate']->amount;
        
        //agrahara
        $agrahara = $data['agrahara'];
        $data['agrahara_amount'] = $this->commonModel->getAgraharaAmount($agrahara);

        //Total Deduction
        $data['total_ded'] = $data['w&op'] + $data['stamp'] + $data['agrahara'] + $data['other_ded'];

        return $data;

    }

    public function  calc_sal(){
        $gross_pay =  $this->cal_gross_pay($id)->$data['gross_pay'];
        $tot_ded = $this->cal_tot_ded($id)->$data['gross_pay'];

        $net_sal = $gross_pay + $tot_ded;

        return $net_sal;
    }