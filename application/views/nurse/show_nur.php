<?php
$value = $contact[0];
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Patient MRN:<?= $value->mrn ?></div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td colspan="2">PT's Name: <?= @$patient->name ?></td><td>MRN: <?= @$patient->id ?></td>
                        </tr>
                        <tr>
                            <td>Age: <?= @$patient->age ?></td><td>Gender: <?= @Patient::Gender()[$patient->gender] ?></td><td>PT's ID: <?= @$patient->pt_id ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?= @$diagnosis->diagnosis ?></td>
                        </tr>
                    </table>
                    <form class="mws-form" action="">
                        <div class="form-group">
                            <label class="mws-form-label">Pationt_Mrn</label>
                            <input readonly="readonly" type='text' placeholder='Pationt_Mrn' name='Pationt_Id' class="form-control" value="<?= $value->mrn ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Allegy</label>
                            <div class="input-group">
                                <input readonly="readonly" type='text' placeholder='Allegy' name='allegy' class="form-control" value="<?php echo $value->allegy; ?>" />
                                <div class="input-group-addon">medication taken</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">1-</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input readonly="readonly" type='text' class="form-control" placeholder='First Medical' name='number_1[]' value="<?php echo $value->number_1; ?>"/>
                                </div>
                                <div class="col-sm-4">
                                    <input readonly="readonly" type='text' class="form-control" placeholder='Dose' name='dose_1[]' value="<?php echo $value->dose_1; ?>"/>
                                </div>
                                <div class="col-sm-4">
                                    <input readonly="readonly" type='text' class="form-control" placeholder='Last Time' name='time_1[]' value="<?php echo $value->time_1; ?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">WT</label>
                            <div class="input-group">
                                <input readonly="readonly" type='text' placeholder='WT' name='wt' class="form-control" value="<?php echo $value->wt; ?>"/>
                                <div class="input-group-addon">K.G</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">hT</label>
                            <div class="input-group">
                                <input readonly="readonly" type='text' placeholder='hT' name='ht' class="form-control" value="<?php echo $value->ht; ?>"/>
                                <div class="input-group-addon">C.m</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Temp</label>
                            <input readonly="readonly" type='text' placeholder='temp' name='temp' class="form-control" value="<?php echo $value->temp; ?>"/>

                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">BP</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input readonly="readonly" type='text' class="form-control" placeholder='Systolic' name='min' value="<?php echo $value->min ?> "/>
                                </div>
                                <div class="col-sm-4">
                                    <input readonly="readonly" type='text' class="form-control" placeholder='Diastolic' name='max' value="<?php echo $value->max ?> "/>
                                </div>
                                <div class="col-sm-4">
                                    <label>MMHG</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">P</label>
                            <div class="input-group">
                                <input readonly="readonly" type='text' placeholder='P' name='p' class="form-control" value="<?php echo $value->p ?> "/>
                                <div class="input-group-addon"> b/m</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">RR</label>
                            <div class="input-group">
                                <input readonly="readonly" type='text' placeholder='RR' name='rr' class="form-control" value="<?php echo $value->rr ?> "/>
                                <div class="input-group-addon">  b/m</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">P OX</label>
                            <input readonly="readonly" type='text' placeholder='P OX' name='pox' class="form-control" value="<?php echo $value->pox ?> "/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Pain</label>
                            <input readonly="readonly" type="text" class="form-control" value="<?php echo $value->pain; ?> /10" >
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Pt's Complain </label>
                            <textarea readonly="readonly" name='complain' rows="auto" cols="auto" class="form-control"><?php echo $value->complain; ?> </textarea>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Nurse Signature</label>
                            <input readonly="readonly" type='text' placeholder='Nurse Signature' name='sign' class="form-control" value="<?php echo $value->sign; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Time &Date</label>
                            <input readonly="readonly" type="text" class="form-control" value="<?php echo $value->time; ?> ">
                        </div>

                </div >
                </form>
            </div>
        </div>
    </div>
</div>