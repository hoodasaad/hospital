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
                        <div class="form-group">
                            <label class="mws-form-label">Consent for release of medical records for</label>
                            <input type="text" class="form-control" placeholder="Consent for release of medical records for"
                                   name="medical" value="<?php echo $value->medical; ?>" readonly="readonly"  />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Date</label>

                            <input type="text" class="form-control" placeholder="Date"
                                   name="date" value="<?php echo $value->date; ?>" readonly="readonly" >
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Requesting records from :-</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Name of Practice :</label>

                            <input type="text" class="form-control" placeholder="Name of Practice "
                                   name="practice" value="<?php echo $value->practice; ?>" readonly="readonly" >
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Name of physician</label>

                            <input type="text" class="form-control" placeholder="Name of physician"
                                   name="physician" value="<?php echo $value->physician; ?>" readonly="readonly" >
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Fax number</label>

                            <input type="text" class="form-control" placeholder="Fax number"
                                   name="fax" value="<?php echo $value->fax; ?>" readonly="readonly" >
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Address</label>

                            <input type="text" class="form-control" placeholder="Address"
                                   name="address" value="<?php echo $value->address; ?>" readonly="readonly" >
                        </div>

                </div>
                <div class="form-group">
                    <label class="mws-form-label">Types of records we are requesting </label>
                    <input type='text'  name='requesting' class="form-control"  value="<?php echo $value->requesting; ?>" readonly="readonly" />

                    <input type='text'  name='other' class="form-control" value="Doctor Visit notes" placeholder="Other" value="<?php echo $value->other; ?>" readonly="readonly" />

                </div>  

                <div class="form-group">
                    <label class="mws-form-label">Records within the following dates :-</label>
                    <input type="text" name="patient" class="form-control" value="<?php echo $value->patient; ?>" readonly="readonly"  />
                    <input type="text" name="first" class="form-control"  value="<?php echo $value->first; ?>" readonly="readonly" /><label>and</label>
                    <input type="text" name="second" class="form-control" value="<?php echo $value->second; ?>" readonly="readonly"  />
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Please send records to :-</label>
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Attention:</label>
                    <input type='text' placeholder='Attention' name='attention' class="form-control" value="<?php echo $value->attention; ?>" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label class="mws-form-label">At fax number :</label>
                    <input type='text' placeholder='At fax number' name='fax_number' class="form-control" value="<?php echo $value->fax_number; ?>" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Or mail to :</label>
                    <input type='text' placeholder='Or mail to :' name='mail' class="form-control" value="<?php echo $value->mail; ?>" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label class="mws-form-label">For any questions please call (phone number)</label>
                    <input type='text' placeholder='Phone Number' name='phone_number' class="form-control" value="<?php echo $value->phone_number; ?>" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label class="mws-form-label">and Ask for</label>
                    <input type='text' placeholder='Ask for' name='ask' class="form-control" value="<?php echo $value->ask; ?>" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label class="mws-form-label">Time</label>
                    <input type='text' placeholder='Ask for' name='ask' class="form-control" value="<?php echo $value->time; ?>" readonly="readonly" />
                </div>
            </div>
        </div>
    </div>
</div>
</div>
