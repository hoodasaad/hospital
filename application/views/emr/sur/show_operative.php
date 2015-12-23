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
                                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly"/>  
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Date of Operation</label>
                                    <input type='date' name='opertaion' class="form-control" value="<?php echo $value->opertaion; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Preoperative Diagnosis</label>
                                    <input type='text' name='pre' class="form-control" value="<?php echo $value->pre; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Surgeon</label>
                                    <input type='text' name='surgeon' class="form-control" value="<?php echo $value->surgeon; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Anesthesia</label>
                                    <input type='text' name='anasth' class="form-control" value="<?php echo $value->anasth; ?>" readonly="readonly"/>
                                    <label class="mws-form-label">Other</label>

                                    <input type="text" name="other" class="form-control" value="<?php echo $value->other; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Anesthesiologist </label>
                                    <input type='text' placeholder='Anesthesiologist' name='anesthesiologist' class="form-control" value="<?php echo $value->anesthesiologist; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Estimated Blood Loss </label>
                                    <input type='text' placeholder='Estimated Blood Loss' name='blood_loss' class="form-control" value="<?php echo $value->blood_loss; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Blood Transfused :None</label>
                                    <input type='text' placeholder='Blood Transfused' name='blood_trans' class="form-control" value="<?php echo $value->blood_trans; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Drains </label>
                                    <input type='text' placeholder='Drains' name='drains' class="form-control" value="<?php echo $value->drains; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Specimens </label>
                                    <input type='text' placeholder='Specimens' name='specimens' class="form-control" value="<?php echo $value->specimens; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Indications </label>
                                    <input type='text' placeholder='Indications' name='indications' class="form-control" value="<?php echo $value->indications; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Description of Operation </label>
                                    <textarea class="form-control" rows="auto" cols="auto" name="discription" readonly="readonly"> <?php echo $value->discription; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Start Time </label>
                                    <input type='text' name='start_time' class="form-control" value="<?php echo $value->start_time; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Finish at </label>
                                    <input type='text' name='end_time' class="form-control" value="<?php echo $value->end_time; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Nursing Team </label>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Sterile nurse </label>
                                    <input type='text' placeholder='Sterile nurse' name='sterile_nurse' class="form-control" value="<?php echo $value->sterile_nurse; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Circulating nurse</label>
                                    <input type='text' placeholder='Circulating nurse' name='circulating_nurse' class="form-control" value="<?php echo $value->circulating_nurse; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Account of</label>
                                    <input type='text' name='account' class="form-control" value="<?php echo $value->account; ?>" readonly="readonly"/>
                                </div>

                                <div class="form-group">
                                    <label class="mws-form-label">Doctor Signature</label>
                                    <input type='text' placeholder='Doctor Signature' name='sign' class="form-control"value="<?php echo $value->sign; ?>" readonly="readonly"/>
                                </div>

                                <label class="mws-form-label">Date & Time</label>
                                <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly"/>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>