
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Physician's Progressive Notes</div>
                <div class="block-content">
                    <?php echo form_open('emr_control/add_prog') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Pt's Problem Complain</label>

                        <div class="mws-form-item">
                            <textarea name='complain' rows="auto" cols="auto" class="form-control"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Observations</label>
                        <input type='text' placeholder='Observations' name='obse' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Case Evaluation</label>
                        <input type='text' placeholder='Case Evaluation' name='eva' class="form-control"/>
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




