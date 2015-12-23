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
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Admission <a
                        class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/Reception/Admission/<?=$patient?>"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/Reception/CreateAdmission/<?=$patient?>"
                          method="post">
                        <div class="form-group">
                            <label class="mws-form-label">Admission Date</label>
                            <div class="input-group">
                                <input type='date' placeholder='Date' name='date_time' class="form-control"/>
                                <div class="input-group-addon"><span class="glyphicon glyphicon-time"></span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Admission Before</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(Admission::YesORNo() as $key=>$value){
                                        echo ' <li><input type="radio" name="admission_before" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Word</label>
                            <input type='text' placeholder='Word' name='word' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Class</label>
                            <input type='text' placeholder='Class' name='class' class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Room</label>
                            <input type='text' placeholder='Room' name='room' class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Referral From</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(Admission::Referral() as $key=>$value){
                                        echo ' <li><input type="radio" name="referral_from" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Financial Status</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(Admission::Financial() as $key=>$value){
                                        echo ' <li><input type="radio" name="financial_status" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Consultant</label>
                            <input type='text' placeholder='Consultant' name='consultant' class="form-control"/>
                        </div>
                            <label>Medical Data</label>
                        <div class="form-group">
                            <label class="mws-form-label">Provisional Diagnosis</label>
                            <textarea placeholder='Provisional Diagnosis' name='provisional_diagnosis' class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">ICD 10</label>
                            <input type='text' placeholder='ICD 10' name='icd_10' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Days of stay Expected days</label>
                            <input type='text' placeholder='Days of stay Expected days' name='expected_days' class="form-control"/>
                        </div>
                        <div class="mws-button-row">
                            <input type="submit" value="Add Patient" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn ">
                            <input type="hidden" class="ok" value="1">

                            <div class="error_message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>