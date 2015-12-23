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
                <div class="block-title"><span class="glyphicon glyphicon-tint"></span>Full Risk Assessment Tool <a class="btn btn-success btn-sm" href="<?=base_url()?>index.php/sur_control/get_risk"><span class="glyphicon glyphicon-plus"></span></a> </div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <thead>
                        <tr>
                            <th>Mrn</th>
                            <th>PT' name</th>
                            <th>PT ID</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($All as $row) { ?>
                            <tr>
                                <td><?= $row->mrn ?></td>
                                <td><?= $row->name ?></td>
                                <td><?= $row->pt_id ?></td>
                                <td><?= $row->created_at ?></td>
                                <td>
                                    <a href=" <?php echo base_url() ?>index.php/sur_control/ContactDetails_risk/<?php echo $row->id ?>">Show</a>
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