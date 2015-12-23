
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Diabetic Sheet</div>
                <div class="block-content">

                    <?php echo form_open('nurse_control/add_sheet') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Blood.sugar</label>
                        <input type='text' placeholder='Blood.sugar' name='blood' class="form-control"/>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">
                            <label class="mws-form-label">Urine</label>

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Sugar"
                                               name="sugar"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Acetone"
                                               name="acetone"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">
                            <label class="mws-form-label">Diabetic Medication</label>

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Oral"
                                               name="oral"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Insulin"
                                               name="insulin"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Dose"
                                               name="dose"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Site"
                                               name="site"/>
                                    </div>

                                </div>
                            </div>
                        </div>
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




