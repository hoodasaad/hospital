<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span>All Patient</div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Mrn</th>
                                <th>Temp</th>
                                <th>Pulse</th>
                                <th>Notes</th>
                               
                                <th>Nurse Signature</th>
                                <th>Date/Time</th>
                                <th>Show</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($phone as $row) { ?>
                                <tr>   
                                    <td><?php echo $row->id ?></td>
                                    <td><?php echo $row->mrn ?></td>

                                    <td><?php echo $row->temp ?></td>
                                    <td><?php echo $row->pulse ?></td>
                                    <td><?php echo $row->notes ?></td>
                                  

                                    <td><?php echo $row->sign ?></td>
                                    <td><?php echo $row->time ?></td>
                                    <td><a href=" <?php echo base_url() ?>index.php/nurse_control/virtal_Details/<?php echo $row->id ?>">Show</a></td>
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

