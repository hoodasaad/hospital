<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient</div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/sur_control/C_add_user"
                          method="post">
                        <div id="MRN-INFO"></div>
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Mrn Number</label>
                            <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error"
                                  aria-hidden="true"></span>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">Location</label>
                                    <input type='text' placeholder='Location' name='location' class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">Quality</label>
                                    <input type='text' placeholder='Quality' name='quality' class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">Severity</label>
                                    <div class="mws-form-item clearfix">
                                        <ul class="mws-form-list inline">
                                            <li><input type="radio" name="severty" value="none" id="none"><label for="none">none</label></li>
                                            <li><input type="radio" name="severty" value="mild" id="mild"><label for="mild">mild</label></li>
                                            <li><input type="radio" name="severty" value="modert" id="modert"><label for="modert">modert</label></li>
                                            <li><input type="radio" name="severty" value="sever" id="sever"><label for="sever">sever</label></li>
                                            </ul>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">Duration</label>
                                    <input type='text' placeholder='Duration' name='duration' class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">Modifying Factors</label>
                                    <input type='text' placeholder='Modifying Factors' name='factor'
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">Associated Signs & symptoms</label>
                                    <input type='text' placeholder='Associated Signs & symptoms' name='assoc'
                                           class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Family History</label>
                            <textarea name=history rows="auto" cols="auto" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">Tobaco</label>
                                    <input type='radio' name='tobaco' value='Yes'/><label> Yes</label>
                                    <input type='radio' name='tobaco' value='No'/><label> No</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">Alcohol</label>
                                    <input type='radio' name='alcohol' value='Yes'/><label> Yes </label>
                                    <input type='radio' name='alcohol' value='No'/><label> No </label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="mws-form-label">Illicit Drugs</label>
                                    <input type='radio' name='drugs' value='Yes'/><label> Yes </label>
                                    <input type='radio' name='drugs' value='No'/> <label> No </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                        <div class="form-group">
                            <label class="mws-form-label">HIV risk factors</label>
                            <input type='text' placeholder='HIV risk factors' name='hiv' class="form-control"/>
                        </div>
                                </div>
                            <div class="col-sm-4">
                        <div class="form-group">
                            <label class="mws-form-label">Occupation</label>
                            <input type='text' placeholder='Occupation' name='occ' class="form-control"/>
                        </div>
                                </div>
                            <div class="col-sm-4">
                        <div class="form-group">
                            <label for="Education" class="mws-form-label">Education</label>
                            <select id="Education" class="form-control" name="edu">
                                <option value="illetreal">illetreal</option>
                                <option value="can read">can read</option>
                                <option value="pre high school">pre high school</option>
                                <option value="high school">high school</option>
                                <option value="college">college</option>
                            </select>
                        </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="mws-form-label">Marita Status</label>
                            <input type='radio' name='marital' value='Single'/><label> Single </label>
                            <input type='radio' name='marital' value='Married'/><label> Married </label>
                            <input type='radio' name='marital' value='Divorced'/><label> Divorced </label>
                            <input type='radio' name='marital' value='Widowed'/><label> Widowed </label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Doctor Signature</label>
                            <input type='text' placeholder='Doctor Signature' name='sign' class="form-control"/>
                        </div>
                            <input type='hidden' placeholder='Time' name='time'
                                   value="<?php echo date('Y-m-d H:i:s'); ?>"/>
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
<script>
    $(".MRN").change(function () {
        var id = $(this).val();
        $.get('<?= base_url() ?>index.php/sur_control/C_CheckId/' + id, function (data) {
            // alert(data);
            if (data == 1) {
                $("#MRN").removeClass('has-error has-feedback');
                $("#MRN").addClass('has-success has-feedback');
                $(".error").hide();
                $(".c_done").show();
                $(".ok").val(1);
            } else {
                $(".c_done").hide();
                $("#MRN").removeClass('has-success has-feedback');
                $("#MRN").addClass('has-error has-feedback');
                $(".error").show();
                $(".ok").val(0);
            }
        });
    });
    $("form").submit(function () {
        var ok = $(".ok").val();
        if (ok == 0) {
            $(".error_message").show().text("Please Check Error");
            return false;
        }
    });
    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            orientation: "top left",
            autoclose: true
        });
    });
</script>




