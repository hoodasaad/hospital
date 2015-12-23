
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Safety Check list (Before Skin Incision)</div>
                <div class="block-content">

                    <?php echo form_open('nurse_control/add_time_out') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Pationt_Mrn</label>
                        <input type='text' placeholder='Pationt_Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error"
                              aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Time Out</label>
                    </div>
                    <div class="form-group">
                        <input type='radio' name='confirm' value="Confirm All tean Members Have introduced themselves by name and role"/><label>Confirm All tean Members Have introduced themselves by name and role</label>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type='radio' name='surgeon'  value="Surgeon , anathesia Professtional and nurse verbally confirm"/><label>Confirm All tean Members Have introduced themselves by name and role</label>
                        </div>
                        <div>
                            <input type='checkbox' name='site[]'  value="Patient"/><label>Patient</label>
                            <input type='checkbox' name='site[]'  value="Site"/><label>Site</label>
                            <input type='checkbox' name='site[]'  value="Procedure"/><label>Procedure</label>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Anticipated Critical Events</label>
                        <input type='checkbox' name='event[]'  value="Surgeon reviews : what are the critical or unexpected steps, operative duration , anticipated blood loss"/><label>Surgeon reviews : what are the critical or unexpected steps, operative duration , anticipated blood loss?</label><br/>
                        <input type='checkbox' name='event[]' value="Anaesthesia Team reviews : Are There Any Patient specific Concerns"/><label>Anaesthesia Team reviews : Are There Any Patient specific Concerns</label><br/>
                        <input type='checkbox' name='event[]' value="Nursing Team Reviews : Has sterility (Including indicator results)been confirmed? Are there equipment issues or any concerns"/><label>Nursing Team Reviews : Has sterility (Including indicator results)been confirmed? Are there equipment issues or any concerns?</label><br/>

                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Has Antibiotic Prophylaxis been given within the last minutes?</label>
                        <input type='radio' name='anti'  value="Yes"/><label>Yes</label>
                        <input type='radio' name='anti' value="No"/><label>No</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Is Essential imaging displayed</label>
                        <input type='radio' name='imaging'  value="Yes"/><label>Yes</label>
                        <input type='radio' name='imaging'  value="No"/><label>No</label>
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




