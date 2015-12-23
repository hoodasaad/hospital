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
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> All Admission To Patient :  <?=$patient->name?> & MRN: <?=$patient->id?><a class="btn btn-success btn-sm" href="<?=base_url()?>index.php/Reception/AddAdmission/<?=$patient->id?>"><span class="glyphicon glyphicon-plus"></span></a> </div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <tr>
                            <th>Admission Date</th>
                            <th>Admission Before</th>
                            <th>word</th>
                            <th>class</th>
                            <th>room</th>
                            <th>Referral From</th>
                            <th>Financial Status</th>
                            <th>Consultant</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($All as $row) { ?>
                            <tr>
                                <td><?= $row->date_time ?></td>
                                <td><?= Admission::YesORNo()[$row->admission_before] ?></td>
                                <td><?= $row->word ?></td>
                                <td><?= $row->class ?></td>
                                <td><?= $row->room ?></td>
                                <td><?= Admission::Referral()[$row->referral_from] ?></td>
                                <td><?= Admission::Financial()[$row->financial_status] ?></td>
                                <td><?= $row->consultant ?></td>
                                <td><a href="<?= base_url() ?>index.php/Reception/FindAdmission/<?=$row->id?>/">Show</a></td>
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
