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
                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Location</label>
                            <input type="text" class="form-control" value="<?php echo $value->location; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Quality</label>
                            <input type="text" class="form-control" value="<?php echo $value->quality; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Severty</label>
                            <input type="text" class="form-control" value="<?php echo $value->severty; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Duration</label>
                            <input type="text" class="form-control" value="<?php echo $value->duration; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Date & Time</label>
                            <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label"> Modifying Factor</label>
                            <input type="text" class="form-control" value="<?php echo $value->factor; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Associated Signs & symptoms</label>
                            <input type="text" class="form-control" value="<?php echo $value->assoc; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Family history</label>
                            <input type="text" class="form-control" value="<?php echo $value->history; ?>" readonly="readonly">
                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Tobaco</label>
                            <input type="text" class="form-control" value="<?php echo $value->tobaco; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Alcohol</label>
                            <input type="text" class="form-control" value="<?php echo $value->alcohol; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Illicit Drugs</label>
                            <input type="text" class="form-control" value="<?php echo $value->drugs; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">HIV risk factors</label>
                            <input type="text" class="form-control" value="<?php echo $value->hiv; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Occupation</label>
                            <input type="text" class="form-control" value="<?php echo $value->occ; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Education</label>
                            <input type="text" class="form-control" value="<?php echo $value->edu; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Marita Status</label>
                            <input type="text" class="form-control" value="<?php echo $value->marital; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Doctor Signature</label>
                            <input readonly="readonly" type='text' placeholder='Doctor Signature' name='sign' class="form-control" value="<?php echo $value->sign; ?>"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>