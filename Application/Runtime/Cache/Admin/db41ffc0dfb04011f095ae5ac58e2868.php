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
        <ul class="nav nav-tabs">
            <li role="presentation" class="active" id="de_A" name="de"><a href="/admin/edit/inspection?de=A" >检测流程</a></li>
            <li role="presentation" class="active" id="de_B" name="de"><a href="/admin/edit/inspection?de=B" >质检范围</a></li>
            <li role="presentation" class="active" id="de_C" name="de"><a href="/admin/edit/show.html?type=3" >顶部图片</a></li>
            <input type="hidden" id="de_choose" value="<?php echo ($de); ?>"/>
        </ul>
        <p></p>
        <?php if($de == A): ?><form class="form-horizontal" id="myform" action="" method="post">
                <div class="form-group">
                    <label class="col-sm-1 control-label talign-center fz13"></label>
                    <div class="col-sm-11">
                        <button type="submit" class="btn btn-success " onclick="doAdd()">保存</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <input type="hidden" name="de" value="<?php echo ($de); ?>"/>
                <div class="form-group">
                    <label class="col-sm-1 control-label talign-center fz13">内容</label>
                    <div class="col-sm-11">
                        <textarea id="content" name="content" ><?php echo ($one["content"]); ?></textarea>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form><?php endif; ?>
        <?php if($de == B): ?><div>
                <a class="btn btn-success btn-xs" href="<?php echo U('/admin/edit/addInspection');?>"><i class="glyphicon glyphicon-plus"></i>新增</a>
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <th width="5%">序号</th>
                    <th width="10%">大类名称</th>
                    <th width="15%">类别(产品/项目/参数)</th>
                    <th width="15%">产品/项目/参数</th>
                    <th width="20%">依据的标准/方法</th>
                    <th width="20%">编号</th>
                    <th width="10%">限制范围</th>
                    <th >状态</th>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><tr>
                            <td ><?php echo ($one["path"]); ?></td>
                            <td ><?php echo ($one["cate_name"]); ?></td>
                            <td ><?php echo ($one["metial_name"]); ?></td>
                            <td ><?php echo ($one["name"]); ?></td>
                            <td ><?php echo ($one["standard"]); ?></td>
                            <td ><?php echo ($one["number"]); ?></td>
                            <td ><?php echo ($one["remark"]); ?></td>
                            <td ><?php echo ($one["status"]); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <div class=" pull-right"><nav aria-label="Page navigation" id="pagination"><?php echo ($pagination); ?></nav></div>
            </div>
            <div>
            <a href="<?php echo U('admin/edit/expt');?>">导出Excell</a>
            <br />
                <form class="form-horizontal" id="myform2" action="<?php echo U('/admin/edit/impt2');?>" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label talign-center fz13">文件</label>
                        <div class="col-sm-10">
                            <div class="face" id="attachment" style="width: 120px;height: 80px;" onclick="onFileUpload()">
                                <p>点击选取文件</p>
                                <p class="help-block" id="attachment2"></p>
                            </div>
                            <input type="hidden" name="excelpath"/>
                            <input type="file" name="file" onchange="excelUpload()" id="addfile" style="display:none;"  />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label talign-center">&nbsp;</label>
                        <div class="col-sm-10">
                            <a class="btn btn-danger btn-xs" href="javascript:void(0);" onclick="onUpload()" >上传</a>
                            <!--<a href="<?php echo U('/admin/contract/sampleEdit');?>?id=<?php echo ($centreno); ?>" class="btn btn-success">返 回</a>-->
                        </div>
                    </div>
                </form>
            </div><?php endif; ?>
    </div>
</div>
<script src="/Public/static/js/jquery.form.js"></script>
<script src="/Public/static/js/ajaxfileupload.js"></script>
<script type="text/javascript">
    $(function(){
        var de = $("#de_choose").val();
        $("li[name='de']").removeClass("active");
        $("#de_"+de).addClass("active");
    });
    function doAdd(){
        var options = {
            url: "<?php echo U('/admin/edit/saveInspection');?>",
            dataType: 'json',
            beforeSubmit: function(){
                return true;
            },
            success: function (data) {
                if(data.msg=='succ'){
                    var _options = {"text":"保存成功！","action":function(){window.location.reload();}};
                    doAlertDialog(_options);
                }else{
                    var _options = {"text":"保存失败！"};
                    if(data.msg) _options.text = data.msg;
                    doAlertDialog(_options);
                }
            }
        };
        $("#myform").ajaxForm(options);
        return false;
    }
    //删除
    function onDelete(id){
        if(!id) return false;
        var _options = {"flag":"error","text":"您确定要删除吗！","buttons":{"ok":{"action":function(){doneDel(id);}},"cancel":{}}};
        doConfirmDialog(_options);
    }

    function doneDel(id){
        if(!id) return false;
        $.ajax({
            type:"post",
            url:"<?php echo U('/admin/edit/doInspDelete');?>",
            data:{"id":id},
            dataType:"json",
            success:function(ret){
                if(ret.msg=='succ'){
                    var _options = {"text":"删除成功！","action":function(){window.location.reload();}};
                    doAlertDialog(_options);
                }else{
                    var _options = {"text":"删除失败！"};
                    if(data.msg) _options.text = data.msg;
                    doAlertDialog(_options);
                }
            }
        });
    }

    function excelUpload(){
        var file = $("#addfile").val();
        console.log(file)
        if(file){
            $.ajaxFileUpload({
                url: "<?php echo U('Uploader/excelUpload');?>",
                secureuri: false,
                fileElementId: 'addfile',
                dataType: 'JSON',
                success: function (data, status) {
                    var ret = JSON.parse(data);
                    $("#addfile").val("");
                    //alert(ret.url);
                    if(ret.info=='succ'){
                        $("input[name='excelpath']").val(ret.save_path);
                        $("#attachment2").html(ret.save_path);
                        // $("#attachment img").attr("src",ret.information_pic_path);
                    }else{
                        var _options = {"text":"上传失败","flag":"error"};
                        if(ret.info) _options.text = ret.info;
                        doAlertDialog(_options);
                    }
                },
                error: function (data, status, e){
                    var _options = {"text":"上传失败","flag":"error"};
                    doAlertDialog(_options);
                }
            });
        }
        return false;
    }
    function onFileUpload() {
        $('#addfile').click();
        return false;
    }

    function onUpload(){
            var _options = {"flag":"error","text":"此操作将会覆盖之前的数据，您确定要修改吗？","buttons":{"ok":{"action":function(){excelSave();}},"cancel":{}}};
            doConfirmDialog(_options);
    }
    function excelSave(){
        var excelpath = $("input[name='excelpath']").val();
      //  console.log(excelpath)
        $.ajax({
            url: "<?php echo U('/admin/edit/impt2');?>",
            dataType: 'JSON',
            data:{"excelpath":excelpath},
            beforeSubmit: function(){
                return true;
            },
            success: function (ret) {
                if(ret.msg == "succ"){
                    var _options = {"text":"修改成功","action":function(){window.location.reload()}};
                    doAlertDialog(_options);
                }else{
                    var _options = {"text":"上传失败","flag":"error"};
                    if(ret.info) _options.text = ret.info;
                    doAlertDialog(_options);
                }
                return true;
            }
        });
       // $("#myform2").ajaxForm(options);
        return false;
    }

</script>

	<footer>
		
	</footer>
</body>
</html>