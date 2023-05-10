<div>
    <div class="content">
        <div class="border-box">
            <h3>ZONAL EDUCATION OFFICE - COLOMBO</h3>
            <h3>PAY REPORT FOR MONTH : OCTOBER 2022</h3>
            <h3>Emp No. : <?php echo $data['user']->emp_no ?></h3>
            <h3>Name : <?php echo $data['user']->name_with_initials ?></h3>
            <h3>DESIGNATION : <?php echo $data['user']->designation ?></h3>
            <h3>
                <?php
                if($data['user']->designation == 'Teacher'){
                    echo $data['teacher']->school;
                }
                else if($data['user']->designation == 'Principal'){
                    echo $data['principal']->school;
                }
                 ?>
            </h3>
            <hr class="dashed_line">
            <h3>EARNINGS</h3>
            <div class="sub-content">
                <table>
                    <tr>
                        <td>Basic</td>
                        <td class="align-right">: <?php echo $data['basic']; ?></td>
                    </tr>
                    <tr>
                        <td>INT ALL 3</td>
                        <td class="align-right">: <?php echo $data['int_all_3']; ?></td>
                    </tr>
                    <tr>
                        <td>SUB TOTAL</td>
                        <td class="align-right">: <?php echo $data['sub_total']; ?></td>
                    </tr>
                </table>
            </div>
            <hr class="dashed_line">
            <table>
                <tr>
                    <td>C.O.L</td>
                    <td class="align-right">: <?php echo $data['c.o.l']; ?></td>
                </tr>
            </table>
            <hr class="dashed_line">
            <table>
                <tr>
                    <td>GROSS PAY</td>
                    <td class="align-right">: <?php echo $data['gross_pay']; ?></td>
                </tr>
            </table>
            <h3>DEDUCTIONS</h3>
            <div class="sub-content">
                <table>
                    <tr>
                        <td>W. & O. P</td>
                        <td class="align-right">: <?php echo $data['w&op']; ?></td>
                    </tr>
                    <tr>
                        <td>STAMP</td>
                        <td class="align-right">: <?php echo $data['stamp']; ?></td>
                    </tr>
                    <tr>
                        <td>AGRAHARA</td>
                        <td class="align-right">: <?php echo $data['agrahara_amount']; ?></td>
                    </tr>
                </table>
            </div>
            <table>
                <tr>
                    <td>TOT. DED.</td>
                    <td class="align-right">: <?php echo $data['total_ded']; ?></td>
                </tr>
            </table>
            <hr class="dashed_line">
            <table>
                <tr>
                    <td>NET PAY</td>
                    <td class="align-right">: <?php echo $data['net_sal']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>