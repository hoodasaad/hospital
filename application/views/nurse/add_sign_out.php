
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Safety Check list (Before Patient Leaves Operating room </div>
                <div class="block-content">

                    <?php echo form_open('nurse_control/add_sign_out') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Pationt_Mrn</label>
                        <input type='text' placeholder='Pationt_Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error"
                              aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Sign Out</label>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">Nurse Verbally confirms the team :</label>
                        <div>
                            <input type='checkbox' name='verbally[]'  value="The Name of the procedure Recorded"/><label>The Name of the procedure Recorded</label><br/>
                            <input type='checkbox' name='verbally[]'  value="That Instrument , Sponge And needle Counts are correct(Or not applicable)"/><label>That Instrument , Sponge And needle Counts are correct(Or not applicable)</label><br/>
                            <input type='checkbox' name='verbally[]'  value="How the specimen is labelled(including patient name)"/><label>How the specimen is labelled(including patient name)</label><br/>
                            <input type='checkbox' name='verbally[]'  value="Whether there are any equipment problems to addressed"/><label>Whether there are any equipment problems to addressed</label><br/>
                            <input type='checkbox' name='verbally[]'  value="Surgeon , anaesthesia professional and nurse review the key concerns for recovery and management of this patient"/><label>Surgeon , anaesthesia professional and nurse review the key concerns for recovery and management of this patient</label><br/>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Nurse Signature</label>
                        <input type='text' placeholder='Nurse Signature' name='sign' class="form-control"/>
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




