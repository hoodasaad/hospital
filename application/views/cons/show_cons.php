<?php
$value = $contact[0];
    ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Patient MRN:<?= $value->mrn?></div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
    <tr>
        <td colspan="2">PT's Name: <?=@$patient->name?></td><td>MRN: <?=@$patient->id?></td>
    </tr>
    <tr>
        <td>Age: <?=@$patient->age?></td><td>Gender: <?=@Patient::Gender()[$patient->gender]?></td><td>PT's ID: <?=@$patient->pt_id?></td>
    </tr>
    <tr>
        <td colspan="3">Diagnosis: <?=@$diagnosis->diagnosis?></td>
    </tr>
</table>
                    <form class="form" role="form" method="post">
                            <div class="form-group">
                                <label class="mws-form-label">Mrn</label>
                                    <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Constitutional</label>
                                    <input type="text" class="form-control" value="<?php echo $value->consit; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Eyes</label>
                                    <input type="text" class="form-control" value="<?php echo $value->eye; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">ENT</label>
                                    <input type="text" class="form-control" value="<?php echo $value->ent; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Cardiovascular</label>
                                    <input type="text" class="form-control" value="<?php echo $value->card; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Respiratory</label>
                                    <input type="text" class="form-control" value="<?php echo $value->resp; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">GI</label>
                                    <input type="text" class="form-control" value="<?php echo $value->gi; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">GU</label>
                                    <input type="text" class="form-control" value="<?php echo $value->gu; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Male</label>
                                    <input type="text" class="form-control" value="<?php echo $value->male; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Female</label>
                                    <input type="text" class="form-control" value="<?php echo $value->female; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">musculoskeletal</label>
                                    <input type="text" class="form-control" value="<?php echo $value->musc; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Skin/breast</label>
                                    <input type="text" class="form-control" value="<?php echo $value->skin; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Neuro</label>
                                    <input type="text" class="form-control" value="<?php echo $value->neuro; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Psych</label>
                                    <input type="text" class="form-control" value="<?php echo $value->psych; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Endocrine</label>
                                    <input type="text" class="form-control" value="<?php echo $value->endo; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Heme/Lymph</label>
                                    <input type="text" class="form-control" value="<?php echo $value->heme; ?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Immunologic/Allergic</label>
                                    <input type="text" class="form-control" value="<?php echo $value->immu; ?>" readonly="readonly"/>
                            </div>

                            <div class="form-group">
                                <label class="mws-form-label">Physical Exam</label>
                                    <textarea rows="auto" cols="auto" class="form-control" readonly="readonly"><?php echo $value->physical; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Laboratory &radiology results</label>
                                    <textarea rows="auto" cols="auto" class="form-control"readonly="readonly"><?php echo $value->labor; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Consultant diagnosis</label>
                                    <textarea rows="auto" cols="auto" class="form-control"  readonly="readonly"><?php echo $value->diag; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Recommendation</label>
                                    <textarea rows="auto" cols="auto" class="form-control"  readonly="readonly"><?php echo $value->recom; ?></textarea>
                            </div>
                        <?php
                        
                        $drug = explode(':', $value->drug_1);
                        $dose_1 = explode(":", $value->dose_1);
                        $freq_1 = explode(":", $value->freq_1);
                        $dur_1 = explode(":", $value->dur_1);
                        $route_1 = explode(":", $value->route_1);
                        $instruct_1 = explode(":", $value->instruct_1);
                                for($i=0; $i<count($drug); $i++){
                        ?>
                            <div class="form-group">
                                <label class="mws-form-label"> Medictaion :- Drug</label>
                            </div>
                                
                            <div class="mws-form-inline">
                                <div class="form-group">
                                    <label class="mws-form-label"><?php echo"Drug :-" . $drug[$i]; ?></label>
                                    <div class="mws-form-item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" value="<?php echo "Dose :-" .$dose_1[$i]; ?>" readonly="readonly" />
                                            </div>
                                            <div class="col-sm-3">
                                                <input type='text' class="form-control" value="<?php echo"Freq :-" . $freq_1[$i]; ?>" readonly="readonly" />
                                            </div>
                                            <div class="col-sm-3">
                                                <input type='text' class="form-control" value="<?php echo "Duration :-" .$dur_1[$i] ; ?>" readonly="readonly"/>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type='text' class="form-control" value="<?php echo "route :-" .$route_1[$i] ; ?>" readonly="readonly"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                           
                            <div class="form-group">
                                <label class="mws-form-label">Instruction</label>
                                <input type="text" class="form-control" value="<?php echo $instruct_1[$i] ; ?>" readonly="readonly"/>
                            </div>
                                <?php
                                }
                         ?>
                            <div class="form-group">
                                <label class="mws-form-label">Consultant</label>
                                    <input type="text" class="form-control" value="<?php echo $value->sign; ?> " readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Time &Date</label>
                                    <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                            </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>