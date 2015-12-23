<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php
            if ($this->session->flashdata('error')) {
                ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> <?= $this->session->flashdata('error') ?>
                </div>
            <?php } ?>
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Record
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/sur_control/RecordAnesthesia"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td colspan="2">PT's Name: <?=@$patient->name?></td><td>MRN: <?=@$patient->id?></td>
                        </tr>
                        <tr>
                            <td>Age: <?=@Patient::ageCalculator(@$patient->age)?></td><td>Gender: <?=@Patient::Gender()[$patient->gender]?></td><td>PT's ID: <?=@$patient->pt_id?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?=@$diagnosis->diagnosis?></td>
                        </tr>
                    </table>
                    <form class="form" role="form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Surgical procedure</label>
                                    <input type='text' readonly value="<?= $Record->sur_pro?>" placeholder='Surgical procedure' name='sur_pro'
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Date</label>
                                    <input type='text' readonly placeholder='date' value="<?= $Record->date?>" name='date' class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Type of surgical anesthesia (Check all that apply)</label>

                            <div class="">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <?= $Record->type_sur?>
                                            </div>
                                            <div class="col-sm-4">
                                                <?php if($Record->type_sur == "General anesthesia"){?>
                                                <div class="form-inline"><label>Induction Time: </label><input
                                                        type="text" readonly placeholder="Time" class="form-control"
                                                        name="ind_time" value="<?=$Record->ind_time?>"></div>
                                                <?php
                                                }elseif($Record->type_sur == "Regional anesthesia"){
                                                    ?>
                                                    <div class="form-inline"><label>Time Block administered: </label><input
                                                            type="text" readonly placeholder="Time" class="form-control"
                                                            name="time_block"></div>
                                                <?php
                                                }?>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                                <?php
                                if($Record->type_sur == "Regional anesthesia"){
                                ?>
                                <div>
                                    <ul class="list-group">
                                    <label>Type of Block</label>
                                    <li class="list-group-item">
                                        <?= $Record->reg_ans?>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-group">
                                    <label>Quality of Block</label>
                                    <li class="list-group-item">
                                        <?= $Record->quality_block?>
                                    </li>
                                </ul>
                            </div>
                        <?php }?>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Anesthesia Start time</label>
                                    <input type="text" readonly class="form-control" value="<?= $Record->ans_start_time?>" name="ans_start_time"
                                           placeholder="Anesthesia Start time">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Anesthesia End time</label>
                                    <input type="text" readonly class="form-control" value="<?= $Record->ans_end_time?>" name="ans_end_time"
                                           placeholder="Anesthesia End time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Surgery Start time</label>
                                    <input type="text" readonly class="form-control" value="<?= $Record->sur_start_time?>" name="sur_start_time"
                                           placeholder="Surgery Start time">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Surgery End time</label>
                                    <input type="text" readonly class="form-control" value="<?= $Record->sur_end_time?>" name="sur_end_time"
                                           placeholder="Surgery End time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Irrigant used for arthroscopy</label>
                            <div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                                <?=$Record->irr_arth?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Intraoperative monitors</label>
                            <div>
                                <ul class="list-group">
                                    <?php
                                    foreach(explode(',',$Record->int_mon)  as $int_mon){
                                        ?>
                                    <li class="list-group-item">
                                        <label for="Noninvasive blood pressure cuff"><?= $int_mon?></label>
                                        <?php if($int_mon == "Noninvasive blood pressure cuff" || $int_mon == "Noninvasive continuous blood pressure" || $int_mon == "Arterial catheter ( A-line )"){?>
                                        <div>
                                            <label>Location</label>
                                            <ul class="list-group list-inline">
                                                <li class="list-group-item">
                                                     <label for="Upper arm"> <?= $Record->blo_loc?> </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php } ?>
                                        <?php if($int_mon == "Noninvasive continuous blood pressure"){?>
                                            <div>
                                                <label>Location</label>
                                                <ul class="list-group list-inline">
                                                    <li class="list-group-item">
                                                        <label for="Upper arm"> <?= $Record->con_loc?> </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php } ?>
                                        <?php if($int_mon == "Arterial catheter ( A-line )"){?>
                                            <div>
                                                <label>Location</label>
                                                <ul class="list-group list-inline">
                                                    <li class="list-group-item">
                                                        <label for="Upper arm"> <?= $Record->cat_loc?> </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php } ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Airway device during maintenance of anesthesia</label>
                            <ul class="list-group list-inline">
                                <li class="list-group-item">
                                    <label for="Endotracheal tube"><?= $Record->air_ans?></label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label>Intraoperative ventilation</label>
                            <ul class="list-group list-inline">
                                <li class="list-group-item">
                                    <label for="Patient was breathing spontaneously"><?= $Record->int_ven?></label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>Premedication</th>
                                    <th>Drug</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $drugs = explode(',',$Record->pre_drug);
                                $dose = explode(',',$Record->pre_dose);
                                $count = count($drugs);
                                for($i=0; $i<$count; $i++){
                                ?>
                                <tr>
                                    <td><?=$drugs[$i]?></td>
                                    <td><input type="checkbox" checked disabled value="Midazolam" name="pre_drug[]"></td>
                                    <td><input type="text" readonly name="pre_dose[]" class="form-control" value="<?=$dose[$i]?>"></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>Inhalation</th>
                                    <th>Used for maintenance</th>
                                    <th>If available , range of ET concentration</th>
                                    <th>If ET not available , range of inspired concentration</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $inh_age = explode(',',$Record->inh_age);
                                $age_if_avail = explode(',',$Record->age_if_avail);
                                $inh_age_avail = explode(',',$Record->inh_age_avail);
                                $value = [];
                                for($i=0; $i<count($inh_age_avail); $i++){
                                    if($inh_age_avail[$i] !=''){
                                        $value[] = $inh_age_avail[$i];
                                    }
                                }
                                for($i=0; $i<count($inh_age); $i++)
                                {
                                ?>
                                <tr>
                                    <td><?=$inh_age[$i]?></td>
                                    <td><input type="checkbox" checked disabled  value="Desflurane" name="inh_age[]"></td>
                                    <td><input type="text" readonly class="form-control" name="inh_age_avail[]" value="<?php if($age_if_avail[$i] == 1){echo $value[$i];}?>"></td>
                                    <td><input type="text" readonly class="form-control" name="inh_age_not_avail[]" value="<?php if($age_if_avail[$i] == 2){echo $value[$i];}?>"></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                                </table>
                            </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th rowspan="2">Opioids</th>
                                    <th colspan="2">Maintenance</th>
                                    <th colspan="2">Maintenance</th>
                                </tr>
                                <tr>
                                    <th>Bolus</th>
                                    <th>Dose</th>
                                    <th>Infusion</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $opi_bolus = explode(',',$Record->opi_bolus);
                                $opi_bolus_dose = explode(',',$Record->opi_bolus_dose);
                                $opi_inf = explode(',',$Record->opi_inf);
                                $opi_inf_dose = explode(',',$Record->opi_inf_dose);
                                for($i=0; $i<count($opi_bolus); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?= @$opi_bolus[$i]?></td>
                                    <td><input type="text" readonly class="form-control" name="opi_bolus_dose[]" value="<?=@$opi_bolus_dose[$i]?>"></td>
                                    <td><?=@$opi_inf[$i]?></td>
                                    <td><input type="text" readonly class="form-control" name="opi_inf_dose[]" value="<?=@$opi_inf_dose[$i]?>"></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                                </table>
                            </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th rowspan="2">Other Aneshetic Agents</th>
                                    <th colspan="2">Maintenance</th>
                                </tr>
                                <tr>
                                    <th>Infusion</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $other_ans = explode(',',$Record->other_ans);
                                $other_ans_dose = explode(',',$Record->other_ans_dose);
                                for($i=0; $i<count($other_ans); $i++)
                                {
                                ?>
                                <tr>
                                    <td><?= $other_ans[$i]?></td>
                                    <td><input type="checkbox" checked disabled value="Propofol" name="other_ans[]"></td>
                                    <td><input type="text" readonly class="form-control" name="other_ans_dose[]" value="<?= $other_ans_dose[$i]?>"></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                </table>
                            </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th rowspan="2">Vasopressors</th>
                                    <th colspan="2">Maintenance</th>
                                    <th colspan="2">Maintenance</th>
                                </tr>
                                <tr>
                                    <th>Bolus</th>
                                    <th>Dose</th>
                                    <th>Infusion</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $vas_bolus = explode(',',$Record->vas_bolus);
                                $vas_bolus_dose = explode(',',$Record->vas_bolus_dose);
                                $vas_inf = explode(',',$Record->vas_inf);
                                $vas_inf_dose = explode(',',$Record->vas_inf_dose);
                                for($i=0; $i<count($vas_bolus); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?= $vas_bolus[$i]?></td>
                                    <td><input type="text" readonly class="form-control" name="vas_bolus_dose[]" value="<?= $vas_bolus_dose[$i]?>"></td>
                                    <td><?= $vas_inf[$i]?></td>
                                    <td><input type="text" readonly class="form-control" name="vas_inf_dose[]" value="<?=$vas_inf_dose[$i]?>"></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th rowspan="2">Other Vasoactive Agents (specify agent)</th>
                                    <th colspan="2">intuction</th>
                                    <th colspan="2">Maintenance</th>
                                    <th colspan="2">Maintenance</th>
                                </tr>
                                <tr>
                                    <th>Bolus</th>
                                    <th>Dose</th>
                                    <th>Bolus</th>
                                    <th>Dose</th>
                                    <th>Infusion</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $other_vas_age_ind_bolus = explode(',',$Record->other_vas_age_ind_bolus);
                                $other_vas_age_ind_bolus_dose = explode(',',$Record->other_vas_age_ind_bolus_dose);
                                $other_vas_age_main_bolus = explode(',',$Record->other_vas_age_main_bolus);
                                $other_vas_age_main_bolus_dose = explode(',',$Record->other_vas_age_main_bolus_dose);
                                $other_vas_age_main_inf = explode(',',$Record->other_vas_age_main_inf);
                                $other_vas_age_main_inf_dose = explode(',',$Record->other_vas_age_main_inf_dose);
                                for($i=0; $i<count($other_vas_age_ind_bolus); $i++){
                                ?>
                                <tr>
                                    <td>

                                    </td>
                                    <td><?=@$other_vas_age_ind_bolus[$i]?></td>
                                    <td><input type="text" readonly class="form-control" name="other_vas_age_ind_bolus_dose[]" value="<?=@$other_vas_age_ind_bolus_dose[$i]?>"></td>
                                    <td><?=@$other_vas_age_main_bolus[$i]?></td>
                                    <td><input type="text" readonly class="form-control" name="other_vas_age_main_bolus_dose[]" value="<?=@$other_vas_age_main_bolus_dose[$i]?>"></td>
                                    <td><?=@$other_vas_age_main_inf[$i]?></td>
                                    <td><input type="text" readonly class="form-control" name="other_vas_age_main_inf_dose[]" value="<?=@$other_vas_age_main_inf_dose[$i]?>"></td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="mws-button-row">
                            <input type="submit" value="Add Patient" class="btn btn-success btn-submit">
                            <input type="reset" value="Reset" class="btn">
                            <input type="hidden" class="ok" value="0">
                            <div class="error_message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>