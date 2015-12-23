<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Physical Assessment</div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/dr_control/add_physical"
                          method="post">
                        <div id="MRN-INFO"></div>                 
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Mrn Number</label>
                            <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Personal History</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Occupation</label>
                            <input type='text' placeholder='Occupation' name='occupation' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Marital Status</label>
                            <input type='radio' name='marital' value='Single'/><label> Single </label>
                            <input type='radio' name='marital' value='Married'/><label> Married </label>
                            <input type='radio' name='marital' value='Divorced'/><label> Divorced </label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Children</label>
                            <input type='radio' name='children' value='Yes'/><label> Yes </label>
                            <input type='radio' name='children' value='No'/><label> No </label>
                            <input type='text' name='no_children' placeholder="number of Children"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Special Habits</label>
                            <input type='checkbox' name='habits[]' value='Smoking'/><label> Smoking </label>
                            <input type='checkbox' name='habits[]' value='Alcohol'/><label> Alcohol </label>
                            <input type='checkbox' name='habits[]' value='Coffe'/><label> Coffe </label>
                            <input type='text' name='other' placeholder="Other"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Allergy</label>
                            <input type='radio' name='allergy' value='Yes'/><label> Yes </label>
                            <input type='radio' name='allergy' value='No'/><label> No </label>
                            <input type='text' name='comment' placeholder="Comment"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Adverse drug reaction</label>
                            <input type='radio' name='reaction' value='Yes'/><label> Yes </label>
                            <input type='radio' name='reaction' value='No'/><label> No </label>
                            <input type='text' name='reaction_comment' placeholder="Comment"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Present History</label>
                            <input type='text' placeholder='Present History' name='present' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Hospital admission & Surgery</label>
                            <input type='text' placeholder='Present History' name='surgery' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Family History</label>
                            <input type='text' placeholder='Family History' name='family' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Psychosocial History</label>
                            <input type='text' placeholder='Psychosocial History' name='psychosocial' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Present medications (before admission)</label>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type='text' class="form-control" placeholder='Drug' name='number_1[]'/>
                                </div>
                                <div class="col-sm-4">
                                    <input type='text' class="form-control" placeholder='Dose/Frequency' name='dose_1[]'/>
                                </div>
                                <div class="col-sm-4">
                                    <input type='text' class="form-control" placeholder='Duration' name='duration[]'/>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">WT</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='WT' name='wt' class="form-control"/>
                                        <div class="input-group-addon">K.G</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">HT</label>
                                    <div class="input-group">
                                        <input type='text' placeholder='hT' name='ht' class="form-control"/>
                                        <div class="input-group-addon">C.m</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="form-group">
                    <label> Vital Signs</label>
                    <div class="row">
                        <div class="col-sm-3">
                            <input type='text' class="form-control" placeholder='Temperature' name='temp'/>
                        </div>
                        <div class="col-sm-3">
                            <input type='text' class="form-control" placeholder='Bp' name='bp'/>
                        </div>
                        <div class="col-sm-3">
                            <input type='text' class="form-control" placeholder='Pluse' name='pluse'/>
                        </div>
                        <div class="col-sm-3">
                            <input type='text' class="form-control" placeholder='R.R' name='rr'/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">General Appearance</label>
                    <input type='text' placeholder='General Appearance' name='genera' class="form-control"/>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">System Examination</label>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Head & Neck</label>
                    <input type='radio' name='head' value='Normal'/><label> Normal </label>
                    <input type='radio' name='head' value='Abnormal'/><label> Abnormal </label>
                    <input type='text' name='head_comment' placeholder="Mention"/>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Chest</label>
                    <input type='radio' name='chest' value='Normal'/><label> Normal </label>
                    <input type='radio' name='chest' value='Abnormal'/><label> Abnormal </label>
                    <input type='text' name='chest_comment' placeholder="Mention"/>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Heart</label>
                    <input type='radio' name='heart' value='Normal'/><label> Normal </label>
                    <input type='radio' name='heart' value='Abnormal'/><label> Abnormal </label>
                    <input type='text' name='heart_comment' placeholder="Mention"/>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Abdomen</label>
                    <input type='radio' name='abdomen' value='Normal'/><label> Normal </label>
                    <input type='radio' name='abdomen' value='Abnormal'/><label> Abnormal </label>
                    <input type='text' name='abdomen_comment' placeholder="Mention"/>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Neurological</label>
                    <input type='radio' name='neurological' value='Normal'/><label> Normal </label>
                    <input type='radio' name='neurological' value='Abnormal'/><label> Abnormal </label>
                    <input type='text' name='neurological_comment' placeholder="Mention"/>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Findings</label>
                    <input type='radio' name='findings' value='Normal'/><label> Normal </label>
                    <input type='radio' name='findings' value='Abnormal'/><label> Abnormal </label>
                    <input type='text' name='findings_comment' placeholder="Mention"/>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Musculoskeletal</label>
                    <input type='radio' name='muscu' value='Normal'/><label> Normal </label>
                    <input type='radio' name='muscu' value='Abnormal'/><label> Abnormal </label>
                    <input type='text' name='muscu_comment' placeholder="Mention"/>
                </div>

                <div class="form-group">
                    <label class="mws-form-label">Psychological</label>
                    <input type='radio' name='psy' value='Normal'/><label> Normal </label>
                    <input type='radio' name='psy' value='Abnormal'/><label> Abnormal </label>
                    <input type='text' name='psy_comment' placeholder="Mention"/>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Status</label>
                    <input type='radio' name='status' value='Normal'/><label> Normal </label>
                    <input type='radio' name='status' value='Abnormal'/><label> Abnormal </label>
                    <input type='text' name='status_comment' placeholder="Mention"/>
                </div>
                <div class="form-group">
                    <div class="row">

                        <div class="col-sm-6">
                            <label class="mws-form-label">Provisional Diagnosis </label>
                            <input type='text' class="form-control" placeholder='Provisional Diagnosis' name='diagnosis'/>
                        </div>
                        <div class="col-sm-6">
                            <label class="mws-form-label">ICD 10 </label>
                            <input type='text' class="form-control" placeholder='ICD 10' name='icd'/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Management Care Plane </label>
                    <textarea name='plane' rows="auto" cols="auto" class="form-control"> </textarea>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Associated Risk Factor</label>
                    <input type='text' placeholder='Associated Risk Factor' name='risk[]' class="form-control"/>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Doctor Signature</label>
                    <input type='text' placeholder='Doctor Signature' name='sign' class="form-control"/>
                </div>
                <div class="form-group">
                    <input type='hidden' placeholder='Time' name='time' value="<?php echo date('Y-m-d H:i:s'); ?>" />
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="Add Patient" class="btn btn-success btn-submit">
                    <input type="reset" value="Reset" class="btn">
                    <input type="hidden" class="ok" value="0">

                    <div class="error_message"></div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(".MRN").change(function() {
        var id = $(this).val();
        $.get('<?= base_url() ?>index.php/dr_control/C_CheckId/' + id, function(data) {

            if (data == 1) {
                $("#MRN").removeClass('has-error has-feedback');
                $("#MRN").addClass('has-success has-feedback');
                $(".error").hide();
                $(".c_done").show();
                $(".ok").val(1);
            } else {
                $(".c_done").hide();
                $("#MRN").removeClass('has-success has-feedback');
                $("#MRN").addClass('has-error has-feedback');
                $(".error").show();
                $(".ok").val(0);
            }
        });
    });
    $("form").submit(function() {
        var ok = $(".ok").val();
        if (ok == 0) {
            $(".error_message").show().text("Please Check Error");
            return false;
        }
    });
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            orientation: "top left",
            autoclose: true
        });
    });
</script>




