<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\phpStudy\WWW\legou\public/../application/admin\view\cate\edit.htm";i:1605005104;s:59:"D:\phpStudy\WWW\legou\application\admin\view\common\top.htm";i:1604586869;s:60:"D:\phpStudy\WWW\legou\application\admin\view\common\left.htm";i:1604999857;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>童老师ThinkPHP交流群：484519446</title>

  <meta name="description" content="Dashboard">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!--Basic Styles-->
  <link href="/legou/public/static/admin/style/bootstrap.css" rel="stylesheet">
  <link href="/legou/public/static/admin/style/font-awesome.css" rel="stylesheet">
  <link href="/legou/public/static/admin/style/weather-icons.css" rel="stylesheet">

  <!--Beyond styles-->
  <link id="beyond-link" href="/legou/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
  <link href="/legou/public/static/admin/style/demo.css" rel="stylesheet">
  <link href="/legou/public/static/admin/style/typicons.css" rel="stylesheet">
  <link href="/legou/public/static/admin/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>童老师ThinkPHP交流群：484519446</title>

  <meta name="description" content="Dashboard">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!--Basic Styles-->
  <link href="/legou/public/static/admin/style/bootstrap.css" rel="stylesheet">
  <link href="/legou/public/static/admin/style/font-awesome.css" rel="stylesheet">
  <link href="/legou/public/static/admin/style/weather-icons.css" rel="stylesheet">

  <!--Beyond styles-->
  <link id="beyond-link" href="/legou/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
  <link href="/legou/public/static/admin/style/demo.css" rel="stylesheet">
  <link href="/legou/public/static/admin/style/typicons.css" rel="stylesheet">
  <link href="/legou/public/static/admin/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->
<div class="navbar">
  <div class="navbar-inner">
    <div class="navbar-container">
      <!-- Navbar Barnd -->
      <div class="navbar-header pull-left">
        <a href="#" class="navbar-brand">
          <small>
            <img src="/legou/public/static/admin/images/logo.png" alt="">
          </small>
        </a>
      </div>
      <!-- /Navbar Barnd -->
      <!-- Sidebar Collapse -->
      <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="collapse-icon fa fa-bars"></i>
      </div>
      <!-- /Sidebar Collapse -->
      <!-- Account Area and Settings -->
      <div class="navbar-header pull-right">
        <div class="navbar-account">
          <ul class="account-area">
            <li>
              <a class="login-area dropdown-toggle" data-toggle="dropdown">
                <div class="avatar" title="View your public profile">
                  <img src="/legou/public/static/admin/images/adam-jansen.jpg">
                </div>
                <section>
                  <h2><span class="profile"><span>admin</span></span></h2>
                </section>
              </a>
              <!--Login Area Dropdown-->
              <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                <li class="username"><a>David Stevenson</a></li>
                <li class="dropdown-footer">
                  <a href="/admin/user/logout.html">
                    退出登录
                  </a>
                </li>
                <li class="dropdown-footer">
                  <a href="/admin/user/changePwd.html">
                    修改密码
                  </a>
                </li>
              </ul>
              <!--/Login Area Dropdown-->
            </li>
            <!-- /Account Area -->
            <!--Note: notice that setting div must start right after account area list.
                no space must be between these elements-->
            <!-- Settings -->
          </ul>
        </div>
      </div>
      <!-- /Account Area and Settings -->
    </div>
  </div>
</div>

<!-- /头部 -->

<!-- /头部 -->

<div class="main-container container-fluid">
  <div class="page-container">
    <!-- Page Sidebar -->
    <div class="page-sidebar" id="sidebar">
  <!-- Page Sidebar Header-->
  <div class="sidebar-header-wrapper">
    <input class="searchinput" type="text">
    <i class="searchicon fa fa-search"></i>
    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
  </div>
  <!-- /Page Sidebar Header -->
  <!-- Sidebar Menu -->
  <ul class="nav sidebar-menu">
    <!--Dashboard-->
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-image"></i>
        <span class="menu-text">
          banner图
        </span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('admin/Banner/lst'); ?>">
            <span class="menu-text">
              图片列表
            </span>
            <i class="menu-expand"></i>
          </a>
        </li>
        <li>
          <a href="<?php echo url('admin/Banner/add'); ?>">
            <span class="menu-text">
                图片添加
            </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-folder"></i>
        <span class="menu-text">
          栏目管理
        </span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('admin/Cate/lst'); ?>">
            <span class="menu-text">
              栏目列表
            </span>
            <i class="menu-expand"></i>
          </a>
        </li>
        <li>
          <a href="<?php echo url('admin/Cate/add'); ?>">
            <span class="menu-text">
                栏目添加
            </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
  </ul>
  <!-- /Sidebar Menu -->
</div>
    <!-- /Page Sidebar -->
    <!-- Page Content -->
    <div class="page-content">
      <!-- Page Breadcrumb -->
      <div class="page-breadcrumbs">
        <ul class="breadcrumb">
          <li>
            <a href="/">系统</a>
          </li>
          <li>
            <a href="<?php echo url('admin/Cate/lst'); ?>">栏目列表</a>
          </li>
          <li class="active">修改栏目</li>
        </ul>
      </div>
      <!-- /Page Breadcrumb -->

      <!-- Page Body -->
      <div class="page-body">

        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
              <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改栏目</span>
              </div>
              <div class="widget-body">
                <div id="horizontal-form">
                  <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $cateLst['id']; ?>" name="id">
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label no-padding-right">上级栏目</label>
                      <div class="col-sm-6">
                        <select name="pid">
                          <option value="0">顶级栏目</option>
                          <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                          <option value="<?php echo $cate['id']; ?>" <?php if($cateLst['pid'] == $cate['id']): ?> selected="selected" <?php endif; ?>><?php echo str_repeat('-', $cate['level']*8)?><?php echo $cate['cate_name']; ?></option>
                          <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label no-padding-right">栏目名称</label>
                      <div class="col-sm-6">
                        <input class="form-control" id="username" placeholder="" value="<?php echo $cateLst['cate_name']; ?>" name="cate_name" type="text">
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label no-padding-right">图片</label>
                      <div class="col-sm-6">
                        <input class="form-control" id="username" placeholder="" name="thumb" type="file"
                               style="border: none; box-shadow: none">
                        <?php if($cateLst['thumb']): ?>
                        <img src="/legou/public/static/uploads/<?php echo $cateLst['thumb']; ?>" alt="<?php echo $cateLst['cate_name']; ?>" height="60">
                        <?php else: ?>
                        暂无图片
                        <?php endif; ?>
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="description" id="" cols="30" rows="10"><?php echo $cateLst['description']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" onclick="addBanner()">保存信息</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /Page Body -->
    </div>
    <!-- /Page Content -->
  </div>
</div>

<!--Basic Scripts-->
<script src="/legou/public/static/admin/style/jquery_002.js"></script>
<script src="/legou/public/static/admin/style/bootstrap.js"></script>
<script src="/legou/public/static/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="/legou/public/static/admin/style/beyond.js"></script>


</body>
</html>