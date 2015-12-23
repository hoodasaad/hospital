<?php
$value = $contact[0];
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Show Patient MRN:<?= $value->mrn ?></div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td colspan="2">PT's Name: <?= @$patient->name ?></td><td>MRN: <?= @$patient->id ?></td>
                        </tr>
                        <tr>
                            <td>Age: <?= @Patient::ageCalculator(@$patient->age) ?></td><td>Gender: <?= @Patient::Gender()[$patient->gender] ?></td><td>PT's ID: <?= @$patient->pt_id ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?= @$diagnosis->diagnosis ?></td>
                        </tr>
                    </table>
                    <form class="form" role="form" method="post">
                        <div class="form-group">
                            <label class="mws-form-label">Mrn</label>
                            <input type="text" class="form-control" value="<?php echo $value->mrn; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Clinc Name</label>
                            <input type="text" class="form-control" value="<?php echo $value->clinc; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Pregnancy</label>
                            <input type="text" class="form-control" value="<?php echo $value->preg; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Relevant Clincal Data</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Skull bones</label>
                            <input type="text" class="form-control" value="<?php echo $value->skull .":". $value->other_skull; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Orbit</label>
                            <input type="text" class="form-control" value="<?php echo $value->orbit; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Mastoid</label>
                            <input type="text" class="form-control" value="<?php echo $value->mastoid; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">PNS</label>
                            <input type="text" class="form-control" value="<?php echo $value->pns; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">TMJ</label>
                            <input type="text" class="form-control" value="<?php echo $value->tmj; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Mandible</label>
                            <input type="text" class="form-control" value="<?php echo $value->mandible; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Cervical Spine</label>
                            <input type="text" class="form-control" value="<?php echo $value->carvical; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Dorsal Spine</label>
                            <input type="text" class="form-control" value="<?php echo $value->dorsal; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Dorsal-Lumbar Spine</label>
                            <input type="text" class="form-control" value="<?php echo $value->lumbar; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">lumbo-sacral Spine</label>
                            <input type="text" class="form-control" value="<?php echo $value->lumbo; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Coccyx Spine</label>
                            <input type="text" class="form-control" value="<?php echo $value->coccyx; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Sarco-joliac joints</label>
                            <input type="text" class="form-control" value="<?php echo $value->joint; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Ribs</label>
                            <input type="text" class="form-control" value="<?php echo $value->ribs; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Clavical PA</label>
                            <input type="text" class="form-control" value="<?php echo $value->clavical; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Pelvis</label>
                            <input type="text" class="form-control" value="<?php echo $value->pelvis; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Hip</label>
                            <input type="text" class="form-control" value="<?php echo $value->hip; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Acetabulum</label>
                            <input type="text" class="form-control" value="<?php echo $value->acet; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Femur</label>
                            <input type="text" class="form-control" value="<?php echo $value->femur; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Patella</label>
                            <input type="text" class="form-control" value="<?php echo $value->patella; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Tibia Fibula</label>
                            <input type="text" class="form-control" value="<?php echo $value->tibia; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Ankle</label>
                            <input type="text" class="form-control" value="<?php echo $value->ankle; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Feet</label>
                            <input type="text" class="form-control" value="<?php echo $value->feet; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Calcanecus</label>
                            <input type="text" class="form-control" value="<?php echo $value->calc; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Shoulder</label>
                            <input type="text" class="form-control" value="<?php echo $value->shoulder; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Humerus</label>
                            <input type="text" class="form-control" value="<?php echo $value->humerus; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Elbow</label>
                            <input type="text" class="form-control" value="<?php echo $value->elbow; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Forearm</label>
                            <input type="text" class="form-control" value="<?php echo $value->forearm; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Wrist</label>
                            <input type="text" class="form-control" value="<?php echo $value->wrist; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Hand</label>
                            <input type="text" class="form-control" value="<?php echo $value->hand; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Scaphoid View</label>
                            <input type="text" class="form-control" value="<?php echo $value->view; ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Larynx</label>
                            <input type="text" class="form-control" value="<?php echo $value->lary; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">N asopharynx</label>
                            <input type="text" class="form-control" value="<?php echo $value->asopharynx; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Chest</label>
                            <input type="text" class="form-control" value="<?php echo $value->chest; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Salivary Gland</label>
                            <input type="text" class="form-control" value="<?php echo $value->gland; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Abdomen</label>
                            <input type="text" class="form-control" value="<?php echo $value->abdo; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">PUT</label>
                            <input type="text" class="form-control" value="<?php echo $value->put; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">I.V.U</label>
                            <input type="text" class="form-control" value="<?php echo $value->ivu; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Infusion IVU</label>
                            <input type="text" class="form-control" value="<?php echo $value->infusion; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Antegrade Urogram</label>
                            <input type="text" class="form-control" value="<?php echo $value->antegrade; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Retrograde Urogram</label>
                            <input type="text" class="form-control" value="<?php echo $value->retrograde; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Micturating</label>
                            <input type="text" class="form-control" value="<?php echo $value->micturating; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Cyto-Urethroam</label>
                            <input type="text" class="form-control" value="<?php echo $value->cyto; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">CTSCAN</label>
                            <input type="text" class="form-control" value="<?php echo $value->cts .":".$value->cts_other; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Ultrasonography</label>
                            <input type="text" class="form-control" value="<?php echo $value->us .":".$value->us_other; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">U.S.Breast</label>
                            <input type="text" class="form-control" value="<?php echo $value->breast; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Colored Doppler (Duplex)</label>
                            <input type="text" class="form-control" value="<?php echo $value->color .":".$value->color_other; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Upper Limb arterial</label>
                            <input type="text" class="form-control" value="<?php echo $value->upper; ?>" readonly="readonly"/>
                        </div> 
                        <div class="form-group">
                            <label class="mws-form-label">Lower Limb arterial</label>
                            <input type="text" class="form-control" value="<?php echo $value->lower; ?>" readonly="readonly"/>
                        </div> 

                        <div class="form-group">
                            <label class="mws-form-label">Doctor Sign</label>
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