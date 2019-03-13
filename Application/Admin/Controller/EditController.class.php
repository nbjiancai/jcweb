<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Image;

class EditController extends Controller {
    public $user = array();
    //初始化方法
    public function _initialize(){
        load('@.functions');
        $this->user = D("account")->checkLogin();
        $this->assign('menu_active',strtolower(CONTROLLER_NAME));
        $this->assign('menu_secoud_active',strtolower(ACTION_NAME));
    }
    //首页轮播图片保存
    public function saveImage1(){
        $imgurl = I("imgurl");
        //原图地址

        $result = array("msg"=>"fail");
        if(empty($imgurl)){
            $result['msg'] = "无效的提交！";
            $this->ajaxReturn($result);
        }

        $data = array(
            'picture'=>$imgurl
        );
        M()->startTrans();
        if(D('home_image')->add($data)){
            $result['msg'] = 'succ';
            M()->commit();
        }else{
            M()->rollback();
        }
        $this->ajaxReturn($result);
    }
    //首页轮播图片保存
    public function saveImage(){
        $imgurl = I("imgurl");
        $title = I('title','');
        //原图地址
        $de = I("de");
        $result = array("msg"=>"fail");

        if(empty($de)){
            $result['msg'] = "类型出错！";
            $this->ajaxReturn($result);
        }

        if(empty($imgurl)){
            $result['msg'] = "图片保存失败！";
            $this->ajaxReturn($result);
        }

        if($de=='A'){
            $data = array(
                'picture'=>$imgurl
            );
            M()->startTrans();
            if(D('home_image')->add($data)){
                $result['msg'] = 'succ';
                M()->commit();
            }else{
                M()->rollback();
            }
        }elseif ($de=='B'){
            $thumb_url = I('thumb_url');
            $title = I('title');
            if(empty($title)){
                $result['msg'] = '图片名称不能为空！';
                $this->ajaxReturn($result);
            }
            $data = array(
                'pic_path'=>$imgurl,
                'title'=>$title,
                'information_pic_path'=>$thumb_url
            );
            M()->startTrans();
            if(D('lab_image')->add($data)){
                $result['msg'] = 'succ';
                M()->commit();
            }else{
                M()->rollback();
            }
        }

        $this->ajaxReturn($result);
    }
//首页轮播图片删除
    public function doDelete(){
        $id =I("id",0,'intval');
        $de = I("de");
        $rs = array("msg"=>"fail");
        if(empty($de)){
            $rs['msg'] = "类型不存在！";
            $this->ajaxReturn($rs);
        }
        if($de=='A' && D("home_image")->where("id=".$id)->delete()){
            $rs['msg'] = 'succ';
        }
        if($de=='B' && D("lab_image")->where("id=".$id)->delete()){
            $rs['msg'] = 'succ';
        }
        $this->ajaxReturn($rs);
    }
    //动态资讯内容
    public function information(){
        $de=I('de','A');
        if($de == 'A'){
            $type = 1;
        }
        $page = I("p",'int');
        $pagesize = 10;
        if($page<=0) $page = 1;
        $offset = ( $page-1 ) * $pagesize;
        $where="type = $type";
        $data = D("information")->where($where)->limit("{$offset},{$pagesize}")->order('id desc')->select();
        $count = D("information")->where($where)->count();//!!!!!!!!!!!!!!
        $Page       = new \Think\Page($count,$pagesize);
        $Page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination       = $Page->show();// 分页显示输出
        $body=array(
          'de'=>$de,
            'list'=>$data,
            'pagination'=>$pagination,
        );
        $this->assign($body);
        $this->display();
    }
    //质检服务内容
    public function inspection(){
        $de=I('de','A');
        if($de == 'A'){
            $data = D("inspection_process")->find();
            $body=array(
                'one'=>$data,
                'de'=>$de,
            );
        }elseif ($de == 'B'){
            $page = I("p",'int');
            $pagesize = 10;
            if($page<=0) $page = 1;
            $offset = ( $page-1 ) * $pagesize;
            $data = D("inspection_scope")->limit("{$offset},{$pagesize}")->order('id desc')->select();
            $count = D("inspection_scope")->count();//!!!!!!!!!!!!!!
            $Page       = new \Think\Page($count,$pagesize);
            $Page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
            $pagination       = $Page->show();// 分页显示输出
            $body=array(
                'list'=>$data,
                'pagination'=>$pagination,
                'de'=>$de,
            );
        }

        $this->assign($body);
        $this->display();
    }
    //新闻中心内容
    public function news(){
        $admin_auth = session("admin_auth");//获取当前登录用户信息
        $if_admin = $admin_auth['super_admin'];//是否是超级管理员
        $user=$admin_auth['gid'];//判断是哪个角色
        $de=I('de','A');

        if($de == 'A'){
            $type = 1;//行业新闻
        }else if($de = 'B'){
            $type = 0;//通知公告
        }

        if($de =='A'){
            $page = I("p",'int');
            $pagesize = 10;
            if($page<=0) $page = 1;
            $offset = ( $page-1 ) * $pagesize;
            $where="type = $type";
            $result=D('news')->where($where)->limit("{$offset},{$pagesize}")->select();
            $count = D("news")->where($where)->count();//!!!!!!!!!!!!!!
            $Page       = new \Think\Page($count,$pagesize);
            $Page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
            $pagination       = $Page->show();// 分页显示输出*
        }elseif ($de =='B'){
            $page2 = I("p2",'int');
            $pagesize2 = 10;
            if($page2<=0) $page2 = 1;
            $offset2 = ( $page2-1 ) * $pagesize2;
            $where="type = $type";
            $result=D('news')->where($where)->limit("{$offset2},{$pagesize2}")->select();
            $count = D("news")->where($where)->count();//!!!!!!!!!!!!!!
            $Page       = new \Think\Page($count,$pagesize2);
            $Page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
            $pagination       = $Page->show();// 分页显示输出$Page
        }
        $body=array(
            'de'=>$de,
            'list'=>$result,
            'pagination'=>$pagination,
        );
        $this->assign($body);
        $this->display();
    }
    //设置特殊展板
    public function doSpecial(){
        $id = I('id');
        $rs['msg'] = 'fail!';
        if (empty($id)) {
            $rs['msg'] = 'fail!';
            $this->ajaxReturn($rs);
        }
        $data = array(
            "if_special" => 0,
        );
        $data1 = array(
            "if_special" => 1,
        );
        //检查之前是否有设置展板
        $check = D('news')->where('if_special =1')->find();
        if ($check) {//如果有，先把它清空
            $old = $check['id'];
            M()->startTrans();
            if (D('news')->where('id =' . $old)->save($data) and D('news')->where('id =' . $id)->save($data1)) {
                $rs['msg'] = 'succ';
                M()->commit();
            } else {
                M()->rollback();
            }
        }
        else{
            M()->startTrans();
            if (D('news')->where('id =' . $id)->save($data1)) {
                $rs['msg'] = 'succ';
                M()->commit();
            } else {
                M()->rollback();
            }
        }
            $this->ajaxReturn($rs);
    }
    //新闻添加缩略展示图
    public function informationPicture(){
        $id = I('id',0,'intval');
        $type = I("type");

        //type是为区分资讯和产品及解决方案，I是资讯P代表产品
        if($type == 'I'){
            $image = D('news')->where("id = ".$id)->find();
        }
       elseif($type == 'P'){
           $image = D('production')->where("id = ".$id)->find();
       }
        $body = array(
           'id'=>$id,
            'image'=>$image,
            'type'=>$type,
        );
        $this->assign($body);
        $this->display();
    }
    public function saveInfoImage(){
        $id = I("id",0,'intval');
        $type = I('type');
        if(empty($type)){
            $result['msg'] = 'fail!';
            $this->ajaxReturn($result);
        }
        $imgurl = I("pic_path");
        $thumb = I("information_pic_path");
        //原图地址
//        $picture =str_replace("_thumb",'',$imgurl);
        $result = array("msg"=>"fail");
        if(empty($imgurl)){
            $result['msg'] = "无效的提交！";
            $this->ajaxReturn($result);
        }
        if($type == 'I'){
            $data = array(
                'information_pic_path'=>$thumb,
                'pic_path'=>$imgurl
            );
            M()->startTrans();
            if(D('news')->where("id = ".$id)->save($data)){
                $result['msg'] = 'succ';
                M()->commit();
            }else{
                M()->rollback();
            }
        }elseif($type == 'P'){
            $data = array(
                'thumb_path'=>$thumb,
                'picture_path'=>$imgurl
            );
            M()->startTrans();
            if(D('production')->where("id = ".$id)->save($data)){
                $result['msg'] = 'succ';
                M()->commit();
            }else{
                M()->rollback();
            }
        }

        $this->ajaxReturn($result);
    }
    //动态资讯新增
    public function addInformation(){
        $de = I('de');
        $id = I('id');
        if($id){
            $check = D('news')->where('id ='.$id)->find();
            $check['content'] =htmlspecialchars($check['content']);
           $body = array(
               'one'=>$check,
               'de'=>$de,
               'id'=>$id,
           );
        }else{
            $body = array(
                'de'=>$de
            );
        }
        $this->assign($body);
        $this->display();
    }
    //检测范围新增
    public function addInspection(){
        $id = I('id');
        if($id){
            $check = D('inspection_scope')->where('id ='.$id)->find();
            $check['content'] =htmlspecialchars($check['content']);
            $body = array(
                'one'=>$check,
                'id'=>$id,
            );
            $this->assign($body);
            $this->display();
        }else{
            $this->display();
        }
    }
    //保存信息
    public function saveInfo(){
        $de = I('type');
        $id = I('id');
        if($de == 'A'){
            $type = 1;
        }
        elseif($de == 'B'){
            $type = 0;
        }
        $title =$_POST["title"];
        $content = $_POST["content"];
        $result = array("msg"=>"fail");
        if($id){
            $data = array(
                'title' => $title,
                'content' => $content,
                'save_time'=>date("Y-m-d H:i:s"),
            );
            M()->startTrans();
            if(D('news')->where("id =".$id)->save($data)){
                $result['msg'] = 'succ';
                M()->commit();
            }else{
                M()->rollback();
            }
        }
        else{
            $data = array(
                'type'=>$type,
                'title' => $title,
                'content' => $content,
                'save_time'=>date("Y-m-d H:i:s"),
            );
            M()->startTrans();
            if(D('news')->add($data)){
                $result['msg'] = 'succ';
                M()->commit();
            }else{
                M()->rollback();
            }
        }
        $this->ajaxReturn($result);
    }

