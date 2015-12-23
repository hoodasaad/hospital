<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span>All Patient</div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Patient Name</th>
                        <th>Pationt Id</th>
                        <th>Clinc</th>
                        <th>Number</th>
                        <th>Telephone #work</th>
                        <th>ProVider Seeing PT.Todat</th>
                        <th>Pationt seen</th>
                        <th>Dr Name</th>
                        <th>Show</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($phone as $row) { ?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->full_name ?></td>
                                <td><?php echo $row->pationt_id ?></td>
                                <td><?php echo $row->clinc ?></td>
                                <td><?php echo $row->number ?></td>
                                <td><?php echo $row->phone ?></td>
                                <td><?php echo $row->provider ?></td>
                                <td><?php echo $row->seen ?></td>
                                <td><?php echo $row->doctor ?></td>
                                <td><a href=" <?php echo base_url() ?>index.php/first/ContactDetails/<?php echo $row->id ?>">Show</a></td>
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

