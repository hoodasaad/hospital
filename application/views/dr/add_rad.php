<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Radiology Request</div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/dr_control/add_rad"
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
                            <label class="mws-form-label">Pregnancy </label>
                            <input type='radio' name='preg' value="Yes"/><label>Yes</label>
                            <input type='radio' name='preg' value="No"/><label>No</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Relevant Clincal Data</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Skull bones</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="skull[]" value="AP"> <label>AP</label></li>
                                    <li><input type="checkbox" name="skull[]" value="PA"> <label>PA</label></li>
                                    <li><input type="checkbox" name="skull[]" value="Lat"> <label>Lat</label></li>
                                    <li><input type="checkbox" name="skull[]" value="Others"> <label>Others</label>
                                        <input type="text" name="other_skull" placeholder="Other"/></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <li><input type="checkbox" name="orbit" value="Orbit"> <label>Orbit</label></li>
                        </div>
                        <div class="form-group">
                            <li><input type="checkbox" name="mastoid" value="Mastoid"> <label>Mastoid</label></li>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">PNS</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="pns[]" value="OM"> <label>OM</label></li>
                                    <li><input type="checkbox" name="pns[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">TMJ</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="tmj[]" value="AP"> <label>AP</label></li>
                                    <li><input type="checkbox" name="tmj[]" value="Oblique"> <label>Oblique</label>
                                    <li><input type="checkbox" name="tmj[]" value="ODI with Open Mouth"> <label>ODI with
                                            Open Mouth</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Mandible</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="mandible[]" value="AP"> <label>AP</label></li>
                                    <li><input type="checkbox" name="mandible[]" value="Oblique"> <label>Oblique</label>
                                    <li><input type="checkbox" name="mandible[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Cervical Spine</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="carvical[]" value="AP"> <label>AP</label></li>
                                    <li><input type="checkbox" name="carvical[]" value="Oblique"> <label>Oblique</label>
                                    <li><input type="checkbox" name="carvical[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Dorsal Spine</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="dorsal[]" value="AP"> <label>AP</label></li>
                                    <li><input type="checkbox" name="dorsal[]" value="Oblique"> <label>Oblique</label>
                                    <li><input type="checkbox" name="dorsal[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Dorsal-Lumbar Spine</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="lumbar[]" value="AP"> <label>AP</label></li>
                                    <li><input type="checkbox" name="lumbar[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">lumbo-sacral Spine</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="lumbo[]" value="AP"> <label>AP</label></li>
                                    <li><input type="checkbox" name="lumbo[]" value="Oblique"> <label>Oblique</label>
                                    <li><input type="checkbox" name="lumbo[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Coccyx Spine </label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="coccyx[]" value="AP"> <label>AP</label></li>
                                    <li><input type="checkbox" name="coccyx[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Sarco-joliac joints</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="joint[]" value="Obl"> <label>Obl</label></li>
                                    <li><input type="checkbox" name="joint[]" value="PA"> <label>PA</label></li>
                                    <li><input type="checkbox" name="joint[]" value="Extra Views"> <label>Extra
                                            Views</label></li>
                                    <input type="text" name="extra" placeholder="Extra Views"/></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Ribs</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="ribs[]" value="AP"> <label>AP</label></li>
                                    <li><input type="checkbox" name="ribs[]" value="Oblique"> <label>Oblique</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <li><input type="checkbox" name="clavical" value="Clavical PA"> <label>Clavical PA</label>
                            </li>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Pelvis</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="pelvis[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="pelvis[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="pelvis[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="pelvis[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="pelvis[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Hip</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="hip[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="hip[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="hip[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="hip[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="hip[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Acetabulum</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="acet[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="acet[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="acet[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="acet[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="acet[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Femur</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="femur[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="femur[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="femur[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="femur[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="femur[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Patella</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="patella[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="patella[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="patella[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="patella[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="patella[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Tibia Fibula</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="tibia[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="tibia[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="tibia[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="tibia[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="tibia[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Ankle</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="ankle[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="ankle[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="ankle[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="ankle[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="ankle[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Feet</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="feet[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="feet[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="feet[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="feet[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="feet[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Calcanecus</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="calc[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="calc[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="calc[]" value="Both"> <label>Both</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Shoulder</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="shoulder[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="shoulder[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="shoulder[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="shoulder[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="shoulder[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Humerus</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="humerus[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="humerus[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="humerus[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="humerus[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="humerus[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Elbow</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="elbow[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="elbow[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="elbow[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="elbow[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="elbow[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Forearm</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="forearm[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="forearm[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="forearm[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="forearm[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="forearm[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Wrist</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="wrist[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="wrist[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="wrist[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="wrist[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="wrist[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Hand</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="hand[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="hand[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="hand[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="hand[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="hand[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Scaphoid View</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="view[]" value="Rt"> <label>Rt</label></li>
                                    <li><input type="checkbox" name="view[]" value="Lt"> <label>Lt</label>
                                    <li><input type="checkbox" name="view[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="view[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="view[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Larynx</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="lary[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="lary[]" value="Lat"> <label>Lat</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <li><input type="checkbox" name="asopharynx" value="N asopharynx"> <label>N
                                    asopharynx</label></li>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Chest</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="chest[]" value="PA"> <label>PA</label>
                                    <li><input type="checkbox" name="chest[]" value="AP"> <label>AP</label>
                                    <li><input type="checkbox" name="chest[]" value="Lat"> <label>Lat</label>
                                    <li><input type="checkbox" name="chest[]" value="Oblique"> <label>Oblique</label>
                                    </li>
                                    <li><input type="checkbox" name="chest[]" value="Lat With BA"> <label>Lat With
                                            BA</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Salivary Gland</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="gland[]" value="Plain"> <label>Plain</label>
                                    <li><input type="checkbox" name="gland[]" value="Sialography">
                                        <label>Sialography</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Abdomen</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="abdo[]" value="Ap Supine"> <label>Ap Supine</label>
                                    <li><input type="checkbox" name="abdo[]" value="Standing"> <label>Standing</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <li><input type="checkbox" name="put" value="PUT"> <label>PUT</label></li>
                        </div>
                        <div class="form-group">
                            <li><input type="checkbox" name="ivu" value="I.V.U"> <label>I.V.U</label></li>
                        </div>
                        <div class="form-group">
                            <li><input type="checkbox" name="infusion" value="Infusion IVU"> <label>Infusion IVU</label>
                            </li>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Antegrade Urogram</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="antegrade[]" value="RT"> <label>RT</label>
                                    <li><input type="checkbox" name="antegrade[]" value="LT"> <label>LT</label>
                                    <li><input type="checkbox" name="antegrade[]" value="Both"> <label>Both</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Retrograde Urogram</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="retrograde[]" value="RT"> <label>RT</label>
                                    <li><input type="checkbox" name="retrograde[]" value="LT"> <label>LT</label>
                                    <li><input type="checkbox" name="retrograde[]" value="Both"> <label>Both</label>
                                    <li><input type="checkbox" name="retrograde[]" value="Cystogram">
                                        <label>Cystogram</label>
                                    <li><input type="checkbox" name="retrograde[]" value="Ascending Urethrogram">
                                        <label>Ascending Urethrogram</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <li><input type="checkbox" name="micturating" value="Micturating">
                                <label>Micturating</label></li>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Cyto-Urethroam</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="cyto[]" value="Barium Swallow for Oesopahgus">
                                        <label>Barium Swallow for Oesopahgus</label></li>
                                    <li><input type="checkbox" name="cyto[]" value="Barium meal"> <label>Barium
                                            meal</label></li>
                                    <li><input type="checkbox" name="cyto[]" value="Barium follow through"> <label>Barium
                                            follow through</label></li>
                                    <li><input type="checkbox" name="cyto[]" value="Barium enema"> <label>Barium
                                            enema</label></li>
                                    <li><input type="checkbox" name="cyto[]" value="Barium enema double Contrast">
                                        <label>Barium enema double Contrast</label></li>
                                    <li><input type="checkbox" name="cyto[]" value="T.tube Cholangiography Mammography">
                                        <label>T.tube Cholangiography Mammography</label></li>
                                    <li><input type="checkbox" name="cyto[]" value="Cranio-Caudal View"> <label>Cranio-Caudal
                                            View</label></li>
                                    <li><input type="checkbox" name="cyto[]" value="Medio-lateral View"> <label>Cranio-Caudal
                                            View</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">CTSCAN</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="cts[]" value="C.T.brain"> <label>C.T.brain</label>
                                    </li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.para nasal sinuses"> <label>C.T.para
                                            nasal sinuses</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.orbit"> <label>C.T.orbit</label>
                                    </li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.facial bones"> <label>C.T.facial
                                            bones</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.Temporal bones"> <label>C.T.Temporal
                                            bones</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.Neck"> <label>C.T.Neck</label>
                                    </li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.Chest"> <label>C.T.Chest</label>
                                    </li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.Abdomen">
                                        <label>C.T.Abdomen</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.Pelvis">
                                        <label>C.T.Pelvis</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.pelivi-abdominal"> <label>C.T.pelivi-abdominal</label>
                                    </li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.liver Triphasic"> <label>C.T.liver
                                            Triphasic</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.liver Volumetry"> <label>C.T.liver
                                            Volumetry</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.liver Volumetry"> <label>C.T.liver
                                            Volumetry</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.Cervical Spine"> <label>C.T.Cervical
                                            Spine</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.Dorsal Spine"> <label>C.T.Dorsal
                                            Spine</label></li>

                                    <li><input type="checkbox" name="cts[]" value="C.T.Lumbo-Scaral Spine"> <label>C.T.Lumbo-Scaral
                                            Spine</label></li>
                                    <li><input type="checkbox" name="cts[]" value="C.T.Extrmities"> <label>C.T.Extrmities</label>
                                    </li>
                                    <li><input type="checkbox" name="cts[]" value="C.T.Vertual endoscopu"> <label>C.T.Vertual
                                            endoscopu</label></li>
                                    <li><input type="checkbox" name="cts[]" value="C.T.Guided Biopsy"> <label>C.T.Guided
                                            Biopsy</label></li>
                                    <li><input type="checkbox" name="cts[]" value="Other"> <label>Other</label><input
                                            type="text" placeholder="Other" name="cts_other"</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Ultrasonography</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="us[]" value="U.S.pregnancy">
                                        <label>U.S.pregnancy</label></li>
                                    <li><input type="checkbox" name="us[]" value="U.S.Neck"> <label>U.S.Neck</label>
                                    </li>
                                    <li><input type="checkbox" name="us[]" value="U.S.Thyroid">
                                        <label>U.S.Thyroid</label></li>
                                    <li><input type="checkbox" name="us[]" value="U.S.Abdomen">
                                        <label>U.S.Abdomen</label></li>
                                    <li><input type="checkbox" name="us[]" value="U.S.pelvis">
                                        <label>U.S.pregnancy</label></li>
                                    <li><input type="checkbox" name="us[]" value="U.S.Abdomen&pelvis"> <label>U.S.pregnancy</label>
                                    </li>
                                    <li><input type="checkbox" name="us[]" value="U.S.scrotal">
                                        <label>U.S.pregnancy</label></li>
                                    <li><input type="checkbox" name="us[]" value="U.S.transrectal">
                                        <label>U.S.pregnancy</label></li>
                                    <li><input type="checkbox" name="us[]" value="U.S.Transvaginal"> <label>U.S.pregnancy</label>
                                    </li>
                                    <li><input type="checkbox" name="us[]" value="U.S.T.V.folliculometry"> <label>U.S.pregnancy</label>
                                    </li>
                                    <li><input type="checkbox" name="us[]" value="U.S.Transcranial"> <label>U.S.pregnancy</label>
                                    </li>
                                    <li><input type="checkbox" name="us[]" value="U.S.Musculoskletal"> <label>U.S.pregnancy</label>
                                    </li>
                                    <li><input type="checkbox" name="us[]" value="U.S.Guided Biopsy"> <label>U.S.pregnancy</label>
                                    </li>
                                    <li><input type="checkbox" name="us[]" value="Others"> <label>Others</label><input
                                            type="text" placeholder="Others" name="us_other"</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">U.S.Breast</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="breast[]" value="RT"> <label>RT</label></li>
                                    <li><input type="checkbox" name="breast[]" value="LT"> <label>LT</label></li>
                                    <li><input type="checkbox" name="breast[]" value="Both"> <label>Both</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Colored Doppler (Duplex)</label>

                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="color[]" value="Venous Mapping"> <label>Venous
                                            Mapping</label></li>
                                    <li><input type="checkbox" name="color[]" value="Carotid arterials"> <label>Carotid
                                            arterias</label></li>
                                    <li><input type="checkbox" name="color[]" value="Real Dupplex"> <label>Real
                                            Dupplex</label></li>
                                    <li><input type="checkbox" name="color[]" value="Fetal Doppler"> <label>Fetal
                                            Doppler</label></li>
                                    <li><input type="checkbox" name="color[]" value="Scrotal"> <label>Scrotal</label>
                                    </li>
                                    <li><input type="checkbox" name="color[]" value="Others">
                                        <label>Others</label><input type="text" placeholder="Others" name="color_other"
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Upper Limb arterial</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="upper[]" value="Unilateral">
                                        <label>Unilateral</label></li>
                                    <li><input type="checkbox" name="upper[]" value="Upperal"> <label>Upperal</label>
                                    </li>
                                    <li><input type="checkbox" name="upper[]" value="Bilateral">
                                        <label>Bilateral</label></li>

                                </ul>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">Lower Limb arterial</label>

                                <div class="mws-form-item clearfix">
                                    <ul class="mws-form-list inline">
                                        <li><input type="checkbox" name="lower[]" value="Unilateral">
                                            <label>Unilateral</label></li>
                                        <li><input type="checkbox" name="lower[]" value="Bilateral">
                                            <label>Bilateral</label></li>

                                    </ul>
                                </div>
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