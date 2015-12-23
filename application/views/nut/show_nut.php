<?php
$value = $contact[0];
?>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="block">
                    <div class="block-title"><span class="glyphicon glyphicon-user"></span>Evaluation</div>
                    <div class="block-content">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mrn</th>
                                    <th>Diatary Comment</th>
                                    <th>Chyonic diagnosis</th>
                                    <th>Teeth quiefecation</th>
                                    <th>Doctor Sign</th>
                                    <th>Time</th>
                                    <th>Show</th>



                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($phone as $row) { ?>
                                    <tr>
                                        <td><?php echo $row->id ?></td>
                                        <td><?php echo $row->mrn ?></td>
                                        <td><?php echo $row->comment ?></td>
                                        <td><?php echo $row->chy ?></td>
                                        <td><?php echo $row->teeth ?></td>

                                        <td><?php echo $row->sign ?></td>
                                        <td><?php echo $row->time ?></td>
                                        <td><a href=" <?php echo base_url() ?>index.php/nut_control/C_ContactDetails/<?php echo $row->id ?>">Show</a></td>
                                    </tr>
                                <?php }
                                ?>


                            </tbody>

                        </table>
                        <?php echo $links; ?>




                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="block">
                            <div class="block-title"><span class="glyphicon glyphicon-user"></span> Show Consultant request for Patient MRN: <?= $value->mrn ?></div>
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
                                                    <label class="mws-form-label">Notes</label>

                                                    <div class="mws-form-item">
                                                        <textarea name='notes' rows="auto" cols="auto" class="form-control" readonly="readonly"> <?php echo $value->notes; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mws-form-label">Diatary Comment</label>
                                                    <input type='text' placeholder='Diatary Comment' name='comment' class="form-control" value="<?php echo $value->comment; ?>" readonly="readonly"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mws-form-label">Chyonic diagnosis</label>
                                                    <input type='text' placeholder='Chyonic diagnosis' name='chy' class="form-control" value="<?php echo $value->chy; ?>" readonly="readonly"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mws-form-label">Teeth quiefecation</label>
                                                    <input type='text' placeholder='Teeth quiefecation' name='teeth' class="form-control" value="<?php echo $value->teeth; ?>" readonly="readonly"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="mws-form-label">Date & Time</label>
                                                    <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                                                </div>

                                                <div class="form-group">
                                                    <label class="mws-form-label">Nutrationdl Specialest Sig</label>
                                                    <input type="text" class="form-control" value="<?php echo $value->sign; ?>" readonly="readonly">
                                                </div>


                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>