
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Preanasthia Assessment </div>
                <div class="block-content">

                    <?php echo form_open('emr_control/add_ana') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Patient Information</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Hight</label>
                        <div class="input-group">
                            <input type='text' placeholder='Hight' name='hight' class="form-control"/>
                            <div class="input-group-addon">
                                Inches
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Wight</label>
                        <div class="mws-form-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type='text' placeholder='Wight' name='wight_lbs' class="form-control"/>
                                        <div class="input-group-addon">
                                            lbs
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type='text' placeholder='Wight' name='wight' class="form-control"/>
                                        <div class="input-group-addon">
                                            Kgs.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Was Patient obese ?</label>
                        <input type='radio'  name='obese' value="No"/><label>No</label>
                        <input type='radio'  name='obese' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='obese' value="unknown"/><label>unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">ASA physical status </label>
                        <input type='radio'  name='status' value="1"/><label>1</label>
                        <input type='radio'  name='status' value="2"/><label>2</label>
                        <input type='radio'  name='status' value="3"/><label>3</label>
                        <input type='radio'  name='status' value="4"/><label>4</label>
                        <input type='radio'  name='status' value="5"/><label>5</label>
                        <input type='radio'  name='status' value="unknown"/><label>unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Patient Medical History and Underlying Disease Status</label>
                    </div>
                    <div class="form-group RadioGroup">
                        <label class="mws-form-label">Diabetes</label>
                        <input type='radio'  name='diabetes' value="No"/><label>No</label>
                        <input type='radio'  name='diabetes' value="Unknown"/><label>Unknown</label>
                        <input type='radio' class="ShowHide" data-box="#Insulin" name='diabetes' value="Yes"/><label>Yes</label>
                    </div>
                    <div class="form-group hide-box" id="Insulin">
                        <label class="mws-form-label">Insulin Dependent?</label>
                        <input type='radio'  name='insulin' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='insulin' value="No"/><label>No</label>
                    </div>
                    <div class="form-group RadioGroup">
                        <label class="mws-form-label">Smoking </label>
                        <input type='radio'  name='smoking' value="No"/><label>No</label>
                        <input type='radio'  name='smoking' value="unknown"/><label>unknown</label>
                        <input type='radio' class="ShowHide" data-box="#Smoking"  name='smoking' value="Yes"/><label>Yes</label>
                    </div>
                    <div class="form-group hide-box" id="Smoking">
                        <div class="mws-form-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="mws-form-label">Pack Years</label>
                                    <input type='text'  name='pack' class="form-control" placeholder="Pack Years"/>
                                </div>
                                <div class="col-sm-4">
                                    <label class="mws-form-label">Last Smoked</label>
                                    <input type='text'  name='last' class="form-control" placeholder="Last Smoked"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group RadioGroup">
                        <label class="mws-form-label">Hypertension </label>
                        <input type='radio'  name='hyper' value="No"/><label>No</label>
                        <input type='radio'  name='hyper' value="unknown"/><label>unknown</label>
                        <input type='radio' class="ShowHide" data-box="#Treatment"  name='hyper' value="Yes"/><label>Yes</label>
                    </div>
                    <div class="form-group hide-box" id="Treatment">
                        <div class="mws-form-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="mws-form-label">Treatment </label>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <input type='radio'  name='treat' value="None"/><label>None</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type='radio'  name='treat' value="Medical Treatment"/><label>Medical Treatment</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-8">
                                    <label class="mws-form-label">Control of BP</label>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <input type='radio'  name='bp' value="Uncontrolled (no treatment or no response to treatment)"/><label>Uncontrolled (no treatment or no response to treatment)</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type='radio'  name='bp' value="Moderate Control (responded to treatment but target BP not attained)"/><label>Moderate Control (responded to treatment but target BP not attained)</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type='radio'  name='bp' value="Good Control (normal BP with treatment)"/><label>Good Control (normal BP with treatment)</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Coronary </label>
                        <input type='radio'  name='coronary' value="None"/><label>None</label>
                        <input type='radio'  name='coronary' class="ShowHide" data-box="#Revascularized" value="Mild"/><label>Mild</label>
                        <input type='radio'  name='coronary' class="ShowHide" data-box="#Revascularized" value="Sever"/><label>Sever</label>
                        <input type='radio'  name='coronary' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group hide-box" id="Revascularized">
                        <label class="mws-form-label">Revascularized ? </label>
                        <input type='radio'  name='reva' value="No"/><label>None</label>
                        <input type='radio'  name='reva' value="PTCA"/><label>Mild</label>
                        <input type='radio'  name='reva' value="CABG"/><label>Sever</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> previous MI </label>
                        <input type='radio'  name='mi' value="No"/><label>No</label>
                        <input type='radio'  name='mi' class="ShowHide" data-box="#date" value="Yes"/><label>Yes</label>
                        <input type='radio'  name='mi' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group hide-box" id="date">
                        <label class="mws-form-label">Date (most recent)</label>
                        <input type="text" placeholder="Date (most recent)" name="date" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Dysautonomia </label>
                        <input type='radio'  name='dysa' value="No"/><label>No</label>
                        <input type='radio'  name='dysa' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='dysa' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Orthostatic hypotension </label>
                        <input type='radio'  name='ortho' value="No"/><label>No</label>
                        <input type='radio'  name='ortho' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='ortho' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Peripheral vascular disease </label>
                        <input type='radio'  name='vascular' value="No"/><label>No</label>
                        <input type='radio'  name='vascular' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='vascular' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> History of carotid endarterectomy </label>
                        <input type='radio'  name='carotid' value="No"/><label>No</label>
                        <input type='radio'  name='carotid' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='carotid' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Previous CVA/stroke </label>
                        <input type='radio'  name='stroke' value="No"/><label>No</label>
                        <input type='radio'  name='stroke' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='stroke' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> TIA </label>
                        <input type='radio'  name='tia' value="No"/><label>No</label>
                        <input type='radio'  name='tia' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='tia' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Hyperlipidemia </label>
                        <input type='radio'  name='hyperlipidemia' value="No"/><label>No</label>
                        <input type='radio'  name='hyperlipidemia' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='hyperlipidemia' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Valvular heart disease </label>
                        <input type='radio'  name='valvular' value="No"/><label>No</label>
                        <input type='radio'  name='valvular' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='valvular' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Atrial fibrillation/flutter </label>
                        <input type='radio'  name='atrial' value="No"/><label>No</label>
                        <input type='radio'  name='atrial' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='atrial' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Congestive heart failure </label>
                        <input type='radio'  name='heart' value="No"/><label>No</label>
                        <input type='radio'  name='heart' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='heart' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Patent foramen oval </label>
                        <input type='radio'  name='oval' value="No"/><label>No</label>
                        <input type='radio'  name='oval' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='oval' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Other pre-existing neurologic disease </label>
                        <input type='radio'  name='other' value="No"/><label>No</label>
                        <input type='radio' class="ShowHide" data-box="#Preexitsting"  name='other' value="Yes"/><label>Yes</label>
                        <input type='radio'  name='other' value="Unknown"/><label>Unknown</label>
                    </div>
                    <div class="hide-box" id="Preexitsting">
                        <div class="form-group">
                            <label class="mws-form-label">Preexitsting spinal disease</label>
                            <input type='radio'  name='spinal' value="No"/><label>No</label>
                            <input type='radio'  name='spinal' value="Yes"/><label>Yes</label>
                            <input type='text'  name='other_spinal' placeholder="(Specify type $spine location)" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Documented cognitive deficits</label>
                            <input type='radio'  name='cognitive' value="No"/><label>No</label>
                            <input type='radio'  name='cognitive' value="Yes"/><label>Yes</label>
                            <input type='text'  name='other_cognitive' placeholder="(Specify type)" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Documented motor deficits</label>
                            <input type='radio'  name='motor' value="No"/><label>No</label>
                            <input type='radio'  name='motor' value="Yes"/><label>Yes</label>
                            <input type='text'  name='other_motor' placeholder="(Specify type)" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Prior traumatic brain injury</label>
                            <input type='radio'  name='injury' value="No"/><label>No</label>
                            <input type='radio'  name='injury' value="Yes"/><label>Yes</label>
                            <input type='text'  name='other_injury' placeholder="(Specify type)" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">parkinson's Disease</label>
                            <input type='radio'  name='park' value="No"/><label>No</label>
                            <input type='radio'  name='park' value="Yes"/><label>Yes</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Other neurologic disease</label>
                            <input type='radio'  name='neurologic' value="No"/><label>No</label>
                            <input type='radio'  name='neurologic' value="Yes"/><label>Yes</label>
                            <input type='text'  name='other_neurologic' placeholder="(Specify type)" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Spacify any other significant medical history</label>
                        <textarea name="spacify" rows="auto" cols="auto" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Current medication</label>
                        <input type='radio'  name='current' value="Beta blockers"/><label>Beta blockers</label>
                        <input type='radio'  name='current' value="Calcium channel blocker's"/><label>Calcium channel blocker's</label>
                        <input type='radio'  name='current' value="ACE inhibitors or angiitensin II receptor antagonists"/><label>ACE inhibitors or angiitensin II receptor antagonists</label>
                        <input type='radio'  name='current' value="Nitrate/nitroglycerin"/><label>Nitrate/nitroglycerin</label>
                        <input type='radio'  name='current' value="Medications for Parkinson's disease"/><label>Medications for Parkinson's disease</label>
                        <input type='radio'  name='current' value="Diuretics"/><label>Diuretics</label>
                        <input type='radio'  name='current' value="Other medication"/><label>Other medication</label>
                        <textarea name="list" rows="auto" cols="auto" class="form-control"></textarea>

                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Previous surgeries</label>
                        <textarea name="surgeries" rows="auto" cols="auto" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Preoperative hematocrit</label>
                        <textarea name="hematocrit" rows="auto" cols="auto" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">lab results</label>
                        <textarea name="lab" rows="auto" cols="auto" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Patient's Fit</label>
                        <input type='radio'  name='fit' value="fit"/><label>fit</label>
                        <input type='radio'  name='fit' value="Not Fit"/><label>Not Fit</label>
                        <input type='radio'  name='fit' value="Need ICU"/><label>Need ICU</label>
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




