<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span>Search
                    About <?= $_GET['search'] ?></div>
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
                        <?php foreach ($contacts as $value) { ?>
                            <tr>
                                <td><?php echo $value->id ?></td>
                                <td><?php echo $value->mrn ?></td>
                                <td><?php echo $value->location ?></td>
                                <td><?php echo $value->severty ?></td>
                                <td><?php echo $value->duration ?></td>
                                <td><?php echo $value->occ ?></td>
                                <td><?php echo $value->edu ?></td>
                                <td><?php echo $value->marital ?></td>
                                <td><?php echo $value->time ?></td>
                                <td>
                                    <a href=" <?php echo base_url() ?>index.php/dr_control/C_ContactDetails/<?php echo $value->id ?>">Show</a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

