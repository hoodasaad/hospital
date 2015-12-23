
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient & Relatives Education</div>
                <div class="block-content">

                    <?php echo form_open('emr_control/add_discharge') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="mws-form-label"> Mane Complaints on admission</label>
                                <input type='text' placeholder="Mane Complaints on admission" name='mane' class="form-control"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="mws-form-label">Primary diagnosis</label>
                                <input type='text' placeholder='Primary diagnosis' name='primary' class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">History , significant data</label>
                        <div class="mws-form-item">
                            <textarea name='history' rows="auto" cols="auto" class="form-control"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Physical Examination significant finding</label>

                        <div class="mws-form-item">
                            <textarea name='physical' rows="auto" cols="auto" class="form-control"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Lab findings</label>
                        <input type='text' placeholder="Lab findings" name='lab' class="form-control"/>
                    </div>
                    <div class="mws-form-inline">
                        <div>
                            <label class="mws-form-label">Final diagnosis(es)</label>
                        </div>
                        <div class="form-group">

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="mws-form-label">1-</label>
                                        <input type="text" class="form-control" placeholder="Diagnosis"
                                               name="dia_1" />
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="mws-form-label">ICD-10</label>

                                        <input type="text" class="form-control" placeholder="ICD-10"
                                               name="icd_1" />
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="mws-form-label">2-</label>

                                        <input type="text" class="form-control" placeholder="Diagnosis"
                                               name="dia_2" />
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="mws-form-label">ICD-10</label>

                                        <input type="text" class="form-control" placeholder="ICD-10"
                                               name="icd_2" />
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="mws-form-label">3-</label>

                                        <input type="text" class="form-control" placeholder="Diagnosis"
                                               name="dia_3" />
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="mws-form-label">ICD-10</label>

                                        <input type="text" class="form-control" placeholder="ICD-10"
                                               name="icd_3" />
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Treatment given</label>

                        <div class="mws-form-item">
                            <textarea name='given' rows="auto" cols="auto" class="form-control"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Complication</label>

                        <div class="mws-form-item">
                            <textarea name='complication' rows="auto" cols="auto" class="form-control"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Discharge Treatment & medication</label>

                        <div class="mws-form-item">
                            <textarea name='treatment' rows="auto" cols="auto" class="form-control"> </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="mws-form-label"> Diet Recommendation</label>
                                <input type='text' placeholder="Diet Recommendation" name='recom' class="form-control"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="mws-form-label">Time to follow up</label>
                                <input type='text' placeholder="Time to follow up" name='follow' class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Type of discharge </label>
                        <input type='radio' name='type' value='Cure'/><label> Cure </label>
                        <input type='radio' name='type' value='Improvement'/><label> Improvement </label>
                        <input type='radio' name='type' value='Again medical advice'/><label> Again medical advice </label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Transfer to</label>
                        <input type='text' placeholder="Transfer to" name='transfer' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Cause of transfer </label>

                        <div class="mws-form-item">
                            <textarea name='cause' rows="auto" cols="auto" class="form-control"> </textarea>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label class="mws-form-label">Condition on transfer</label>
                        <input type='text' placeholder="Condition on transfer" name='condition' class="form-control"/>
                    </div>
                        </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label class="mws-form-label">Accompanying provider</label>
                        <input type='text' placeholder="Accompanying provider" name='provider' class="form-control"/>
                    </div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="mws-form-label">Transportation means</label>
                                <input type='text' placeholder="Transportation means" name='transport' class="form-control"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="mws-form-label">Consultant</label>
                                <input type='text' placeholder="Consultant" name='consultant' class="form-control"/>
                            </div>
                        </div>
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




