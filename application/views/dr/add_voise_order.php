<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Voise Order</div>
                <div class="block-content">

                    <?php echo form_open('dr_control/add_voise/'.$id) ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Pationt_Mrn</label>
                        <input type='text' placeholder='Pationt_Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error"
                              aria-hidden="true"></span>
                    </div>
                    
                    <div class="form-group">
                        <label class="mws-form-label">Doctor Sign </label>
                        <input type='text' placeholder='Doctor Sign' name='sign' class="form-control"/>
                    </div>

                    <input
                        type='hidden'  name='time'
                        value='<?php
                        //echo $cash;
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




