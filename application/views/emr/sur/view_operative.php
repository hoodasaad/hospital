
<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="block">
                        <div class="block-title"><span class="glyphicon glyphicon-user"></span>Insulin Chart</div>
                        <div class="block-content">
                            <table class="table table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Mrn</th>
                                        <th>Preoperative Diagnosis</th>
                                        <th>Surgeon</th>
                                        <th>Estimated Blood Loss</th>
                                        <th>Specimens</th>
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
                                            <td><?php echo $row->pre ?></td>
                                            <td><?php echo $row->surgeon ?></td>
                                            <td><?php echo $row->blood_loss ?></td>
                                            <td><?php echo $row->specimens ?></td>
                                            <td><?php echo $row->sign ?></td>
                                            <td><?php echo $row->time ?></td>
                                            <td><a href=" <?php echo base_url() ?>index.php/emr_control/ContactDetails_operative/<?php echo $row->id ?>">Show</a></td>
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

