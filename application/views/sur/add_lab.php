<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Laboratory Request</div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/sur_control/add_lab"
                          method="post">
                        <div id="MRN-INFO"></div>                 
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Pationt_Mrn</label>
                            <input type='text' placeholder='Pationt_Mrn' name='mrn' class="form-control MRN"/>
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error"
                                  aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Clinc Name</label>
                            <input type='text' placeholder='Clink Name' name='clinc' class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Laboratory Request</label>
                            <ul id="list_lab">
                                <li><input type="checkbox" name="lab[]" value="CBC"> <label>CBC</label></li>
                                <li><input type="checkbox" name="lab[]" value="TLC"> <label>TLC</label></li>
                                <li><input type="checkbox" name="lab[]" value="RBCs"> <label>RBCs</label></li>
                                <li><input type="checkbox" name="lab[]" value="HB %"> <label>HB %</label></li>
                                <li><input type="checkbox" name="lab[]" value="HCT"> <label>HCT</label></li>
                                <li><input type="checkbox" name="lab[]" value="PLT"> <label>PLT</label></li>
                                <li><input type="checkbox" name="lab[]" value="Differential Count"> <label>Differential Count</label></li>
                                <li><input type="checkbox" name="lab[]" value="Reticulocytic"> <label>Reticulocytic</label></li>
                                <li><input type="checkbox" name="lab[]" value="HB Electrophoresis"> <label>HB Electrophoresis</label></li>
                                <li><input type="checkbox" name="lab[]" value="Osmotic Fragility test"> <label>Osmotic Fragility test</label></li>
                                <li><input type="checkbox" name="lab[]" value="G6PD enzyme"> <label>G6PD enzyme</label></li>
                                <li><input type="checkbox" name="lab[]" value="Film for Malaria"> <label>Film for Malaria</label></li>
                                <li><input type="checkbox" name="lab[]" value="Coomb's test(D/"> <label>Coomb's test(D/</label></li>
                                <li><input type="checkbox" name="lab[]" value="Serum Ferrtin"> <label>Serum Ferrtin</label></li>
                                <li><input type="checkbox" name="lab[]" value="BT & Ct"> <label>BT & Ct</label></li>
                                <li><input type="checkbox" name="lab[]" value="PT & C/INR"> <label>PT & C/INR</label></li>
                                <li><input type="checkbox" name="lab[]" value="P.T.T"> <label>P.T.T</label></li>
                                <li><input type="checkbox" name="lab[]" value="Fibrinogen"> <label>Fibrinogen</label></li>
                                <li><input type="checkbox" name="lab[]" value="FDPs"> <label>FDPs</label></li>
                                <li><input type="checkbox" name="lab[]" value="D dimer"> <label>D dimer</label></li>
                                <li><input type="checkbox" name="lab[]" value="E S R"> <label>E S R</label></li>
                                <li><input type="checkbox" name="lab[]" value="Bone Marrow: asp&"> <label>Bone Marrow: asp&</label></li>
                                <li><input type="checkbox" name="lab[]" value="Bence Jones Proteins"> <label>Bence Jones Proteins</label></li>
                                <li><input type="checkbox" name="lab[]" value="Cholesterol"> <label>Cholesterol</label></li>
                                <li><input type="checkbox" name="lab[]" value="Triglyceride"> <label>Triglyceride</label></li>
                                <li><input type="checkbox" name="lab[]" value="HDL"> <label>HDL</label></li>
                                <li><input type="checkbox" name="lab[]" value="LDL"> <label>LDL</label></li>
                                <li><input type="checkbox" name="lab[]" value="CKMB"> <label>CKMB</label></li>
                                <li><input type="checkbox" name="lab[]" value="CPK"> <label>CPK</label></li>
                                <li><input type="checkbox" name="lab[]" value="LDH"> <label>LDH</label></li>
                                <li><input type="checkbox" name="lab[]" value="Bilirubin(total-direct)"> <label>Bilirubin(total-direct)</label></li>
                                <li><input type="checkbox" name="lab[]" value="SGOT"> <label>SGOT</label></li>
                                <li><input type="checkbox" name="lab[]" value="SGPT"> <label>SGPT</label></li>
                                <li><input type="checkbox" name="lab[]" value="GGT"> <label>GGT</label></li>
                                <li><input type="checkbox" name="lab[]" value="ALP"> <label>ALP</label></li>
                                <li><input type="checkbox" name="lab[]" value="Total Protein"> <label>Total Protein</label></li>
                                <li><input type="checkbox" name="lab[]" value="Albumin"> <label>Albumin</label></li>
                                <li><input type="checkbox" name="lab[]" value="Urea"> <label>Urea</label></li>
                                <li><input type="checkbox" name="lab[]" value="Creatinine"> <label>Creatinine</label></li>
                                <li><input type="checkbox" name="lab[]" value="Creatinine Clearance"> <label>Creatinine Clearance</label></li>
                                <li><input type="checkbox" name="lab[]" value="Albumin in 24 h Urine"> <label>Albumin in 24 h Urin</label></li>
                                <li><input type="checkbox" name="lab[]" value="Na+"> <label>Na+</label></li>
                                <li><input type="checkbox" name="lab[]" value="K+"> <label>K+</label></li>
                                <li><input type="checkbox" name="lab[]" value="Mg++"> <label>Mg++</label></li>
                                <li><input type="checkbox" name="lab[]" value="Ca++(Total-Ionized)"> <label>Ca++(Total-Ionized)</label></li>
                                <li><input type="checkbox" name="lab[]" value="Phosphrous"> <label>Phosphrous</label></li>
                                <li><input type="checkbox" name="lab[]" value="Uric acid"> <label>Uric acid</label></li>
                                <li><input type="checkbox" name="lab[]" value="ABG(Art.BI.Gases)"> <label>ABG(Art.BI.Gases)</label></li>
                                <li><input type="checkbox" name="lab[]" value="F B S"> <label>F B S</label></li>
                                <li><input type="checkbox" name="lab[]" value="2h PPs"> <label>2h PPs</label></li>
                                <li><input type="checkbox" name="lab[]" value="RB S"> <label>RB S</label></li>
                                <li><input type="checkbox" name="lab[]" value="HB AIC"> <label>HB AIC</label></li>
                                <li><input type="checkbox" name="lab[]" value="Lactate"> <label>Lactate</label></li>
                                <li><input type="checkbox" name="lab[]" value="Amylase enzyme"> <label>Amylase enzyme</label></li>
                                <li><input type="checkbox" name="lab[]" value="Urine analysis"> <label>Urine analysis</label></li>
                                <li><input type="checkbox" name="lab[]" value="Urine C & S"> <label>Urine C & S</label></li>
                                <li><input type="checkbox" name="lab[]" value="Gram Stain"> <label>Gram Stain</label></li>
                                <li><input type="checkbox" name="lab[]" value="Prostatic discharge"> <label>Prostatic discharge</label></li>
                                <li><input type="checkbox" name="lab[]" value="Blood Culture"> <label>Blood Culture</label></li>
                                <li><input type="checkbox" name="lab[]" value="Zeil Nelson Stain"> <label>Zeil Nelson Stain</label></li>
                                <li><input type="checkbox" name="lab[]" value="Stool analysis"> <label>Stool analysis</label></li>
                                <li><input type="checkbox" name="lab[]" value="Occult blood in Stool"> <label>Occult blood in Stool</label></li>
                                <li><input type="checkbox" name="lab[]" value="Widal Test"> <label>Widal Test</label></li>
                                <li><input type="checkbox" name="lab[]" value="Preg Test (urine-blood)"> <label>Preg Test (urine-blood)</label></li>
                                <li><input type="checkbox" name="lab[]" value="Semen analysis"> <label>Semen analysis</label></li>
                                <li><input type="checkbox" name="lab[]" value="Monospot test"> <label>Monospot test</label></li>
                                <li><input type="checkbox" name="lab[]" value="Blood Group"> <label>Blood Group</label></li>
                                <li><input type="checkbox" name="lab[]" value="RH Factor"> <label>RH Factor</label></li>
                                <li><input type="checkbox" name="lab[]" value="CRP (Qualitative)"> <label>CRP (Qualitative)</label></li>
                                <li><input type="checkbox" name="lab[]" value="CRP (Ultasensitive)"> <label>CRP (Ultasensitive)</label></li>
                                <li><input type="checkbox" name="lab[]" value="ASOT"> <label>ASOT</label></li>
                                <li><input type="checkbox" name="lab[]" value="Rhematoid factor"> <label>Rhematoid factor</label></li>
                                <li><input type="checkbox" name="lab[]" value="Brucella Test"> <label>Brucella Test</label></li>
                                <li><input type="checkbox" name="lab[]" value="Helicobacter Pylori test"> <label>Helicobacter Pylori test</label></li>
                                <li><input type="checkbox" name="lab[]" value="T3"> <label>T3</label></li>
                                <li><input type="checkbox" name="lab[]" value="T4"> <label>T4</label></li>
                                <li><input type="checkbox" name="lab[]" value="TSH"> <label>TSH</label></li>
                                <li><input type="checkbox" name="lab[]" value="FSH"> <label>FSH</label></li>
                                <li><input type="checkbox" name="lab[]" value="LH"> <label>LH</label></li>
                                <li><input type="checkbox" name="lab[]" value="Prolactin"> <label>Prolactin</label></li>
                                <li><input type="checkbox" name="lab[]" value="Beta HCG Subunit"> <label>Beta HCG Subunit</label></li>
                                <li><input type="checkbox" name="lab[]" value="Alpha feto Protein"> <label>Alpha feto Protein</label></li>
                                <li><input type="checkbox" name="lab[]" value="PSA(Total)"> <label>PSA(Total)</label></li>
                                <li><input type="checkbox" name="lab[]" value="HBsAG"> <label>HBsAG</label></li>
                                <li><input type="checkbox" name="lab[]" value="HCVAb"> <label>HCVAb</label></li>
                                <li><input type="checkbox" name="lab[]" value="HIVAb"> <label>HIVAb</label></li>
                                <li><input type="checkbox" name="lab[]" value="Other"> <label>Other</label></li>
                            </ul>
                        </div>


                        <div class="form-group">
                            <label class="mws-form-label">Doctor Signature</label>
                            <div class="mws-form-item">
                                <input type='text' placeholder='Doctor Signature' name='sign'
                                       class="form-control"/>
                            </div>
                        </div>
                        <input
                            type='hidden' name='time'
                            value='<?php
                            echo date("Y-m-d H:i:s")
                            ?>'/> <br/>

                        <div class="mws-button-row">
                            <input type="submit" value="Add Patient" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>