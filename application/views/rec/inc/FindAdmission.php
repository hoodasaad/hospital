<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Admission <a
                        class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/Reception/Admission/<?=$patient->mrn?>"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td colspan="2">PT's Name: <?=@$patient2->name?></td><td>MRN: <?=@$patient2->id?></td>
                        </tr>
                        <tr>
                            <td>Age: <?=@$patient2->age?></td><td>Gender: <?=@Patient::Gender()[$patient2->gender]?></td><td>PT's ID: <?=@$patient2->pt_id?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?=@$diagnosis->diagnosis?></td>
                        </tr>
                    </table>
                    <form class="form" role="form" action="<?= base_url() ?>index.php/Reception/CreateAdmission/<?=$patient->mrn?>"
                          method="post">
                        <div class="form-group">
                            <label class="mws-form-label">Admission Date</label>
                            <div class="input-group">
                                <input type='date' placeholder='Date' name='date_time' class="form-control" value="<?=$patient->date_time?>" readonly/>
                                <div class="input-group-addon"><span class="glyphicon glyphicon-time"></span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Admission Before</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    echo '<li><input type="radio" name="admission_before" checked> <label>'.Admission::YesORNo()[$patient->admission_before].'</label></li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Word</label>
                            <input type='text' placeholder='Word' name='word' class="form-control" value="<?=$patient->word?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Class</label>
                            <input type='text' placeholder='Class' name='class' class="form-control" value="<?=$patient->class?>" readonly />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Room</label>
                            <input type='text' placeholder='Room' name='room' class="form-control" value="<?=$patient->room?>" readonly />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Referral From</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    echo '<li><input type="radio"  checked> <label>'.Admission::Referral()[$patient->referral_from].'</label></li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Financial Status</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    echo '<li><input type="radio" name="financial_status" checked> <label>'.Admission::Financial()[$patient->financial_status].'</label></li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Consultant</label>
                            <input type='text' placeholder='Consultant' name='consultant' class="form-control" value="<?=$patient->consultant?>" readonly/>
                        </div>
                        <label>Medical Data</label>
                        <div class="form-group">
                            <label class="mws-form-label">Provisional Diagnosis</label>
                            <textarea placeholder='Provisional Diagnosis' name='provisional_diagnosis' class="form-control" readonly><?=$patient->provisional_diagnosis?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">ICD 10</label>
                            <input type='text' placeholder='ICD 10' name='icd_10' class="form-control" value="<?=$patient->icd_10?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Days of stay Expected days</label>
                            <input type='text' placeholder='Days of stay Expected days' name='expected_days' class="form-control" value="<?=$patient->expected_days?>" readonly/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>