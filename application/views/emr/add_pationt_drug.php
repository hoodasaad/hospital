<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient Drug Char</div>
                <div class="block-content">

                    <?php echo form_open('emr_control/add_user') ?>
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
                                <label>WT</label>
                                <div class="input-group">
                                    <input type='text' placeholder='Patient Weight' name='wt' class="form-control"/>
                                    <div class="input-group-addon">K.G</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="mws-form-label">BSA</label>
                                <input type='text' placeholder='BSA' name='bsa' class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                    <div class="form-group">
                        <label class="mws-form-label">Diagnosis</label>
                        <input type='text' placeholder='Diagnosis' name='dia' class="form-control"/>
                    </div>
                            </div>
                        <div class="col-sm-6">
                    <div class="form-group">
                        <label class="mws-form-label">Allergies</label>
                        <input type='text' placeholder='Allergies' name='alle' class="form-control"/>
                    </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="mws-form-label"> Drug</label>
                        <input type='text' placeholder='Drug' name='drug' class="form-control"/>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">
                            <label class="mws-form-label">Drug Information</label>

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input class="form-control" type='text' placeholder='Dose' name='dose'/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type='text' placeholder='Frequency' name='freq'/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type='text' placeholder='Duration' name='dur'/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type='text' placeholder='Route' name='route'/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                    <div class="form-group">
                        <label class="mws-form-label">Instruction</label>
                        <input type='text' placeholder='Instruction' name='inst' class="form-control"/>
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
                        type='hidden' name='date'
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




