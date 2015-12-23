
<div id="mws-container" class="clearfix">

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
                            <th>Primary diagnosis</th>
                            <th>Lab findings</th>
                            <th>Time to follow up</th>
                            <th>Complication</th>
                         
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
                                <td><?php echo $row->primary ?></td>

                                <td><?php echo $row->lab ?></td>
                                <td><?php echo $row->follow ?></td>

                                <td><?php echo $row->complication ?></td>
                                <td><?php echo $row->sign ?></td>
                                <td><?php echo $row->time ?></td>
                                <td><a href=" <?php echo base_url() ?>index.php/emr_control/ContactDetails_discharge/<?php echo $row->id ?>">Show</a></td>
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

