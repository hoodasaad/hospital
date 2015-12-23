<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php
            if($this->session->flashdata('error')){
                ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> <?= $this->session->flashdata('error')?>
                </div>
            <?php } ?>
            <?php
            if($this->session->flashdata('done')){
                ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Well done!</strong> <?= $this->session->flashdata('done')?>
                </div>
            <?php } ?>
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Monitor ring
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/emr_control/BloodRequests"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <thead>
                        <tr>
                            <th>Time</th>
                            <th>Temp</th>
                            <th>Pulse</th>
                            <th>B.L P</th>
                            <th>Resp</th>
                            <th>Sign</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $times = [];
                        foreach($All as $row)
                        {
                            $times[] = $row->time;
                            echo '<tr>
                            <td>'.MonitorRing::Time()[$row->time].'</td>
                            <td>'.$row->temp.'</td>
                            <td>'.$row->pulse.'</td>
                            <td>'.$row->b_l_p.'</td>
                            <td>'.$row->resp.'</td>
                            <td>'.$row->sign.'</td>
                            </tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php if(count($times) != 4){?>
                        <hr />
                    <form class="form" role="form" action="<?= base_url() ?>index.php/emr_control/CreateMonitorRing"
                          method="post">
                        <div class="form-group">
                            <label class="mws-form-label">Time</label>
                            <select name="time" class="form-control">
                                <?php
                                foreach(MonitorRing::Time() as $key=>$value){
                                    if(in_array($key,$times)){continue;}
                                    echo ' <option value="'.$key.'">'.$value.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Temp</label>
                                    <div class="input-group">
                                    <input type="text" name="temp" id="Temp" placeholder="Temp" class="form-control">
                                        <div class="input-group-addon">&deg; C</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Pulse</label>
                                    <input type="text" name="pulse" placeholder="Pulse" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>B L. P</label>
                                    <input type="text" name="b_l_p" placeholder="B.L P" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Resp</label>
                                    <input type="text" name="resp" placeholder="Resp" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Sign</label>
                                    <input type="text" name="sign" placeholder="Sign" class="form-control">
                                </div>
                            </div>
                        </div>
                            <input type='hidden'  name='blood_trams_fusion_id' value="<?= $blood_trams_fusion_id;?>" />
                        <div class="mws-button-row">
                            <input type="submit" value="Add Patient" class="btn btn-success btn-submit">
                            <input type="reset" value="Reset" class="btn">
                            <input type="hidden" class="ok" value="0">
                            <div class="error_message"></div>
                        </div>
                    </form>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>