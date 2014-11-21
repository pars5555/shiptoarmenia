<?php /* Smarty version Smarty-3.1.11, created on 2014-11-21 17:52:27
         compiled from "E:\xampp\htdocs\shiptoarmenia\templates\main\util\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1310546f00661d6ad8-08920489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '025cdb14e3968578a5461305ae43669125eb30d7' => 
    array (
      0 => 'E:\\xampp\\htdocs\\shiptoarmenia\\templates\\main\\util\\header.tpl',
      1 => 1416592347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1310546f00661d6ad8-08920489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_546f00661e8df9_52342452',
  'variables' => 
  array (
    'SITE_PATH' => 0,
    'ns' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546f00661e8df9_52342452')) {function content_546f00661e8df9_52342452($_smarty_tpl) {?><header class="header-wrapper">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/">Ship To Armenia</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
              <li class="active"><a href="#">Home</a></li>
              <li class="active"><a id="priceBtn" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/price">Prices</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <?php if ($_smarty_tpl->tpl_vars['ns']->value['userLevel']===$_smarty_tpl->tpl_vars['ns']->value['userGroupsUser']){?>
              	<li>
              		<a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/user/do_logout">Logout</a>
              	</li>
              <?php }else{ ?>
             	 <li>
             	 	<a id="loginBtn" href="javascript:void(0);">
             	 		Login
         	 		</a>
     	 		</li>
         	 <?php }?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</header>
<div id="loginBlock" style="display: none;" class="login-block-wrapper">
	<div class="f_close_pop_up login_close_btn">
		<i class="glyphicon glyphicon-remove-circle"></i>
	</div>
	<h2>Login</h2>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" />
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" />
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<a href="#" class="sta-button block orange">LOGIN</a>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<a href="#" class="sta-button block orange">SIGN UP</a>
		</div>
	</div>
</div><?php }} ?>