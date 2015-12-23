
<div id="mws-container" class="clearfix">

    <!-- Inner Container Start -->
    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="block">
                        <div class="block-title"><span class="glyphicon glyphicon-user"></span>Fluid Chart</div>
                        <div class="block-content">
                            <table class="table table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Mrn</th>
                                        <th>Type/Volume</th>
                                        <th>Rate</th>
                                        <th>Additves(Drug)</th>
                                        <th>Additves(Dose)</th>
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
                                            <td><?php echo $row->type ?></td>

                                            <td><?php echo $row->rate ?></td>
                                            <td><?php echo $row->drug ?></td>
                                            <td><?php echo $row->dose ?></td>
                                         
                                            <td><?php echo $row->sign ?></td>
                                            <td><?php echo $row->time ?></td>
                                            <td><a href=" <?php echo base_url() ?>index.php/nurse_control/get_fluid/<?php echo $row->id ?>">Nurse Sign</a></td>
                                            <td><a href=" <?php echo base_url() ?>index.php/nurse_control/ContactDetails_fluid/<?php echo $row->id ?>">Show</a></td>
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

