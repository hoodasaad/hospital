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

                                <th>Allergies</th>
                                <th>Doctor Sign</th>
                                <th>Time</th>
                                <th>Nurse Sign</th>
                                <th>Show</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($phone as $row) { ?>
                                <tr>
                                    <td><?php echo $row->id ?></td>
                                    <td><?php echo $row->mrn ?></td>
                                    <td><?php echo $row->alle ?></td>
                                    <td><?php echo $row->sign ?></td>
                                    <td><?php echo $row->date ?></td>
                                    <td><a href=" <?php echo base_url() ?>index.php/nurse_control/get_drug/<?php echo $row->id ?>">Nurse Sign</a></td>
                                    <td><a href=" <?php echo base_url() ?>index.php/nurse_control/drugDetails/<?php echo $row->id ?>">Show</a></td>
                                </tr>
                            <?php }
                            ?>


                        </tbody>

                    </table>
                    <?php echo $links; ?>




                </div>
            </div>
        </div>
    </div>










    <!-- Panels End -->

