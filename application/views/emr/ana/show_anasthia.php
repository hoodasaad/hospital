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
                                    <label class="mws-form-label">Patient Information</label>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Hight</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?php echo $value->hight; ?>" readonly="readonly"/>

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
                                                    <input type="text" class="form-control" value="<?php echo $value->wight_lbs; ?>" readonly="readonly"/>
                                                    <div class="input-group-addon">
                                                        lbs
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?php echo $value->wight; ?>" readonly="readonly"/>
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
                                    <input type="text" class="form-control" value="<?php echo $value->obese; ?>" readonly="readonly"/>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">ASA physical status </label>
                                    <input type="text" class="form-control" value="<?php echo $value->status; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Patient Medical History and Underlying Disease Status</label>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Diabetes</label>
                                    <input type="text" class="form-control" value="<?php echo $value->diabetes; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Insulin Dependent?</label>
                                    <input type="text" class="form-control" value="<?php echo $value->insulin; ?>" readonly="readonly"/>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Smoking </label>
                                    <input type="text" class="form-control" value="<?php echo $value->smoking; ?>" readonly="readonly"/>

                                </div>
                                <div class="form-group">
                                    <div class="mws-form-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="mws-form-label">Pack Years</label>
                                                <input type="text" class="form-control" value="<?php echo $value->pack; ?>" readonly="readonly"/>

                                            </div>
                                            <div class="col-sm-4">
                                                <label class="mws-form-label">Last Smoked</label>
                                                <input type="text" class="form-control" value="<?php echo $value->last; ?>" readonly="readonly"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Hypertension </label>
                                    <input type="text" class="form-control" value="<?php echo $value->hyper; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <div class="mws-form-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="mws-form-label">Treatment </label>
                                                <input type="text" class="form-control" value="<?php echo $value->treat; ?>" readonly="readonly"/>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="mws-form-label">Control of BP</label>
                                                <input type="text" class="form-control" value="<?php echo $value->bp; ?>" readonly="readonly"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Coronary </label>
                                    <input type="text" class="form-control" value="<?php echo $value->coronary; ?>" readonly="readonly"/>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Revascularized ? </label>
                                    <input type="text" class="form-control" value="<?php echo $value->reva; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> previous MI </label>
                                    <input type="text" class="form-control" value="<?php echo $value->mi; ?>" readonly="readonly"/>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Date (most recent)</label>
                                    <input type="text" class="form-control" value="<?php echo $value->date; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Dysautonomia </label>
                                    <input type="text" class="form-control" value="<?php echo $value->dysa; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Orthostatic hypotension </label>
                                    <input type="text" class="form-control" value="<?php echo $value->ortho; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Peripheral vascular disease </label>
                                    <input type="text" class="form-control" value="<?php echo $value->vascular; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> History of carotid endarterectomy </label>
                                    <input type="text" class="form-control" value="<?php echo $value->carotid; ?>" readonly="readonly"/>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Previous CVA/stroke </label>
                                    <input type="text" class="form-control" value="<?php echo $value->stroke; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> TIA </label>
                                    <input type="text" class="form-control" value="<?php echo $value->tia; ?>" readonly="readonly"/>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Hyperlipidemia </label>
                                    <input type="text" class="form-control" value="<?php echo $value->hyperlipidemia; ?>" readonly="readonly"/>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Valvular heart disease </label>
                                    <input type="text" class="form-control" value="<?php echo $value->valvular; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Atrial fibrillation/flutter </label>
                                    <input type="text" class="form-control" value="<?php echo $value->atrial; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Congestive heart failure </label>
                                    <input type="text" class="form-control" value="<?php echo $value->heart; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Patent foramen oval </label>
                                    <input type="text" class="form-control" value="<?php echo $value->oval; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Other pre-existing neurologic disease </label>
                                    <input type="text" class="form-control" value="<?php echo $value->other; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Preexitsting spinal disease</label>
                                    <input type="text" class="form-control" value="<?php echo $value->spinal; ?>" readonly="readonly"/>
                                    <input type="text" class="form-control" value="<?php echo $value->other_spinal; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Documented cognitive deficits</label>
                                    <input type="text" class="form-control" value="<?php echo $value->cognitive; ?>" readonly="readonly"/>
                                    <input type="text" class="form-control" value="<?php echo $value->other_cognitive; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Documented motor deficits</label>
                                    <input type="text" class="form-control" value="<?php echo $value->motor; ?>" readonly="readonly"/>
                                    <input type="text" class="form-control" value="<?php echo $value->other_motor; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Prior traumatic brain injury</label>
                                    <input type="text" class="form-control" value="<?php echo $value->injury; ?>" readonly="readonly"/>
                                    <input type="text" class="form-control" value="<?php echo $value->other_injury; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">parkinson's Disease</label>
                                    <input type="text" class="form-control" value="<?php echo $value->park; ?>" readonly="readonly"/>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Other neurologic disease</label>
                                    <input type="text" class="form-control" value="<?php echo $value->neurologic; ?>" readonly="readonly"/>
                                    <input type="text" class="form-control" value="<?php echo $value->other_neurologic; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Spacify any other significant medical history</label>
                                    <textarea name="spacify" rows="auto" cols="auto" class="form-control" readonly="readonly"> <?php echo $value->spacify; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Current medication</label>
                                    <input type="text" class="form-control" value="<?php echo $value->current; ?>" readonly="readonly"/>
                                    <textarea name="list" rows="auto" cols="auto" class="form-control" readonly="readonly"><?php echo $value->list; ?></textarea>

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Previous surgeries</label>
                                    <textarea name="surgeries" rows="auto" cols="auto" class="form-control" readonly="readonly"> <?php echo $value->surgeries; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Preoperative hematocrit</label>
                                    <textarea name="hematocrit" rows="auto" cols="auto" class="form-control" readonly="readonly"><?php echo $value->hematocrit; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">lab results</label>
                                    <textarea name="lab" rows="auto" cols="auto" class="form-control" readonly="readonly"> <?php echo $value->lab; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Patient's Fit</label>
                                    <input type="text" class="form-control" value="<?php echo $value->fit; ?>" readonly="readonly"/>
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