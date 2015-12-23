
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Perioperative Clinical Course </div>
                <div class="block-content">
                    <?php echo form_open('sur_control/add_clinical') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    <label class="mws-form-label">Preoperative blood pressure</label>
                    <div class="form-group">
                        <lable>Clinic Reading</lable>
                    <ul class="list-group list-inline">

                        <li class="list-group-item">
                            <div class="form-inline">
                                <label class="mws-form-label">SBP</label>
                                <div class="input-group">
                                    <input type='text' placeholder='SBP' name='clinc_sbp' class="form-control"/>
                                    <div class="input-group-addon">
                                        mm Hg
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-inline">
                                <label>DBP</label>
                                <div class="input-group">
                                    <input type='text' placeholder='DBP' name='clinc_dbp' class="form-control"/>
                                    <div class="input-group-addon">
                                        mm Hg
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-inline">
                                <label class="mws-form-label">Position</label>
                                <div class="input-group">
                                    <input type='radio'  name='clinc_pos' value="Sitting"/><label>Sitting</label>
                                    <input type='radio'  name='clinc_pos' value="Supine"/><label>Supine</label>
                                    <input type='radio'  name='clinc_pos' value="Unknown"/><label>Unknown</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">Day of surgery (Prior to premedication)</label>
                        <ul class="list-inline list-group">
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <label>SBP</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='SBP' name='day_sbp' class="form-control"/>
                                        <div class="input-group-addon">
                                            mm Hg
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <label>DBP</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='DBP' name='day_dbp' class="form-control"/>
                                        <div class="input-group-addon">
                                            mm Hg
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <label class="mws-form-label">Position</label>
                                    <div class="input-group">
                                        <input type='radio'  name='day_pos' value="Sitting"/><label>Sitting</label>
                                        <input type='radio'  name='day_pos' value="Supine"/><label>Supine</label>
                                        <input type='radio'  name='day_pos' value="Unknown"/><label>Unknown</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">1st reading in OR prior to induction</label>
                        <ul class="list-group list-inline">
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <label>SBP</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='SBP' name='induction_sbp' class="form-control"/>
                                        <div class="input-group-addon">
                                            mm Hg
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <label>DBP</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='DBP' name='induction_dbp' class="form-control"/>
                                        <div class="input-group-addon">
                                            mm Hg
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <label class="mws-form-label">Position</label>
                                    <div class="input-group">
                                        <input type='radio'  name='induction_pos' value="Sitting"/><label>Sitting</label>
                                        <input type='radio'  name='induction_pos' value="Supine"/><label>Supine</label>
                                        <input type='radio'  name='induction_pos' value="Unknown"/><label>Unknown</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Was premedication given prior to 1st reading in the OR?</label>
                        <div class="input-group">
                            <input type='radio'  name='reading' value="Yes"/><label>Yes</label>
                            <input type='radio'  name='reading' value="No"/><label>No</label>
                            <input type='radio'  name='reading' value="Unknown"/><label>Unknown</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Blood and fluid loss and replacement</label>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <label> Estimated blood loss</label>
                                    <input type="text" class="form-control" name="" >
                                </div>
                               </li>
                            <li class="list-group-item">
                                <ul class="list-group list-inline">
                                    <li class="list-group-item">
                                        <div class="form-inline">
                                            <input type='radio'  name='low_record' value="Lowest record Hct/Hgb (intraoperative)"/>
                                            <label>Lowest record Hct/Hgb (intraoperative)</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-inline">
                                            <input type='text' class="form-control" name='lowest'/>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-inline">
                                            <label class="mws-form-label">Time</label>
                                            <input type='text' placeholder='Time' name='low_time' class="form-control"/>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <div class="input-group">
                                        <input type='radio'  name='record' value="Not Checked"/><label>Not Checked</label>
                                        <input type='radio'  name='record' value="Unknown"/><label>Unknown</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">List the volume of fluids administered intraoperatively </label>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <input type='checkbox' name='list[]' value="Colloid"/>
                                    <label>Colloid</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='Colloid' name='volume[]' class="form-control sum"/>
                                        <div class="input-group-addon">
                                            CC
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <input type='checkbox' name='list[]' value="Crystalloid"/>
                                    <label>Crystalloid</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='Crystalloid' name='volume[]' class="form-control sum"/>
                                        <div class="input-group-addon">
                                            CC
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <input type='checkbox' name='list[]' value="Blood Products"/>
                                    <label>Blood Products</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='Blood Products' name='volume[]' class="form-control sum"/>
                                        <div class="input-group-addon">
                                            CC
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <label class="mws-form-label">Total Fluids</label>
                                    <div class="input-group">
                                        <input type='text' readonly placeholder='Total Fluids' id="Total" name='fluid' class="form-control"/>
                                        <div class="input-group-addon">
                                            CC
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-inline">
                                    <label class="mws-form-label">Total intraoperative urine output</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='Total intraoperative urine output' name='output' class="form-control"/>
                                        <div class="input-group-addon">
                                            CC
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                <div class="form-group RadioGroup">
                    <label class="mws-form-label">Did the surgeon request a specific blood pressure range ?</label>
                    <input type='radio'  name='surgeon' class="ShowHide" data-box="#specific" value="Yes"/><label>Yes</label>
                    <input type='radio'  name='surgeon' value="No"/><label>No</label>
                    <input type='radio'  name='surgeon' value="Unknown"/><label>Unknown</label>
                </div>
                <div class="form-group hide-box" id="specific">
                    <label class="mws-form-label">Please specific ranges</label>
                    <div class="mws-form-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">SBP</label>
                                    <div class="input-group">
                                        <input type='text' name='surgeon_sbp' placeholder="SBP" class="form-control"/>
                                        <div class="input-group-addon">
                                            mm Hg
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">MaP</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='MaP' name='surgeon_map' class="form-control"/>
                                        <div class="input-group-addon">
                                            mm Hg
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group RadioGroup">
                    <label class="mws-form-label">Did the the anethesiologist target a specific blood pressure ranges ?</label>
                    <input type='radio'  name='target' class="ShowHide" data-box="#ranges" value="Yes"/><label>Yes</label>
                    <input type='radio'  name='target' value="No"/><label>No</label>
                    <input type='radio'  name='target' value="Unknown"/><label>Unknown</label>
                </div>
                <div class="form-group hide-box" id="ranges">
                    <label class="mws-form-label">Please specific ranges</label>
                    <div class="mws-form-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">SBP</label>
                                    <div class="input-group">
                                        <input type='text' name='target_sbp' placeholder="SBP" class="form-control"/>
                                        <div class="input-group-addon">
                                            mm Hg
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">MaP</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='MaP' name='target_map' class="form-control"/>
                                        <div class="input-group-addon">
                                            mm Hg
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group RadioGroup">
                    <label class="mws-form-label">Was any attempt made to adjust the acceptable blood pressure range to correct for the difference in height between the site of measurement and the patient's head leve?</label>
                    <input type='radio' class="ShowHide" data-box="#Arterial"  name='correct' value="Yes"/><label>Yes</label>
                    <input type='radio'  name='correct' value="No"/><label>No</label>
                </div>
                <div class="form-group hide-box" id="Arterial">
                    <div class="form-group">
                        <input type='radio'  name='correct_choose' value="Arterial line transducer moved to height of head"/><label>Arterial line transducer moved to height of head</label>
                    </div>
                    <div class="form-group">
                        <input type='radio'  name='correct_choose' value="Mathematical correction for height from BP measurement site to head level when determing goal range of acceptable blood pressure"/><label>Mathematical correction for height from BP measurement site to head level when determing goal range of acceptable blood pressure</label>
                    </div>
                </div>
                <div class="form-group RadioGroup">
                    <label class="mws-form-label">Was deliberate or controlled hypotension used?</label>
                    <input type='radio' class="ShowHide" data-box="#Technique"  name='deliberate' value="Yes"/><label>Yes</label>
                    <input type='radio'  name='deliberate' value="No"/><label>No</label>
                </div>
                <div class="form-group hide-box RadioGroup" id="Technique">
                    <label class="mws-form-label">Technique</label>
                    <input type='radio'  name='technique' value="Deep inhalation anasthesia"/><label>Deep inhalation anasthesia</label>
                    <input type='radio'  name='technique' class="ShowHide" data-box="#other_drug" value="Other Drug"/><label>Other Drug</label>
                </div>
                <div class="form-group hide-box" id="other_drug">
                    <div class="row">
                        <div class="col-xs-4"><input type='text'  name='other_drug' class="form-control"/></div>
                        <div class="col-xs-4">
                            <div class="form-inline">
                                <input type='radio'  name='rate' value="Infusion rate"/><label>Infusion rate</label> <input type='text'  name='infusion' class="form-control"/>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-inline">
                                <input type='radio'  name='dose' value="Intermitteny doses"/><label>Intermitteny doses</label>
                                <input type='text'  name='interm' class="form-control"/>
                            </div>
                        </div>
                    </div>
 </div>
                <div class="form-group RadioGroup">
                    <label class="mws-form-label">Did any sudden changes in end tidal Co2(ETCO2)blood pressure (MAP) and oxygen saturation (SPO2)occur simultaneously in the case , consistent with pulmonary embolism?</label>
                    <input type='radio'  name='sudden' value="No"/><label>No</label>
                    <input type='radio'  name='sudden' class="ShowHide" data-box="#DownArrow" value="Yes"/><label>Yes</label>
                </div>
                    <div class="hide-box" id="DownArrow">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group form-inline">
                                    <input type='radio'  name='etco' value="mm Hg &DownArrow; in ETCO2"/><input type='text'  name='etco_val' class="form-control"/>
                                    <label>mm Hg &DownArrow; in ETCO2</label>
                                    <input style="margin-top: 5px; margin-left: 13px" type='text'  name='etco_min' class="form-control"/><label>minute</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group form-inline">
                                    <input type='radio'  name='map' value="mm Hg &DownArrow; in MAP"/><input type='text'  name='map_val' class="form-control"/>
                                    <label>mm Hg &DownArrow; in MAP</label>
                                    <input style="margin-top: 5px; margin-left: 13px" type='text'  name='map_min' class="form-control"/><label>minute</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group form-inline">
                                    <input type='radio'  name='spo' value="mm Hg &DownArrow; in SPO2"/><input type='text'  name='spo_val' class="form-control"/>
                                    <label>mm Hg &DownArrow; in SPO2</label>
                                    <input style="margin-top: 5px; margin-left: 13px" type='text'  name='spo_min' class="form-control"/><label>minute</label>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="form-group RadioGroup">
                    <label class="mws-form-label">If patient had regional anesthesia with minimal or no sedation , did they experience any abrupt intraoperative neurologic change?</label>
                    <input type='radio'  name='changing' value="No"/><label>No</label>
                    <input type='radio'  name='changing' class="ShowHide" data-box="#describing" value="Yes"/><label>Yes</label>
                    <input type='radio'  name='changing' value="Unknown"/><label>Unknown</label>
                </div>
                <div class="form-group hide-box" id="describing">
                    <textarea class="form-control" cols="auto" rows="auto" name="describing"></textarea>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Doctor Signature</label>
                    <input type='text' placeholder='Doctor Signature' name='sign' class="form-control"/>
                </div>
                <input
                    type='hidden'  name='time'
                    value='<?php
                    echo date("Y-m-d H:i:s")
                    ?>'/> <br/>
                <div class="mws-button-row">
                    <input type="submit" value="Add Patient" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn ">
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
</div>
<script>
    $(".sum").change(function () {
        var sum = 0;
        $('.sum').each(function () {
            sum += Number($(this).val());
        });
        //alert(sum);
        $("#Total").val(sum);
    });
</script>


