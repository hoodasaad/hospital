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
                            <label class="mws-form-label">Data/Time</label>
                            <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Temp</label>
                            <input type="text" class="form-control" value="<?php echo $value->temp; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Pulse</label>
                            <input type="text" class="form-control" value="<?php echo $value->pulse; ?>" readonly="readonly">
                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">R.R</label>
                            <input type="text" class="form-control" value="<?php echo $value->rr; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">B.P</label>
                            <input type="text" class="form-control" value="<?php echo $value->bp; ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Notes </label>
                            <textarea name='notes' rows="auto" cols="auto" class="form-control" readonly="readonly"><?php echo $value->notes; ?> </textarea>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Nurse Signature</label>
                            <input type="text" class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly">
                        </div>


                </div >
                </form>
            </div>
        </div>
    </div>
</div>