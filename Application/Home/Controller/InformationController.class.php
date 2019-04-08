<?php
/**
 * Created by PhpStorm.
 * User: Khan
 * Date: 2019/2/12
 * Time: 10:38
 */

namespace Home\Controller;
use Think\Controller;

class InformationController extends Controller
{
    public function introduction(){
        $headPicture = D('head_image')->where('type = 1')->find();
        $footer=D('footer')->find();
        $intro=D('center_introduction')->find();
        $body=array(
            'intro'=>$intro,
            'footer'=>$footer,
            'head_image'=>$headPicture
        );
        $this->assign($body);
        $this->display();
    }
    public function structure(){
        $headPicture = D('head_image')->where('type = 1')->find();
        $footer=D('footer')->find();
        $structure=D('org_structure')->find();
        $body=array(
            'structure'=>$structure,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    public function certificate(){
        $headPicture = D('head_image')->where('type = 1')->find();
        $footer=D('footer')->find();
        $certi=D('constitute_certificate')->find();
        $body=array(
            'certi'=>$certi,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    //通知公告
    public function news(){
        $headPicture = D('head_image')->where('type = 2')->find();
        $footer=D('footer')->find();
        //通知公告分页
        $page=I("p",'int');
        if($page<=0) $page=1;
        $pagesize=4;
        $offset=($page-1)*$pagesize;
        $notice =D('news')->where('type=0')->limit("{$offset},{$pagesize}")->order('id desc')->select();
        $count=D('news')->where("type = 0")->count();
        $notice_p =  new \Think\Page($count,$pagesize);
        $notice_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination1= $notice_p->show();

        $body=array(
            'notice'=>$notice,
            'pagination1'=>$pagination1,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    //行业新闻
    public function newsIns(){
        $headPicture = D('head_image')->where('type = 2')->find();
        $footer=D('footer')->find();
        //行业新闻分页
        $page2=I("p2",'int');
        if($page2<=0) $page2=1;
        $pagesize2=4;
        $offset2=($page2-1)*$pagesize2;
        $industry =D('news')->where('type=1')->limit("{$offset2},{$pagesize2}")->order('id desc')->select();
        $count2=D('news')->where("type = 1")->count();
        $industry_p =  new \Think\Page($count2,$pagesize2,'','p2');
        $industry_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination2= $industry_p->show();

        $body=array(
            'industry'=>$industry,
            'pagination'=>$pagination2,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    public function newDetail(){
        $headPicture = D('head_image')->where('type = 2')->find();
        $footer=D('footer')->find();
        $type=I("type",1);
        $id=I('id');
        $one=D('news')->where("type={$type}")->where("id = {$id}")->find();
        $body=array(
            'one'=>$one,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    public function process(){
        $headPicture = D('head_image')->where('type = 3')->find();
        $footer=D('footer')->find();
        $process=D('inspection_process')->find();
        $body=array(
            'process'=>$process,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    //质检范围子页面
    public function scope(){
        $headPicture = D('head_image')->where('type = 3')->find();
        $footer=D('footer')->find();

        $body=array(
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    //质检范围detail
    public function scopeDetail(){
        $headPicture = D('head_image')->where('type = 3')->find();
        $footer=D('footer')->find();
        $cate_num=I('cate_num');
        $where = "cate_num = {$cate_num} and status = 1";
        $page=I("p",'int');
        if($page<=0) $page=1;
        $pagesize=50;
        $offset=($page-1)*$pagesize;
        $scope =D('inspect_scope')->where($where)->limit("{$offset},{$pagesize}")->order('id desc')->select();
        $count=D('inspect_scope')->where($where)->count();
        $scope_p =  new \Think\Page($count,$pagesize);
        $scope_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination= $scope_p->show();
        $body=array(
            'data'=>$scope,
            'pagination'=>$pagination,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    //检测资料下载
    public function file(){
        $headPicture = D('head_image')->where('type = 5')->find();
        $footer=D('footer')->find();
        //资料下载分页
        $page=I("p",'int');
        if($page<=0) $page=1;
        $pagesize=4;
        $offset=($page-1)*$pagesize;
        $data =D('file_download')->where('type=0')->limit("{$offset},{$pagesize}")->order('id desc')->select();
        $count=D('file_download')->where("type = 0")->count();
        $data_p =  new \Think\Page($count,$pagesize);
        $data_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination1= $data_p->show();

        $body=array(
            'data'=>$data,
            'pagination1'=>$pagination1,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    //标准资料下载
    public function fileSta(){
        $headPicture = D('head_image')->where('type = 5')->find();
        $footer=D('footer')->find();

        //标准下载分页
        $page2=I("p2",'int');
        if($page2<=0) $page2=1;
        $pagesize2=4;
        $offset2=($page2-1)*$pagesize2;
        $standard =D('file_download')->where('type=1')->limit("{$offset2},{$pagesize2}")->order('id desc')->select();
        $count2=D('file_download')->where("type = 1")->count();
        $standard_p =  new \Think\Page($count2,$pagesize2,'','p2');
        $standard_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination2= $standard_p->show();

        $body=array(
            'standard'=>$standard,
            'pagination'=>$pagination2,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }

    public function contact(){
        $headPicture = D('head_image')->where('type = 6')->find();
        $footer=D('footer')->find();
        $contact=D('contact_us')->find();
        $body=array(
            'contact'=>$contact,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    //标准立项
    public function standard(){
        $headPicture = D('head_image')->where('type = 4')->find();
        $footer=D('footer')->find();
        $page2=I("p2",'int');
        if($page2<=0) $page2=1;
        $pagesize2=4;
        $offset2=($page2-1)*$pagesize2;
        $standard =D('standard')->where('type=0')->limit("{$offset2},{$pagesize2}")->order('id desc')->select();
        $count2=D('standard')->where("type = 0")->count();
        $standard_p =  new \Think\Page($count2,$pagesize2,'','p2');
        $standard_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination2= $standard_p->show();

        $body=array(
            'pagination'=>$pagination2,
            'standard'=>$standard,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    //标准发布
    public function standardPub(){
        $headPicture = D('head_image')->where('type = 4')->find();
        $footer=D('footer')->find();
        $page2=I("p2",'int');
        if($page2<=0) $page2=1;
        $pagesize2=4;
        $offset2=($page2-1)*$pagesize2;
        $standard =D('standard')->where('type=1')->limit("{$offset2},{$pagesize2}")->order('id desc')->select();
        $count2=D('standard')->where("type = 1")->count();
        $standard_p =  new \Think\Page($count2,$pagesize2,'','p2');
        $standard_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination2= $standard_p->show();

        $body=array(
            'pagination'=>$pagination2,
            'standard'=>$standard,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
    //标准动态
    public function standardDyn(){
        $headPicture = D('head_image')->where('type = 4')->find();
        $footer=D('footer')->find();
        $page2=I("p2",'int');
        if($page2<=0) $page2=1;
        $pagesize2=4;
        $offset2=($page2-1)*$pagesize2;
        $standard =D('standard')->where('type=2')->limit("{$offset2},{$pagesize2}")->order('id desc')->select();
        $count2=D('standard')->where("type = 2")->count();
        $standard_p =  new \Think\Page($count2,$pagesize2,'','p2');
        $standard_p->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $pagination2= $standard_p->show();

        $body=array(
            'pagination'=>$pagination2,
            'standard'=>$standard,
            'footer'=>$footer,
            'head_image'=>$headPicture,
        );
        $this->assign($body);
        $this->display();
    }
}