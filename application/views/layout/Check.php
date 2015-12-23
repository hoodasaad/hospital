<script>
    $("#Temp").attr('required','');
    $(".MRN").change(function () {
        var id = $(this).val();
        $.get('<?= base_url()?>index.php/PublicFunction/CheckId/' + id, function (data) {
            //alert(data);
            if (data == 1) {
                $("#MRN").removeClass('has-error has-feedback');
                $("#MRN").addClass('has-success has-feedback');
                $(".error").hide();
                $(".c_done").show();
                if( $('.ok').length) {
                    $(".ok").val(1);
                }else{
                    $("form").append(' <input type="hidden" class="ok" value="1"><div class="error_message"></div>');
                }
                $.get('<?= base_url()?>index.php/PublicFunction/PTInfo/' + id, function (info) {
                    $("#MRN-INFO").html(info);
                });

            } else {
                $(".c_done").hide();
                $("#MRN").removeClass('has-success has-feedback');
                $("#MRN").addClass('has-error has-feedback');
                $(".error").show();
                if( $('.ok').length) {
                    $(".ok").val(0);
                }else{
                    $("form").append(' <input type="hidden" class="ok" value="0"><div class="error_message"></div>');
                }                $("#MRN-INFO").html("");
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
    $("#Temp").change(function(){
        var temp = $(this).val();
        if(temp < 35 || temp >41){
            $(this).css('border-color','red');
            alert('Error Temp Not Support ');
            if( $('.ok').length) {
                $(".ok").val(0);
            }else{
                $("form").append(' <input type="hidden" class="ok" value="0"><div class="error_message"></div>');
            }
        }else{
            $(this).css('border-color','green');
            $(".ok").val(1);
        }
    });
    $(".ShowHide").click(function(){
       var box = $(this).attr('data-box');
        $(box).slideToggle();
    });
    $(".RadioGroup").click(function(){
        $(".ShowHide").each(function(){
            var box = $(this).attr('data-box');
            if($(this).is(":checked")){
                $(box).slideDown();
            }else{
                $(box).slideUp(0);
            }
        })
    })
</script>