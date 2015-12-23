<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php
            if($this->session->flashdata('error')){
                ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> <?= $this->session->flashdata('error')?>
                </div>
            <?php } ?>
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/emr_control/BloodRequests"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/emr_control/CreateBloodRequest"
                          method="post">
                        <div id="MRN-INFO"></div>
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Mrn Number</label>
                            <input type='text' placeholder='MRN' name='MRN' class="form-control MRN" required=""/>
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Date & Time</label>
                                    <input type='datetime-local' placeholder='date-time' name='date_time' class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Responsible physician</label>
                                    <input type='text' placeholder='Responsible physician' name='responsible_physician' class="form-control" required=""/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Blood Component Type</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(BloodTramsFusion::BloodComponentType() as $key=>$value){
                                        echo ' <li><input type="checkbox" name="blood_component_type[]" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label> </li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Specific Component Modification</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(BloodTramsFusion::SpecificComponentModification() as $key=>$value){
                                        echo ' <li><input type="radio" name="specific_component_modification" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Check Blood Consent</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(BloodTramsFusion::YesORNo() as $key=>$value){
                                        echo ' <li><input type="radio" name="check_blood_consent" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Blood bag data</label>
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" name="bag_no" placeholder="bag No" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="donor_name" placeholder="donor name" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="rh" placeholder="rh" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="bl_grope" placeholder="BL. grope" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Observation</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(BloodTramsFusion::Observation() as $key=>$value){
                                        echo ' <li><input type="radio" name="observation" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Doctor Signature</label>
                                    <input type='text' placeholder='Doctor Signature' name='doctor_sign' class="form-control" required=""/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Nurse Signature</label>
                                    <input type='text' placeholder='Nurse Signature' name='nurse_sign' class="form-control" required=""/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type='hidden' placeholder='Time' name='time' value="<?php echo date('Y-m-d H:i:s');?>" />
                        </div>
                        <div class="mws-button-row">
                            <input type="submit" value="Add Patient" class="btn btn-success btn-submit">
                            <input type="reset" value="Reset" class="btn">
                            <input type="hidden" class="ok" value="0">
                            <div class="error_message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>