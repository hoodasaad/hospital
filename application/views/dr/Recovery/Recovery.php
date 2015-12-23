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
                <div class="block-title"><span class="glyphicon glyphicon-tint"></span>Recovery Record<a class="btn btn-success btn-sm" href="<?=base_url()?>index.php/dr_control/AddRecovery"><span class="glyphicon glyphicon-plus"></span></a> </div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <thead>
                        <tr>
                            <th>mrn</th>
                            <th>PT' name</th>
                            <th>PT ID</th>
                            <th>Time Patient arrived Recovery</th>
                            <th>Time Patient leave Recovery</th>
                            <th>Created At</th>
                            <th>Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($All as $row) { ?>
                            <tr>
                                <td><?php echo $row->mrn ?></td>
                                <td><?= $row->name ?></td>
                                <td><?= $row->pt_id ?></td>
                                <td><?= $row->arr_rec ?></td>
                                <td><?= $row->leave_rec ?></td>
                                <td><?= $row->created_at ?></td>
                                <td>
                                    <a href=" <?php echo base_url() ?>index.php/dr_control/FindRecovery/<?php echo $row->id ?>">Show</a>
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