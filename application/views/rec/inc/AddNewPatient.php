<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php
            if($this->session->flashdata('error')){
                ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> <?= $this->session->flashdata('error')?>
                </div>
            <?php } ?>
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New Patient <a
                        class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/Reception/GetAll"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" action="<?= base_url() ?>index.php/Reception/CreatePatient"
                          method="post">
                        <div class="form-group">
                            <label class="mws-form-label">Date & Time</label>
                            <div class="input-group">
                                <input type='datetime-local' placeholder='Date & Time' name='date_time' class="form-control"/>
                                <div class="input-group-addon"><span class="glyphicon glyphicon-time"></span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">PT's Name</label>
                            <input type='text' placeholder='Name' name='name' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">age</label>
                            <input type='text' placeholder='Age' name='age' class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Gender</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <?php
                                    foreach(Patient::Gender() as $key=>$value){
                                        echo ' <li><input type="radio" name="gender" value="'.$key.'" id="'.$value.'"> <label for="'.$value.'">'.$value.'</label></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group" id="PatientId">
                            <label class="mws-form-label">PT's ID</label>
                            <input type='text' placeholder='Patient Id' maxlength="14" name='pt_id' class="form-control PatientId"/>
                            <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Occupation</label>
                            <input type='text' placeholder='Occupation' name='occupation' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Address</label>
                            <input type='text' placeholder='Address' name='address' class="form-control"/>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Phone No</label>
                                    <input type='text' class="form-control" placeholder='Phone No' name='phone'/>
                                </div>
                                <div class="col-sm-6">
                                    <label>Mob. No</label>
                                    <input type='text' class="form-control" placeholder='Mob. No' name='mobile'/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Emergency Call No</label>
                                    <input type='text' class="form-control" placeholder='Emergency Call No' name='emergency_call_no'/>
                                </div>
                                <div class="col-sm-6">
                                    <label>Person Call Name</label>
                                    <input type='text' class="form-control" placeholder='Person Call Name' name='emergency_call_name'/>
                                </div>
                            </div>
                        </div>
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
    $(".PatientId").keyup(function () {
        var id = $(this).val();
        if (id.length != 14) {
            $(".c_done").hide();
            $("#PatientId").removeClass('has-success has-feedback');
            $("#PatientId").addClass('has-error has-feedback');
            $(".error").show();
            $(".ok").val(0);
        } else if (id.length == 14) {
            $.get('<?= base_url()?>index.php/PublicFunction/PatientId/' + id, function (data) {
                // alert(data);
                if (data == 1) {
                    $("#PatientId").removeClass('has-error has-feedback');
                    $("#PatientId").addClass('has-success has-feedback');
                    $(".error").hide();
                    $(".c_done").show();
                    $(".ok").val(1);
                    $(".error_message").hide().text("");
                } else {
                    $(".c_done").hide();
                    $("#PatientId").removeClass('has-success has-feedback');
                    $("#PatientId").addClass('has-error has-feedback');
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