
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Pain Assessment</div>
                <div class="block-content">

                    <?php echo form_open('nurse_control/add_pain') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">There are Pain</label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list inline"> 
                                <li><input type='radio'  name='pain' value='Yes'/><label> Yes </label></li>
                                <li><input type='radio'  name='pain' value='No'/> <label> No </label></li>
                            </ul>   
                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Type of Pain</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="checkbox" name="type_pain1" value="aching"<?php echo set_checkbox('type_pain', 'aching'); ?>> <label>aching</label></li>
                                    <li><input type="checkbox" name="type_pain2" value="burning"<?php echo set_checkbox('type_pain', 'burning'); ?>> <label>burning</label></li>
                                    <li><input type="checkbox" name="type_pain3" value="stab"<?php echo set_checkbox('type_pain', 'stab'); ?>> <label>stab</label></li>
                                    <li><input type="checkbox" name="type_pain4" value="crumping"<?php echo set_checkbox('type_pain', 'crumping'); ?>> <label>crumping</label></li>
                                    <li><input type="checkbox" name="type_pain5" value="itching"<?php echo set_checkbox('type_pain', 'itching'); ?>> <label>fatigue</label></li>
                                    <li><input type="checkbox" name="type_pain6" value="cruching"<?php echo set_checkbox('type_pain', 'cruching'); ?>> <label>itching</label></li>
                                    <li><input type="checkbox" name="type_pain7" value="dull"<?php echo set_checkbox('type_pain', 'dull'); ?>> <label>dull</label></li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">location</label>
                                <input type='text' placeholder='location' name='location' class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label class="mws-form-label">Character</label>
                                <div class="mws-form-item clearfix">
                                    <ul class="mws-form-list inline"> 
                                        <li><input type='radio'  name='charact' value='Sharp'/><label> Sharp </label></li>
                                        <li><input type='radio'  name='charact' value='Sever'/> <label> Sever </label></li>
                                        <li><input type='radio'  name='charact' value='Unknown'/> <label> Unknown </label></li>
                                        <li><input type='radio'  name='charact' value='Rediated'/> <label> Rediated </label></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Associated Signs / Symptoms</label>
                                    <input type='text' placeholder=' Associated Signs / Symptoms' name='symptoms' class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label"> Pain Intervention at home</label>
                                    <input type='text' placeholder=' Pain Intervention at home' name='pain_inter' class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Intensity</label>

                                    <select name="inten">
                                        <option value="0-3 pain">0-3 pain</option>
                                        <option value="4-7 Moderat">4-7 Moderat</option>
                                        <option value="8-10 sever">8-10 sever</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Intervention</label>
                                    <input type='text' placeholder='Intervention' name='intervention' class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="mws-form-label">Nurse Sign</label>
                                    <input type='text' placeholder='Nurse Sign' name='sign' class="form-control"/>
                                </div>




                                <input
                                    type='hidden'  name='time'
                                    value='<?php
                                    echo date("Y-m-d H:i:s");
                                    ?>'/> <br/>
                                <div class="mws-button-row">
                                    <input type="submit" value="Add Patient" class="btn btn-success">
                                    <input type="reset" value="Reset" class="btn ">
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>




