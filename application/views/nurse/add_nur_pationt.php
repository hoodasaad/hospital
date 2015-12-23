<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"> <span class="glyphicon glyphicon-user"></span> Add New Patient</div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/nurse_control/C_add_user"
                          method="post">
                        <div id="MRN-INFO"></div>                 
                        <div class="form-group" id="MRN">
                            <label class="mws-form-label">Pationt_Mrn</label>
                            <input type='text' placeholder='Pationt_Mrn' name='Pationt_Id' class="form-control MRN"/>
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Allegy</label>
                            <div class="input-group">
                                <input type='text' placeholder='Allegy' name='allegy' class="form-control"/>
                                <div class="input-group-addon">medication taken</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div><label>Old </label><span class="btn btn-sm btn-info btn-add"><span class="glyphicon glyphicon-plus"></span></span></div>
                            <div class="row" id="old">
                                <div class="col-sm-4">
                                    <input type='text' class="form-control" placeholder='First Medical' name='number_1[]'/>
                                </div>
                                <div class="col-sm-4">
                                    <input type='text' class="form-control" placeholder='Dose' name='dose_1[]'/>
                                </div>
                                <div class="col-sm-4">
                                    <input type='date' class="form-control" placeholder='Last Time' name='time_1[]'/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">WT</label>
                            <div class="input-group">
                                <input type='text' placeholder='WT' name='wt' class="form-control"/>
                                <div class="input-group-addon">K.G</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">hT</label>
                            <div class="input-group">
                                <input type='text' placeholder='hT' name='ht' class="form-control"/>
                                <div class="input-group-addon">C.m</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Temp</label>
                            <input type="text" name="temp" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">BP</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type='text' class="form-control" placeholder='Systolic' name='min'/>
                                </div>
                                <div class="col-sm-4">
                                    <input type='text' class="form-control" placeholder='Diastolic' name='max'/>
                                </div>
                                <div class="col-sm-4">
                                    <label>MMHG</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">P</label>
                            <div class="input-group">
                                <input type='text' placeholder='P' name='p' class="form-control"/>
                                <div class="input-group-addon"> b/m</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">RR</label>
                            <div class="input-group">
                                <input type='text' placeholder='RR' name='rr' class="form-control"/>
                                <div class="input-group-addon">  b/m</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">P OX</label>
                            <input type='text' placeholder='P OX' name='pox' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Pain</label>
                            <div class="mws-form-item">
                                <select class="form-control" name="pain">
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Pt's Complain </label>
                            <textarea name='complain' rows="auto" cols="auto" class="form-control"> </textarea>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Nurse Signature</label>
                            <input type='text' placeholder='Nurse Signature' name='sign' class="form-control"/>
                        </div>
                        <input
                            type='hidden'  name='time'
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
<script>
    $(".MRN").change(function() {
        var id = $(this).val();
        $.get('<?= base_url() ?>index.php/nurse_control/C_CheckId/' + id, function(data) {
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
    $("form").submit(function() {
        var ok = $(".ok").val();
        if (ok == 0) {
            $(".error_message").show().text("Please Check Error");
            return false;
        }
    });
    $(".btn-add").click(function() {
        var old = '<br><br><div class="col-sm-4"> <input type="text" class="form-control" placeholder="First Medical" name="number_1[]"/></div><div class="col-sm-4"> <input type="text" class="form-control" placeholder="Dose" name="dose_1[]"/> </div> <div class="col-sm-4"> <input type="date" class="form-control" placeholder="Last Time" name="time_1[]"/> </div>';
        $("#old").append(old);
    });
</script>