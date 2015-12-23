
<div id="mws-container" class="clearfix">

    <!-- Inner Container Start -->
    <div class="container">

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
                                        <th>Patient Name</th>

                                        <th>Authorized Representative's Signature </th>
                                        <th>Relationship of Authorized Representative</th>
                                        <th>Time</th>
                                        <th>Show</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($phone as $row) { ?>
                                        <tr>
                                            <td><?php echo $row->id ?></td>
                                            <td><?php echo $row->mrn ?></td>
                                            <td><?php echo $row->patient ?></td>

                                            <td><?php echo $row->a_sign ?></td>
                                            <td><?php echo $row->relation ?></td>
                                            <td><?php echo $row->time ?></td>
                                            <td><a href=" <?php echo base_url() ?>index.php/Reception/ContactDetails_release/<?php echo $row->id ?>">Show</a></td>
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

