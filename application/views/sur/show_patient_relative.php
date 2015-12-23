<?php
$value = $contact[0];
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Patient MRN:<?= $value->mrn ?></div>
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
                    <form class="form" action="" rel="form">

                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="">
                                <div class="mws-form-inline">
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">Mrn</label>
                                        <div class="mws-form-item">
                                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly">                                        </div>
                                    </div>
                                   
                                <div class="form-group">
                                    <label class="mws-form-label">Subject</label>
                                    <input type="text" class="form-control" value="<?php echo $value->sub; ?>" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Educator</label>
                                    <input type="text" class="form-control" value="<?php echo $value->edu; ?>" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Response of pt's/Re</label>
                                    <input type="text" class="form-control" value="<?php echo $value->res; ?>" readonly="readonly">
                                </div>

                                <div class="form-group">
                                    <label class="mws-form-label">Date & Time</label>
                                    <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Doctor Signature</label>
                                    <input type="text" class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly">
                                </div>

                        </div >
                    </form>
                </div>
            </div>
        </div>
    </div>