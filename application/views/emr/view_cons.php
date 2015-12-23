
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
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Mrn</th>
                                        <th>To Specialty</th>
                                        <th>From Specialty</th>

                                        <th>Doctor Signature</th>

                                        <th>Time</th>
                                        <th>Show</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($phone as $row) { ?>
                                        <tr>
                                            <td><?php echo $row->id ?></td>
                                            <td><?php echo $row->mrn ?></td>

                                            <td><?php echo $row->spe ?></td>

                                            <td><?php echo $row->from_sp ?></td>
                                            <td><?php echo $row->sign ?></td>
                                            <td><?php echo $row->time ?></td>
                                            <td><a href=" <?php echo base_url() ?>index.php/emr_control/ContactDetails_req/<?php echo $row->id ?>">Show</a></td>
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
        </div>







