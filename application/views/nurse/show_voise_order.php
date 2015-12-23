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
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Mrn Number</label>
                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly">


                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Dr Order</label>
                            <input type='text' class="form-control" value="<?php echo $value->dr_order; ?>" readonly="readonly"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Nurse Recived Order</label>
                            <input type='text' class="form-control" value="<?php echo $value->nurse; ?>" readonly="readonly"/>

                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Time && Date</label>
                            <input type='text' class="form-control" value="<?php echo $value->time; ?>" readonly="readonly"/>

                        </div>


                </div >
                </form>
            </div>
        </div>
    </div>
</div>