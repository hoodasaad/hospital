<?php
$value = $contact[0];
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Show Patient MRN:<?= $value->mrn ?></div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td colspan="2">PT's Name: <?= @$patient->name ?></td><td>MRN: <?= @$patient->id ?></td>
                        </tr>
                        <tr>
                            <td>Age: <?= @Patient::ageCalculator(@$patient->age) ?></td><td>Gender: <?= @Patient::Gender()[$patient->gender] ?></td><td>PT's ID: <?= @$patient->pt_id ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?= @$diagnosis->diagnosis ?></td>
                        </tr>
                    </table>
                    <form class="form" role="form" method="post">
                        <div class="form-group">
                            <label class="mws-form-label">Mrn</label>
                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Clinc Name</label>
                            <input type="text" class="form-control" value="<?php echo $value->clinc; ?>" readonly="readonly"/>
                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Laboratory</label>
                            <textarea name='lab' rows="auto" cols="auto" class="form-control" readonly="readonly"><?php echo $value->lab; ?> </textarea>

                        </div> 

                        <div class="form-group">
                            <label class="mws-form-label">Doctor Sign</label>
                            <input type="text" class="form-control" value="<?php echo $value->sign; ?> " readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Time &Date</label>
                            <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>