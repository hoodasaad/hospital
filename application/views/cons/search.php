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
                            <th>Mrn</th>
                            <th>Constitutional</th>
                            <th>ENT</th>
                            <th>Cardiovascular</th>
                            <th>Physical Exam</th>
                            <th>Consultant Diagnosis</th>
                            <th>Recommendation</th>
                            <th>Time</th>
                            <th>Consultant</th>
                            <th>show</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($phone as $row) { ?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->mrn ?></td>
                                <td><?php echo $row->consit ?></td>
                                <td><?php echo $row->ent ?></td>
                                <td><?php echo $row->card ?></td>
                                <td><?php echo $row->physical ?></td>
                                <td><?php echo $row->diag ?></td>
                                <td><?php echo $row->recom ?></td>
                                <td><?php echo $row->time ?></td>
                                <td><?php echo $row->sign ?></td>
                                <td>
                                    <a href=" <?php echo base_url() ?>index.php/cons_control/ContactDetails/<?php echo $row->id ?>">Show</a>
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
