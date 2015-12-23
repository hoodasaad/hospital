
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add operative report </div>
                <div class="block-content">

                    <?php echo form_open('dr_control/add_operative') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">Date of Operation</label>
                        <input type='date' name='opertaion' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Preoperative Diagnosis</label>
                        <input type='text' placeholder='Preoperative Diagnosis' name='pre' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Surgeon</label>
                        <input type='text' placeholder='surgeon' name='surgeon' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Anesthesia</label>
                        <input type='radio'  name='anasth' value="General" id="General"/> <label for="General">General</label>
                        <input type='radio'  name='anasth' value="Local" id="Local"/> <label for="Local">Local</label>
                        <input type='radio'  name='anasth' value="Spinal" id="Spinal"/> <label for="Spinal">Spinal</label>
                        <input type='radio'  name='anasth' value="Other" id="Other"/> <label for="Other">Other</label>
                        <input type="text" name="other" placeholder="Other" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Anesthesiologist </label>
                        <input type='text' placeholder='Anesthesiologist' name='anesthesiologist' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Estimated Blood Loss </label>
                        <input type='text' placeholder='Estimated Blood Loss' name='blood_loss' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Blood Transfused :None</label>
                        <input type='text' placeholder='Blood Transfused' name='blood_trans' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Drains </label>
                        <input type='text' placeholder='Drains' name='drains' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Specimens </label>
                        <input type='text' placeholder='Specimens' name='specimens' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Indications </label>
                        <input type='text' placeholder='Indications' name='indications' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Description of Operation </label>
                        <textarea class="form-control" rows="auto" cols="auto" name="discription"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Start Time </label>
                        <input type='time' name='start_time' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Finish at </label>
                        <input type='time' name='end_time' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Nursing Team </label>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Sterile nurse </label>
                        <input type='text' placeholder='Sterile nurse' name='sterile_nurse' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Circulating nurse</label>
                        <input type='text' placeholder='Circulating nurse' name='circulating_nurse' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Account of</label>
                        <input type='checkbox' name='account[]'  value="Instrument" id="Instrument"/><label for="Instrument">Instrument</label>

                        <input type='radio' name='instrument'  value="True" id="True"/><label for="True">True</label>
                        <input type='radio' name='instrument' value="false" id="false"/><label for="false">false</label>

                        <input type='checkbox' name='account[]'  value="Sponge" id="Sponge"/><label for="Sponge">Sponge</label>
                        <input type='radio' name='Sponge'  value="True" id="True_sponge"/><label for="True_sponge">True</label>
                        <input type='radio' name='Sponge'  value="false" id="false_sponge"/><label for="false_sponge">false</label>

                        <input type='checkbox' name='account[]' value="needle" id="needle"/><label for="needle">needle</label>
                        <input type='radio' name='needle'  value="True" id="True_needle"/><label for="True_needle">True</label>
                        <input type='radio' name='needle'  value="false" id="false_needle"/><label for="false_needle">false</label>
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




