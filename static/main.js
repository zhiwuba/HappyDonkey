/**
 * Created by bingxia on 14-6-18.
 */


/****** main.php *******/

$(document).ready( function(){

    $(".a-comment").mouseover( function(){
        $(this).css('background-color', '#DCEBF9');
    }).mouseout(function(){
        $(this).css('background-color', '');
    });


    $("#viewer_prev").click(function(){

    });
    $("#viewer_next").click(function(){

    });

    $(".a_preview").click(function(){
        var pic=$(this).find("img").attr("src");
        var paint_id=$(this).find("img").attr("namecard");
        $("#paint_container").find("img").attr("src", pic).attr("namecard", paint_id);
    });

    $("#send_comment").click(function(){
        var my_comment=$("#my_comment").find("input").val();
        var cur_paint_id=$("#paint_container").find("img").attr("namecard");
        $.post("index.php?route=browse/paint/comment", {comment: my_comment, paint_id: cur_paint_id }, function(data, status){
            if( status!='success' ){
                alert("评论失败");
            }else{
                alert("评论成功");
            }
        });
    });




} );




