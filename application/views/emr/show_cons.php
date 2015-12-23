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
                        <div class="form-group">
                            <label class="mws-form-label">Mrn</label>
                            <span><i class="icon-pencil"></i> Patient Mrn <?php echo" " . $value->mrn; ?></span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="">
                                <div class="mws-form-inline">
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">Mrn</label>
                                        <div class="mws-form-item">
                                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly">                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="mws-form-label">Personal Data</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">To Specialty</label>
                                        <input type="text" class="form-control" value="<?php echo $value->spe; ?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">From Specialty</label>
                                        <input type="text" class="form-control" value="<?php echo $value->from_sp; ?>" readonly="readonly">
                                    </div>

                                    <div class="form-group">
                                        <label class="mws-form-label">Reason of Consultation</label>
                                        <textarea rows="auto" cols="auto" class="form-control" readonly="readonly"><?php echo $value->reason; ?> </textarea>  
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Date & Time</label>
                                        <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Doctor Signature</label>
                                        <input type="text" class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly">
                                    </div>

                            </form>
                        </div>
                </div>
            </div>
        </div>