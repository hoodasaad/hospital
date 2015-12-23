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
                            <label class="mws-form-label">Personal History</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Occupation</label>
                            <input type='text' placeholder='Occupation' name='occupation' class="form-control" value="<?php echo $value->occupation; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Marital Status</label>
                            <input type='text' placeholder='Marital Status' name='marital' class="form-control" value="<?php echo $value->marital; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Children</label>
                            <input type='text' placeholder='Children' name='children' class="form-control" value="<?php echo $value->children . " " . "Number of children" . $value->no_children; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Special Habits</label>
                            <input type='text' placeholder='Special Habits' name='marital' class="form-control" value="<?php echo $value->habits; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Allergy</label>
                            <input type='text' placeholder='Allergy' name='allergy' class="form-control" value="<?php echo $value->allergy . " " . "Comment :-" . $value->comment; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Adverse drug reaction</label>
                            <input type='text' name='reaction' class="form-control" value="<?php echo $value->allergy . " " . "Comment :-" . $value->reaction_comment; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Present History</label>
                            <input type='text' placeholder='Present History' name='present' class="form-control" value="<?php echo $value->present; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Hospital admission & Surgery</label>
                            <input type='text' placeholder='Hospital admission & Surgery' name='surgery' class="form-control" value="<?php echo $value->surgery; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Family History</label>
                            <input type='text' placeholder='Family History' name='family' class="form-control" value="<?php echo $value->family; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Psychosocial History</label>
                            <input type='text' placeholder='Family History' name='psychosocial' class="form-control" value="<?php echo $value->psychosocial; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Present medications (before admission)</label>
                        </div>
                        <div class="form-group">

                            <div class="col-sm-4">
                                <input type='text' name='number_1' class="form-control" value="<?php echo $value->number_1; ?>" readonly="readonly"/>

                            </div>
                            <div class="col-sm-4">
                                <input type='text' name='dose_1' class="form-control" value="<?php echo $value->dose_1; ?>" readonly="readonly"/>

                            </div>
                            <div class="col-sm-4">
                                <input type='text' name='duration' class="form-control" value="<?php echo $value->duration; ?>" readonly="readonly"/>

                            </div>
                        </div>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">WT</label>
                    <div class="input-group">
                        <input type='text' name='wt' class="form-control" value="<?php echo $value->wt; ?>" readonly="readonly"/>

                        <div class="input-group-addon">K.G</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">HT</label>
                    <div class="input-group">
                        <input type='text' name='ht' class="form-control" value="<?php echo $value->ht; ?>" readonly="readonly"/>

                        <div class="input-group-addon">C.m</div>
                    </div>
                </div>
                <div class="form-group">
                    <label> Vital Signs</label>
                    <div class="col-sm-3">
                        <label> Temperature</label>
                        <input type='text' placeholder='Temperature' name='temp' class="form-control" value="<?php echo $value->temp; ?>" readonly="readonly"/>


                    </div>
                    <div class="col-sm-3"> 
                        <label> Bp</label>
                        <input type='text' name='bp' placeholder='Bp' class="form-control" value="<?php echo $value->bp; ?>" readonly="readonly"/>


                    </div>
                    <div class="col-sm-3">
                        <label>Pluse</label>

                        <input type='text' name='pluse'placeholder='Pluse' class="form-control" value="<?php echo $value->pluse; ?>" readonly="readonly"/>
                    </div>
                    <label>rr</label>

                    <div class="col-sm-3">
                        <input type='text' name='rr' class="form-control" placeholder='R.R' value="<?php echo $value->rr; ?>" readonly="readonly"/>

                    </div>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">General Appearance</label>
                    <input type='text' name='genera' class="form-control" value="<?php echo $value->genera; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">System Examination</label>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Head & Neck</label>
                    <input type='text'  name='head' class="form-control" value="<?php echo $value->head . " " . "Mention :-" . $value->head_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Chest</label>
                    <input type='text'  name='chest' class="form-control" value="<?php echo $value->head . " " . "Mention :-" . $value->chest_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Heart</label>
                    <input type='text'  name='heart' class="form-control" value="<?php echo $value->heart . " " . "Mention :-" . $value->heart_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Abdomen</label>
                    <input type='text'  name='abdomen' class="form-control" value="<?php echo $value->abdomen . " " . "Mention :-" . $value->abdomen_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Neurological</label>
                    <input type='text'  name='neurological' class="form-control" value="<?php echo $value->neurological . " " . "Mention :-" . $value->neurological_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Findings</label>
                    <input type='text'  name='findings' class="form-control" value="<?php echo $value->neurological . " " . "Mention :-" . $value->findings_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Musculoskeletal</label>
                    <input type='text'  name='muscu' class="form-control" value="<?php echo $value->muscu . " " . "Mention :-" . $value->muscu_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Adverse drug reaction</label>
                    <input type='text'  name='reaction' class="form-control" value="<?php echo $value->reaction . " " . "Mention :-" . $value->reaction_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Psychological</label>
                    <input type='text'  name='psy' class="form-control" value="<?php echo $value->psy . " " . "Mention :-" . $value->psy_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Status</label>
                    <input type='text'  name='status' class="form-control" value="<?php echo $value->status . " " . "Mention :-" . $value->status_comment; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">

                    <div class="col-sm-2">
                        <label>Provisional Diagnosis </label>
                        <input type='text' name='diagnosis' class="form-control" value="<?php echo $value->diagnosis; ?>" readonly="readonly"/>
                    </div>
                    <div class="col-sm-2">
                        <label>ICD 10 </label>
                    </div>
                    <div class="col-sm-2">
                        <input type='text' name='icd' class="form-control" value="<?php echo $value->icd; ?>" readonly="readonly"/>

                    </div>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Management Care Plane </label>
                    <textarea name='plane' rows="auto" cols="auto" class="form-control" readonly="readonly"> <?php echo $value->plane; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Doctor Signature</label>
                    <input type='text' name='sign' class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly"/>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Time</label>
                    <input type='text' name='time' class="form-control" value="<?php echo $value->time; ?>" readonly="readonly"/>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>