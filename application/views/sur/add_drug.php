
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient Drug Char</div>
                <div class="block-content">

                    <?php echo form_open('sur_control/add_need') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Pationt_Mrn</label>
                        <input type='text' placeholder='Pationt_Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error"
                              aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Drug Needed</label>
                        <input type='radio' name='need' value='As Needed Drug'/><label> As Needed Drug</label>
                        <input type='radio' name='need' value='Drug Once Only'/><label> Drug Once Only</label>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label"> Drug</label>
                        <input type='text' placeholder='Drug' name='drug' class="form-control"/> 
                    </div>
                        <label class="mws-form-label"> Drug Information</label>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="mws-form-label"> Drug Dose</label>
                                <input type='text' placeholder='Drug Dose' name='dose' class="form-control"/>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="mws-form-label"> Drug Freq /Route</label>
                                <input type='text' placeholder='Drug Freq /Route' name='freq' class="form-control"/>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="mws-form-label">Instruction</label>
                                <input type='text' placeholder='Instruction' name='inst' class="form-control"/>
                            </div>
                        </div>
                        <div class="col-sm-3"><div class="form-group">
                                <label class="mws-form-label">RFA</label>
                                <input type='text' placeholder='RFA' name='rfa' class="form-control"/>
                            </div></div>
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




