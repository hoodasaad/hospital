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
                            <span><i class="icon-pencil"></i> Patient Mrn <?php echo" " . $value->mrn; ?></span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="">
                                <div class="mws-form-inline">
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">Mrn</label>
                                        <div class="mws-form-item">
                                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly"/>                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Time Out</label>
                                    </div>

                                    <div class="form-group">
                                        <label class="mws-form-label"> </label>
                                        <input type='text' placeholder='' name='confirm' class="form-control" value="<?php echo $value->confirm; ?>" readonly="readonly"/> 
                                    </div>
                                    <div class="form-group">
                                        <input type='text' placeholder='' name='surgeon' class="form-control" value="<?php echo $value->surgeon; ?>" readonly="readonly"/> 
                                        <input type='text' placeholder='' name='site' class="form-control" value="<?php echo $value->site; ?>" readonly="readonly"/> 
                                    </div>

                                    <div class="form-group">
                                        <label class="mws-form-label">Anticipated Critical Events</label>
                                        <input type='text' placeholder='' name='event' class="form-control" value="<?php echo $value->event; ?>" readonly="readonly"/>

                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Has Antibiotic Prophylaxis been given within the last minutes?</label>
                                        <input type='text' placeholder='' name='inst' class="form-control" value="<?php echo $value->anti; ?>" readonly="readonly"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Is Essential imaging displayed</label>
                                        <input type='text' placeholder='' name='imaging' class="form-control" value="<?php echo $value->imaging; ?>" readonly="readonly"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="mws-form-label">Nurse Signature</label>
                                        <input type='text' placeholder='Nurse Signature' name='sign' class="form-control"value="<?php echo $value->sign; ?>" readonly="readonly"/>
                                    </div>


                                    <div class="form-group">
                                        <label class="mws-form-label">Date & Time</label>
                                        <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                                    </div>

                            </form>
                        </div>
                </div>
            </div>
        </div>