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
                <a class="navbar-brand" href="#">建筑材料干混砂浆产品质量监督检验测试中心</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="/Home/Information/introduction" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">中心简介 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
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
                    <li><a href="/Home/Information/contact">联系我们</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


    <div class="picContainer">
        <img src="/Public/picture/about.png" alt="中心简介">
        <a href="">中心概况</a>
    </div>
    <div class="contentWarp">
        <div class="left-menu">
            <ul>
                <li><a href="">机构设置</a></li>
                <li><a href="">资质证书</a></li>
            </ul>
        </div>
        <div class="right-content">
            <div class="breadcrumbs" style="margin-top: 0px;padding-top: 30px;">
                    <div class="container">
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
                                            中心概况
                                        </a>
                                            <?php else: ?>
                                            <a href="/home/Information/information#dynamic">
                                                机构设置
                                            </a><?php endif; ?>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
        <p>
                        From Wikipedia, the free encyclopedia
        Jump to navigationJump to search
        "Dataviz" redirects here. For the software company, see DataViz.
        Part of a series on Statistics
        Data visualization
        Major dimensions[hide]
        Exploratory data analysis • Information design
        Interactive data visualization
        Descriptive statistics • Inferential statistics
        Statistical graphics • Plot
        Data analysis  • Infographic
        Data science
        Important figures[hide]
        Tamara Munzner  • Ben Shneiderman  • John W. Tukey  • Edward Tufte  • Fernanda Viégas  • Hadley Wickham
        Information graphic types[hide]
        Line chart  • Bar chart
        Histogram • Scatterplot
        Boxplot • Pareto chart
        Pie chart • Area chart
        Control chart  • Run chart
        Stem-and-leaf display • Cartogram
        Small multiple • Sparkline
        Table
        Related topics[hide]
        Data • Information
        Big data • Database
        Chartjunk • Visual perception
        Regression analysis • Statistical model
        Misleading graph
        vte
        Data visualization is viewed by many disciplines as a modern equivalent of visual communication. It involves the creation and study of the visual representation of data.[1]

        To communicate information clearly and efficiently, data visualization uses statistical graphics, plots, information graphics and other tools. Numerical data may be encoded using dots, lines, or bars, to visually communicate a quantitative message.[2] Effective visualization helps users analyze and reason about data and evidence. It makes complex data more accessible, understandable and usable. Users may have particular analytical tasks, such as making comparisons or understanding causality, and the design principle of the graphic (i.e., showing comparisons or showing causality) follows the task. Tables are generally used where users will look up a specific measurement, while charts of various types are used to show patterns or relationships in the data for one or more variables.

        Data visualization is both an art and a science.[3] It is viewed as a branch of descriptive statistics by some, but also as a grounded theory development tool by others. Increased amounts of data created by Internet activity and an expanding number of sensors in the environment are referred to as "big data" or Internet of things. Processing, analyzing and communicating this data present ethical and analytical challenges for data visualization.[4] The field of data science and practitioners called data scientists help address this challenge.[5]


        Contents
        1	Overview
        2	Characteristics of effective graphical displays
        3	Quantitative messages
        4	Visual perception and data visualization
        4.1	Human perception/cognition and data visualization
        5	History of data visualization
        6	Terminology
        7	Examples of diagrams used for data visualization
        8	Other perspectives
        9	Data presentation architecture
        9.1	Objectives
        9.2	Scope
        9.3	Related fields
        10	See also
        11	Notes
        12	References
        13	Further reading
        14	External links
        Overview

        Data visualization is one of the steps in analyzing data and presenting it to users.
        Data visualization refers to the techniques used to communicate data or information by encoding it as visual objects (e.g., points, lines or bars) contained in graphics. The goal is to communicate information clearly and efficiently to users. It is one of the steps in data analysis or data science. According to Friedman (2008) the "main goal of data visualization is to communicate information clearly and effectively through graphical means. It doesn't mean that data visualization needs to look boring to be functional or extremely sophisticated to look beautiful. To convey ideas effectively, both aesthetic form and functionality need to go hand in hand, providing insights into a rather sparse and complex data set by communicating its key-aspects in a more intuitive way. Yet designers often fail to achieve a balance between form and function, creating gorgeous data visualizations which fail to serve their main purpose — to communicate information".[6]

        Indeed, Fernanda Viegas and Martin M. Wattenberg suggested that an ideal visualization should not only communicate clearly, but stimulate viewer engagement and attention.[7]

        Data visualization is closely related to information graphics, information visualization, scientific visualization, exploratory data analysis and statistical graphics. In the new millennium, data visualization has become an active area of research, teaching and development. According to Post et al. (2002), it has united scientific and information visualization.[8]

        Characteristics of effective graphical displays

        Charles Joseph Minard's 1869 diagram of Napoleonic France's invasion of Russia, an early example of an information graphic
        The greatest value of a picture is when it forces us to notice what we never expected to see.
        John Tukey[9]
        Professor Edward Tufte explained that users of information displays are executing particular analytical tasks such as making comparisons. The design principle of the information graphic should support the analytical task.[10] As William Cleveland and Robert McGill show, different graphical elements accomplish this more or less effectively. For example, dot plots and bar charts outperform pie charts.[11]

        In his 1983 book The Visual Display of Quantitative Information, Edward Tufte defines 'graphical displays' and principles for effective graphical display in the following passage: "Excellence in statistical graphics consists of complex ideas communicated with clarity, precision and efficiency. Graphical displays should:

        show the data
        induce the viewer to think about the substance rather than about methodology, graphic design, the technology of graphic production or something else
        avoid distorting what the data has to say
        present many numbers in a small space
        make large data sets coherent
        encourage the eye to compare different pieces of data
        reveal the data at several levels of detail, from a broad overview to the fine structure
        serve a reasonably clear purpose: description, exploration, tabulation or decoration
        be closely integrated with the statistical and verbal descriptions of a data set.
        Graphics reveal data. Indeed graphics can be more precise and revealing than conventional statistical computations."[12]

        For example, the Minard diagram shows the losses suffered by Napoleon's army in the 1812–1813 period. Six variables are plotted: the size of the army, its location on a two-dimensional surface (x and y), time, direction of movement, and temperature. The line width illustrates a comparison (size of the army at points in time) while the temperature axis suggests a cause of the change in army size. This multivariate display on a two dimensional surface tells a story that can be grasped immediately while identifying the source data to build credibility. Tufte wrote in 1983 that: "It may well be the best statistical graphic ever drawn."[12]

        Not applying these principles may result in misleading graphs, which distort the message or support an erroneous conclusion. According to Tufte, chartjunk refers to extraneous interior decoration of the graphic that does not enhance the message, or gratuitous three dimensional or perspective effects. Needlessly separating the explanatory key from the image itself, requiring the eye to travel back and forth from the image to the key, is a form of "administrative debris." The ratio of "data to ink" should be maximized, erasing non-data ink where feasible.[12]

        The Congressional Budget Office summarized several best practices for graphical displays in a June 2014 presentation. These included: a) Knowing your audience; b) Designing graphics that can stand alone outside the context of the report; and c) Designing graphics that communicate the key messages in the report.[13]

        Quantitative messages

        A time series illustrated with a line chart demonstrating trends in U.S. federal spending and revenue over time.

        A scatterplot illustrating negative correlation between two variables (inflation and unemployment) measured at points in time.
        Author Stephen Few described eight types of quantitative messages that users may attempt to understand or communicate from a set of data and the associated graphs used to help communicate the message:

        Time-series: A single variable is captured over a period of time, such as the unemployment rate over a 10-year period. A line chart may be used to demonstrate the trend.
        Ranking: Categorical subdivisions are ranked in ascending or descending order, such as a ranking of sales performance (the measure) by sales persons (the category, with each sales person a categorical subdivision) during a single period. A bar chart may be used to show the comparison across the sales persons.
        Part-to-whole: Categorical subdivisions are measured as a ratio to the whole (i.e., a percentage out of 100%). A pie chart or bar chart can show the comparison of ratios, such as the market share represented by competitors in a market.
        Deviation: Categorical subdivisions are compared against a reference, such as a comparison of actual vs. budget expenses for several departments of a business for a given time period. A bar chart can show comparison of the actual versus the reference amount.
        Frequency distribution: Shows the number of observations of a particular variable for given interval, such as the number of years in which the stock market return is between intervals such as 0-10%, 11-20%, etc. A histogram, a type of bar chart, may be used for this analysis. A boxplot helps visualize key statistics about the distribution, such as median, quartiles, outliers, etc.
        Correlation: Comparison between observations represented by two variables (X,Y) to determine if they tend to move in the same or opposite directions. For example, plotting unemployment (X) and inflation (Y) for a sample of months. A scatter plot is typically used for this message.
        Nominal comparison: Comparing categorical subdivisions in no particular order, such as the sales volume by product code. A bar chart may be used for this comparison.
        Geographic or geospatial: Comparison of a variable across a map or layout, such as the unemployment rate by state or the number of persons on the various floors of a building. A cartogram is a typical graphic used.[2][14]
        Analysts reviewing a set of data may consider whether some or all of the messages and graphic types above are applicable to their task and audience. The process of trial and error to identify meaningful relationships and messages in the data is part of exploratory data analysis.

        Visual perception and data visualization
        A human can distinguish differences in line length, shape, orientation, and color (hue) readily without significant processing effort; these are referred to as "pre-attentive attributes". For example, it may require significant time and effort ("attentive processing") to identify the number of times the digit "5" appears in a series of numbers; but if that digit is different in size, orientation, or color, instances of the digit can be noted quickly through pre-attentive processing.[15]

        Effective graphics take advantage of pre-attentive processing and attributes and the relative strength of these attributes. For example, since humans can more easily process differences in line length than surface area, it may be more effective to use a bar chart (which takes advantage of line length to show comparison) rather than pie charts (which use surface area to show comparison).[15]

        Human perception/cognition and data visualization
        Almost all data visualizations are created for human consumption. Knowledge of human perception and cognition is necessary when designing intuitive visualizations.[16] Cognition refers to processes in human beings like perception, attention, learning, memory, thought, concept formation, reading, and problem solving.[17] Human visual processing is efficient in detecting changes and making comparisons between quantities, sizes, shapes and variations in lightness. When properties of symbolic data are mapped to visual properties, humans can browse through large amounts of data efficiently. It is estimated that 2/3 of the brain's neurons can be involved in visual processing. Proper visualization provides a different approach to show potential connections, relationships, etc. which are not as obvious in non-visualized quantitative data. Visualization can become a means of data exploration.

        History of data visualization
        There is no comprehensive 'history' of data visualization. There are no accounts that span the entire development of visual thinking and the visual representation of data, and which collate the contributions of disparate disciplines.[18] Michael Friendly and Daniel J Denis of York University are engaged in a project that attempts to provide a comprehensive history of visualization. Contrary to general belief, data visualization is not a modern development. Stellar data, or information such as location of stars were visualized on the walls of caves (such as those found in Lascaux Cave in Southern France) since the Pleistocene era.[19] Physical artefacts such as Mesopotamian clay tokens (5500 BC), Inca quipus (2600 BC) and Marshall Islands stick charts (n.d.) can also be considered as visualizing quantitative information.[20][21]

        First documented data visualization can be tracked back to 1160 B.C. with Turin Papyrus Map which accurately illustrates the distribution of geological resources and provides information about quarrying of those resources.[22] Such maps can be categorized as Thematic Cartography, which is a type of data visualization that presents and communicates specific data and information through a geographical illustration designed to show a particular theme connected with a specific geographic area. Earliest documented forms of data visualization were various thematic maps from different cultures and ideograms and hieroglyphs that provided and allowed interpretation of information illustrated. For example, Linear B tablets of Mycenae provided a visualization of information regarding Late Bronze Age era trades in the Mediterranean. The idea of coordinates was used by ancient Egyptian surveyors in laying out towns, earthly and heavenly positions were located by something akin to latitude and longitude at least by 200 BC, and the map projection of a spherical earth into latitude and longitude by Claudius Ptolemy [c.85–c. 165] in Alexandria would serve as reference standards until the 14th century.[22]

        Invention of paper and parchment allowed further development of visualizations throughout history. Figure shows a graph from the 10th, possibly 11th century that is intended to be an illustration of the planetary movement, used in an appendix of a textbook in monastery schools.[23] The graph apparently was meant to represent a plot of the inclinations of the planetary orbits as a function of the time. For this purpose the zone of the zodiac was represented on a plane with a horizontal line divided into thirty parts as the time or longitudinal axis. The vertical axis designates the width of the zodiac. The horizontal scale appears to have been chosen for each planet individually for the periods cannot be reconciled. The accompanying text refers only to the amplitudes. The curves are apparently not related in time.


        Planetary Movements
        By the 16th century, techniques and instruments for precise observation and measurement of physical quantities, and geographic and celestial position were well-developed (for example, a “wall quadrant” constructed by Tycho Brahe [1546–1601], covering an entire wall in his observatory). Particularly important were the development of triangulation and other methods to determine mapping locations accurately.[18]

        French philosopher and mathematician René Descartes and Pierre de Fermat developed analytic geometry and two-dimensional coordinate system which heavily influenced the practical methods of displaying and calculating values. Fermat and Blaise Pascal's work on statistics and probability theory laid the groundwork for what we now conceptualize as data.[18] According to the Interaction Design Foundation, these developments allowed and helped William Playfair, who saw potential for graphical communication of quantitative data, to generate and develop graphical methods of statistics.[16]


        Playfair TimeSeries
        In the second half of the 20th century, Jacques Bertin used quantitative graphs to represent information "intuitively, clearly, accurately, and efficiently".[16]

        John Tukey and Edward Tufte pushed the bounds of data visualization; Tukey with his new statistical approach of exploratory data analysis and Tufte with his book "The Visual Display of Quantitative Information" paved the way for refining data visualization techniques for more than statisticians. With the progression of technology came the progression of data visualization; starting with hand drawn visualizations and evolving into more technical applications – including interactive designs leading to software visualization.[24]

        Programs like SAS, SOFA, R, Minitab, Cornerstone and more allow for data visualization in the field of statistics. Other data visualization applications, more focused and unique to individuals, programming languages such as D3, Python and JavaScript help to make the visualization of quantitative data a possibility. Private schools have also developed programs to meet the demand for learning data visualization and associated programming libraries, including free programs like The Data Incubator or paid programs like General Assembly.[25]

        Terminology
        Data visualization involves specific terminology, some of which is derived from statistics. For example, author Stephen Few defines two types of data, which are used in combination to support a meaningful analysis or visualization:

        Categorical: Text labels describing the nature of the data, such as "Name" or "Age". This term also covers qualitative (non-numerical) data.
        Quantitative: Numerical measures, such as "25" to represent the age in years.
        Two primary types of information displays are tables and graphs.

        A table contains quantitative data organized into rows and columns with categorical labels. It is primarily used to look up specific values. In the example above, the table might have categorical column labels representing the name (a qualitative variable) and age (a quantitative variable), with each row of data representing one person (the sampled experimental unit or category subdivision).
        A graph is primarily used to show relationships among data and portrays values encoded as visual objects (e.g., lines, bars, or points). Numerical values are displayed within an area delineated by one or more axes. These axes provide scales (quantitative and categorical) used to label and assign values to the visual objects. Many graphs are also referred to as charts.[26]
        Eppler and Lengler have developed the "Periodic Table of Visualization Methods," an interactive chart displaying various data visualization methods. It includes six types of data visualization methods: data, information, concept, strategy, metaphor and compound.[27]
            </p>
        </div>
    </div>
<div class="container" ><div class="hr"><span class="hr-inner"></span></div></div>
<!--footer start-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="address wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
        <address>
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <p><i class="fa fa-home pr-10"></i>地址: <?php echo ($rs["address"]); ?></p></div>
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
            <p><i class="fa fa-mobile pr-10"></i>联系电话 : <?php echo ($rs["telephone"]); ?> </p></div>
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
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
        <div class="col-md-8 col-xs-8">
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