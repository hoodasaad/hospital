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
                                <th>Mastoid</th>
                                <th>Orbit</th>
                                <th> Clinc Name</th>
                                <th>Put</th>
                                <th>Time</th>
                                <th>Dr Sign</th>
                                <th>show</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($phone as $row) { ?>
                                <tr>
                                    <td><?php echo $row->id ?></td>
                                    <td><?php echo $row->mrn ?></td>

                                    <td><?php echo $row->mastoid ?></td>
                                    <td><?php echo $row->orbit ?></td>
                                    <td><?php echo $row->clinc ?></td>
                                    <td><?php echo $row->put ?></td>
                                    <td><?php echo $row->time ?></td>
                                    <td><?php echo $row->sign ?></td>
                                    <td><a href=" <?php echo base_url() ?>index.php/dr_control/ContactDetails_rad/<?php echo $row->id ?>">Show</a></td>


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

