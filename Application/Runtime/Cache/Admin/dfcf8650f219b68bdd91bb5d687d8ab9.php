<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>后台登录</title>
	<link rel="stylesheet" type="text/css" href="/Public/static/css/bootstrap-3.3.5.min.css" />
	<link rel="stylesheet" type="text/css" href="/Public/static/css/jquery-confirm.min.css" />
	<link rel="stylesheet" type="text/css" href="/Public/static/css/style-append.css" />
	<script type="text/javascript" src="/Public/static/js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="/Public/static/js/jquery-confirm.min.js" charset="UTF-8"></script><!t弹窗>
	<script src="/Public/static/js/jquery.form.js"></script>
	<script type="text/javascript" src="/Public/static/js/core.min.js" charset="UTF-8"></script>
	<style type="text/css">
		.bgtp{
			height: 100%;
			width: 100%;
		}
	</style>
</head>
<body>
<div class="bgtp">
<div class="loginbox">
	<div class="bg">
		<div class="container">
			<div class="box">
				<div class="loginbg"></div>
				<div class="loginform">
					<form class="form-horizontal" id="myform" action="" method="post">
						<label>后台登录</label>
						<div class="errcode"></div>
						<div class="cl"><input type="text"  name="username" placeholder="登录账号" /></div>
						<div class="cl"><input type="password"  name="password" placeholder="登录密码" /></div>
						<div class="cl">
							<input type="text"  name="yzm"  placeholder="验证码" id='yzm' />
							<img id="yzm_imgage"   style="cursor:pointer"  title="点击更换验证码" alt="点击更换验证码" src="<?php echo U('/admin/Account/yzmCode');?>" onclick="javascript:this.src='<?php echo U('/admin/Account/yzmCode');?>?'+Math.random()">
							<div class="clearfix"></div>
						</div>
						<button class="btn btn-primary btn-sm btn-block" type="submit" onclick="login()" id="ajaxlogin">登录</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="text-center text-info padding-b-15 padding-t-15">Powered By KooTeng科技</div>
<script type="text/javascript">
    function login(){
        var options = {
            url: "<?php echo U('/admin/account/doLogin');?>",
            dataType: 'json',
            beforeSubmit: function(){
                return true;
            },
            success: function (data) {
                if(data.msg=='succ'){
                    window.location.reload();
                }else{
                    var _options = {"text":"登录失败！"};
                    if(data.msg) _options.text = data.msg;
                    $("#yzm_imgage").trigger("click");
                    doAlertDialog(_options);
                }
            }
        };
        $("#myform").ajaxForm(options);
        return false;
    }
</script>
</body>
</html>