    public function saveInformationImage(){
        $imgurl = I("imgurl");
        //原图地址
        $picture =str_replace("_thumb",'',$imgurl);
        $result = array("msg"=>"fail");
        if(empty($imgurl)){
            $result['msg'] = "无效的提交！";
            $this->ajaxReturn($result);
        }

        $data = array(
            'picture_name'=>$imgurl,
            'picture'=>$picture
        );
        M()->startTrans();
        if(D('home_image')->add($data)){
            $result['msg'] = 'succ';
            M()->commit();
        }else{
            M()->rollback();
        }
        $this->ajaxReturn($result);
    }
    //删除
    public function doInfoDelete(){
        $id =I("id",0,'intval');
        $rs = array("msg"=>"fail");
        if(D("news")->where("id=".$id)->delete()){
            $rs['msg'] = 'succ';
        }
        $this->ajaxReturn($rs);
    }
    //检测范围删除
    public function doInspDelete(){
        $id =I("id",0,'intval');
        $rs = array("msg"=>"fail");
        if(D("inspection_scope")->where("id=".$id)->delete()){
            $rs['msg'] = 'succ';
        }
        $this->ajaxReturn($rs);
    }
//联系我们信息修改
    public function contactus() {
        $rs=D('contact_us')->find();
        $this->assign($rs);
        $this->display();
    }

