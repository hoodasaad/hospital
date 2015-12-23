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

                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="">
                                <div class="mws-form-inline">
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">Mrn</label>
                                        <div class="mws-form-item">
                                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly">                                        </div>
                                    </div>
                                    
                                <div class="form-group">
                                    <label class="mws-form-label"> Mane Complaints on admission</label>
                                    <input type='text' placeholder="Mane Complaints on admission" name='mane' class="form-control" value="<?php echo $value->mane; ?>" readonly="readonly" />
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Primary diagnosis</label>
                                    <input type='text' placeholder='Primary diagnosis' name='primary' class="form-control" value="<?php echo $value->primary; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">History , significant data</label>

                                    <div class="mws-form-item">
                                        <textarea name='history' rows="auto" cols="auto" class="form-control" readonly="readonly" > <?php echo $value->history; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Physical Examination significant finding</label>

                                    <div class="mws-form-item">
                                        <textarea name='physical' rows="auto" cols="auto" class="form-control" readonly="readonly" > <?php echo $value->physical; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Lab findings</label>
                                    <input type='text' placeholder="Lab findings" name='lab' class="form-control" value="<?php echo $value->lab; ?>" readonly="readonly" />
                                </div>
                                <div class="mws-form-inline">
                                    <div>
                                        <label class="mws-form-label">Final diagnosis(es)</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">1-</label>

                                        <div class="mws-form-item">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder="Diagnosis"
                                                           name="dia_1" value="<?php echo $value->dia_1; ?>" readonly="readonly" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="mws-form-label">ICD-10</label>

                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder="ICD-10"
                                                           name="icd_1" value="<?php echo $value->icd_1; ?>" readonly="readonly"/>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mws-form-inline">
                                    <div class="form-group">

                                        <div class="mws-form-item">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder="Diagnosis"
                                                           name="dia_2"  value="<?php echo $value->dia_2; ?>" readonly="readonly"/>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="mws-form-label">ICD-10</label>

                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder="ICD-10"
                                                           name="icd_2" value="<?php echo $value->icd_2; ?>" readonly="readonly"/>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mws-form-inline">
                                    <div class="form-group">

                                        <div class="mws-form-item">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder="Diagnosis"
                                                           name="dia_3" value="<?php echo $value->dia_3; ?>" readonly="readonly"/>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="mws-form-label">ICD-10</label>

                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder="ICD-10"
                                                           name="icd_3" value="<?php echo $value->icd_3; ?>" readonly="readonly" />
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Treatment given</label>

                                    <div class="mws-form-item">
                                        <textarea name='given' rows="auto" cols="auto" class="form-control" readonly="readonly"><?php echo $value->given; ?> </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Complication</label>

                                    <div class="mws-form-item">
                                        <textarea name='complication' rows="auto" cols="auto" class="form-control" readonly="readonly"> <?php echo $value->complication; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Discharge Treatment & medication</label>

                                    <div class="mws-form-item">
                                        <textarea name='treatment' rows="auto" cols="auto" class="form-control" readonly="readonly"> <?php echo $value->treatment; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Diet Recommendation</label>
                                    <input type='text' placeholder="Diet Recommendation" name='recom' class="form-control" value="<?php echo $value->recom; ?>" readonly="readonly" />
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Time to follow up</label>
                                    <input type='text' placeholder="Time to follow up" name='follow' class="form-control" value="<?php echo $value->follow; ?>" readonly="readonly" />
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Type of discharge </label>
                                    <input type='text' placeholder="Type of discharge" name='type' class="form-control" value="<?php echo $value->type; ?>" readonly="readonly" />

                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Transfer to</label>
                                    <input type='text' placeholder="Transfer to" name='transfer' class="form-control" value="<?php echo $value->transfer; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Cause of transfer </label>

                                    <div class="mws-form-item">
                                        <textarea name='cause' rows="auto" cols="auto" class="form-control" readonly="readonly"> <?php echo $value->cause; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Condition on transfer</label>
                                    <input type='text' placeholder="Condition on transfer" name='condition' class="form-control" value="<?php echo $value->condition; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Accompanying provider</label>
                                    <input type='text' placeholder="Accompanying provider" name='provider' class="form-control" value="<?php echo $value->provider; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Transportation means</label>
                                    <input type='text' placeholder="Transportation means" name='transport' class="form-control" value="<?php echo $value->transport; ?>" readonly="readonly"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Consultant</label>
                                    <input type='text' placeholder="Consultant" name='consultant' class="form-control" value="<?php echo $value->consultant; ?>" readonly="readonly"/>
                                </div>

                                <div class="form-group">
                                    <label class="mws-form-label">Date & Time</label>
                                    <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Doctor Signature</label>
                                    <input type="text" class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly">
                                </div>

                        </div >
                    </form>
                </div>
            </div>
        </div>
    </div>