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
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Mrn Number</label>
                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly">


                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">1 - general appearance</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Facial expression</label>
                            <input type='text' class="form-control" value="<?php echo $value->facial; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Speech clear</label>
                            <input type='text' class="form-control" value="<?php echo $value->speech; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">2 - Skin</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Color</label>
                            <input type='text' class="form-control" value="<?php echo $value->color; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Hygiene</label>
                            <input type='text' class="form-control" value="<?php echo $value->hygiene; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Moisture</label>
                            <input type='text' class="form-control" value="<?php echo $value->moisture; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Lesion</label>
                            <input type='text' class="form-control" value="<?php echo $value->lesions; ?>" readonly="readonly"/>

                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Breakdown</label>
                            <input type='text' class="form-control" value="<?php echo $value->breakdowen; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">3 - Neuro</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Oriented</label>
                            <input type='text' class="form-control" value="<?php echo $value->orinted; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Pupits</label>
                            <input type='text' class="form-control" value="<?php echo $value->pupits; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Hand grips</label>
                            <input type='text' class="form-control" value="<?php echo $value->hand; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Feet flexion</label>
                            <input type='text' class="form-control" value="<?php echo $value->feet; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">4 - C.V</label>
                        </div>

                        <div class="mws-form-inline">
                            <div class="form-group">
                                <label class="mws-form-label">Pluses</label>

                                <div class="mws-form-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type='text' class="form-control" value="<?php echo $value->pulses_rate; ?>" readonly="readonly"/>

                                        </div>
                                        <div class="col-sm-3">
                                            <input type='text' class="form-control" value="<?php echo $value->pulses_rhythm; ?>" readonly="readonly"/>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Capielary refiel JVD</label>
                            <input type='text' class="form-control" value="<?php echo $value->jvd; ?>" readonly="readonly"/>

                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Edema</label>
                            <input type='text' class="form-control" value="<?php echo $value->edema; ?>" readonly="readonly"/>

                        </div>

                        <div class="mws-form-inline">
                            <div class="form-group">
                                <label class="mws-form-label">5 - Resp</label>

                                <div class="mws-form-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type='text' class="form-control" value="<?php echo $value->resp_rate; ?>" readonly="readonly"/>

                                        </div>
                                        <div class="col-sm-3">
                                            <input type='text' class="form-control" value="<?php echo $value->resp_rhythm; ?>" readonly="readonly"/>

                                        </div>
                                        <div class="col-sm-3">
                                            <input type='text' class="form-control" value="<?php echo $value->resp_depth; ?>" readonly="readonly"/>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Chest expansion</label>
                                <input type='text' class="form-control" value="<?php echo $value->chest; ?>" readonly="readonly"/>

                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Breath sounds</label>
                                <input type='text' class="form-control" value="<?php echo $value->breath; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">6 - G I T</label>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Abdomenal shape</label>
                                <input type='text' class="form-control" value="<?php echo $value->shap ?>" readonly="readonly"/>

                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Bowel sounds</label>
                                <input type='text' class="form-control" value="<?php echo $value->sound; ?>" readonly="readonly"/>

                            </div>

                            <div class="form-group">
                                <label class="mws-form-label">tenderness</label>
                                <input type='text' class="form-control" value="<?php echo $value->tenderness; ?>" readonly="readonly"/>
                                <input type='text' class="form-control" value="<?php echo $value->note; ?>" readonly="readonly"/>

                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">7- G.U</label>
                            </div>

                            <div class="mws-form-inline">
                                <div class="form-group">
                                    <label class="mws-form-label">voiding</label>

                                    <div class="mws-form-item">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type='text' class="form-control" value="<?php echo $value->void_patten; ?>" readonly="readonly"/>

                                            </div>
                                            <div class="col-sm-2">
                                                <input type='text' class="form-control" value="<?php echo $value->void_amount; ?>" readonly="readonly"/>

                                            </div>
                                            <div class="col-sm-2">
                                                <input type='text' class="form-control" value="<?php echo $value->void_color; ?>" readonly="readonly"/>

                                            </div>
                                            <div class="col-sm-2">
                                                <input type='text' class="form-control" value="<?php echo $value->void_clarith; ?>" readonly="readonly"/>

                                            </div>
                                            <div class="col-sm-2">
                                                <input type='text' class="form-control" value="<?php echo $value->void_freq; ?>" readonly="readonly"/>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Facial expression</label>
                                <input type='text' class="form-control" value="<?php echo $value->facial; ?>" readonly="readonly"/>

                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Pain on Voiding</label>
                                <input type='text' class="form-control" value="<?php echo $value->pain; ?>" readonly="readonly"/>

                                <label> Bladder tenderness / distention</label>

                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">8- Psy / soc</label>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Family</label>
                                <input type='text' class="form-control" value="<?php echo $value->family; ?>" readonly="readonly"/>

                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Support system</label>
                                <input type='text' class="form-control" value="<?php echo $value->support; ?>" readonly="readonly"/>

                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Care giver with discharge</label>
                                <input type='text' class="form-control" value="<?php echo $value->care; ?>" readonly="readonly"/>

                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">9-Rest / sleep</label>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Usual pattern</label>
                                <input type='text' class="form-control" value="<?php echo $value->usual; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Changes since hospitalized</label>
                                <input type='text' class="form-control" value="<?php echo $value->hospitalized; ?>" readonly="readonly"/>

                            </div>

                            <div class="form-group">
                                <label class="mws-form-label">Sleeping aids used</label>
                                <input type='text' class="form-control" value="<?php echo $value->sleeping; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Other</label>

                                <textarea name=other rows="auto" cols="auto" class="form-control" readonly="readonly"><?php echo $value->other ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Nurse Sign</label>
                                <input type='text' class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly"/>

                            </div>

                            <div class="form-group">
                                <label class="mws-form-label">Time && Date</label>
                                <input type='text' class="form-control" value="<?php echo $value->time; ?>" readonly="readonly"/>

                            </div>


                        </div >
                    </form>
                </div>
            </div>
        </div>
    </div>