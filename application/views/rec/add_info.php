
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Release of medical information(2) </div>
                <div class="block-content">

                    <?php echo form_open('Reception/add_info') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">Consent for release of medical records for</label>
                        <input type="text" class="form-control" placeholder="Consent for release of medical records for"
                               name="medical" />
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Date</label>

                        <input type="text" class="form-control" placeholder="Date"
                               name="date">
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Requesting records from :-</label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Name of Practice :</label>

                        <input type="text" class="form-control" placeholder="Name of Practice "
                               name="practice">
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Name of physician</label>

                        <input type="text" class="form-control" placeholder="Name of physician"
                               name="physician">
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Fax number</label>

                        <input type="text" class="form-control" placeholder="Fax number"
                               name="fax">
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Address</label>

                        <input type="text" class="form-control" placeholder="Address"
                               name="address">
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">Types of records we are requesting </label><br/>
                        <input type='checkbox'  name='requesting[]' value="Any and all types of records you have for this patient"/><label>Any and all types of records you have for this patient</label>
                        <input type='checkbox'  name='requesting[]'  value="Doctor Visit notes"/><label>Doctor Visit notes</label>
                        <input type='checkbox'  name='requesting[]'  value="Emergency Room notes"/><label>Emergency Room notes</label><br/>
                        <input type='checkbox'  name='requesting[]'  value="Urgent care notes"/><label>Urgent care notes</label>
                        <input type='checkbox'  name='requesting[]'  value="History and physical"/><label>History and physical</label>
                        <input type='checkbox'  name='requesting[]'  value="Hospital Progress Notes"/><label>Hospital Progress Notes</label><br/>
                        <input type='checkbox'  name='requesting[]'  value="Operation or procedure notes"/><label>Operation or procedure notes</label>
                        <input type='checkbox'  name='requesting[]'  value="Clinic notes"/><label>Clinic notes</label>
                        <input type='checkbox'  name='requesting[]'  value="Pathology reports"/><label>Pathology reports</label><br/>
                        <input type='checkbox'  name='requesting[]'  value="Doctor Orders"/><label>Doctor Orders</label>
                        <input type='checkbox'  name='requesting[]'  value="Nurse notes"/><label>Nurse notes</label>
                        <input type='checkbox'  name='requesting[]'  value="Discharge Summary"/><label>Discharge Summary</label><br/>
                        <input type='checkbox'  name='requesting[]' value="Lab Report"/><label>Lab Report</label>
                        <input type='checkbox'  name='requesting[]'  value="Radiology Report"/><label>Radiology Report</label>
                        <input type='checkbox'  name='requesting[]'  value="Consultations"/><label>Consultations</label>
                        <input type='checkbox'  name='requesting[]' value="Other"/><label>Other</label><br/>
                        <input type='text'  name='other' class="form-control"  placeholder="Other"/>

                    </div>  

                    <div class="form-group">
                        <label class="mws-form-label">Records within the following dates :-</label>

                        <input type='radio'  name='patient'  value="All records for this patient"/><label>All records for this patient</label>
                        <input type='radio'  name='patient'  value="Records dated between"/><label>Records dated between</label>
                        <input type="text" name="first" class="form-control" /><label>and</label>
                        <input type="text" name="second" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Please send records to :-</label>
                    </div>
                    
                    <div class="form-group">
                        <label class="mws-form-label">Attention:</label>
                        <input type='text' placeholder='Attention' name='attention' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">At fax number :</label>
                        <input type='text' placeholder='At fax number' name='fax_number' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Or mail to :</label>
                        <input type='text' placeholder='Or mail to :' name='mail' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">For any questions please call (phone number)</label>
                        <input type='text' placeholder='Phone Number' name='phone_number' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">and Ask for</label>
                        <input type='text' placeholder='Ask for' name='ask' class="form-control"/>
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





