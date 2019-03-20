<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>官方网站-建筑材料干混砂浆产品质量监督检验测试中心</title>

    <!--高德地图API-->
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.12&key=e6ae0ce52d025128d86829abd641f04b"></script>
    <link href="/Public/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/static/css/reset.css" rel="stylesheet">
    <!-- <link href="/Public/static/css/theme.css" rel="stylesheet"> -->
</head>
<body>
<header class="head-section" style="background-color: #1E50AE;">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/Home/index">建筑材料干混砂浆产品质量监督检验测试中心</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="/Home/Information/introduction" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">中心简介 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/basic">中心概况</a></li>
                            <li><a href="/Home/Information/structure">机构设置</a></li>
                            <li><a href="/Home/Information/certificate">资质证书</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/Home/Information/news" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">新闻中心 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/news">通知公告</a></li>
                            <li><a href="/Home/Information/news#industry">行业新闻</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/Home/Information/process" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">质检服务 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Home/Information/process">质检流程</a></li>
                            <li><a href="/Home/Information/scope">质检范围</a></li>
                            <li><a href="/Home/Information/query">报告查询</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                            <a href="/Home/Information/file" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">资料下载 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/Home/Information/file">检测资料</a></li>
                                <li><a href="/Home/Information/file#standard">标准资料</a></li>
                            </ul>
                    </li>
                    <li id="contact-us"><a href="/Home/Information/contact">联系我们</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


    <div class="picContainer">
        <img src="/Public/picture/about.png" alt="中心简介">
        <a id="fix-title" href="">中心简介</a>
    </div>
    <div class="container-two" id="container-content">
        <div class="row">
            <div class="col-xs-2 col-md-2 left-menu">
                <ul>
                    <li><a href="/Home/Information/basic">中心概况</a></li>
                    <li><a href="/Home/Information/structure">机构设置</a></li>
                    <li><a href="/Home/Information/certificate">资质证书</a></li>
                </ul>
            </div>
            <div class="col-xs-10 col-md-10 right-content">
                <div class="breadcrumbs">
                    <div class="row">
                        <div class="col-lg-8 col-sm-8">
                            <ol class="breadcrumb pull-left">
                                <li>
                                    <i class="glyphicon glyphicon-home"></i><a href="/home/Index/index">
                                    主页
                                </a>
                                </li>
                                <li>
                                    <?php if($type == 1): ?><a href="/home/Information/information">
                                        中心简介
                                    </a>
                                        <?php else: ?>
                                        <a href="/home/Information/information#dynamic">
                                            中心概况
                                        </a><?php endif; ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row" id="right-content-details">
                    <div class="col-xs-12 col-md-12">
                        <img src="/Public/picture/basic.jpg" alt=""><br />
                        <p>
                            建筑材料工业干混砂浆产品质量监督检验测试中心（以下简称干混砂浆质检中心）于2007年批准成立，并通过国家计量认证/审查认可评审，获得了中国国家认证认可监督管理委员会、中国建筑材料联合会颁发的计量认证证书（CMA）、授权证书（CAL）。本质检中心具备国家法律法规规定的条件和能力，可在中华人民共和国境内向全社会出具具有证明作用的数据和结果。
                        </p>
                        <p>
                            China Building Materials Industry Center for Quality Supervision and Inspection of Dry-mixed Mortar（Quality Testing Centre of Dry-mixed Mortar in short）was established in 2007. It has passed the appraisal of national measurement authentication and investigating ratification. The center has acquired the certification of China Metrology Accreditation (CMA) and China Authorization Certificate (CAL) awarded by Certification and Accreditation Administration of the People's Republic of China and China Building Material Council. The data and result exports by Quality Testing Centre of Dry-mixed Mortar are legitimate in the people's republic of china.
                        </p><br />
                        <p>
                            质检中心属于国家建材行业级质检中心，是由国家认监委授权的具有第三方公正地位的法定检验机构，也是我国干混砂浆领域唯一的专业质检机构。质检中心挂靠在建筑材料工业技术监督研究中心，业务上受国家质量监督检验检疫总局和中国建筑材料联合会的共同领导。
                        </p>
                        <p>
                            Quality Inspection Centre of Dry-mixed Mortar is a legitimate inspection institution and it is the only professional testing institution in the dry-mixed mortar filed of our county. Quality Testing Centre of Dry-mixed Mortar is a part of National Building Materials Industry Technology and Supervision Research Center. The business is leaded by National Quality Supervision Quarantine Administration and China Building Materials federation.
                        </p><br />
                        <p>
                            质检中心技术力量雄厚，检测仪器设备齐全，检测手段先进，能满足各种检验工作的要求。目前中心通过国家认证/认可（验收）的检测项目达七大类产品，336项参数，涉及277个标准。检验范围涵盖了各类普通砂浆、特种砂浆（如：建筑保温砂浆、自流平砂浆、界面砂浆、胶粘剂、填缝剂、水泥基渗透结晶防水涂料、无机防水堵漏材料、灌浆材料、饰面砂浆等）、砂浆原材料（如水泥、集料、掺合料和外加剂等）、石膏制品、涂料、混凝土、混凝土外加剂、保温材料、燃烧性能及环境检测。
                        </p>
                        <p>
                            Quality Testing Centre of Dry-mixed Mortar can meet various testing requirements by their professional technicians，various testing instruments and advanced testing method. At present, the testing items involving 336 parameters for 277 standands and have passed the national authentication. The range of inspection including kinds of ordinary and special mortar (such as building insulation mortar, self-leveling mortar, interface mortar, adhesive, tile grout mortar, cement-based capillary crystalline waterproof coating, grouting material, decorative render and plaster, etc.) raw materials of mortar (such as cement, aggregate, admixture and additives, etc.) gypsum products, coating, concrete, concrete admixture, thermal insulation material, combustion performance and environmental monitoring.
                        </p><br />
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container" ><div class="hr"><span class="hr-inner"></span></div></div>
<!--footer start-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div>
        <address>
          <div class="col-sm-4 col-md-4">
            <p><i class="fa fa-home pr-10"></i>地址: <?php echo ($rs["address"]); ?></p></div>
          <div class="col-sm-4 col-md-4">
            <p><i class="fa fa-mobile pr-10"></i>联系电话 : <?php echo ($rs["telephone"]); ?> </p></div>
          <div class="col-sm-4 col-md-4">
            <p><i class="fa fa-envelope pr-10"></i> Email : <?php echo ($rs["email"]); ?></p></div>
        </address>
      </div>
    </div>
  </div>
  <div style="padding-bottom: 20px"></div>
  <!--small footer start -->
  <div class="footer-small">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="copyright"> <p>Copyright © 2013-2018 BUPT All Rights Reserved. 备案号：闽ICP备15012807号-1</p>
            </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript" >
    var map = new AMap.Map('container', {
        zoom:15,//级别
        center: [116.59706,39.917001],//中心点坐标
        viewMode:'3D'//使用3D视图
    });
    var infoWindow = new AMap.InfoWindow({ //创建信息窗体
        isCustom: true,  //使用自定义窗体
        content:'<div>建材检测中心</div>', //信息窗体的内容可以是任意html片段
        offset: new AMap.Pixel(16, -45)
    });
    var onMarkerClick  =  function(e) {
        infoWindow.open(map, e.target.getPosition());//打开信息窗体
        //e.target就是被点击的Marker
    }
    var marker = new AMap.Marker({
        position: [116.59706,39.917001]
    })
    map.add(marker);
    marker.on('click',onMarkerClick);//绑定click事件
</script>
<script type="text/javascript" src="/Public/static/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/Public/static/js/bootstrap.min.js"></script>
</body>
</html>