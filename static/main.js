/**
 * Created by bingxia on 14-6-18.
 */


/****** main.php *******/

$(document).ready( function(){

    /*   注册事件  */
    $("#form-register").submit(function(){
        function show_error(error){
            if (error==null){
                $("#form-register-alert").text("");
                $("#form-register-alert").css("display", 'none' );
            }else{
                $("#form-register-alert").text(error);
                $("#form-register-alert").css("display", 'block' );
            }
        }

        function validate(formData, jqForm, options){
            for( var i=0;i <formData.length; i++ ){
                if ( formData[i].name=='username' ){
                    if( !formData[i].value ){
                        show_error('错误: 用户名邮箱密码不能为空!');
                        return false;
                    }
                }
                if( formData[i].name=='email'){
                    if ( formData[i].value.indexOf("@")<0 ){
                        show_error('错误:  请采用正确格式的邮箱!');
                        return false;
                    }
                }
                if ( formData[i].name=='password'){
                    if (formData[i].value.length< 6){
                        show_error('错误: 密码长度不足六位!');
                        return false;
                    }
                }
            }
            return true;
        }

        function response(responseText, statusText){
            if ( statusText=='success' ){
                if ( responseText.status=='success' ){
                    show_error(null);
                    $("#register_modal").modal('hide');
                    $("#login_modal").modal('show');
                }else{
                    show_error(responseText.info);
                }
            }else{
                show_error("注册失败 网络不通畅");
            }
        }

        var options={
            beforeSubmit: validate,
            success: response,
            dataType: 'json',
            clearForm: true,
            timeout: 5000  //超时时间5s
        };

        $(this).ajaxSubmit(options);
        return false;       //阻止表单默认提交
    });

    /*   登陆事件   */
    $("#form-signin").submit(function(){
        function show_error(error){
            if ( error==null){
                $("#form-login-alert").text("");
                $("#form-login-alert").css("display", 'none' );
            }else{
                $("#form-login-alert").text(error);
                $("#form-login-alert").css("display", 'block' );
            }
        }

        function response(responseText, statusText){
            if ( statusText=='success' ){
                if ( responseText.status=='fail' ){
                    show_error(responseText.info);
                }else{
                    show_error(null);
                    $("#login_modal").modal('hide');
                    location=$("base").text()+"index.php?route=zone/home";
                }
            }else{
                show_error("登陆失败网络不通畅");
            }
        }

        var options={
            success: response,
            dataType:'json',
            clearForm: true,
            timeout: 5000  //超时时间5s
        };

        $(this).ajaxSubmit(options);
        return false;       //阻止表单默认提交
    });

    $(".a-comment").mouseover( function(){
        $(this).css('background-color', '#DCEBF9');
    }).mouseout(function(){
        $(this).css('background-color', '');
    });

    // 银幕切换
    $("#viewer_prev").click(function(){
        var pid=$("#paint_container").children('img').attr('pid');
        $.post("index.php?route=browse/paint/get_neighbor_view", { pid: pid, offset:-1 } , function(data,status){
            if(status=='success'){
                var json_data= $.parseJSON(data);
                refresh_view(json_data);
           }
        });
    });
    $("#viewer_next").click(function(){
        var pid=$("#paint_container").children('img').attr('pid');
        $.post("index.php?route=browse/paint/get_neighbor_view", { pid: pid, offset:1 } , function(data,status){
            if(status=='success'){
                var json_data= $.parseJSON(data);
                refresh_view(json_data);
            }
        });
    });
    $("#viewer_prev").mouseover(function(){
        $(this).css('background-position','-32px 0px' );
    }).mouseout(function(){
        $(this).css('background-position','-96px 0px' );
    });
    $("#viewer_next").mouseover(function(){
        $(this).css('background-position', '0px 0px');
    }).mouseout(function(){
        $(this).css('background-position', '-64px 0px');
    });
    //预览图切换
    $("#thumb_prev").click(function(){
        var pid=$("#preview_list").children('.a_preview').first().find('img').attr('pid');
        $.post("index.php?route=browse/paint/get_neighbor_thumbs", { pid: pid, offset:-1 } , function(data,status){
            if(status=='success'){
                var json_data= $.parseJSON(data);
                refresh_thumbs(json_data, -1);
            }
        });
    });
    $("#thumb_next").click(function(){
        var pid=$("#preview_list").children('.a_preview').last().find('img').attr('pid');
        $.post("index.php?route=browse/paint/get_neighbor_thumbs", { pid: pid, offset:1 } , function(data,status){
            if(status=='success'){
                var json_data= $.parseJSON(data);
                refresh_thumbs(json_data, 1);
            }
        });
    });
    $("#thumb_prev").mouseover(function(){
        $(this).css('background-position', '-96px -192px');
    }).mouseout(function(){
        $(this).css('background-position', '-64px -192px');
    });
    $("#thumb_next").mouseover(function(){
        $(this).css('background-position', '-32px  -192px');
    }).mouseout(function(){
        $(this).css('background-position', '0px -192px' );
    });

    $("#paint-good, #paint-bad, #paint-collect").mouseover(function(){
        $(this).find(".sprite-text").css('display', 'block');
        $(this).css('width', '73px');
    }).mouseout(function(){
        $(this).find(".sprite-text").css('display', 'none');
        $(this).css('width', '41px');
    }).click(function(){
        $.post("index.php?route=browse/paint", {'pid': $('#paint_container > img').attr('pid') , 'val':   , 'type':  } , function(data, status){
            if (status=='success'){

            }else{
                "联网失败";
            }
        });
        if ( $(this).attr('val')==0 ){
            $(this).css('background-position', "0px -64px");
            $(this).attr('val', 1);
        }else{
            $(this).css('background-position', '0px -128px');

            $(this).attr('val', 0);
        }
    });

    // preview 点击预览
    $(".a_preview").click(function(){
        var pic=$(this).find("img").attr("src");
        var paint_id=$(this).find("img").attr("pid");
        $("#paint_container").find("img").attr("src", pic).attr("pid", paint_id);
        var current=$("#preview_list").attr('current_id');
        $("#preview_list").attr('current_id',  $(this).attr('id') );

        $("#"+current).css("background-color", "");
        $(this).css("background-color", "#FFF");
    });

    $("#send_comment").click(function(){
        var my_comment=$("#my_comment").find("input").val();
        var cur_paint_id=$("#paint_container").find("img").attr("pid");
        $.post("index.php?route=browse/paint/comment", {comment: my_comment, paint_id: cur_paint_id }, function(data, status){
            if( status!='success' ){
                alert("评论失败");
            }else{
                alert("评论成功");
            }
        });
    });

} );


