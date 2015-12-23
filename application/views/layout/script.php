<div class="big-show"></div>
<script>
   /* $("body").on('click','.btn-model',function(){
        var model = $(this).attr('data-model');
        $(".big-show").fadeIn(500);
        $(model).css("display", "block").animate({
            opacity: 1,
            marginTop: "+=10"
        }, 500, function() {
            //$(model).css("display", "block").animate({ marginTop: "-=10"},1000);
        });
    });
    $("body").on('click','.update',function(){
        var id = $(this).attr('href');
        $(".big-show").fadeIn(500);
        $("#update").css("display", "block").animate({
            opacity: 1,
            marginTop: "+=10"
        }, 500, function() {
            $.get(id,'',function(data){
                $("#load-form").html(data);
            });
        });

        return false;
    });
    */
    $("body").on('click','.delete',function(){
        $(".big-show").fadeIn();
        var href = $(this).attr('href');
        var data_block = $(this).attr('data-block');
        var data_remove = $(this).attr('data-remove');
        $(data_block).css("display", "block").animate({
            opacity: 1,
            marginTop: "+=10"
        }, 500, function() {
            $(".delete-yes").attr('href',href);
            if(data_remove !=''){
                $(".delete-yes").attr('data-remove',data_remove);
            }
        });
        return false;
    });
    $("body").on('click','.delete-yes',function(){
        var href = $(this).attr('href');
        var data_message = $(this).attr('data-message');
        var data_block = $(this).attr('data-block');
        var data_remove = $(this).attr('data-remove');
        $.get(href,'',function(data){
            // alert(data);
            if(data == 0){
                var message ='<div class="alert alert-danger">يوجد خطأ فى عملية الحذف برجاء مراسلة الدعم الفنى</div>';
            }else if(data == 1){
                var message = '<div class="alert alert-success">تم الحذف بنجاح</div>';
                $(data_block).delay(2000).animate({
                    opacity: 0,
                    marginTop: "-=10"
                }, 500, function() {
                    $(data_block).css("display", "none");
                    $(".big-show").fadeOut();
                    if(data_remove !=''){
                        $("#remove"+data_remove).fadeOut(2000);
                    }
                });
            }
            $(data_message).html(message).slideDown(500).delay(1000).slideUp(500);
        });
        return false;
    });
   $("body").on('click','.block-close',function(){
       var model = $(this).attr('data-model');
       $(model).animate({
           opacity: 0,
           marginTop: "-=10"
       }, 500, function() {
           $(model).css("display", "none");
           $(".big-show").fadeOut(500);
       });

       return false;
   });
    </script>