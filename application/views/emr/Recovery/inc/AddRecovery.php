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
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Recovery
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/emr_control/Recovery"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/emr_control/CreateRecovery"
                          method="post">
                        <div id="MRN-INFO"></div>
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Mrn Number</label>
                            <input type='text' placeholder='MRN' name='MRN' class="form-control MRN" required=""/>
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error"
                                  aria-hidden="true"></span>
                        </div>
                       <div class="form-group">
                           <label for="arr_rec">Time Patient arrived Recovery</label>
                           <div class="input-group">
                               <input type="datetime-local" class="form-control" name="arr_rec" id="arr_rec">
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
                                <tr>
                                    <td>
                                        <div class="form-inline">
                                            <div class="input-group">
                                                <input type="text" id="Temp" class="form-control" name="temp[]" placeholder="Temp">
                                                <div class="input-group-addon">
                                                    &deg; C
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td><input type="text" class="form-control" name="pulse[]" placeholder="Pulse"></td>
                                    <td><input type="text" class="form-control" name="bl_p[]" placeholder="BL.p"></td>
                                    <td><input type="text" class="form-control" name="resp[]" placeholder="Resp"></td>
                                    <td><input type="text" class="form-control" name="ox_p[]" placeholder="Ox.p"></td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="form-group">
                            <label>2- level of consciousness</label>
                            <ul class="list-group list-inline">
                                <li class="list-group-item"><input type="radio" name="lev_con" id="consciousness" value="consciousness"><label for="consciousness">consciousness</label></li>
                                <li class="list-group-item"><input type="radio" name="lev_con" id="semi consciousness" value="semi consciousness"><label for="semi consciousness">semi consciousness</label></li>
                                <li class="list-group-item"><input type="radio" name="lev_con" id="coma" value="coma"><label for="coma">coma</label></li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="Check tubes or drains">3- Check tubes or drains</label>
                            <input type="text" class="form-control" name="tubes" id="Check tubes or drains">
                        </div>
                        <div class="form-group">
                            <label for="Check the wound">4- Check the wound</label>
                            <input type="text" class="form-control" name="wound" id="Check the wound">
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
                                <tr>
                                    <td><input type="text" name="type[]" class="form-control" placeholder="Type"></td>
                                    <td><input type="text" name="dose[]" class="form-control" placeholder="Dose"></td>
                                    <td><input type="text" name="rate[]" class="form-control" placeholder="Rate"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <label for="Urine output">6- Urine output</label>
                            <input type="text" class="form-control" name="urine" id="Urine output">
                        </div>
                        <div class="form-group">
                            <label for="body positioning">7- body positioning</label>
                            <input type="text" class="form-control" name="body" id="body positioning">
                        </div>
                        <div class="form-inline">
                            <label for="pain scale">8- pain scale</label>
                            <input type="text" class="form-control" name="scale" id="pain scale">
                            <label for="pain medication">pain medication</label>
                            <input type="text" class="form-control" name="medication" id="pain medication">
                        </div>
                        <div class="form-group">
                            <label for="Monitor for any signs of complications & management">9- Monitor for any signs of complications & management</label>
                            <textarea name="monitor" id="Monitor for any signs of complications & management" class="form-control"></textarea>
                         </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Time to leave recovery room">Time to leave recovery room</label>
                                    <input type="datetime-local" name="leave_rec" id="Time to leave recovery room" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Recovery nurse">Recovery nurse</label>
                                    <input name="rec_nurse" id="Recovery nurse" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Doctor">Doctor</label>
                                    <input name="doctor" id="Doctor" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Word nurse">Word nurse</label>
                                    <input name="word_nurse" id="Word nurse" class="form-control">
                                </div>
                            </div>
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