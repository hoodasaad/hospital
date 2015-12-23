<div class="col-md-11">
    <div class="loading">
        <div id="spinningSquaresG">
            <div id="spinningSquaresG_1" class="spinningSquaresG">
            </div>
            <div id="spinningSquaresG_2" class="spinningSquaresG">
            </div>
            <div id="spinningSquaresG_3" class="spinningSquaresG">
            </div>
            <div id="spinningSquaresG_4" class="spinningSquaresG">
            </div>
            <div id="spinningSquaresG_5" class="spinningSquaresG">
            </div>
            <div id="spinningSquaresG_6" class="spinningSquaresG">
            </div>
            <div id="spinningSquaresG_7" class="spinningSquaresG">
            </div>
            <div id="spinningSquaresG_8" class="spinningSquaresG">
            </div>
        </div>
    </div>
    <div id="frame_load">
       <iframe width="100%" height="100%" src="<?=base_url()?>index.php/<?=$Url?>/Home"></iframe>
    </div>
</div>
<script>
    $(".linkLoad").click(function(){
        var link = $(this).attr("href");
        // alert(link);
        $(".menu  li").removeClass('active');
        $(".menu  .arrow").css('display','none');
        $(this).parents().addClass('active');
        $(this).next().css('display','block');
        $("#frame_load iframe").attr('src',link);
        return false;
    });
    $("#form-search").submit(function(){
        var search_value = $("#input-search").val();
        var link = "<?=base_url()?>index.php/<?=$Url?>/search/?search="+search_value;
        $("#frame_load iframe").attr('src',link);
        return false;
    });
</script>
</div>