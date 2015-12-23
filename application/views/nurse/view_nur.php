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
                            <th>MRN</th>
                            <th>Allegy</th>
                            <th>Temp</th>
                            <th>BP</th>
                            <th>P</th>
                            <th>Pt's Complain</th>
                            <th>Time</th>
                            <th>nurse</th>
                            <th>show</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($phone as $row) { ?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->mrn ?></td>
                                <td><?php echo $row->allegy ?></td>

                                
                                <td><?php echo $row->temp ?></td>
                                <td><?php echo $row->min . "/" . $row->max ?></td>
                                <td><?php echo $row->p ?></td>
                                <td><?php echo $row->complain ?></td>
                                <td><?php echo $row->time ?></td>
                                <td><?php echo $row->sign ?></td>
                                <td><a href=" <?php echo base_url() ?>index.php/nurse_control/C_ContactDetails/<?php echo $row->id ?>">Show</a></td>
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
