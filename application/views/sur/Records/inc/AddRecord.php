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
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Record
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/sur_control/RecordAnesthesia"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/sur_control/CreateRecord"
                          method="post">
                        <div id="MRN-INFO"></div>
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Mrn Number</label>
                            <input type='text' placeholder='MRN' name='MRN' class="form-control MRN" required=""/>
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error"
                                  aria-hidden="true"></span>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Surgical procedure</label>
                                    <input type='text' placeholder='Surgical procedure' name='sur_pro'
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="mws-form-label">Date</label>
                                    <input type='date' placeholder='date' name='date' class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Type of surgical anesthesia (Check all that apply)</label>

                            <div class="RadioGroup">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="radio" id="General anesthesia" class="ShowHide" data-box="#General" value="General anesthesia" name="type_sur"><label
                                                    for="General anesthesia">General anesthesia</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <div id="General" class="hide-box">
                                                    <div class="form-inline"><label>Induction Time: </label><input
                                                            type="text" placeholder="Time" class="form-control"
                                                            name="ind_time"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ">
                                        <input type="radio" id="Sedation" value="Sedation" name="type_sur"><label
                                            for="Sedation">Sedation</label></li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input type="radio" id="Regional anesthesia" class="ShowHide" data-box=".Regional" value="Regional anesthesia" name="type_sur"><label
                                                    for="Regional anesthesia">Regional anesthesia</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="hide-box Regional">
                                                    <div class="form-inline"><label>Time Block administered: </label><input
                                                            type="text" placeholder="Time" class="form-control"
                                                            name="time_block"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="hide-box Regional RadioGroup">
                                <ul class="list-group">
                                    <label>Type of Block</label>
                                    <li class="list-group-item"><input type="radio" id="Interscalene" value="Interscalene"
                                                                       name="reg_ans"><label for="Interscalene">Interscalene</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="radio" id="Superficial Cervical plexus" value="Superficial Cervical plexus" name="reg_ans">
                                        <label for="Superficial Cervical plexus">Superficial Cervical plexus</label>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="radio" id="other" class="ShowHide" data-box="#other_reg" value="other" name="reg_ans"><label
                                                    for="other">Other (specify)</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="hide-box" id="other_reg">
                                                    <input type="text" class="form-control"
                                                           name="reg_ans_other">
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item"><input type="radio" id="Unknown" value="Unknown" name="reg_ans"><label
                                            for="Unknown">Unknown</label></li>
                                </ul>
                            </div>
                            <div class="hide-box Regional">
                                <ul class="list-group">
                                    <label>Quality of Block</label>
                                    <li class="list-group-item"><input type="radio" id="Complete block" value="Complete block" name="quality_block"><label
                                            for="Complete block">Complete block</label></li>
                                    <li class="list-group-item"><input type="radio" id="Partial block" value="Partial block"
                                                                       name="quality_block"><label for="Partial block">Partial
                                            block</label></li>
                                    <li class="list-group-item"><input type="radio" id="No block" value="No block" name="quality_block"><label
                                            for="No block">Partial block</label></li>
                                    <li class="list-group-item"><input type="radio" id="Unknown" value="Unknown" name="quality_block"><label
                                            for="Unknown">Unknown</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Anesthesia Start time</label>
                                    <input type="text" class="form-control" name="ans_start_time"
                                           placeholder="Anesthesia Start time">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Anesthesia End time</label>
                                    <input type="text" class="form-control" name="ans_end_time"
                                           placeholder="Anesthesia End time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Surgery Start time</label>
                                    <input type="text" class="form-control" name="sur_start_time"
                                           placeholder="Surgery Start time">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Surgery End time</label>
                                    <input type="text" class="form-control" name="sur_end_time"
                                           placeholder="Surgery End time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Irrigant used for arthroscopy</label>
                            <div>
                                <ul class="list-group RadioGroup">
                                    <li class="list-group-item">
                                        <input type="radio" id="air" value="air" name="irr_arth">
                                        <label for="air">air</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="radio" id="CO2" value="CO2" name="irr_arth">
                                        <label for="CO2">CO2</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="radio" id="saline" value="saline" name="irr_arth">
                                        <label for="saline">saline</label>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="radio" id="other1" class="ShowHide" data-box="#other_irr" value="other" name="irr_arth">
                                                <label for="other1">other</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="hide-box" id="other_irr"><input type="text" class="form-control" name="irr_arth_other"></div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Intraoperative monitors</label>
                            <div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <input type="checkbox" class="ShowHide" data-box="#Noninvasive" id="Noninvasive blood pressure cuff" value="Noninvasive blood pressure cuff" name="int_mon[]">
                                        <label for="Noninvasive blood pressure cuff">Noninvasive blood pressure cuff</label>
                                        <div id="Noninvasive" class="hide-box">
                                            <label>Location</label>
                                            <ul class="list-group list-inline">
                                                <li class="list-group-item">
                                                    <input type="radio" id="Upper arm" value="Upper arm" name="blo_loc">
                                                    <label for="Upper arm">Upper arm</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="radio" id="forearm" value="forearm" name="blo_loc">
                                                    <label for="forearm">forearm</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="radio" id="lower leg" value="lower leg" name="blo_loc">
                                                    <label for="lower leg">lower leg</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="radio" id="other3" value="other" name="blo_loc">
                                                    <label for="other3">other</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="text" class="form-control" name="blo_loc_other">
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="Noninvasive continuous blood pressure" class="ShowHide" data-box="#continuous" value="Noninvasive continuous blood pressure" name="int_mon[]">
                                        <label for="Noninvasive continuous blood pressure">Noninvasive continuous blood pressure</label>
                                        <div id="continuous" class="hide-box">
                                            <label>Location</label>
                                            <ul class="list-group list-inline">
                                                <li class="list-group-item">
                                                    <input type="radio" id="Upper arm2" value="Upper arm" name="con_loc">
                                                    <label for="Upper arm2">Upper arm</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="radio" id="forearm2" value="forearm" name="con_loc">
                                                    <label for="forearm2">forearm</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="radio" id="lower leg2" value="lower leg" name="con_loc">
                                                    <label for="lower leg2">lower leg</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="radio" id="other4" value="other" name="con_loc">
                                                    <label for="other4">other</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="text" class="form-control" name="con_loc_other">
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="Arterial catheter ( A-line )" class="ShowHide" data-box="#Arterial" value="Arterial catheter ( A-line )" name="int_mon[]">
                                        <label for="Arterial catheter ( A-line )">Arterial catheter ( A-line )</label>
                                        <div id="Arterial" class="hide-box">
                                            <label>Transducer Location</label>
                                            <ul class="list-group list-inline">
                                                <li class="list-group-item">
                                                    <input type="radio" id="head" value="head" name="cat_loc">
                                                    <label for="head">head</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="radio" id="heart" value="heart" name="cat_loc">
                                                    <label for="heart">heart</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="radio" id="other5" value="other" name="cat_loc">
                                                    <label for="other5">other</label>
                                                </li>
                                                <li class="list-group-item">
                                                    <input type="text" class="form-control" name="cat_loc_other">
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="Bispectral index monitor" value="Bispectral index monitor" name="int_mon[]">
                                        <label for="Bispectral index monitor">Bispectral index monitor</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="End tidal agent analyzer" value="End tidal agent analyzer" name="int_mon[]">
                                        <label for="End tidal agent analyzer">End tidal agent analyzer</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="Capnography" value="Capnography" name="int_mon[]">
                                        <label for="Capnography">Capnography</label>
                                    </li>
                                    <li class="list-group-item">
                                        <div class=""></div>
                                        <input type="checkbox" id="Other2" value="Other" name="int_mon[]">
                                        <label for="Other2">Other</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="Unknown2" value="Unknown" name="int_mon[]">
                                        <label for="Unknown2">Unknown</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Airway device during maintenance of anesthesia</label>
                            <ul class="list-group list-inline">
                                <li class="list-group-item">
                                    <input type="radio" id="Endotracheal tube" value="Endotracheal tube" name="air_ans">
                                    <label for="Endotracheal tube">Endotracheal tube</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="radio" id="laryngeal mask airway device" value="laryngeal mask airway device" name="air_ans">
                                    <label for="laryngeal mask airway device">laryngeal mask airway device</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="radio" id="Oral or nasal airway" value="Oral or nasal airway" name="air_ans">
                                    <label for="Oral or nasal airway">Oral or nasal airway</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="radio" id="Mask anesthesia" value="Mask anesthesia" name="air_ans">
                                    <label for="Mask anesthesia">Mask anesthesia</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="radio" id="None" value="None" name="air_ans">
                                    <label for="None">None</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="radio" id="Unknown3" value="Unknown" name="air_ans">
                                    <label for="Unknown3">Unknown</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label>Intraoperative ventilation</label>
                            <ul class="list-group list-inline">
                                <li class="list-group-item">
                                    <input type="radio" id="Patient was breathing spontaneously" value="Patient was breathing spontaneously" name="int_ven">
                                    <label for="Patient was breathing spontaneously">Patient was breathing spontaneously</label>
                                </li>
                                <li class="list-group-item">
                                <input type="radio" id="Patient was receiving positive pressure ventilation" value="Patient was receiving positive pressure ventilation" name="int_ven">
                                    <label for="Patient was receiving positive pressure ventilation">Patient was receiving positive pressure ventilation</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="radio" id="Unknown4" value="Unknown" name="int_ven">
                                    <label for="Unknown4">Unknown</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>Premedication</th>
                                    <th>Drug</th>
                                    <th>Dose</th>
                                    <th>Premedication</th>
                                    <th>Drug</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Midazolam</td>
                                    <td><input type="checkbox" value="Midazolam" name="pre_drug[]"></td>
                                    <td><input type="text" name="pre_dose[]" class="form-control"></td>
                                    <td>Clonidine</td>
                                    <td><input type="checkbox" value="Clonidine" name="pre_drug[]"></td>
                                    <td><input type="text" name="pre_dose[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Fentanyl</td>
                                    <td><input type="checkbox" value="Fentanyl" name="pre_drug[]"></td>
                                    <td><input type="text" name="pre_dose[]" class="form-control"></td>
                                    <td>Other( specify )</td>
                                    <td><input type="checkbox" value="Other" name="pre_drug[]"></td>
                                    <td><input type="text" name="pre_dose[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Propofol</td>
                                    <td><input type="checkbox" value="Propofol" name="pre_drug[]"></td>
                                    <td><input type="text" name="pre_dose[]" class="form-control"></td>
                                    <td>Unknown</td>
                                    <td><input type="checkbox" value="Unknown" name="pre_drug[]"></td>
                                    <td><input type="text" name="pre_dose[]" class="form-control"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>Inhalation</th>
                                    <th>Used for maintenance</th>
                                    <th>If available , range of ET concentration</th>
                                    <th>If ET not available , range of inspired concentration</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Desflurane</td>
                                    <td><input type="checkbox"  value="Desflurane" name="inh_age[]"></td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="1">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="2">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>Enflurane</td>
                                    <td><input type="checkbox" value="Enflurane" name="inh_age[]"></td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="1">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="2">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>Halothane</td>
                                    <td><input type="checkbox" value="Halothane" name="inh_age[]"></td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="1">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="2">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>Isoflurane</td>
                                    <td><input type="checkbox" value="Isoflurane" name="inh_age[]"></td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="1">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="2">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>Nitrous oxide</td>
                                    <td><input type="checkbox" value="Nitrous oxide" name="inh_age[]"></td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="1">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="2">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>Sevoflurane</td>
                                    <td><input type="checkbox" value="Sevoflurane" name="inh_age[]"></td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="1">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="2">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>Other (specify)</td>
                                    <td><input type="checkbox" value="Other" name="inh_age[]"></td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="1">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    <td>
                                        <div class="form-inline">
                                            <input type="checkbox" name="age_if_avail[]" value="2">
                                            <input type="text" class="form-control" name="inh_age_avail[]">
                                        </div>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>Unknown</td>
                                    <td><input type="checkbox" value="Unknown" name="inh_age[]"></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th rowspan="2">Opioids</th>
                                    <th colspan="2">Maintenance</th>
                                    <th colspan="2">Maintenance</th>
                                </tr>
                                <tr>
                                    <th>Bolus</th>
                                    <th>Dose</th>
                                    <th>Infusion</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Fentaanyl</td>
                                    <td><input type="checkbox" value="Fentaanyl" name="opi_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="opi_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Fentaanyl" name="opi_inf[]"></td>
                                    <td><input type="text" class="form-control" name="opi_inf_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Sufentanil</td>
                                    <td><input type="checkbox" value="Sufentanil" name="opi_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="opi_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Sufentanil" name="opi_inf[]"></td>
                                    <td><input type="text" class="form-control" name="opi_inf_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Morphine sulfate</td>
                                    <td><input type="checkbox" value="Morphine sulfate" name="opi_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="opi_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Morphine sulfate" name="opi_inf[]"></td>
                                    <td><input type="text" class="form-control" name="opi_inf_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Remifentanil</td>
                                    <td><input type="checkbox" value="Remifentanil" name="opi_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="opi_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Remifentanil" name="opi_inf[]"></td>
                                    <td><input type="text" class="form-control" name="opi_inf_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Hdromorphone</td>
                                    <td><input type="checkbox" value="Hdromorphone" name="opi_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="opi_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Hdromorphone" name="opi_inf[]"></td>
                                    <td><input type="text" class="form-control" name="opi_inf_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Other (specify)</td>
                                    <td><input type="checkbox" value="Other" name="opi_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="opi_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Other" name="opi_inf[]"></td>
                                    <td><input type="text" class="form-control" name="opi_inf_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Unknown</td>
                                    <td><input type="checkbox" value="Unknown" name="opi_bolus[]"></td>
                                    <td></td>
                                    <td><input type="checkbox" value="Unknown" name="opi_inf[]"></td>
                                    <td></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th rowspan="2">Other Aneshetic Agents</th>
                                    <th colspan="2">Maintenance</th>
                                </tr>
                                <tr>
                                    <th>Infusion</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Propofol</td>
                                    <td><input type="checkbox" value="Propofol" name="other_ans[]"></td>
                                    <td><input type="text" class="form-control" name="other_ans_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Ketamine</td>
                                    <td><input type="checkbox" value="Ketamine" name="other_ans[]"></td>
                                    <td><input type="text" class="form-control" name="other_ans_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Etomidate</td>
                                    <td><input type="checkbox" value="Etomidate" name="other_ans[]"></td>
                                    <td><input type="text" class="form-control" name="other_ans_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Dexmedetomidine</td>
                                    <td><input type="checkbox" value="Dexmedetomidine" name="other_ans[]"></td>
                                    <td><input type="text" class="form-control" name="other_ans_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Other (specify)</td>
                                    <td><input type="checkbox" value="Other" name="other_ans[]"></td>
                                    <td><input type="text" class="form-control" name="other_ans_dose[]"></td>
                                    </tr>
                                <tr>
                                    <td>Unknown</td>
                                    <td><input type="checkbox" value="Unknown" name="other_ans[]"></td>
                                    <td><input type="text" class="form-control" name="other_ans_dose[]"></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th rowspan="2">Vasopressors</th>
                                    <th colspan="2">Maintenance</th>
                                    <th colspan="2">Maintenance</th>
                                </tr>
                                <tr>
                                    <th>Bolus</th>
                                    <th>Dose</th>
                                    <th>Infusion</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Dopamine</td>
                                    <td><input type="checkbox" value="Dopamine" name="vas_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="vas_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Dopamine" name="vas_inf[]"></td>
                                    <td><input type="text" class="form-control" name="vas_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>Ephedrine</td>
                                    <td><input type="checkbox" value="Ephedrine" name="vas_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="vas_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Ephedrine" name="vas_inf[]"></td>
                                    <td><input type="text" class="form-control" name="vas_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>Phenylephrine</td>
                                    <td><input type="checkbox" value="Phenylephrine" name="vas_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="vas_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Phenylephrine" name="vas_inf[]"></td>
                                    <td><input type="text" class="form-control" name="vas_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>Vasopressin</td>
                                    <td><input type="checkbox" value="Vasopressin" name="vas_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="vas_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Vasopressin" name="vas_inf[]"></td>
                                    <td><input type="text" class="form-control" name="vas_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>Norepinephrine</td>
                                    <td><input type="checkbox" value="Norepinephrine" name="vas_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="vas_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Norepinephrine" name="vas_inf[]"></td>
                                    <td><input type="text" class="form-control" name="vas_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>Other (specify)</td>
                                    <td><input type="checkbox" value="Other" name="vas_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="vas_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Other" name="vas_inf[]"></td>
                                    <td><input type="text" class="form-control" name="vas_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>Unknown</td>
                                    <td><input type="checkbox" value="Unknown" name="vas_bolus[]"></td>
                                    <td></td>
                                    <td><input type="checkbox" value="Unknown" name="vas_inf[]"></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <table style="background: #fff" class="table table-bordered table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th rowspan="2">Other Vasoactive Agents (specify agent)</th>
                                    <th colspan="2">intuction</th>
                                    <th colspan="2">Maintenance</th>
                                    <th colspan="2">Maintenance</th>
                                </tr>
                                <tr>
                                    <th>Bolus</th>
                                    <th>Dose</th>
                                    <th>Bolus</th>
                                    <th>Dose</th>
                                    <th>Infusion</th>
                                    <th>Dose</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-inline">
                                            Beta blockers <input type="text" class="form-control" name="" style="max-width: 191px;">
                                        </div>
                                    </td>
                                    <td><input type="checkbox" value="Beta blockers" name="other_vas_age_ind_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_ind_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Beta blockers" name="other_vas_age_main_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Beta blockers" name="other_vas_age_main_inf[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-inline">
                                            Calcium channel blockers <input type="text" class="form-control" name="" style="max-width: 105px;">
                                        </div>
                                    </td>
                                    <td><input type="checkbox" value="Calcium channel blockers" name="other_vas_age_ind_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_ind_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Calcium channel blockers" name="other_vas_age_main_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Calcium channel blockers" name="other_vas_age_main_inf[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-inline">
                                            Nitroprusside<input type="text" class="form-control" name="" style="max-width: 191px;">
                                        </div>
                                    </td>
                                    <td><input type="checkbox" value="Nitroprusside" name="other_vas_age_ind_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_ind_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Nitroprusside" name="other_vas_age_main_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Nitroprusside" name="other_vas_age_main_inf[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-inline">
                                            Nitroglycerin<input type="text" class="form-control" name="" style="max-width: 191px;">
                                        </div>
                                    </td>
                                    <td><input type="checkbox" value="Nitroglycerin" name="other_vas_age_ind_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_ind_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Nitroglycerin" name="other_vas_age_main_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Nitroglycerin" name="other_vas_age_main_inf[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-inline">
                                            Diuretics<input type="text" class="form-control" name="" style="max-width: 191px;">
                                        </div>
                                    </td>
                                    <td><input type="checkbox" value="Diuretics" name="other_vas_age_ind_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_ind_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Diuretics" name="other_vas_age_main_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Diuretics" name="other_vas_age_main_inf[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-inline">
                                            Clonidine<input type="text" class="form-control" name="" style="max-width: 191px;">
                                        </div>
                                    </td>
                                    <td><input type="checkbox" value="Clonidine" name="other_vas_age_ind_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_ind_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Clonidine" name="other_vas_age_main_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Clonidine" name="other_vas_age_main_inf[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_inf_dose[]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-inline">
                                            Other<input type="text" class="form-control" name="" style="max-width: 191px;">
                                        </div>
                                    </td>
                                    <td><input type="checkbox" value="Other" name="other_vas_age_ind_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_ind_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Other" name="other_vas_age_main_bolus[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_bolus_dose[]"></td>
                                    <td><input type="checkbox" value="Other" name="other_vas_age_main_inf[]"></td>
                                    <td><input type="text" class="form-control" name="other_vas_age_main_inf_dose[]"></td>
                                </tr>
                                </tbody>
                            </table>
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