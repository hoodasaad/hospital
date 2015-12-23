<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient</div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/first/add_user"
                          method="post">
                        <div class="form-group">
                            <label class="mws-form-label">First Name</label>
                            <input type='text' placeholder='First Name' name='first' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Second Name</label>
                            <input type='text' placeholder='Second Name' name='second' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Third Name</label>
                            <input type='text' placeholder='Third Name' name='third' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Last Name</label>
                            <input type='text' placeholder='Last Name' name='last' class="form-control"/>
                        </div>
                        <div class="form-group" id="PationtId">
                            <label class="mws-form-label">Pationt Id</label>
                            <input type='text' placeholder='Pationt Id' maxlength="14" name='pationt_id' class="form-control PationtId"/>
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Clinc</label>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input type='text' class="form-control" placeholder='Clinc' name='clinc'/>
                                </div>
                                <div class="col-sm-6">
                                    <input type='text' class="form-control" placeholder='Number' name='number'/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="phone">
                            <label class="mws-form-label">Telephone #work</label>
                            <input type='text' placeholder='Telephone #work' name='phone' class="form-control Phone" />
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done2" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error2" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">ProVider Seeing PT.Todaty</label>
                            <input type='text' placeholder='ProVider Seeing PT.Todaty' name='provider'
                                   class="form-control"/>
                        </div>
                        <div class="form-group">
                            <ul>
                                <li>
                                    <input type='radio' name='seen'
                                           value='Pationt seen and examined with attending Dr'/><label>Pationt seen and
                                        examined with attending Dr</label>
                                    <input type='text' class="small" placeholder='Dr Name' name='doctor'/>
                                </li>
                                <li><input type='radio' name='seen' value='Pationt seen by Attending Only'/><label>Pationt
                                        seen by Attending Only</label>
                                </li>
                            </ul>
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
    $(".PationtId").keyup(function () {
        var id = $(this).val();
        if (id.length != 14) {
            $(".c_done").hide();
            $("#PationtId").removeClass('has-success has-feedback');
            $("#PationtId").addClass('has-error has-feedback');
            $(".error").show();
            $(".ok").val(0);
        } else if (id.length == 14) {
            $.get('<?= base_url()?>index.php/first/PationtId/' + id, function (data) {
                // alert(data);
                if (data == 1) {
                    $("#PationtId").removeClass('has-error has-feedback');
                    $("#PationtId").addClass('has-success has-feedback');
                    $(".error").hide();
                    $(".c_done").show();
                    $(".ok").val(1);
                    $(".error_message").hide().text("");
                } else {
                    $(".c_done").hide();
                    $("#PationtId").removeClass('has-success has-feedback');
                    $("#PationtId").addClass('has-error has-feedback');
                    $(".error").show();
                    $(".ok").val(0);
                }
            });
        }
    });
   /* $(".Phone").change(function () {
        var id = $(this).val();
        //alert(id);
        $.get('<?= base_url()?>index.php/first/Phone/' + id, function (data) {
           // alert(data);
            if (data == 1) {
                $("#phone").removeClass('has-error has-feedback');
                $("#phone").addClass('has-success has-feedback');
                $(".error2").hide();
                $(".c_done2").show();
                $(".ok2").val(1);
                $(".error_message").hide().text("");
            } else {
                $(".c_done2").hide();
                $("#phone").removeClass('has-success has-feedback');
                $("#phone").addClass('has-error has-feedback');
                $(".ok2").val(0);
            }
        });

    });*/
    $("form").submit(function () {
        var ok = $(".ok").val();
        var ok2 = $(".ok2").val();
        if (ok == 0 || ok2 == 0) {
            $(".error_message").show().text("Please Check Error");
            return false;
        }
    });
</script>