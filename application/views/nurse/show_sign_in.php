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
                            <td>Age: <?= @$patient->age ?></td><td>Gender: <?= @Patient::Gender()[$patient->gender] ?></td><td>PT's ID: <?= @$patient->pt_id ?></td>
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
                                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly"/>                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Sign In</label>
                                    </div>

                                    <div class="form-group">
                                        <div>
                                            <input type="text" class="form-control" value="<?php echo $value->patient; ?>" readonly="readonly"/>                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $value->site; ?>" readonly="readonly"/>                                        </div>
                                </div>

                                <div class="form-group">
                                    <label class="mws-form-label">Does Patient have a</label>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Known Allergy ?</label>
                                    <input type="text" class="form-control" value="<?php echo $value->alle; ?>" readonly="readonly"/>
                                </div>

                                <div class="form-group">
                                    <label class="mws-form-label">Difficult Airway/Aspiration Risk?</label>
                                    <input type="text" class="form-control" value="<?php echo $value->risk; ?>" readonly="readonly"/>  
                                </div>

                                <div class="form-group">
                                    <label class="mws-form-label">Risk of > 500Ml Blood Loss (7ML/Kg In Children)</label>
                                    <input type="text" class="form-control" value="<?php echo $value->blood; ?>" readonly="readonly"/>  
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Nurse Signature</label>
                                    <input type='text' placeholder='Nurse Signature' name='sign' class="form-control"value="<?php echo $value->sign; ?>" readonly="readonly"/>
                                </div>


                                <div class="form-group">
                                    <label class="mws-form-label">Date & Time</label>
                                    <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                                </div>

                            </form>
                        </div>
                </div>
            </div>
        </div>