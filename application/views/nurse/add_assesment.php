<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Nursing assessment</div>
                <div class="block-content">
                    <?php echo form_open('nurse_control/add_asses') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    
                    <div class="form-group">
                        <label class="mws-form-label">1 - general appearance</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Facial expression</label>
                        <input type='text' placeholder='Facial expression' name='facial' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Speech clear</label>
                        <input type='text' placeholder='Speech clear' name='speech' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">2 - Skin</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Color</label>
                        <input type='text' placeholder='Color' name='color' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Hygiene</label>
                        <input type='text' placeholder='Hygiene' name='hygiene' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Moisture</label>
                        <input type='text' placeholder='Moisture' name='moisture' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Lesion</label>
                        <input type='text' placeholder='Lesion' name='lesions' class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">Breakdown</label>
                        <input type='text' placeholder='Breakdowen' name='breakdowen' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">3 - Neuro</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Oriented</label>
                        <input type='radio'  name='orinted' value="yes"/> <label>Yes</label>
                        <input type='radio'  name='orinted' value="no"/> <label>No</label> 
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Pupits</label>
                        <input type='text' placeholder='Pupits' name='pupits' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Hand grips</label>
                        <input type='radio'  name='hand' value="yes"/> <label>Yes</label>
                        <input type='radio'  name='hand' value="no"/> <label>No</label> 
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Feet flexion</label>
                        <input type='text' placeholder='Feet flexion' name='feet' class="form-control"/>
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
                                        <input type="text" class="form-control" placeholder="Rate"
                                               name="pulses_rate"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Rhythm"
                                               name="pulses_rhythm"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Capielary refiel JVD</label>
                        <input type='text' placeholder='Capielary refiel JVD' name='jvd' class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">Edema</label>
                        <input type='text' placeholder='Edema' name='edema' class="form-control"/>
                    </div>

                    <div class="mws-form-inline">
                        <div class="form-group">
                            <label class="mws-form-label">5 - Resp</label>

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Rate"
                                               name="resp_rate"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Rhythm"
                                               name="resp_rhythm"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Depth"
                                               name="resp_depth"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Chest expansion</label>
                        <input type='text' placeholder='Chest expansion' name='chest' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Breath sounds</label>
                        <input type='text' placeholder='Breath sounds' name='breath' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">6 - G I T</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Abdomenal shape</label>
                        <input type='text' placeholder='Abdomenal shape' name='shap' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Bowel sounds</label>
                        <input type='text' placeholder='Bowel sounds' name='sound' class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">tenderness</label>
                        <ul>
                            <li><input type='radio'  name='tenderness' value="no"/> <label>No</label></li>
                            <li>      <input type='radio'  name='tenderness' value="yes"/> <label>Yes</label>
                                <input type='text' placeholder='' name='note' class="small"/> 
                            </li>
                        </ul>
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
                                        <input type="text" class="form-control" placeholder="Pattern"
                                               name="void_patten"/>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" placeholder="Amount"
                                               name="void_amount"/>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" placeholder="Color"
                                               name="void_color"/>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" placeholder="Clarity"
                                               name="void_clarith"/>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" placeholder="frequency"
                                               name="void_freq"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Facial expression</label>
                        <input type='text' placeholder='Facial expression' name='facial' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Pain on Voiding</label>
                        <input type='text' placeholder='Pain on Voiding' name='pain' class="form-control"/>
                        <label> Bladder tenderness / distention</label>

                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">8- Psy / soc</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Family</label>
                        <input type='text' placeholder='Family' name='family' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Support system</label>
                        <input type='text' placeholder='Support system' name='support' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Care giver with discharge</label>
                        <input type='text' placeholder='Care giver with discharge' name='care' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">9-Rest / sleep</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Usual pattern</label>
                        <input type='text' placeholder='Usual pattern' name='usual' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Changes since hospitalized</label>
                        <input type='text' placeholder='Changes since hospitalized' name='hospitalized' class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">Sleeping aids used</label>
                        <input type='text' placeholder='Sleeping aids used' name='sleeping' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Other</label>
                        <textarea name=other rows="auto" cols="auto" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Nurse Sign</label>
                        <input type='text' placeholder='Nurse Sign' name='sign' class="form-control"/>
                    </div>


                    <input
                        type='hidden'  name='time'
                        value='<?php
                        //echo $cash;
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




