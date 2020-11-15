<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\phpStudy\WWW\legou\public/../application/admin\view\goods\edit.htm";i:1605347896;s:59:"D:\phpStudy\WWW\legou\application\admin\view\common\top.htm";i:1604586869;s:60:"D:\phpStudy\WWW\legou\application\admin\view\common\left.htm";i:1605340289;s:58:"D:\phpStudy\WWW\legou\application\admin\view\common\js.htm";i:1604588515;}*/ ?>
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
          <li>
            <a href="<?php echo url('admin/Goods/lst'); ?>">商品列表</a>
          </li>
          <li class="active">修改商品</li>
        </ul>
      </div>
      <!-- /Page Breadcrumb -->

      <!-- Page Body -->
      <div class="page-body">

        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
              <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改商品</span>
              </div>
              <div class="widget-body">
                <div class="widget-main ">
                  <div class="tabbable">
                    <ul class="nav nav-tabs tabs-flat" id="myTab11">
                      <li class="active">
                        <a data-toggle="tab" href="#home11">
                          基本信息
                        </a>
                      </li>
                      <li class="">
                        <a data-toggle="tab" href="#profile11">
                          商品相册
                        </a>
                      </li>
                    </ul>
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?php echo $goodsEdit['id']; ?>">
                      <div class="tab-content tabs-flat">
                        <div id="home11" class="tab-pane active">
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                            <div class="col-sm-6">
                              <select name="cate_id">
                                <option value="0">顶级栏目</option>
                                <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $cate['id']; ?>" <?php if($goodsEdit['cate_id'] == $cate['id']): ?> selected="selected" <?php endif; ?>><?php echo str_repeat('-', $cate['level']*8)?><?php echo $cate['cate_name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                              </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                          </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品名称</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="username" placeholder="" name="goods_name" value="<?php echo $goodsEdit['goods_name']; ?>" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                          </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">专题选择</label>
                            <div class="col-sm-6">
                              <div class="checkbox">
                                <?php if(is_array($specialAdd) || $specialAdd instanceof \think\Collection || $specialAdd instanceof \think\Paginator): $i = 0; $__LIST__ = $specialAdd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$special): $mod = ($i % 2 );++$i;?>
                                <label style="padding-right: 10px;">
                                  <input type="checkbox" class="colored-blue" name="specialId[]" <?php if(in_array($special['id'], $goodsSpecial)){ echo 'checked="checked"' ;}?> value="<?php echo $special['id']; ?>">
                                  <span class="text"><?php echo $special['spe_name']; ?></span>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="username" placeholder="" name="thumb" type="file"
                                     style="border: none; box-shadow: none">
                              <?php if($goodsEdit['thumb'] == ''): ?>
                              暂无图片
                              <?php else: ?>
                              <img src="/legou/public/static/uploads/<?php echo $goodsEdit['thumb']; ?>" alt="" width="60">
                              <?php endif; ?>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                          </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">本店价</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="username" placeholder="" value="<?php echo $goodsEdit['shop_price']; ?>" name="shop_price"
                                     type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                          </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">市场价</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="username" placeholder="" value="<?php echo $goodsEdit['market_price']; ?>" name="market_price"
                                     type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">库存量</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="username" placeholder="" value="<?php echo $goodsEdit['sale_num']; ?>" name="stock_num"
                                     type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">描述图</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="username" placeholder="" name="des_img" type="file"
                                     style="border: none; box-shadow: none">
                              <?php if($goodsEdit['des_img'] == ''): ?>
                              暂无图片
                              <?php else: ?>
                              <img src="/legou/public/static/uploads/<?php echo $goodsEdit['des_img']; ?>" alt="" width="60">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">重量</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="username" placeholder="" name="weight" value="<?php echo $goodsEdit['weight']; ?>" style="width: 200px;float: left;border-right: none" type="text">
                              <select name="weight_unit" id="">
                                <option value="g" <?php if($goodsEdit['weight_unit'] == "g"): ?> selected="selected" <?php endif; ?>>g</option>
                                <option value="kg" <?php if($goodsEdit['weight_unit'] == "kg"): ?> selected="selected" <?php endif; ?>>kg</option>
                              </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                          </div>
                        </div>
                        <div id="profile11" class="tab-pane">
                          <?php if(empty($photos)): ?>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right"><a onclick="addRow(this)" href="javascript:void(0);">[+]</a></label>
                            <div class="col-sm-6">
                              <input class="form-control" id="username" placeholder="" style="border: none; box-shadow: none; width: 30%; float: left;" name="photo[]" type="file">
                            </div>
                          </div>
                          <?php else: if(is_array($photos) || $photos instanceof \think\Collection || $photos instanceof \think\Paginator): $i = 0; $__LIST__ = $photos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?>
                            <div class="form-group">
                              <label for="username" class="col-sm-2 control-label no-padding-right"><a onclick="addRow(this, '<?php echo $photo['id']; ?>')" href="javascript:void(0);"><?php if($i == 1): ?>[+]<?php else: ?>[-]<?php endif; ?></a>
                                <span onclick="addRow(this, '<?php echo $photo['id']; ?>')"><?php if($i == 1): ?>[-]<?php endif; ?></span>
                              </label>
                              <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" style="border: none; box-shadow: none; width: 30%; float: left;" name="photo[]" type="file">
                                <img src="/legou/public/static/uploads/photo/<?php echo $photo['img_src']; ?>" alt="" width="60">
                              </div>
                            </div>
                          <?php endforeach; endif; else: echo "" ;endif; endif; ?>
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
  // js 点击添加div
  function addRow(o, id) {
    var div = $(o).parent().parent();
    if ($(o).html() == '[+]') {
      var newdiv = div.clone();
      newdiv.find('a').html('[-]');
      newdiv.find('span').html('');
      div.after(newdiv);
    } else {
      if (id) {
        //  异步删除商品相册图片
        layer.confirm('确认要删除吗？',function(index){
          var div = $(o).parent().parent();
          //发异步删除数据
          $.post("<?php echo url('admin/Goods/delPhoto'); ?>",{id:id},function (data) {
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
      }else {
        div.remove();
      }
    }
  }

</script>

</body>
</html>