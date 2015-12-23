<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Show Recovery
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/dr_control/Recovery"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" action=""
                          method="post">
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
                       <div class="form-group">
                           <label for="arr_rec">Time Patient arrived Recovery</label>
                           <div class="input-group">
                               <input readonly type="text" class="form-control" name="arr_rec" id="arr_rec" value="<?=$Recovery->arr_rec?>">
                               <div class="input-group-addon">
                                   <i class="glyphicon glyphicon-time"></i>
                               </div>
                           </div>
                       </div>
                        <label>Patient monitoring</label>
                        <div class="form-group">
                            <label>1- Vital signs</label>
                            <table class="table table-responsive table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Temp</th>
                                    <th>Pulse</th>
                                    <th>BL. p</th>
                                    <th>Resp</th>
                                    <th>Ox.p</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $temp = explode(',',$Recovery->temp);
                                $pulse = explode(',',$Recovery->pulse);
                                $bl_p   = explode(',',$Recovery->bl_p);
                                $resp   = explode(',',$Recovery->resp);
                                $ox_p   = explode(',',$Recovery->ox_p);
                                for($i=0; $i<count($temp); $i++)
                                {
                                ?>
                                <tr>
                                    <td>
                                        <div class="form-inline">
                                            <div class="input-group">
                                                <input readonly type="text" id="Temp" class="form-control" name="temp" placeholder="Temp" value="<?=$temp[$i]?>">
                                                <div class="input-group-addon">
                                                    &deg; C
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><input readonly type="text" class="form-control" name="pulse" placeholder="Pulse" value="<?=$pulse[$i]?>"></td>
                                    <td><input readonly type="text" class="form-control" name="bl_p" placeholder="BL.p" value="<?=$bl_p[$i]?>"></td>
                                    <td><input readonly type="text" class="form-control" name="resp" placeholder="Resp" value="<?=$resp[$i]?>"></td>
                                    <td><input readonly type="text" class="form-control" name="ox_p" placeholder="Ox.p" value="<?=$ox_p[$i]?>"></td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <label>2- level of consciousness</label>
                            <ul class="list-group list-inline">
                                <li class="list-group-item"><?=$Recovery->lev_con?></li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="Check tubes or drains">3- Check tubes or drains</label>
                            <input readonly type="text" class="form-control" name="tubes" id="Check tubes or drains" value="<?=$Recovery->tubes?>">
                        </div>
                        <div class="form-group">
                            <label for="Check the wound">4- Check the wound</label>
                            <input readonly type="text" class="form-control" name="wound" id="Check the wound" value="<?=$Recovery->wound?>">
                        </div>
                        <div class="form-group">
                            <label>5- intravenous (IV) infusions</label>
                            <table class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Dose</th>
                                    <th>Rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $type   = explode(',',$Recovery->type);
                                $dose   = explode(',',$Recovery->dose);
                                $rate   = explode(',',$Recovery->rate);
                                for($i=0; $i<count($type); $i++)
                                {
                                ?>
                                <tr>
                                    <td><input readonly type="text" name="type[]" class="form-control" placeholder="Type" value="<?=$type[$i]?>"></td>
                                    <td><input readonly type="text" name="dose[]" class="form-control" placeholder="Dose" value="<?=$dose[$i]?>"></td>
                                    <td><input readonly type="text" name="rate[]" class="form-control" placeholder="Rate" value="<?=$rate[$i]?>"></td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <label for="Urine output">6- Urine output</label>
                            <input readonly type="text" class="form-control" name="urine" id="Urine output" value="<?=$Recovery->urine?>">
                        </div>
                        <div class="form-group">
                            <label for="body positioning">7- body positioning</label>
                            <input readonly type="text" class="form-control" name="body" id="body positioning" value="<?=$Recovery->body?>">
                        </div>
                        <div class="form-inline">
                            <label for="pain scale">8- pain scale</label>
                            <input readonly type="text" class="form-control" name="scale" id="pain scale" value="<?=$Recovery->scale?>">
                            <label for="pain medication">pain medication</label>
                            <input readonly type="text" class="form-control" name="medication" id="pain medication" value="<?=$Recovery->medication?>">
                        </div>
                        <div class="form-group">
                            <label for="Monitor for any signs of complications & management">9- Monitor for any signs of complications & management</label>
                            <textarea name="monitor" id="Monitor for any signs of complications & management" class="form-control"><?=$Recovery->monitor?></textarea>
                         </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Time to leave recovery room">Time to leave recovery room</label>
                                    <input readonly name="leave_rec" id="Time to leave recovery room" class="form-control" value="<?=$Recovery->leave_rec?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Recovery nurse">Recovery nurse</label>
                                    <input readonly name="rec_nurse" id="Recovery nurse" class="form-control" value="<?=$Recovery->rec_nurse?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Doctor">Doctor</label>
                                    <input readonly name="doctor" id="Doctor" class="form-control" value="<?=$Recovery->doctor?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Word nurse">Word nurse</label>
                                    <input readonly name="word_nurse" id="Word nurse" class="form-control" value="<?=$Recovery->word_nurse?>">
                                </div>
                            </div>
                        </div>
                        <div class="mws-button-row">
                            <input readonly type="submit" value="Add Patient" class="btn btn-success btn-submit">
                            <input readonly type="reset" value="Reset" class="btn">
                            <input readonly type="hidden" class="ok" value="0">
                            <div class="error_message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>