function  refresh_view(data)
{
    var pid=data.paint_id;
    var src=data.file_path;
    $("#paint_container").css('width', data.width ).css('height', data.height);
    $("#paint_container").children('img').attr('src', src).attr('pid', pid);

    //$.post("",{}, function(data,status){
    //
    //});
}

function refresh_thumbs(data, direction)
{
    var all_data=new Array();
    var cur_pos=0;
    var pre_size=0;
    var time_id;
    $('#preview_list>.a_preview').each(function(){
        var obj={'thumb_path': $(this).find('img').attr('src') ,'paint_id':$(this).find('img').attr('pid') };
        all_data.push(obj);
    });
    pre_size=all_data.length;

    if ( direction==1 ){ //forward
        all_data=all_data.concat(data);
    }else if( direction==-1 ){ //backward
        cur_pos=data.length;
        all_data=data.concat(all_data);
    }

    //动画
    time_id= setInterval(my_sliding,50);
    function my_sliding(){
        if( direction==1 ){ //forward
            var i=0;
            $('#preview_list>.a_preview').each( function() {
                $(this).find('img').attr('src',all_data[cur_pos+i].thumb_path).attr('pid',all_data[cur_pos+i].paint_id);
                i++;
            });
            cur_pos++;
            if(cur_pos >= pre_size){
                clearInterval(time_id);
            }
        }else{  //backward
            var i=0;
            $('#preview_list>.a_preview').each( function() {
                $(this).find('img').attr('src',all_data[cur_pos+i].thumb_path).attr('pid',all_data[cur_pos+i].paint_id);
                i++;
            });
            cur_pos--;
            if(cur_pos<=0)
                clearInterval(time_id);
        }
    }

    /*
    var i=0;
    $('#preview_list>.a_preview').each( function() {
        if(i<data.length){
            $(this).find('img').attr('src',data[i].thumb_path).attr('pid',data[i].paint_id).css('display', 'block');
        }else{
            $(this).find('img').attr('src',"").attr('pid',0).css('display','none');
        }
        i++;
    } ); */
}



