<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="shortcut icon" href="#" type="/JobBook/Public/image/png">

  <title>意见反馈</title>
  <!--file upload-->
  <link rel="stylesheet" type="text/css" href="/JobBook/Public/css/bootstrap-fileupload.min.css" />  

   <!--tags input-->
  <link rel="stylesheet" type="text/css" href="/JobBook/Public/js/jquery-tags-input/jquery.tagsinput.css" />

  <!--common-->
  <link href="/JobBook/Public/css/style.css" rel="stylesheet">
  <link href="/JobBook/Public/css/style-responsive.css" rel="stylesheet">
  <style type="text/css">
  .a-panel{
    color: #888;

  }
  .a-panel:hover{
    text-decoration: none;
    color: #65CEA7;
  }
  .quene{
    color: #d54e21;
    font-weight: bold;
  }
  .solved{
    color:#888;
    font-weight: bold;
  }
  .btn-mystyle{
        color: #fff;
        background-color:#65CEA7;
        border-radius: 30px;  
   }
  .btn-mystyle:hover,
    .btn-mystyle:focus,
    .btn-mystyle:active,
    .btn-mystyle.active{
        color: #fff;
        background-color: #4D997A;
    }
  </style>



  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="/JobBook/admin.php/Home/index/index"><img src="/JobBook/Public/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="/JobBook/admin.php/Home/index/index"><img src="/JobBook/Public/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="/JobBook/Public/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="/JobBook/admin.php/Home/index/index">卓洋</a></h4>
                    </div>
                </div>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="/JobBook/admin.php/Home/index/logout"><i class="fa fa-sign-out"></i> <span>注销</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li ><a href="/JobBook/admin.php/Home/index/index"><i class="fa fa-home"></i> <span>主页</span></a></li>
                <li class="menu-list"><a href=""><i class="fa fa-suitcase"></i> <span>就业板块</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/JobBook/admin.php/Home/job/job_company">上传公司信息</a></li>
                        <li><a href="/JobBook/admin.php/Home/job/job_company_search">公司信息修改或删除</a></li>
                        <li><a href="/JobBook/admin.php/Home/job/job_upload" > 上传岗位信息</a></li>
                        <li><a href="/JobBook/admin.php/Home/job/job_search"> 岗位信息修改或删除</a></li>

                    </ul>
                </li> 
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>干货板块</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/JobBook/admin.php/Home/article/article_upload"> 上传干货</a></li>
                        <li><a href="/JobBook/admin.php/Home/article/article_search"> 干货修改与删除</a></li>
                    </ul>
                </li>
                <li><a href="/JobBook/admin.php/Home/question/askask_search"> <i class="fa fa-question"></i> <span>问问修改与删除</span></a></li>
                <li class="menu-list nav-active"><a href=""><i class="fa fa-book"></i> <span>意见反馈</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/JobBook/admin.php/Home/feedback/hasdeal">已处理</a></li>
                        <li class="active"><a href="/JobBook/admin.php/Home/feedback/undeal">待处理</a></li>
                    </ul>
                </li>
            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

            <!--user menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="/JobBook/Public/images/photos/user-avatar.png" alt="" />
                            <?php echo ($_SESSION['username']); ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="/JobBook/admin.php/Home/index/logout"><i class="fa fa-sign-out"></i>注销</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--user menu end -->

        </div>
        <!-- header section end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <!-- panel start -->
                    <?php if(is_array($list)): foreach($list as $key=>$list): ?><a href="/JobBook/admin.php/Home/Feedback/feedback_detail/id/<?php echo ($list["id"]); ?>" class="a-panel">
                        <section class="panel">
                            <header class="panel-heading">
                                <?php echo ($list["u_email"]); ?>
                                <span class="pull-right"><?php echo ($list["date"]); ?></span>
                            </header>                            
                            <div class="panel-body">
                                <p>
                                <!-- <?php if(empty($list['reply']) == true): ?>-->
                                    <span class="quene">（待处理）</span>
                                <!--<?php endif; ?> -->
                                <?php echo ($list["content"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php if($nowtime-strtotime($list['date']) >= 2592000): ?><a href="/JobBook/admin.php/Home/Feedback/do_delete/id/<?php echo ($list["id"]); ?>" class="btn btn-mystyle">删除</a><?php endif; ?>
                                </p>
                            </div>
                        </section>
                    </a><?php endforeach; endif; ?>
                    <!-- panel end -->

                    <!-- panel start -->
                    <!-- <a href="feedback_detail.html" class="a-panel">
                        <section class="panel">
                            <header class="panel-heading">
                                lslabyrint@163.com
                                <span class="pull-right">2016年9月19日</span>
                            </header>
                            <div class="panel-body">
                                <p>
                                <span class="solved">（已处理）</span>
                                我发现我们的东西好好用；
                                </p>
                            </div>
                        </section>
                    </a> -->
                    <!-- panel end -->
                    
                    <div class="text-center">    
                        <?php echo ($page); ?>        
                        <!-- <ul class="pagination blog-pagination">                   
                            <li><a href=" ">上一页</a></li>             
                            <li><a href="#">1</a></li>  
                            <li><a href="#">2</a></li>                    
                            <li><a href="#">3</a></li>                    
                            <li><a href="#">4</a></li>                    
                            <li><a href="#">5</a></li>                    
                            <li><a href="#">下一页</a></li>                
                        </ul> -->            
                    </div>
                </div>
            </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->
    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/JobBook/Public/js/jquery-1.10.2.min.js"></script>
<script src="/JobBook/Public/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/JobBook/Public/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/JobBook/Public/js/bootstrap.min.js"></script>
<script src="/JobBook/Public/js/modernizr.min.js"></script>
<script src="/JobBook/Public/js/jquery.nicescroll.js"></script>

<!--common scripts for all pages-->
<script src="/JobBook/Public/js/scripts.js"></script>



</body>
</html>