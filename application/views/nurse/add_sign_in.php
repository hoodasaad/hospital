
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Safety Check list (Before Induction of anaesthesia)</div>
                <div class="block-content">

                    <?php echo form_open('nurse_control/add_sign_in') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Pationt_Mrn</label>
                        <input type='text' placeholder='Pationt_Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error"
                              aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Sign In</label>
                    </div>

                    <div class="form-group">
                        <div>
                            <input type='checkbox' name='patient[]'  value="Patient Has Confirmed"/><label>Patient Has Confirmed</label>
                        </div>
                        <div>
                            <input type='checkbox' name='site[]'  value="Identity"/><label>Identity</label>
                            <input type='checkbox' name='site[]'  value="Site"/><label>Site</label>
                            <input type='checkbox' name='site[]'  value="Procedure"/><label>Procedure</label>
                            <input type='checkbox' name='site[]'  value="Consent"/><label>Consent</label>

                        </div>
                    </div>
                    <div class="form-group">
                        <input type='checkbox' name='patient[]'  value="Site Marked Not Applicable"/><label>Site Marked Not Applicable</label><br/>
                        <input type='checkbox' name='patient[]'  value="Anaesthesia Safety Check Compeleted"/><label>Anaesthesia Safety Check Completed</label><br/>
                        <input type='checkbox' name='patient[]'  value="Pulse Oximeter on Patient and Functions"/><label>Pulse Oximeter on Patient and Functions</label><br/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Does Patient have a</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Known Allergy ?</label>
                        <input type='radio' name='all'  value="Yes"/><label>Yes</label>
                        <input type='radio' name='all' value="No"/><label>No</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Difficult Airway/Aspiration Risk?</label>
                        <input type='radio' name='risk'  value="Yes,And Equipment/assistance available"/><label>Yes,And Equipment/assistance available</label>
                        <input type='radio' name='risk'  value="No"/><label>No</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Risk of > 500Ml Blood Loss (7ML/Kg In Children)</label>
                        <input type='radio' name='blood'  value="Yes, And Adequate Intravenous Access And Fluids Planned"/><label>Yes, And Adequate Intravenous Access And Fluids Planned</label>
                        <input type='radio' name='blood' value="No"/><label>No</label>
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




