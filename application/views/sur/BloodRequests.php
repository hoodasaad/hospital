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
                <div class="block-title"><span class="glyphicon glyphicon-tint"></span>All Blood trams fusion Requests <a class="btn btn-success btn-sm" href="<?=base_url()?>index.php/sur_control/AddBloodRequest"><span class="glyphicon glyphicon-plus"></span></a> </div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <thead>
                        <tr>
                            <th>mrn</th>
                            <th>PT' name</th>
                            <th>PT ID</th>
                            <th>Date & Time</th>
                            <th>Responsible Physician</th>
                            <th>Created At</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($All as $row) { ?>
                            <tr>
                                <td><?php echo $row->mrn ?></td>
                                <td><?= $row->name ?></td>
                                <td><?= $row->pt_id ?></td>
                                <td><?= $row->date_time ?></td>
                                <td><?= $row->responsible_physician ?></td>
                                <td><?= $row->created_at ?></td>
                                <td>
                                    <a href=" <?php echo base_url() ?>index.php/sur_control/AddMonitorRing/<?php echo $row->id ?>">Monitor Ring</a>
                                </td>
                                <td>
                                    <a href=" <?php echo base_url() ?>index.php/sur_control/ShowBloodRequest/<?php echo $row->id ?>">Show</a>
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