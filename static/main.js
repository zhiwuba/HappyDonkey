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


function submit_register()
{

}



