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
                <div class="block-title"><span class="glyphicon glyphicon-tint"></span> Show All Put Chart <a class="btn btn-success btn-sm" href="<?=base_url()?>index.php/nurse_control/AddPutChartDay"><span class="glyphicon glyphicon-plus"></span></a> </div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <thead>
                        <tr>
                            <th>mrn</th>
                            <th>PT' name</th>
                            <th>PT ID</th>
                            <th>Date</th>
                            <th>Total Am</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($All as $row) { ?>
                            <tr>
                                <td><?php echo $row->mrn ?></td>
                                <td><?= $row->name ?></td>
                                <td><?= $row->pt_id ?></td>
                                <td><?= $row->date ?></td>
                                <td><?= $row->total_am ?></td>
                                <td>
                                    <a href=" <?php echo base_url() ?>index.php/nurse_control/AddPutChart/<?php echo $row->id ?>">AddPutChart</a>
                                </td>
                                <td>
                                    <a href=" <?php echo base_url() ?>index.php/nurse_control/FindPutChartDay/<?php echo $row->id ?>">ShowPutChart</a>
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