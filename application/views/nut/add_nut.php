
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Nutration </div>
                <div class="block-content">
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Pationt_Mrn</label>
                        <input type='text' placeholder='Pationt_Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error"
                              aria-hidden="true"></span>
                    </div>

                    <?php echo form_open('nut_control/C_add_user/' . $id) ?>


                    <div class="form-group">
                        <label class="mws-form-label">Notes</label>

                        <div class="mws-form-item">
                            <textarea name='notes' rows="auto" cols="auto" class="form-control"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Diatary Comment</label>
                        <input type='text' placeholder='Diatary Comment' name='comment' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Chyonic diagnosis</label>
                        <input type='text' placeholder='Chyonic diagnosis' name='chy' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Teeth quiefecation</label>
                        <input type='text' placeholder='Teeth quiefecation' name='teeth' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Nutrationdl Specialest Sig</label>
                        <input type='text' placeholder='Nutrationdl Specialest Sig ' name='sign' class="form-control"/>
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




