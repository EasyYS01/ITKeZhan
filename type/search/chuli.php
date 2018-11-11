<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <link rel="shortcut  icon" href="../../bao/img/logo_img.ico" type="image/x-icon"
        />
        <link rel="stylesheet" href="../../bao/css/body.css" />
        <title>
            IT客栈--分享一线教程，软件，技术。
        </title>
        <link rel="stylesheet" href="../../bao/css/layui.css" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
		<?php
		@include "../../type/php/operatin.php";
		?>
    </head>
    
    <body  class="layui-container">
		
        <div id="layui-row">
            <!--logo部分-->
            <div class="layui-col-md4 ">
                <a href="#">
                    <img class="logo" src="../../bao/img/logo.png" width="600" height="86" alt=""
                    />
                </a>
            </div>
            <!--导航栏部分-->
            <div class="layui-row layui-col-space30 ">
				<!--导航栏-->
                <div id="navigation layui-col-md12 layui-col-xs12">
                    <ul class="layui-nav">
                        <li class="layui-nav-item">
                            <a href="../../index.php">
                                首页
                            </a>
                        </li>
                        <li class="layui-nav-item">
                            <a href="../../type/technique/index.php">
                                技术专区
                            </a>
                        </li>
                        <li class="layui-nav-item ">
                            <a href="../../type/code/index.php">
                                源码专区
                            </a>
                        </li>
                        <li class="layui-nav-item">
                            <a href="javascript:;">
                                成品软件分享
                            </a>
                            <dl class="layui-nav-child ">
                                <dd>
                                    <a href="../../type/software/index.php">
                                        Windows
                                    </a>
                                </dd>
                                <dd>
                                    <a href="../../type/software/index.php">
                                        Linux
                                    </a>
                                </dd>
                                <dd>
                                    <a href="../../type/software/index.php">
                                        安卓
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a href="../../type/news/index.php">
                                IT新闻
                            </a>
                        </li>
						<li class="layui-nav-item layui-this">
                            <a href="../../type/search/index.php">
                                搜索
                            </a>
                        </li>
                    </ul>
					<br><br>
                </div>

            </div>
    <!--中部，主部分-->
    <div id="medium1">
        <div id="content">
            <div id="title">
                <span>IT客栈-搜索</span>
            </div>
            <div id="cycle">
				<?PHP
					$aa=isset($_POST['name'])?$_POST['name']:"";
					nameTechnique($aa);
				?>

            </div>  
        </div>
    </div>
    <!--底部-->
				<div style="padding: 0px 0px 0px 0px;" class="dibu layui-col-md12 layui-bg-gray">
					<h1>关于博客</h1>
					<Span>IT客栈是关注互联网以及分享IT运维工作经验的个人博客，主要涵盖了操作系统运维、实用脚本编程以及博客网站建设等经验教程。我的博客宗旨：把最实用的经验，分享给最需要的读者，希望每一位来访的朋友都能有所收获！</Span>
					<br><br>
					<h4>IT客栈 保留所有权利. </h4>
					</div>
 <script type="text/javascript" src="../../bao/layui.all.js">
        </script>
    </body>
</html>
