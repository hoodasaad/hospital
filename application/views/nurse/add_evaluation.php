<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Evaluation</div>
                <div class="block-content">
                    <?php echo form_open('nurse_control/add_eva/' . $id) ?>

                    <div class="form-group">
                        <label class="mws-form-label">Evaluation</label>
                        <textarea name=eva rows="auto" cols="auto" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Nurse Sign</label>
                        <input type='text' placeholder='Nurse Sign' name='sign' class="form-control"/>
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




