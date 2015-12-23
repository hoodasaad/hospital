
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Fluid Chart </div>
                <div class="block-content">

                    <?php echo form_open('nurse_control/add_fluid/'.$id) ?>
                    <div id="MRN-INFO"></div>                 

                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                 
                    <div class="mws-form-inline">
                        <div class="form-group">
                            <label class="mws-form-label">Time</label>

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Start"
                                               name="start" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="End"
                                               name="end">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Nurse Signature</label>
                        <input type='text' placeholder='nurse Signature' name='sign' class="form-control"/>
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




