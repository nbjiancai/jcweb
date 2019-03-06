<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>官方网站-建筑材料干混砂浆产品质量监督检验测试中心</title>

    <!--高德地图API-->
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.12&key=e6ae0ce52d025128d86829abd641f04b"></script>

    <style type="text/css">
        #container{
            width:900px;
            height: 540px;
        }
    </style>
</head>
<body>
<header>
    <h1>建筑材料干混砂浆产品质量监督检验测试中心</h1>
    <ul>
        <li>
            <a href="/Home/Index/index">主页</a>
        </li>
        <li>
            <a href="/Home/Information/introduction">中心简介</a>
            <ul>
                <li>
                    <a href="/Home/Information/introduction">中心概况</a>
                </li>
                <li>
                    <a href="/Home/Information/structure">机构设置</a>
                </li>
                <li>
                    <a href="/Home/Information/certificate">资质证书</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/Home/Information/news">新闻中心</a>
            <ul>
                <li>
                    <a href="/Home/Information/news">通知公告</a>
                </li>
                <li>
                    <a href="/Home/Information/news#industry">行业新闻</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/Home/Information/process">质检服务</a>
            <ul>
                <li>
                    <a href="/Home/Information/process">质检流程</a>
                </li>
                <li>
                    <a href="/Home/Information/scope">质检范围</a>
                </li>
                <li>
                    <a href="/Home/Information/query">报告查询</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/Home/Information/file">资料下载</a>
            <ul>
                <li>
                    <a href="/Home/Information/file">检测资料</a>
                </li>
                <li>
                    <a href="/Home/Information/file#standard">标准资料</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/Home/Information/contact">联系我们</a>
        </li>
    </ul>
</header>


<h2>检测流程</h2>
<div>
    <?php echo ($process["content"]); ?>
</div>
<div>
    <h2>页脚</h2>
    <div>
        <text>copyright:</text><text><?php echo ($footer["title"]); ?></text><br/>
        <text>email:</text><text><?php echo ($footer["email"]); ?></text><br/>
        <text>备案号:</text><text><?php echo ($footer["record"]); ?></text><br/>
        <text>地址:</text><text><?php echo ($footer["address"]); ?></text><br/>
        <text>telephone1:</text><text><?php echo ($footer["telephone"]); ?></text><br/>
        <text>telephone2:</text><text><?php echo ($footer["telephone2"]); ?></text><br/>
    </div>
</div>

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

</body>
</html>