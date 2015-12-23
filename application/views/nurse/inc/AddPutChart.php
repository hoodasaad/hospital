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
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add PutChart In <?= $day->date?>
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/nurse_control/FindPutChartDay/<?= $day->id?>"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
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
                    <form class="form" role="form" action="<?= base_url() ?>index.php/nurse_control/CreatePutChart/<?= $day->id?>"
                          method="post">
                        <div class="form-group">
                            <label for="date">Time</label>
                           <div class="row">
                               <div class="col-sm-2">
                                   <select class="form-control" name="time[]">
                                       <?php
                                       for($i=1; $i<=12; $i++){
                                           echo '<option value="'.$i.'">'.$i.'</option>';
                                       }
                                       ?>
                                   </select>
                               </div>
                               <div class="col-sm-2">
                                   <select class="form-control" name="time[]">
                                     <option value="AM">AM</option>
                                     <option value="PM">PM</option>
                                   </select>
                               </div>
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="text-align: center"><u><b>Fluid In</b></u></div>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="oral_am">Oral Amount</label>
                                    <input type="text" class="form-control" name="oral_am" id="oral_am" placeholder="Oral Amount">
                                </div>
                                <div class="col-sm-6">
                                    <label for="oral_ty">Oral Type</label>
                                    <input type="text" class="form-control" name="oral_ty" id="oral_ty" placeholder="Oral Type">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="i_v_am">I. V. Amount</label>
                                    <input type="text" class="form-control" name="i_v_am" id="i_v_am" placeholder="I. V. Amount">
                                </div>
                                <div class="col-sm-6">
                                    <label for="i_v_ty">I. V. Type</label>
                                    <input type="text" class="form-control" name="i_v_ty" id="i_v_ty" placeholder="I. V. Type">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="n_gtube_am">N. Gtube Amount</label>
                                    <input type="text" class="form-control" name="n_gtube_am" id="n_gtube_am" placeholder="N. Gtube Amount">
                                </div>
                                <div class="col-sm-6">
                                    <label for="n_gtube_ty">N. Gtube Type</label>
                                    <input type="text" class="form-control" name="n_gtube_ty" id="n_gtube_ty" placeholder="N. Gtube Type">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="text-align: center"><u><b>Fluid Out</b></u></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="urin_am">Urin Amount</label>
                                    <input type="text" class="form-control" name="urin_am" id="urin_am" placeholder="Urin Amount">
                                </div>
                                <div class="col-sm-6">
                                    <label for="urin_ty">Urin Type</label>
                                    <input type="text" class="form-control" name="urin_ty" id="urin_ty" placeholder="Urin Type">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="n_g_tube_am">N. G. tube Amount</label>
                                    <input type="text" class="form-control" name="n_g_tube_am" id="n_g_tube_am" placeholder="N. G. tube Amount">
                                </div>
                                <div class="col-sm-6">
                                    <label for="n_g_tube_ty">N. G. tube Type</label>
                                    <input type="text" class="form-control" name="n_g_tube_ty" id="n_g_tube_ty" placeholder="N. G. tube Type">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="other_am">Other Amount</label>
                                    <input type="text" class="form-control" name="other_am" id="other_am" placeholder="Other Amount">
                                </div>
                                <div class="col-sm-6">
                                    <label for="other_ty">Other Type</label>
                                    <input type="text" class="form-control" name="other_ty" id="other_ty" placeholder="Other Type">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nurse_sign">Nurse Sign</label>
                            <input type="text" class="form-control" name="nurse_sign" id="nurse_sign" placeholder="Nurse Sign">
                        </div>
                        <div class="mws-button-row">
                            <input type="submit" value="Add Patient" class="btn btn-success btn-submit">
                            <input type="reset" value="Reset" class="btn">
                            <input type="hidden" class="ok" value="1">
                            <div class="error_message"></div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>