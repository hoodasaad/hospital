<?php
$value = $contact[0];
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Patient MRN:<?= $value->mrn ?></div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td colspan="2">PT's Name: <?= @$patient->name ?></td><td>MRN: <?= @$patient->id ?></td>
                        </tr>
                        <tr>
                            <td>Age: <?= @$patient->age ?></td><td>Gender: <?= @Patient::Gender()[$patient->gender] ?></td><td>PT's ID: <?= @$patient->pt_id ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?= @$diagnosis->diagnosis ?></td>
                        </tr>
                    </table>
                    <form class="form" action="" rel="form">
                        <div class="form-group">
                            <label class="mws-form-label">Mrn</label>
                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly">
                        </div>
                        
                        <div class="form-group">
                            <label class="mws-form-label">Blood.sugar</label>
                            <input type='text' placeholder='Blood.sugar' name='blood' class="form-control" value="<?php echo $value->blood; ?>" readonly="readonly"/>
                        </div>
                        <div class="mws-form-inline">
                            <div class="form-group">
                                <label class="mws-form-label">Urine</label>

                                <div class="mws-form-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Sugar"
                                                   name="sugar" value="<?php echo $value->sugar; ?>" readonly="readonly"/>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Acetone"
                                                   name="acetone" value="<?php echo $value->acetone; ?>" readonly="readonly"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mws-form-inline">
                            <div class="form-group">
                                <label class="mws-form-label">Diabetic Medication</label>

                                <div class="mws-form-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Oral"
                                                   name="oral" value="<?php echo $value->oral; ?>" readonly="readonly"/>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Insulin"
                                                   name="insulin" value="<?php echo $value->insulin; ?>" readonly="readonly"/>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Dose"
                                                   name="dose" value="<?php echo $value->dose; ?>" readonly="readonly"/>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Site"
                                                   name="site" value="<?php echo $value->site; ?>" readonly="readonly"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Nurse Sign</label>
                            <input type='text' placeholder='Nurse Sign' name='sign' class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly"/>
                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Time & Date</label>
                            <input type='text' placeholder='Time & Date' name='time' class="form-control" value="<?php echo $value->time; ?>" readonly="readonly"/>
                        </div>




                </div>
            </div>


        </div >
        </form>
    </div>
</div>
</div>
</div>