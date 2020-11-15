<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\phpStudy\WWW\legou\public/../application/admin\view\banner\list.htm";i:1604718648;s:59:"D:\phpStudy\WWW\legou\application\admin\view\common\top.htm";i:1604586869;s:60:"D:\phpStudy\WWW\legou\application\admin\view\common\left.htm";i:1605340289;s:58:"D:\phpStudy\WWW\legou\application\admin\view\common\js.htm";i:1604588515;}*/ ?>
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
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-shopping-cart"></i>
        <span class="menu-text">
          商品管理
        </span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('admin/Goods/lst'); ?>">
            <span class="menu-text">
              商品列表
            </span>
            <i class="menu-expand"></i>
          </a>
        </li>
        <li>
          <a href="<?php echo url('admin/Goods/add'); ?>">
            <span class="menu-text">
                商品添加
            </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-star"></i>
        <span class="menu-text">
          专题管理
        </span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('admin/Special/lst'); ?>">
            <span class="menu-text">
              专题列表
            </span>
            <i class="menu-expand"></i>
          </a>
        </li>
        <li>
          <a href="<?php echo url('admin/Special/add'); ?>">
            <span class="menu-text">
              专题添加
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
          <li class="active">banner列表</li>
        </ul>
      </div>
      <!-- /Page Breadcrumb -->

      <!-- Page Body -->
      <div class="page-body">

        <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon"
                onClick="javascript:window.location.href = '<?php echo url('admin/Banner/add'); ?>'"><i class="fa fa-plus"></i> Add
        </button>
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
              <div class="widget-body">
                <div class="flip-scroll">
                  <form action="" method="post">
                    <table class="table table-bordered table-hover">
                      <thead class="">
                      <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center" width="15%">标题</th>
                        <th class="text-center" width="15%">图片</th>
                        <th class="text-center" width="15%">链接地址</th>
                        <th class="text-center" width="10%">类型</th>
                        <th class="text-center">排序</th>
                        <th class="text-center">状态</th>
                        <th class="text-center">操作</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php if(is_array($bannerLst) || $bannerLst instanceof \think\Collection || $bannerLst instanceof \think\Paginator): $i = 0; $__LIST__ = $bannerLst;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banner): $mod = ($i % 2 );++$i;?>
                      <tr>
                        <td align="center"><?php echo $banner['id']; ?></td>
                        <td align="center"><?php echo $banner['title']; ?></td>
                        <td align="center"><img src="/legou/public/static/uploads/<?php echo $banner['img_src']; ?>" alt="<?php echo $banner['title']; ?>" height="30px"></td>
                        <td align="center"><a href="<?php echo $banner['link_url']; ?>" target="_blank"><?php echo $banner['link_url']; ?></a></td>
                        <td align="center"><?php if($banner['type'] == 1): ?>商品<?php else: ?>专题<?php endif; ?></td>
                        <td align="center"><input type="text" style="width: 60px; text-align: center" name="sort" dataid="<?php echo $banner['id']; ?>" value="<?php echo $banner['sort']; ?>"></td>
                        <td align="center"><?php if($banner['status'] == 1): ?>
                          显示
                          <?php else: ?>
                          隐藏
                          <?php endif; ?></td>
                        <td align="center">
                          <a href="<?php echo url('admin/Banner/edit',array('id' =>$banner['id'])); ?>" class="btn btn-primary btn-sm shiny">
                            <i class="fa fa-edit"></i> 编辑
                          </a>
                          <a href="javascript:void(0);" onclick="delBanner(this,'<?php echo $banner['id']; ?>')"
                             class="btn btn-danger btn-sm shiny">
                            <i class="fa fa-trash-o"></i> 删除
                          </a>
                        </td>
                      </tr>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                      </tbody>
                    </table>
                  </form>
                </div>
                <div>
                </div>
                <div style="text-align: right;margin-top: 10px">
                  <?php echo $bannerLst->render(); ?>
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
<script src="/legou/public/static/lib/layer/layer.js"></script>
<script>
  $('input[name=sort]').change(function () {
    var id = $(this).attr('dataid');
    var sort = $(this).val();
    $.ajax({
      url:"<?php echo url('admin/Banner/lst'); ?>",
      type:'post',
      data:{id:id, sort:sort},
      dataType:'json',
      success:function (data) {
        if (data.code == 1) {
          layer.msg(data.msg, {
            icon:6,
            time:1000
          }, function () {
            location.href = data.url;
          });
        }else {
          layer.open({
            title:"排序失败",
            content:data.msg,
            icon:5,
            anim:6
          });
        }
      }
    });
    return false;
  });

  function delBanner(obj,id){
    layer.confirm('确认要删除吗？',function(index){
      var div = $(obj).parent().parent();
      //发异步删除数据
      $.post("<?php echo url('admin/Banner/del'); ?>",{id:id},function (data) {
        if(data.code == 1){
          div.remove();
          //删除成功 删除元素
          layer.msg(data.msg,{icon:1,time:1000});
        }else{
          //删除失败
          layer.msg(data.msg,{icon:2,time:1000});
        }
      });
    });
    return false;
  }
</script>
</body>
</html>