    public function saveContactInformation(){
        $pc=I("postal_code");
        $ad=I("address");
        $ph=I("phonenumber");
        $fax=I('fax');
        $cp=I("consult_phone");
        $email=I('email');
        $result = array("msg"=>"fail");
        $data =array(
            'postal_code'=>$pc,
            'address'=>$ad,
            'phonenumber'=>$ph,
            'fax'=>$fax,
            'consult_phone'=>$cp,
            'email'=>$email,
        );
        $check = D('contact_us')->select();

        if($check){
            M()->startTrans();
            if(D('contact_us')->where('id=1')->save($data)){
                $result['msg'] = 'succ';
                M()->commit();
            }else{
                M()->rollback();
            }
        }
        else{
            M()->startTrans();
            if(D('contact_us')->add($data)){
                $result['msg'] = 'succ';
                M()->commit();
            }else{
                M()->rollback();
            }
        }

            $this->ajaxReturn($result);

        }
        //招贤纳士
    public function recruitment (){
        $de=I('de','A');
        $data=D('recruitment')->find();
        $body=array(
            'de'=>$de,
            'one'=>$data
        );
        $this->assign($body);
        $this->display();
    }
    public function saveRecruitmentInformation(){
        $content=$_POST['content'];
        $result = array("msg"=>"fail");
        $data =array(
            'content'=>$content,
            'save_time'=>date("Y-m-d H:i:s"),
        );
        $a=D('recruitment')->find();
        if($a){
            M()->startTrans();
            if(D('recruitment')->where('id=1')->save($data)){
                $result['msg'] = 'succ';
                M()->commit();
            }else{
                M()->rollback();
            }
            $this->ajaxReturn($result);
        }
       else{
           M()->startTrans();
           if(D('recruitment')->add($data)){
               $result['msg'] = 'succ';
               M()->commit();
           }else{
               M()->rollback();
           }
           $this->ajaxReturn($result);
       }
    }
//员工图片
    public function yuangongPicture(){
        $type=I('type');
        $admin_auth = session("admin_auth");//获取当前登录用户信息
        $if_admin = $admin_auth['super_admin'];//是否是超级管理员
        $user=$admin_auth['gid'];//判断是哪个角色
        $page = I("p",'int');
        $pagesize = 10;
        $where="type = $type";
        if($page<=0) $page = 1;
        $offset = ( $page-1 ) * $pagesize;
        $result=D('yuangong_picture')->where($where)->limit("{$offset},{$pagesize}")->select();
        $count = D("yuangong_picture")->where($where)->count();//!!!!!!!!!!!!!!
        $Page       = new \Think\Page($count,$pagesize);
        $Page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination       = $Page->show();// 分页显示输出
        $body=array(
            'lists'=>$result,
            'pagination'=>$pagination,
            'count'=>$count,
            'type'=>$type,
        );
        $this->assign($body);
        $this->display();
    }
    public function saveyuangongImage(){
        $imgurl = I("imgurl");
        $type = I('type');
        //原图地址
        $picture =str_replace("_thumb",'',$imgurl);
        $result = array("msg"=>"fail");
        if(empty($imgurl)){
            $result['msg'] = "无效的提交！";
            $this->ajaxReturn($result);
        }
        $data = array(
            'thumb_path'=>$imgurl,
            'picture_path'=>$picture,
            'type'=>$type,
            'save_time'=>date("Y-m-d H:i:s"),
        );
        M()->startTrans();
        if(D('yuangong_picture')->add($data)){
            $result['msg'] = 'succ';
            M()->commit();
        }else{
            M()->rollback();
        }
        $this->ajaxReturn($result);
    }
    public function doyuangongDelete(){
        $id =I("id",0,'intval');
        $rs = array("msg"=>"fail");
        if(D("yuangong_picture")->where("id=".$id)->delete()){
            $rs['msg'] = 'succ';
        }
        $this->ajaxReturn($rs);
    }
    //产品及解决方案
    public function production(){
        $page = I("p",'int');
        $pagesize = 10;
        if($page<=0) $page = 1;
        $offset = ( $page-1 ) * $pagesize;
        $de=I('de','A');
        if($de =='A'){
            $where="type = 'A'";
            $data=D('production')->where($where)->limit("{$offset},{$pagesize}")->order('id desc')->select();
        }
        elseif($de =='B'){
            $where="type = 'B'";
            $data=D('production')->where($where)->limit("{$offset},{$pagesize}")->order('id desc')->select();
        }
        if($de == 'C'){
            $pingtai=D('service')->find();
        }
        $count = D("production")->where($where)->count();
        $Page= new \Think\Page($count,$pagesize);
        $Page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination= $Page->show();// 分页显示输出
        $body=array(
            'de'=>$de,
            'data'=>$pingtai,
            'lists'=>$data,
            'pagination'=>$pagination,
        );
        $this->assign($body);
        $this->display();
    }
    //新增加编辑
    public function addProduction(){
        $type=I('de');
        $id=I('id');
        $data="";
        if ($id){
            $data=D('production')->where('id='.$id)->find();
        }
        $body = array(
            'one'=>$data,
            'type'=>$type
        );
        $this->assign($body);
        $this->display();
    }
    public function saveProductionInformation(){
        $id = I('id');
        $type = I('type');
            $name = I('title');
            $content = $_POST["content"];
            $result = array("msg"=>"fail");
            $data = array(
                'type'=>$type,
                'name'=>$name,
                'content'=>$content,
                'save_time'=>date("Y-m-d H:i:s"),
            );
            if(empty($id)){
                M()->startTrans();
                if(D('production')->add($data)){
                    $result['msg'] = 'succ';
                    M()->commit();
                }else{
                    M()->rollback();
                }

            }else{
                M()->startTrans();
                if(D('production')->where("id=".$id)->save($data)){
                    $result['msg'] = 'succ';
                    M()->commit();
                }else{
                    M()->rollback();
                }
            }
            $this->ajaxReturn($result);


    }
    public function doProductionDelete(){
        $id =I("id",0,'intval');
        $rs = array("msg"=>"fail");
        if(D("production")->where("id=".$id)->delete()){
            $rs['msg'] = 'succ';
        }
        $this->ajaxReturn($rs);
    }
    //关于我们
    public function aboutus(){
        $this->display();
    }
    //中心概况保存
    public function saveIntroduction(){
        $result = array("msg"=>"fail");
        $content = $_POST["content"];
        $type = I("type");
        $where = "type = {$type}";
        $data = array(
            'content'=>$content,
            'type'=>$type,
            'save_time'=>date("Y-m-d H:i:s"),
        );
        $check = D('center_introduction')->where($where)->find();
        if($check){
            if(D('center_introduction')->where("type = 1")->save($data)){
                $result['msg'] = 'succ';
            }
        }
        else{
            if(D('center_introduction')->add($data)){
                $result['msg'] = 'succ';
            }
        }
        $this->ajaxReturn($result);
    }
    //检测服务保存
    public function saveInspection(){
        $result = array("msg"=>"fail");
        $content = $_POST["content"];
        $de = I("de");
        $id = I("id");
        $where = "id = {$id}";
        if($de == 'A'){
            $data = array(
                'content'=>$content,
                'save_time'=>date("Y-m-d H:i:s"),
            );
            $check = D('inspection_process')->find();
            if($check){
                if(D('inspection_process')->where('id=1')->save($data)){
                    $result['msg'] = 'succ';
                }
            }
            else{
                if(D('inspection_process')->add($data)){
                    $result['msg'] = 'succ';
                }
            }
            $this->ajaxReturn($result);
        }elseif ($de == 'B'){
            $title = I("title");
            $data = array(
                'content'=>$content,
                'title'=>$title,
                'save_time'=>date("Y-m-d H:i:s"),
            );
//            $check = D('inspection_scope')->where($where)->find();
            if($id){
                if(D('inspection_scope')->where($where)->save($data)){
                    $result['msg'] = 'succ';
                }
            }
            else{
                if(D('inspection_scope')->add($data)){
                    $result['msg'] = 'succ';
                }
            }
            $this->ajaxReturn($result);
        }
    }
    public function introduction(){
        $type = I("type");
        $where = "type = {$type}";
        $data = D('center_introduction')->where($where)->find();

        $body = array(
            'one'=>$data,
            'type'=>$type,
        );
        $this->assign($body);
        $this->display();
    }
    public function show(){
        $type = I('type');
        $where = "type = {$type}";
        $image = D('head_image')->where($where)->find();
        $body = array(
            'type'=>$type,
            'image'=>$image,
        );
        $this->assign($body);
        $this->display();
    }
    public function showSave(){
        $rs = array("msg"=>"fail");
        $type = I('type');
        $pic_path = I("pic_path");
        $information_pic_path = I("information_pic_path");
        if(empty($pic_path)){
            $rs['msg'] = "无效的提交！";
            $this->ajaxReturn($rs);
        }
        $data = array(
            'type'=>$type,
            'information_pic_path'=>$information_pic_path,
            'pic_path'=>$pic_path,
            'save_time'=>date("Y-m-d H:i:s"),
        );

        $where = "type = {$type}";
        if(D('head_image')->where($where)->find($data)){
            if(D('head_image')->where($where)->save($data)){
                $rs['msg'] = 'succ';
            }

            $this->ajaxReturn($rs);
        }else{
            if(D('head_image')->where($where)->add($data)){
                $rs['msg'] = 'succ';
            }

            $this->ajaxReturn($rs);
        }

    }
    //照片删除
    public function showDelete(){
        $id =I("id",0,'intval');
        $rs = array("msg"=>"fail");
        if(D("aboutus")->where("id=".$id)->delete()){
            $rs['msg'] = 'succ';
        }
        $this->ajaxReturn($rs);
    }
}