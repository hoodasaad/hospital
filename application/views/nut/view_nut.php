
<div id="mws-container" class="clearfix">

    <!-- Inner Container Start -->
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
                                        <th>type</th>
                                        <th>Diatary Comment</th>
                                        <th>Doctor Sign</th>
                                        <th>Time</th>
                                        <th>Nutration</th>

                                        <th>Show</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($phone as $row) { ?>
                                        <tr>
                                            <td><?php echo $row->id ?></td>
                                            <td><?php echo $row->mrn ?></td>
                                            <td><?php echo $row->user_id ?> </td>
                                            <td><?php echo $row->type ?></td>


                                            <td><?php echo $row->sign ?></td>
                                            <td><?php echo $row->time ?></td>
                                            <td><a href=" <?php echo base_url() ?>index.php/nut_control/C_index/<?php echo $row->id ?>">Nutration</a></td>

                                            <td><a href=" <?php echo base_url() ?>index.php/nut_control/C_ContactDetails/<?php echo $row->id ?>">Show</a></td>
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

