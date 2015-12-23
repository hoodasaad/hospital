<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient & Relatives
                    Education
                </div>
                <div class="block-content">

                    <?php echo form_open('emr_control/add_rel') ?>
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
                                <label class="mws-form-label">Subject</label>
                                <input type='text' placeholder='Subject' name='sub' class="form-control"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="mws-form-label">Educator</label>
                                <input type='text' placeholder='Educator' name='edu' class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="mws-form-label"> Response of pt's/Re</label>
                                <input type='text' placeholder="Response of pt's/Re" name='res' class="form-control"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                                <label class="mws-form-label">Doctor Signature</label>
                                <input type='text' placeholder='Doctor Signature' name='sign' class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <input
                        type='hidden' name='time'
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




