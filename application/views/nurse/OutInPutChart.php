<style>
    th{ vertical-align: middle;text-align: center}
</style>
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
                <div class="block-title"><span class="glyphicon glyphicon-tint"></span> Show All Put Chart <a class="btn btn-success btn-sm" href="<?=base_url()?>index.php/nurse_control/AddPutChart/<?=$All[0]->put_chart_day_id?>"><span class="glyphicon glyphicon-plus"></span></a> </div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td colspan="2">PT's Name: <?=$day->name?></td><td>MRN: <?=$day->id?></td>
                        </tr>
                        <tr>
                            <td>Age: <?=$day->age?></td><td>Gender: <?=$day->gender?></td><td>PT's ID: <?=$day->pt_id?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?=$diagnosis->diagnosis?></td>
                        </tr>
                    </table>
                    <table class="table table-responsive table-hover table-bordered">
                        <thead>
                        <tr>
                            <th><?= $day->date?></th>
                            <th colspan="6">Fluid In</th>
                            <th colspan="6">Fluid Out</th>
                            <th rowspan="3">Nurse Sign</th>
                        </tr>
                        <tr>
                            <th rowspan="2">Time</th>
                            <th colspan="2">Oral</th>
                            <th colspan="2">I. V.</th>
                            <th colspan="2">N. Gtube</th>
                            <th colspan="2">Urin</th>
                            <th colspan="2">N. G. tube</th>
                            <th colspan="2">Other</th>
                        </tr>
                        <tr>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $TotalIn =  0;
                        $TotalOut = 0;
                        foreach ($All as $row) {
                            $TotalIn += (int)$row->oral_am + (int)$row->i_v_am + (int)$row->n_gtube_am;
                            $TotalOut += (int)$row->urin_am + (int)$row->n_g_tube_am + (int)$row->other_am;
                            ?>
                            <tr>
                            <th><?= $row->time?></th>
                            <td><?= $row->oral_am?></td>
                            <td><?= $row->oral_ty?></td>
                            <td><?= $row->i_v_am?></td>
                            <td><?= $row->i_v_ty?></td>
                            <td><?= $row->n_gtube_am?></td>
                            <td><?= $row->n_gtube_ty?></td>
                            <td><?= $row->urin_am?></td>
                            <td><?= $row->urin_ty?></td>
                            <td><?= $row->n_g_tube_am?></td>
                            <td><?= $row->n_g_tube_ty?></td>
                            <td><?= $row->other_am?></td>
                            <td><?= $row->other_ty?></td>
                            <td><?= $row->nurse_sign?></td>
                                </tr>
                        <?php
                        if($row->time == '1 PM' || $row->time == '7 PM' || $row->time == '1 AM' || $row->time == '7 AM'){
                            ?>
                            <tr>
                                <td> Balance</td>
                                <td colspan="13">
                                    TotalIn = <?= $TotalIn?> & Total Out = <?= $TotalOut?>
                                </td>
                            </tr>
                        <?php
                        }
                            if($row->time == '7 AM'){
                            $Am = $TotalIn - $TotalOut;
                                ?>
                                <tr>
                                    <td>24 H. Balance</td>
                                    <td colspan="13">
                                     Total Amount To give = <?= $Am?>
                                    </td>
                                </tr>
                            <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>