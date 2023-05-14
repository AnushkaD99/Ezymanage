<div>
    <div class="content">
        <div class="border-box">
            <h3>ZONAL EDUCATION OFFICE - COLOMBO</h3>
            <h3>PAY REPORT FOR MON : OCTOBER 2022</h3>
            <h3>Emp No. : <?php echo $data['sal_details']->emp_no; ?></h3>
            <h3>Name : <?php echo $data['user']->name_with_initials; ?></h3>
            <h3>Position : <?php echo $data['user']->designation; ?></h3>
            <h3>School : <?php echo $data['teacher']->school; ?></h3>
            <hr class="dashed_line">
            <h3>EARNINGS</h3>
            <div class="sub-content">
                <table>
                    <tr>
                        <td>Basic</td>
                        <td class="align-right">: <?php echo $data['sal_details']->basic_salary; ?></td>
                    </tr>
                    <?php foreach ($data['allowances'] as $allowance) : ?>
                        <tr>
                            <td><?php echo $allowance->allowance_name; ?></td>
                            <td class="align-right">: <?php echo $allowance->amount; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
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
                        <td class="align-right">: <?php echo $data['agrahara_amount'] ?></td>
                    </tr>
                </table>
            </div>
            <table>
                <tr>
                    <td>TOT. DED.</td>
                    <td class="align-right">: <?php echo $data['sal_details']->deductions; ?></td>
                </tr>
            </table>
            <hr class="dashed_line">
            <table>
                <tr>
                    <td>NET PAY</td>
                    <td class="align-right">: <?php echo $data['sal_details']->net_salary; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>