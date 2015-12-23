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
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient <a
                        class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/Reception/GetAll"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/Reception/CreatePatient"
                          method="post">
                        <div class="form-group">
                            <label class="mws-form-label">Date & Time</label>
                            <div class="input-group">
                                <input type='datetime-local' placeholder='Date & Time' name='date_time' class="form-control" value="<?= $patient->date_time?>" readonly/>
                                <div class="input-group-addon"><span class="glyphicon glyphicon-time"></span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">PT's Name</label>
                            <input type='text' placeholder='Name' name='name' class="form-control" value="<?= $patient->name?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">age</label>
                            <input type='text' placeholder='Age' name='age' class="form-control" value="<?= $patient->age?>" readonly />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Gender</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                        echo '<li><input type="radio" name="gender" checked> <label>'.Patient::Gender()[$patient->gender].'</label></li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group" id="PatientId">
                            <label class="mws-form-label">PT's ID</label>
                            <input type='text' placeholder='Patient Id' maxlength="14" name='pt_id' class="form-control PatientId" value="<?= $patient->pt_id?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Occupation</label>
                            <input type='text' placeholder='Occupation' name='occupation' class="form-control" value="<?= $patient->occupation?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Address</label>
                            <input type='text' placeholder='Address' name='address' class="form-control" value="<?= $patient->address?>" readonly/>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Phone No</label>
                                    <input type='text' class="form-control" placeholder='Phone No' name='phone' value="<?= $patient->phone?>" readonly/>
                                </div>
                                <div class="col-sm-6">
                                    <label>Mob. No</label>
                                    <input type='text' class="form-control" placeholder='Mob. No' name='mobile' value="<?= $patient->mobile?>" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Emergency Call No</label>
                                    <input type='text' class="form-control" placeholder='Emergency Call No' name='emergency_call_no' value="<?= $patient->emergency_call_no?>" readonly/>
                                </div>
                                <div class="col-sm-6">
                                    <label>Person Call Name</label>
                                    <input type='text' class="form-control" placeholder='Person Call Name' name='emergency_call_name' value="<?= $patient->emergency_call_name?>" readonly/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>