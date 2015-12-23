
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Vital Signs</div>
                <div class="block-content">

                    <?php echo form_open('nurse_control/add_virtal') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Temp</label>
                        <div class="input-group">

                            <input type='text' placeholder='Temp' name='temp' class="form-control"/> <div class="input-group-addon"> C</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Pulse</label>
                        <div class="input-group">
                            <input type='text' placeholder='Pulse' name='pulse' class="form-control"/> <div class="input-group-addon"> b/min</div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">B.P</label>
                    <div class="input-group">

                        <input type='text' placeholder='B.P' name='bp' class="form-control"/> <div class="input-group-addon"> mm/hg</div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="mws-form-label">R.R</label>
                <div class="input-group">
                    <input type='text' placeholder='R.R' name='rr' class="form-control"/> <div class="input-group-addon"> b/min</div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="mws-form-label">Notes </label>
            <textarea name='notes' rows="auto" cols="auto" class="form-control"> </textarea>
        </div>
        <div class="form-group">
            <label class="mws-form-label">Nurse Sign</label>
            <input type='text' placeholder='Nurse Sign' name='sign' class="form-control"/>
        </div>






        <input
            type='hidden'  name='time'
            value='<?php
            echo date("Y-m-d H:i:s");
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




