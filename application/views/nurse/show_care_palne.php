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
                    <table class="table table-responsive table-hover">
                        <thead>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Evaluation</th>
                                <th>Nurse Signature</th>
                                <th>Time</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($phone as $row) { ?>
                                <tr>
                                    <td><?php echo $row->id ?></td>
                                    <td><?php echo $row->eva ?></td>
                                    <td><?php echo $row->sign ?></td>
                                    <td><?php echo $row->time ?></td>
                                </tr>
                            <?php }
                            ?>


                        </tbody>

                    </table>
                    <div class="pagination">
                        <?php echo $links; ?>
                    </div>


                    <form class="form" action="" rel="form">
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Mrn Number</label>
                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly">


                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Pt's need / Diagnosis</label>
                            <input type='text' placeholder="Pt's need / Diagnosis" name='need' class="form-control" value="<?php echo $value->need; ?>" readonly="readonly"/>
                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Nursing Intervension</label>
                            <textarea name=Nursing rows="auto" cols="auto" class="form-control" readonly="readonly"><?php echo $value->nursing; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Nurse Sign</label>
                            <input type='text' class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly"/>

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