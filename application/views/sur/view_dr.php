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
                            <th>mrn</th>
                            <th>location</th>
                            <th>Severty</th>
                            <th>Duration</th>
                            <th>Occupation</th>
                            <th>Education</th>
                            <th>Marital Status</th>
                            <th>Time</th>
                            <th>Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($phone as $row) { ?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->mrn ?></td>
                                <td><?php echo $row->location ?></td>

                                <td><?php echo $row->severty ?></td>
                                <td><?php echo $row->duration ?></td>

                                <td><?php echo $row->occ ?></td>
                                <td><?php echo $row->edu ?></td>
                                <td><?php echo $row->marital ?></td>

                                <td><?php echo $row->time ?></td>
                                <td>
                                    <a href=" <?php echo base_url() ?>index.php/sur_control/C_ContactDetails/<?php echo $row->id ?>">Show</a>
                                </td>
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
