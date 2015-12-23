<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php
            if($this->session->flashdata('done')){
                ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Well done!</strong> <?= $this->session->flashdata('done')?>
                </div>
            <?php } ?>
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span>All Patient <a class="btn btn-success btn-sm" href="<?=base_url()?>index.php/Reception/AddNewPatient"><span class="glyphicon glyphicon-plus"></span></a> </div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Patient Name</th>
                            <th>PT's ID</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Mobile</th>
                            <th>Date && Time</th>
                            <th>Active</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($All as $row) { ?>
                            <tr>
                                <td><?= $row->id ?></td>
                                <td><?= $row->name ?></td>
                                <td><?= $row->pt_id ?></td>
                                <td><?= $row->age ?></td>
                                <td><?= Patient::Gender()[$row->gender] ?></td>
                                <td><?= $row->phone ?></td>
                                <td><?= $row->mobile ?></td>
                                <td><?= $row->date_time ?></td>
                                <td style="text-align: center"><?= ($row->active == 1) ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-warning-sign"></span>' ?></td>
                                <td><a href=" <?= base_url() ?>index.php/Reception/Admission/<?= $row->id ?>">Admission</a></td>
                                <td><a href=" <?= base_url() ?>index.php/Reception/FindPatient/<?= $row->id ?>">Show</a></td>
                            </tr>
                        <?php }
                        ?>
                        </tbody>
                    </table>
                    <div class="pagination">
                        <?= $links; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
