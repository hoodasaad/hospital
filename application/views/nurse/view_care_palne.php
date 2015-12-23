<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span>All Patient</div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <thead>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mrn</th>
                                <th>Pt's need / Diagnosis</th>
                                <th>Nursing Intervension</th>
                                <th>Nurse Signature</th>
                                <th>Time</th>
                                <th>Evaluation</th>
                                <th>Show</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($phone as $row) { ?>
                                <tr>
                                    <td><?php echo $row->id ?></td>
                                    <td><?php echo $row->mrn ?></td>
                                    <td><?php echo $row->need ?></td>

                                    <td><?php echo $row->nursing ?></td>

                                    <td><?php echo $row->sign ?></td>
                                    <td><?php echo $row->time ?></td>
                                    <td><a href=" <?php echo base_url() ?>index.php/nurse_control/get_eva/<?php echo $row->id ?>">Evaluation</a></td>
                                    <td><a href=" <?php echo base_url() ?>index.php/nurse_control/careDetails/<?php echo $row->id ?>">Show</a></td>
                                </tr>
                            <?php }
                            ?>


                        </tbody>

                    </table>
                    <div class="pagination">
                        <?php echo $links; ?>
                    </div>



                </div>
            </div>
        </div>
    </div>










    <!-- Panels End -->

