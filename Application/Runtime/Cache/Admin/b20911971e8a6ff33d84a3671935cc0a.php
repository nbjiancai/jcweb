<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>后台首页</title>
    <link href="/Public/css/sui.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/Public/static/images/favicon.ico">

    <!-- 整合boostrap-->
    <link rel="stylesheet" type="text/css" href="/Public/static/css/bootstrap-3.3.5.min.css" />
    <!-- end -->


    <link href="/Public/css/sui-append.css" rel="stylesheet" />
    <link href="/Public/css/custom.css" rel="stylesheet" />
    <!-- 删除旧的-
    <script src="/Public/script/jquery.min.js"></script>
    -->
    <!-- 新增新版 -->
    <script type="text/javascript" src="/Public/static/js/jquery-2.1.3.min.js"></script>
    <!-- end -->
    <!--<script src="/Public/script/sui.min.js"></script>
    <script src="/Public/script/require.js"></script>


<!-- 新增部分 整合boostrap-->
<link rel="stylesheet" type="text/css" href="/Public/static/css/jquery-confirm.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/css/style-append.css" />
<script type="text/javascript" src="/Public/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="/Public/static/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap-datetimepicker.min.3.0.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/static/js/jquery-confirm.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/static/js/core.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>
    <!-- <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>

     <script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>

     <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->

    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->

    <script type="text/javascript" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
    <!--end -->
    <script type="text/javascript">
        UE.getEditor('content',{

            //content为要编辑的textarea的id
            toolbars: [
                ['anchor', //锚点
                'undo', //撤销
                'redo', //重做
                'bold', //加粗
                'indent', //首行缩进
                'italic', //斜体
                'underline', //下划线
                'strikethrough', //删除线
                'subscript', //下标
                'fontborder', //字符边框
                'superscript', //上标
                'formatmatch', //格式刷
                'blockquote', //引用
                'pasteplain', //纯文本粘贴模式
                'selectall', //全选
                'print', //打印
                'preview', //预览
                'horizontal', //分隔线
                'removeformat', //清除格式
                'time', //时间
                'date', //日期
                'unlink', //取消链接
                'insertrow', //前插入行
                'insertcol', //前插入列
                'mergeright', //右合并单元格
                'mergedown', //下合并单元格
                'deleterow', //删除行
                'deletecol', //删除列
                'splittorows', //拆分成行
                'splittocols', //拆分成列
                'splittocells', //完全拆分单元格
                'deletecaption', //删除表格标题
                'inserttitle', //插入标题
                'mergecells', //合并多个单元格
                'deletetable', //删除表格
                'cleardoc', //清空文档
                'insertparagraphbeforetable', //"表格前插入行"
                'fontfamily', //字体
                'fontsize', //字号
                'paragraph', //段落格式
                'edittable', //表格属性
                'edittd', //单元格属性
                'link', //超链接
                'emotion', //表情
                'spechars', //特殊字符
                'searchreplace', //查询替换
                'justifyleft', //居左对齐
                'justifyright', //居右对齐
                'justifycenter', //居中对齐
                'justifyjustify', //两端对齐
                'forecolor', //字体颜色
                'backcolor', //背景色
                'insertorderedlist', //有序列表
                'insertunorderedlist', //无序列表
                'fullscreen', //全屏
                'directionalityltr', //从左向右输入
                'directionalityrtl', //从右向左输入
                'rowspacingtop', //段前距
                'rowspacingbottom', //段后距
                'lineheight', //行间距
                'edittip ', //编辑提示
                     'simpleupload', //单图上传
                    'insertimage', //多图上传
                  'insertvideo', //视频
                    'imageleft', //左浮动
                    'imageright', //右浮动
                    'attachment', //附件
                    'imagecenter', //居中
                'customstyle', //自定义标题
                'autotypeset', //自动排版
                'touppercase', //字母大写
                'tolowercase', //字母小写
                'inserttable', //插入表格
                'drafts' // 从草稿箱加载
                ]
            ],
            iframeCssUrl: '/Public/ueditor/themes/iframe.css',
            initialFrameWidth: 900,   //初始化宽度

            initialFrameHeight: 500,

            autoSyncData:true,
            //初始化高度
            serverUrl :"<?php echo U('Admin/Uploader/ueditor');?>"
        });


    </script>
   <style type="text/css">

    body {
    font-size: 16px;
    font-family:"Microsoft YaHei",Arial, Helvetica, sans-serif
    }
    *,
    *:before,
    *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    }

    .crop-picker-wrap {
    position: relative;
    width: 100px;
    height: 30px;
    overflow: hidden;
    }
    .crop-picker {
    width: 100%;
    height: 100%;
    line-height: 1;

    -webkit-appearance: none;
    margin: 0;
    border: none;
    border-radius: 5px;
    padding: 9px 0;
    background-color: #1ab2ff;

    color: #fff;
    cursor: pointer;
    }
    .crop-picker-file {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    opacity: 0;
    cursor: pointer;
    filter: alpha(opacity=0);
    }

    .crop-wrapper {
    display: inline-block;
    min-width: 750px;
    margin: 10px 0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px 2px #ccc;
    }

    .crop-container {
    font-size: 0;
    }

    .crop-container img[src=""] {
    visibility: hidden;
    }

    .crop-area-wrapper,
    .crop-preview-wrapper {
    display: inline-block;
    vertical-align: top;
    }
    .crop-area-wrapper {
    width: 500px;
    height: 400px;
    }
    .crop-preview-wrapper {
    width: 200px;
    height: 200px;
    margin-left: 28px;
    overflow: hidden;
    }
    .crop-preview-container {
    position: relative;
    overflow: hidden;
    }
    .crop-operate {
    text-align: center;
    margin: 10px 0;
    }
    .crop-save,
    .crop-cancel {
    display: inline-block;
    vertical-align: middle;

    width: 150px;
    height: 50px;
    line-height: 50px;

    -webkit-appearance: none;
    margin: 0 5px;
    border: none;
    border-radius: 5px;
    background-color: #1ab2ff;

    color: #fff;
    cursor: pointer;
    }
    .crop-hidden {
    display: none;
    }
    </style>
