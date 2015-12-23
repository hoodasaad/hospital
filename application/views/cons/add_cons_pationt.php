<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient</div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/cons_control/add_user"
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
                            <label class="mws-form-label">Constitutional</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="consit1"
                                               value="weight change"<?php echo set_checkbox('consit', 'weight change'); ?>>
                                        <label>weight change</label></li>
                                    <li><input type="checkbox" name="consit2"
                                               value="fatigue"<?php echo set_checkbox('consit', 'fatigue'); ?>> <label>fatigue</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Eyes</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="eye1" value="Poor Vision"> <label>Poor
                                            Vision</label></li>
                                    <li><input type="checkbox" name="eye2" value="double vision"> <label>double
                                            vision</label></li>
                                    <li><input type="checkbox" name="eye3" value="floaters"> <label>floaters</label>
                                    </li>
                                    <li><input type="checkbox" name="eye4" value="pain"> <label>pain</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">ENT</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="ent1" value="hearing loss"> <label>hearing
                                            loss</label></li>
                                    <li><input type="checkbox" name="ent2" value="epistaxis"> <label>epistaxis</label>
                                    </li>
                                    <li><input type="checkbox" name="ent3" value="tinnitus"> <label>tinnitus</label>
                                    </li>
                                    <li><input type="checkbox" name="ent4" value="dysphagia"> <label>dysphagia</label>
                                    </li>
                                    <li><input type="checkbox" name="ent5" value="hoarseness"> <label>hoarseness</label>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Cardiovascular</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="card1" value="pain"> <label>pain</label></li>
                                    <li><input type="checkbox" name="card2" value="palpitations">
                                        <label>palpitations</label></li>
                                    <li><input type="checkbox" name="card3" value="PND"> <label>PND</label></li>
                                    <li><input type="checkbox" name="card4" value="orthopnea"> <label>orthopnea</label>
                                    </li>
                                    <li><input type="checkbox" name="card5" value="LE edema"> <label>LE edema</label>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Respiratory</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="resp1" value="dyspnea"> <label>dyspnea</label></li>
                                    <li><input type="checkbox" name="resp2" value="wheezing"> <label>wheezing</label>
                                    </li>
                                    <li><input type="checkbox" name="resp3" value="cough"> <label>cough</label></li>
                                    <li><input type="checkbox" name="resp4" value="hemoptysis">
                                        <label>hemoptysis</label></li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">GI</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="gi1" value="pain"> <label>pain</label></li>
                                    <li><input type="checkbox" name="gi2" value="nausea"> <label>nausea</label></li>
                                    <li><input type="checkbox" name="gi3" value="vomiting"> <label>vomiting</label></li>
                                    <li><input type="checkbox" name="gi4" value="heartburn"> <label>heartburn</label>
                                    </li>
                                    <li><input type="checkbox" name="gi5" value="change in bowel habits"> <label>change
                                            in bowel habits </label></li>
                                    <li><input type="checkbox" name="gi6" value="constipation">
                                        <label>constipation</label></li>
                                    <li><input type="checkbox" name="gi7" value="diarrhea"> <label>diarrhea</label></li>
                                    <li><input type="checkbox" name="gi8" value="BRBPR"> <label>BRBPR</label></li>
                                    <li><input type="checkbox" name="gi9" value="melena"> <label>melena</label></li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">GU</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="gu1" value="pain"> <label>pain</label></li>
                                    <li><input type="checkbox" name="gu2" value="hematuria"> <label>hematuria</label>
                                    </li>
                                    <li><input type="checkbox" name="gu3" value="incontinence">
                                        <label>incontinence</label></li>
                                    <li><input type="checkbox" name="gu4" value="frequency"> <label>frequency</label>
                                    </li>
                                    <li><input type="checkbox" name="gu5" value="dysuria"> <label>dysuria</label></li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Male</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="male1" value="impotence"> <label>impotence</label>
                                    </li>
                                    <li><input type="checkbox" name="male2" value="discharge"> <label>discharge</label>
                                    </li>
                                    <li><input type="checkbox" name="male3" value="testicular">
                                        <label>testicular</label></li>
                                    <li><input type="checkbox" name="male4" value="masses"> <label>masses</label></li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Female</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="female1" value="menstrual problems"> <label>menstrual
                                            problems</label></li>
                                    <li><input type="checkbox" name="female2" value="discharge">
                                        <label>discharge</label></li>
                                    <li><input type="checkbox" name="female3" value="itching"> <label>itching</label>
                                    </li>
                                    <li><input type="checkbox" name="female4" value="vaginal bleeding"> <label>vaginal
                                            bleeding</label></li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">musculoskeletal</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="musc1" value="pain"> <label>pain</label></li>
                                    <li><input type="checkbox" name="musc2" value="weakness"> <label>weakness</label>
                                    </li>
                                    <li><input type="checkbox" name="musc3" value="joint swelling"> <label>joint
                                            swelling</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Skin/breast</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="skin1" value="rash"> <label>rash</label></li>
                                    <li><input type="checkbox" name="skin2" value="pain"> <label>pain</label></li>
                                    <li><input type="checkbox" name="skin3" value="abscess"> <label>abscess</label></li>
                                    <li><input type="checkbox" name="skin4" value="mass"> <label>mass</label></li>
                                    <li><input type="checkbox" name="skin5" value="nipple discharge"> <label>nipple
                                            discharge</label></li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Neuro</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="neuro1" value="numbness"> <label>numbness</label>
                                    </li>
                                    <li><input type="checkbox" name="neuro2" value="tinging"> <label>tinging</label>
                                    </li>
                                    <li><input type="checkbox" name="neuro3" value="weakness"> <label>weakness</label>
                                    </li>
                                    <li><input type="checkbox" name="neuro4" value="loss of consciousness"> <label>loss
                                            of consciousness</label></li>
                                    <li><input type="checkbox" name="neuro5" value="headache"> <label>headache</label>
                                    </li>
                                    <li><input type="checkbox" name="neuro6" value="dizziness"> <label>dizziness</label>
                                    </li>
                                    <li><input type="checkbox" name="neuro7" value="syncope"> <label>syncope</label>
                                    </li>
                                    <li><input type="checkbox" name="neuro8" value="seizure"> <label>seizure</label>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Psych</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="psych1" value="fatigue"> <label>fatigue</label>
                                    </li>
                                    <li><input type="checkbox" name="psych2" value="insomnia"> <label>insomnia</label>
                                    </li>
                                    <li><input type="checkbox" name="psych3" value="mood problems"> <label>mood
                                            problems</label></li>
                                    <li><input type="checkbox" name="psych4" value="depression">
                                        <label>depression</label></li>
                                    <li><input type="checkbox" name="psych5" value="crying spells"> <label>crying
                                            spells</label></li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Endocrine</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="endo1" value="hot flashes"> <label>hot
                                            flashes</label></li>
                                    <li><input type="checkbox" name="endo2" value="heat/cold intolerance"> <label>heat/cold
                                            intolerance</label></li>
                                    <li><input type="checkbox" name="endo3" value="polyuria"> <label>polyuria</label>
                                    </li>
                                    <li><input type="checkbox" name="endo4" value="polydipsia">
                                        <label>polydipsia</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Heme/Lymph</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="heme1" value="fever/chills">
                                        <label>fever/chills</label></li>
                                    <li><input type="checkbox" name="heme2" value="night sweats"> <label>night
                                            sweats</label></li>
                                    <li><input type="checkbox" name="heme3" value="unusual bleeding/bruising"> <label>unusual
                                            bleeding/bruising</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Immunologic/Allergic</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="immu1" value="itching"> <label>itching</label></li>
                                    <li><input type="checkbox" name="immu2" value="hives"> <label>hives</label></li>
                                    <li><input type="checkbox" name="immu3" value="seasonal allergies"> <label>seasonal
                                            allergies</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Physical Exam </label>

                            <div class="mws-form-item">
                                <textarea name='physical' rows="auto" cols="auto" class="form-control"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label"> Laboratory &radiology results </label>

                            <div class="mws-form-item">
                                <textarea name='labor' rows="auto" cols="auto" class="form-control"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label"> Consultant diagnosis</label>

                            <div class="mws-form-item">
                                <textarea name='diag' rows="auto" cols="auto" class="form-control"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Recommendation</label>

                            <div class="mws-form-item">
                                <textarea name='recom' rows="auto" cols="auto" class="form-control"> </textarea>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div><label>Medictaion </label><span class="btn btn-sm btn-info btn-add"><span class="glyphicon glyphicon-plus"></span></span></div>
                            <div id="old">
                                <div class="form-group">
                                    <label class="mws-form-label">Drug</label>

                                    <div class="mws-form-item">
                                        <input type="text" placeholder="Drug" name="drug_1[]" class="form-control"/>
                                    </div>
                                </div>
                                <div class="mws-form-inline">
                                    <div class="form-group">
                                        <label class="mws-form-label">Dose</label>

                                        <div class="mws-form-item">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="Dose"
                                                           name="dose_1[]"/>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="Freq"
                                                           name="freq_1[]"/>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="Duration"
                                                           name="dur_1[]"/>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="route"
                                                           name="route_1[]"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Instruction</label>

                                    <div class="mws-form-item">
                                        <input type="text" placeholder="Instruction" name="instruct_1"
                                               class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Consultant Signature</label>
                                <div class="mws-form-item">
                                    <input type='text' placeholder='Consultant Signature' name='sign'
                                           class="form-control"/>
                                </div>
                            </div>
                            <input
                                type='hidden' name='time'
                                value='<?php
                                $datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
                                $time = time();
                                $cash = mdate($datestring, $time);
                                echo $cash;
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