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
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Show Patient
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/emr_control/BloodRequests"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" >
                        <table class="table table-bordered table-responsive table-hover">
                            <tr>
                                <td colspan="2">PT's Name: <?=@$patient->name?></td><td>MRN: <?=@$patient->id?></td>
                            </tr>
                            <tr>
                                <td>Age: <?=@Patient::ageCalculator(@$patient->age)?></td><td>Gender: <?=@Patient::Gender()[$patient->gender]?></td><td>PT's ID: <?=@$patient->pt_id?></td>
                            </tr>
                            <tr>
                                <td colspan="3">Diagnosis: <?=@$diagnosis->diagnosis?></td>
                            </tr>
                        </table>
                        <div class="form-group">
                            <label class="mws-form-label">Responsible physician</label>
                            <input readonly type='text' placeholder='Responsible physician' name='responsible_physician' value="<?= $row->responsible_physician?>" class="form-control" required=""/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Date & Time</label>
                            <input readonly type='text' placeholder='date-time' name='date_time' value="<?= $row->date_time?>"  class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Blood Component Type</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(BloodTramsFusion::BloodComponentType() as $key=>$value){
                                        echo ' <li><input disabled ';
                                        if($key == in_array($key,explode(':',$row->blood_component_type))){ echo 'checked';}
                                        echo ' type="checkbox" name="blood_component_type[]" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label> </li>';
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
                                        echo ' <li><input  disabled ';
                                        if($key ==$row->specific_component_modification){ echo ' checked ';}
                                        echo '  type="radio" name="specific_component_modification" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
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
                                        echo ' <li><input disabled ';
                                        if($key ==$row->check_blood_consent){ echo 'checked';}
                                        echo '   type="radio" name="check_blood_consent" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Blood bag data</label>
                            <div class="row">
                                <div class="col-sm-3">
                                    <input readonly type="text" name="bag_no" value="<?= $row->bag_no?>" placeholder="bag No" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" name="donor_name" value="<?= $row->donor_name?>" placeholder="donor name" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" name="rh" value="<?= $row->rh?>" placeholder="rh" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input readonly type="text" name="bl_grope" value="<?= $row->bl_grope?>" placeholder="BL. grope" class="form-control">
                                </div>
                            </div>
                        </div>
                        <label>Monitor Ring & vital signs</label>
                        <table class="table table-responsive table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Time</th>
                                <th>Temp</th>
                                <th>Pulse</th>
                                <th>B.L P</th>
                                <th>Resp</th>
                                <th>Sign</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($All as $row2)
                            {
                                echo '<tr>
                            <td>'.MonitorRing::Time()[$row2->time].'</td>
                            <td>'.$row2->temp.'</td>
                            <td>'.$row2->pulse.'</td>
                            <td>'.$row2->b_l_p.'</td>
                            <td>'.$row2->resp.'</td>
                            <td>'.$row2->sign.'</td>
                            </tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <label class="mws-form-label">Observation</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(BloodTramsFusion::Observation() as $key=>$value){
                                        echo ' <li><input disabled ';
                                        if($key ==$row->check_blood_consent){ echo 'checked';}
                                        echo '    type="radio" name="observation" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Doctor Signature</label>
                                    <input readonly type='text' placeholder='Doctor Signature' value="<?= $row->dr_sign?>" name='dr_sign' class="form-control" required=""/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Nurse Signature</label>
                                    <input readonly type='text' placeholder='Nurse Signature' value="<?= $row->nurse_sign?>" name='nurse_sign' class="form-control" required=""/>
                                </div>
                            </div>
                        </div>
                        <div class="mws-button-row">
                            <input readonly type="submit" value="Add Patient" class="btn btn-success btn-submit">
                            <input readonly type="reset" value="Reset" class="btn">
                            <input readonly type="hidden" class="ok" value="0">
                            <div class="error_message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>