<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span>All Patient</div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mrn</th>
                                <th>Blood.sugar</th>
                                <th>Urine (Sugar)</th>
                                <th>Urine (Acetone)</th>
                                <th>Nurse Signature</th>
                                <th>Time</th>
                                <th>Show</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($phone as $row) { ?>
                                <tr>
                                    <td><?php echo $row->id ?></td>
                                    <td><?php echo $row->mrn ?></td>
                                    <td><?php echo $row->blood ?></td>
                                    <td><?php echo $row->sugar ?></td>
                                    <td><?php echo $row->acetone ?></td>
                                    <td><?php echo $row->sign ?></td>
                                    <td><?php echo $row->time ?></td>
                                    <td><a href=" <?php echo base_url() ?>index.php/nurse_control/sheetDetails/<?php echo $row->id ?>">Show</a></td>
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