</head>
<?php if(session('admin_auth')){ ?>
<body style="background: transparent;">

<?php }else{ ?>
<body>
    <div class="navigator clearfix">
        <div class="container">
            
        </div>  
    </div>
<?php } ?>
<script src="/Public/static/js/jquery.form.js"></script>
<div id="page-wrapper">
	<ol class="breadcrumb" id="bread-crumb"></ol>
<script type="text/javascript">
	var menu_active = "<?php echo ($menu_active); ?>";
	var menu_secoud_active = "<?php echo ($menu_secoud_active); ?>";
	var menu = $(window.parent.document).find("#navslide");
	menu.find("li").each(function(){
		var parent = $(this).data("parent");
		var active = $(this).data("active");
            if(parent==menu_active){
                var parentObj = $(this).parent().parent();
                
                if(active==menu_secoud_active){
                    var parentnav = parentObj.parent().find("dt").text();
                    var curnav = $(this).text();
                    var breadcrumbHtml = '<li class="glyphicon glyphicon-home">&nbsp;'+$.trim(parentnav)+'</li><li class="active">'+$.trim(curnav)+'</li>';
                    $("#bread-crumb").html(breadcrumbHtml);
                }
            }
        });
</script>
	<div id="page-inner" class="container">
			<div class="search-form">
				<button type="button" class="btn btn-primary btn-sm" onclick="addGroup()"><i class="glyphicon glyphicon-plus"></i> 添加</button>
			</div>
			<table class="table table-bordered table-striped table-hover">
					<thead>
						<th>角色名称</th>
						<th>状态</th>
						<th>管理操作</th>
					</thead>
					<tbody>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vo["rolename"]); ?></td>
						<td><?php if($vo["status"] == 1): ?><span class="text-success">正常</span><?php else: ?><span class="text-danger">禁用</span><?php endif; ?></td>
						<td>
							<a href="javascript:;" onclick="editGroup(<?php echo ($vo["id"]); ?>)" class="glyphicon glyphicon-edit">修改</a>
							&nbsp;&nbsp;<a href="<?php echo U('/admin/auth/group');?>?id=<?php echo ($vo["id"]); ?>" class="glyphicon glyphicon-cog">分配权限</a>
						</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
				<div class="clearfix"></div>
	</div>
