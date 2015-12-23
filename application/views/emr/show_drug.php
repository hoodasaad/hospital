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
                                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly"/>                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Drug Needed</label>
                                        <input type='text' name='need' class="form-control" value="<?php echo $value->need; ?>" readonly="readonly"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="mws-form-label"> Drug</label>
                                        <input type='text' placeholder='Drug' name='drug' class="form-control" value="<?php echo $value->drug; ?>" readonly="readonly"/> 
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label"> Drug Information</label>
                                    </div>

                                    <div class="form-group">
                                        <label class="mws-form-label"> Drug Dose</label>
                                        <input type='text' placeholder='Drug Dose' name='dose' class="form-control" value="<?php echo $value->dose; ?>" readonly="readonly"/> 
                                    </div>

                                    <div class="form-group">
                                        <label class="mws-form-label"> Drug Freq /Route</label>
                                        <input type='text' placeholder='Drug Freq /Route' name='freq' class="form-control" value="<?php echo $value->freq; ?>" readonly="readonly"/> 
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Instruction</label>
                                        <input type='text' placeholder='Instruction' name='inst' class="form-control" value="<?php echo $value->inst; ?>" readonly="readonly"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">RFA</label>
                                        <input type='text' placeholder='RFA' name='rfa' class="form-control" value="<?php echo $value->rfa; ?>" readonly="readonly"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Doctor Signature</label>
                                        <input type='text' placeholder='Doctor Signature' name='sign' class="form-control"value="<?php echo $value->sign; ?>" readonly="readonly"/>
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