<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>文华学院教务网</title>
    <script src="http://education.com/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://education.com/Public/style/bootstrap.css">
    <script src="http://education.com/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://education.com/Public/index.css">
  </head>
  <body>
    <div class="container-fluid">
    <div class="row" style="background-color:#9a0102;height:200px;">
        <div class="col-md-offset-1" style="margin-top:40px;" >
            <img src="http://education.com/Public/img/tree2.png">
        </div>
    </div>
</div>
<div class="container" style="border-left:4px solid #b70c0c;border-right:4px solid #b70c0c;">
  <div class="row" style="background-color:#e1e1e1;">
    <ul class="menu" style="list-style:none;padding:0px;  text-align: center;">
      <li>网站首页</li>
      <li>机构设置</li>
      <li>办事指南</li>
      <li>规章制度</li>
      <li>教务简报</li>
      <li>专升本</li>
      <li>下载中心</li>
      <li>联系我们</li>
      <li class="move"></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12" style="padding:0;">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://education.com/Public/img/home1.png">
          <div class="carousel-caption"></div>
        </div>
        <div class="item">
          <img src="http://education.com/Public/img/home2.png">
          <div class="carousel-caption">
          </div>
        </div>
        图书馆
      </div>
<!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
  </div>

      <div class="row" style="margin-top:40px;">
        <div class="col-md-3">
          <ul id="indexleft">
            <li>教务通知</li>
            <li><a href="#">机构设置</a></li>
            <li><a href="#">办事指南</a></li>
            <li><a href="#">规章制度</a></li>
            <li><a href="#">教务简报</a></li>
            <li><a href="#">专升本</a></li>
            <li><a href="#">下载中心</a></li>
            <li><a href="#">联系我们</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="row" style="margin-right:50px;">
            <div style="padding:5px 5px 5px 15px;font-size:18px;border-bottom:4px solid #ff6068;">
              <?php echo ($article["title"]); ?>
              <div class="more" style="float:right;">
                <a href="/index.php/Home/Index/index">首页</a>
                <a href="/index.php/Home/Index/column3">教务要闻</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div style="text-align:center;padding-top:6px;padding-bottom:6px;border-bottom:1px solid #e1e1e1;font-size:15px;color:#368a44;">
              来源  :  <?php echo ($article["resource"]); ?>  作者  :  <?php echo ($article["author"]); ?>  发布时间  :  <?php echo date("Y-m-d",$blog['time']);?>
            </div>
          </div>
          <div style="font-size:18px;padding:10px 10px;" class="row">
            <?php echo html_entity_decode($article['content']);?>
          </div>

        </div>
      </div>
    </div>
    <div class="container-fluid">
  <div class="row" style="border-top:3px solid #b70c0c;margin-top:50px;background-color:#e1e1e1;">
    <div style="margin-left:200px;margin-right:200px;">
      联系方式<br>
      电话<br>邮编<br>地址<br>制作人<br>
    </div>
  </div>
</div>

  </body>
</html>