</div>

<!-- 模态框（Modal) -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form class="form-horizontal" id="myform" action="" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="createModalLabel">添加角色</h4>
            </div>
            <div class="modal-body form-horizontal">
            	<input type="hidden" name="modid" value="0" />

             	<div class="form-group form-group-sm">
             		<label class="col-sm-3 control-label talign-right fz13">角色名称</label>
				    <div class="col-sm-7">
				    	<input type="text" class="form-control" name="rolename">
				    </div>
                    <div class="clearfix"></div>
             	</div>
             	<div class="form-group form-group-sm">
             		<label class="col-sm-3 control-label talign-right fz13">状态</label>
				    <div class="col-sm-7">
				    	<input type="radio" name="status" value="1"> 开启&nbsp;
				    	<input type="radio" name="status" value="0"> 禁用
				    </div>
                    <div class="clearfix"></div>
             	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary" onclick="doAddGroup()">确定</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script type="text/javascript">
function addGroup(){
	var modal = $("#editModal");
	modal.find("input[name='modid']").val(0);
	modal.modal();
}
function editGroup(id){
	var modal = $("#editModal");
	if(typeof id=='undefined') return;

	$.ajax({
		type:"post",
		url:"<?php echo U('/admin/auth/getGroup');?>",
		dataType:"json",
		data:{"id":id},
		success:function(ret){
			if(ret.msg=='succ'){
				var info = ret.info;
				if(info){
					modal.find("input[name='modid']").val(info.id);
					modal.find("input[name='rolename']").val(info.rolename);
					modal.find("input[name='status'][value="+info.status+"]").prop('checked',true);
				}
				modal.modal();
			}
		}
	});
}
function doAddGroup(){
	var options = {
    	url: "<?php echo U('/admin/auth/doAddGroup');?>",
    	dataType: 'json',
    	beforeSubmit: function(){
			return true;
    	},
        success: function (data) {
        	if(data.msg=='succ'){
        		var _options = {"text":"修改成功！","action":function(){window.location.reload();}};
                doAlertDialog(_options);
        	}else{
        		var _options = {"text":"修改失败！"};
        		if(data.msg) _options.text = data.msg;
        		doAlertDialog(_options);
        	}
        }
    };
    $("#myform").ajaxForm(options);
    return false;
}
function deleteNav(id){
	if(typeof id=='undefined') return;
	var options = {"flag":"error","text":"您确定要删除吗！","buttons":{"ok":{"action":function(){doDeleteNav(id);}},"cancel":{}}};
    	doConfirmDialog(options);
}
function doDeleteNav(id){
	var modal = $("#editModal");
	if(typeof id=='undefined') return;
	$.ajax({
		type:"post",
		url:"<?php echo U('/admin/auth/doDelete');?>",
		dataType:"json",
		data:{"id":id},
		success:function(ret){
			if(ret.msg=='succ'){
				var _options = {
					"text":"删除成功",
					"flag":'success',
					"action":function(){
						window.location.reload();
					}

				};
		        doAlertDialog(_options);
			}else{
				var _options = {"text":ret.msg,"flag":"error"};
		        doAlertDialog(_options);
			}
		}
	});
}
</script>
	<footer>
		
	</footer>
</body>
</html>