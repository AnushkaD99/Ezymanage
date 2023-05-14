<div>
    <div class="content">
        <div class="border-box">
            <h3>ZONAL EDUCATION OFFICE - COLOMBO</h3>
            <h3>PAY REPORT FOR MON : OCTOBER 2022</h3>
            <h3>Emp No. : <?php echo $data['user']->emp_no; ?></h3>
            <h3>Name : <?php echo $data['user']->name_with_initials; ?></h3>
            <h3>Position : <?php echo $data['user']->designation; ?></h3>
            <h3>School : <?php echo $data['school']; ?></h3>
            <hr class="dashed_line">
            <h3>EARNINGS</h3>
            <div class="sub-content">
                <table>
                    <tr>
                        <td>Basic</td>
                        <td class="align-right">: <?php echo number_format($data['payslip']->basic_salary, 2); ?></td>
                    </tr>
                    <?php foreach ($data['allowances'] as $allowance) : ?>
                        <tr>
                            <td><?php echo $allowance->allowance_name; ?></td>
                            <td class="align-right">: <?php echo number_format($allowance->amount, 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <hr class="dashed_line">
            <table>
                <tr>
                    <td>GROSS PAY</td>
                    <td class="align-right">: <?php echo number_format($data['gross_pay'], 2); ?></td>
                </tr>
            </table>
            <h3>DEDUCTIONS</h3>
            <div class="sub-content">
                <table>
                    <?php foreach ($data['deductions'] as $deduction) : ?>
                        <tr>
                            <td><?php echo $deduction->name; ?></td>
                            <?php $amount = $deduction->amount;
                            if ($deduction->name == 'W. & O. P.') {
                                $amount = $data['payslip']->basic_salary * $amount / 100;
                            }
                            ?>
                            <td class="align-right">: <?php echo number_format($amount, 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <table>
                <tr>
                    <td>TOT. DED.</td>
                    <td class="align-right">: <?php echo number_format($data['payslip']->deductions, 2); ?></td>
                </tr>
            </table>
            <hr class="dashed_line">
            <table>
                <tr>
                    <td>NET PAY</td>
                    <td class="align-right">: <?php echo number_format($data['payslip']->net_salary, 2); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>