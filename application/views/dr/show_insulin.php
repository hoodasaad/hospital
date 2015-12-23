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
                            <td>Age: <?= @Patient::ageCalculator(@$patient->age) ?></td><td>Gender: <?= @Patient::Gender()[$patient->gender] ?></td><td>PT's ID: <?= @$patient->pt_id ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?= @$diagnosis->diagnosis ?></td>
                        </tr>
                    </table>
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
                                   
                                    <div class="mws-form-inline">
                                        <div class="form-group">
                                            <label class="mws-form-label">Insulin Chart</label>

                                            <div class="mws-form-item">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Start"
                                                               name="start_1" value="<?php echo $value->start_1; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Insulin"
                                                               name="insulin_1" value="<?php echo $value->insulin_1; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="End"
                                                               name="end_1" value="<?php echo $value->end_1; ?>" readonly="readonly" />
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mws-form-inline">
                                        <div class="form-group">

                                            <div class="mws-form-item">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Start"
                                                               name="start_2" value="<?php echo $value->start_2; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Insulin"
                                                               name="insulin_2"value="<?php echo $value->insulin_2; ?>" readonly="readonly" />
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="End"
                                                               name="end_2" value="<?php echo $value->end_2; ?>" readonly="readonly"/>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mws-form-inline">
                                        <div class="form-group">

                                            <div class="mws-form-item">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Start"
                                                               name="start_3" value="<?php echo $value->start_3; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Insulin"
                                                               name="insulin_3" value="<?php echo $value->insulin_3; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="End"
                                                               name="end_3" value="<?php echo $value->end_3; ?>" readonly="readonly"/>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mws-form-inline">
                                        <div class="form-group">

                                            <div class="mws-form-item">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Start"
                                                               name="start_4" value="<?php echo $value->start_4; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Insulin"
                                                               name="insulin_4" value="<?php echo $value->insulin_4; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="End"
                                                               name="end_4" value="<?php echo $value->end_4; ?>" readonly="readonly"/>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mws-form-inline">
                                        <div class="form-group">

                                            <div class="mws-form-item">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Start"
                                                               name="start_5" value="<?php echo $value->start_5; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Insulin"
                                                               name="insulin_5" value="<?php echo $value->insulin_5; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="End"
                                                               name="end_5" value="<?php echo $value->end_5; ?>" readonly="readonly"/>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mws-form-inline">
                                        <div class="form-group">

                                            <div class="mws-form-item">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label class="mws-form-label">More than</label>

                                                        <input type="text" class="form-control" placeholder="More than"
                                                               name="more"  value="<?php echo $value->more; ?>" readonly="readonly"/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="mws-form-label">give</label>

                                                        <input type="text" class="form-control" placeholder="give"
                                                               name="give" value="<?php echo $value->give; ?>" readonly="readonly"/>
                                                        <label class="mws-form-label">&ask doctor</label>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Doctor Signature</label>
                                        <input type='text' placeholder='Doctor Signature' name='sign' class="form-control"value="<?php echo $value->sign; ?>" readonly="readonly"/>
                                    </div>

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