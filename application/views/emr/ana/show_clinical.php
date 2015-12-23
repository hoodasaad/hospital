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
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Preoperative blood pressure</label>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label class="mws-form-label">Clinic Reading</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="mws-form-label">SBP</label>

                                            <div class="input-group">
                                                <input type='text'  name='clinc_sbp' class="form-control" value="<?php echo $value->clinc_sbp; ?>" readonly="readonly"/>
                                                <div class="input-group-addon">
                                                    mm Hg
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>DBP</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type='text' name='clinc_dbp' class="form-control" value="<?php echo $value->clinc_dbp; ?>" readonly="readonly"/>
                                                <div class="input-group-addon">
                                                    mm Hg
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="mws-form-label">Position</label>
                                    <div class="input-group">
                                        <input type='text'name='clinc_pos' class="form-control" value="<?php echo $value->clinc_pos; ?>" readonly="readonly"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Day of surgery (Prior to premedication)</label>
                                    <div class="mws-form-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>SBP</label>
                                                <div class="input-group">
                                                    <input type='text' name='day_sbp' class="form-control" value="<?php echo $value->day_sbp; ?>" readonly="readonly"/>
                                                    <div class="input-group-addon">
                                                        mm Hg
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-4">
                                                <label>DBP</label>

                                                <div class="input-group">
                                                    <input type='text' name='day_dbp' class="form-control" value="<?php echo $value->day_dbp; ?>" readonly="readonly"/>
                                                    <div class="input-group-addon">
                                                        mm Hg
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Position</label>
                                    <div class="input-group">
                                        <input type='text' name='day_pos' class="form-control" value="<?php echo $value->day_pos; ?>" readonly="readonly"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">1st reading in OR prior to induction</label>
                                    <div class="mws-form-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>SBP</label>

                                                <div class="input-group">
                                                    <input type='text' name='induction_sbp' class="form-control" value="<?php echo $value->induction_sbp; ?>" readonly="readonly"/>
                                                    <div class="input-group-addon">
                                                        mm Hg
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-4">
                                                <label>DBP</label>

                                                <div class="input-group">
                                                    <input type='text' name='induction_dbp' class="form-control" value="<?php echo $value->induction_dbp; ?>" readonly="readonly"/>
                                                    <div class="input-group-addon">
                                                        mm Hg
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Position</label>
                                    <div class="input-group">
                                        <input type='text' name='induction_pos' class="form-control" value="<?php echo $value->induction_pos; ?>" readonly="readonly"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Was premedication given prior to 1st reading in the OR?</label>
                                    <div class="input-group">
                                        <input type='text' name='reading' class="form-control" value="<?php echo $value->reading; ?>" readonly="readonly"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Blood and fluid loss and replacement</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type='text' name='record' class="form-control" value="<?php echo $value->record; ?>" readonly="readonly"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label></label>
                                                <div class="input-group">
                                                    <input>
                                                    <div class="input-group-addon"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type='text' name='low_record' class="form-control" value="<?php echo $value->low_record; ?>" readonly="readonly"/>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type='text' name='lowest' class="form-control" value="<?php echo $value->lowest; ?>" readonly="readonly"/>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mws-form-label">Time</label>
                                                <input type='text' name='low_time' class="form-control" value="<?php echo $value->low_time; ?>" readonly="readonly"/>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">List the volume of fluids administered intraoperatively </label>
                                </div>
                                <div class="form-group">
                                    <div class="mws-form-item">
                                        <div class="row">
                                            <?php
                                            $list = explode(":", $value->list);
                                            foreach ($list as $row) {
                                                ?>

                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <div class="col-sm-4">
                                                            <input type='text' name='list[]' class="form-control" value="<?php echo $row; ?>" readonly="readonly"/>
                                                        </div>
                                                    <?php } ?>
                                                    <?php
                                                    $vol = explode(":", $value->volume);
                                                    foreach ($vol as $row) {
                                                        ?>
                                                        <div class="col-sm-4">
                                                            <div class="input-group">
                                                                <input type='text' name='volume[]' class="form-control" value="<?php echo $row; ?>" readonly="readonly"/>
                                                                <div class="input-group-addon">
                                                                    CC
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="mws-form-label">Total Fluids</label>
                                    <div class="input-group">
                                        <input type='text' name='fluid' class="form-control" value="<?php echo $value->fluid; ?>" readonly="readonly"/>
                                        <div class="input-group-addon">
                                            CC
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Total intraoperative urine output</label>
                                    <div class="input-group">
                                        <input type='text' name='output' class="form-control" value="<?php echo $value->output; ?>" readonly="readonly"/>
                                        <div class="input-group-addon">
                                            CC
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Did the surgeon request a specific blood pressure range ?</label>
                                    <input type='text' name='surgeon' class="form-control" value="<?php echo $value->surgeon; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Please specific ranges</label>
                                    <div class="mws-form-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <label class="mws-form-label">SBP</label>
                                                    <input type='text' name='surgeon_sbp' class="form-control" value="<?php echo $value->surgeon_sbp; ?>" readonly="readonly"/>
                                                    <div class="input-group-addon">
                                                        mm Hg
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <label class="mws-form-label">MaP</label>
                                                    <input type='text' name='surgeon_map' class="form-control" value="<?php echo $value->surgeon_map; ?>" readonly="readonly"/>
                                                    <div class="input-group-addon">
                                                        mm Hg
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Did the the anethesiologist target a specific blood pressure ranges ?</label>
                                    <input type='text' name='target' class="form-control" value="<?php echo $value->target; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Please specific ranges</label>
                                    <div class="mws-form-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <label class="mws-form-label">SBP</label>
                                                    <input type='text' name='target_sbp' class="form-control" value="<?php echo $value->target_sbp; ?>" readonly="readonly"/>
                                                    <div class="input-group-addon">
                                                        mm Hg
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <label class="mws-form-label">MaP</label>
                                                    <input type='text' name='target_map' class="form-control" value="<?php echo $value->target_map; ?>" readonly="readonly"/>
                                                    <div class="input-group-addon">
                                                        mm Hg
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Was any attempt made to adjust the acceptable blood pressure range to correct for the difference in height between the site of measurement and the patient's head leve?</label>
                                    <input type='text' name='correct' class="form-control" value="<?php echo $value->correct; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <input type='text' name='correct_choose' class="form-control" value="<?php echo $value->correct_choose; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Was deliberate or controlled hypotension used?</label>
                                    <input type='text' name='deliberate' class="form-control" value="<?php echo $value->deliberate; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Technique</label>
                                    <input type='text' name='technique' class="form-control" value="<?php echo $value->technique; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <input type='text' name='other_drug' class="form-control" value="<?php echo $value->other_drug; ?>" readonly="readonly"/>
                                    <input type='text' name='rate' class="form-control" value="<?php echo $value->rate; ?>" readonly="readonly"/>
                                    <input type='text' name='infusion' class="form-control" value="<?php echo $value->infusion; ?>" readonly="readonly"/>
                                    <input type='text' name='dose' class="form-control" value="<?php echo $value->dose; ?>" readonly="readonly"/>
                                    <input type='text' name='interm' class="form-control" value="<?php echo $value->interm; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Did any sudden changes in end tidal Co2(ETCO2)blood pressure (MAP) and oxygen saturation (SPO2)occur simultaneously in the case , consistent with pulmonary embolism?</label>
                                    <input type='text' name='sudden' class="form-control" value="<?php echo $value->sudden; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <input type='text' name='etco' class="form-control" value="<?php echo $value->etco; ?>" readonly="readonly"/>
                                    <input type='text' name='etco_val' class="form-control" value="<?php echo $value->etco_val; ?>" readonly="readonly"/>
                                    <label>mm Hg &DownArrow; in ETCO2</label>
                                    <input type='text' name='etco_min' class="form-control" value="<?php echo $value->etco_min; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <input type='text' name='map' class="form-control" value="<?php echo $value->map; ?>" readonly="readonly"/>
                                    <label>mm Hg &DownArrow; in MAP</label>
                                    <input type='text' name='map_min' class="form-control" value="<?php echo $value->map_min; ?>" readonly="readonly"/>
                                    <label>minute</label>
                                </div>
                                <div class="form-group">
                                    <input type='text' name='spo' class="form-control" value="<?php echo $value->spo; ?>" readonly="readonly"/>
                                    <input type='text' name='spo_val' class="form-control" value="<?php echo $value->spo_val; ?>" readonly="readonly"/>
                                    <label>mm Hg &DownArrow; in SPO2</label>
                                    <input type='text' name='spo_min' class="form-control" value="<?php echo $value->spo_min; ?>" readonly="readonly"/>
                                    <label>minute</label>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">If patient had regional anesthesia with minimal or no sedation , did they experience any abrupt intraoperative neurologic change?</label>
                                    <input type='text' name='changing' class="form-control" value="<?php echo $value->changing; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <textarea cols="auto" rows="auto" name="describing" readonly="readonly" class="form-control"/> <?php echo $value->describing; ?></textarea>
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
