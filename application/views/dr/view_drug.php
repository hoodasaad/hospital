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
                            <th>Needed Drug</th>
                            <th>Dose</th>
                            <th>Freq / Route</th>
                            <th>Instruction</th>
                            <th>RFA</th>
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
                                <td><?php echo $row->need ?></td>

                                <td><?php echo $row->dose ?></td>
                                <td><?php echo $row->freq ?></td>

                                <td><?php echo $row->inst ?></td>
                                <td><?php echo $row->rfa ?></td>
                                <td><?php echo $row->sign ?></td>
                                <td><?php echo $row->time ?></td>
                                <td><a href=" <?php echo base_url() ?>index.php/dr_control/ContactDetails_need/<?php echo $row->id ?>">Show</a></td>
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

