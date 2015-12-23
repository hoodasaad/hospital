<?php
$value = $contact[0];
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Show Nutration for Patient MRN: <?= $value->mrn ?></div>
                <div class="block-content">
                    <form class="form" action="" rel="form">
                        <div class="form-group">
                            <label class="mws-form-label">Mrn</label>
                            <span><i class="icon-pencil"></i> Patient Mrn <?php echo" " . $value->mrn; ?></span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="">
                                <div class="mws-form-inline">
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">Mrn</label>
                                        <div class="mws-form-item">
                                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly">                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Patient Id</label>
                                        <input type="text" class="form-control" value="<?php echo $value->patient_id; ?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Patient Name</label>
                                        <input type="text" class="form-control" value="<?php echo $value->name; ?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Age</label>
                                        <input type="text" class="form-control" value="<?php echo $value->age; ?>" readonly="readonly">
                                    </div>

                                    <div class="form-group">
                                        <label class="mws-form-label">Gender</label>
                                        <input type="text" class="form-control" value="<?php echo $value->gender; ?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Diagnosis</label>
                                        <input type="text" class="form-control" value="<?php echo $value->dia; ?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Type </label>
                                        <input type="text" class="form-control" value="<?php echo $value->type; ?>" readonly="readonly">
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="mws-form-label">Date & Time</label>
                                        <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                                    </div>

                                    <div class="form-group">
                                        <label class="mws-form-label">Doctor Signature</label>
                                        <input type="text" class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly">
                                    </div>


                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>