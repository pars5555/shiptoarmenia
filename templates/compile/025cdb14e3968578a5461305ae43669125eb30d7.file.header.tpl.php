<?php /* Smarty version Smarty-3.1.11, created on 2014-11-21 09:15:11
         compiled from "E:\xampp\htdocs\shiptoarmenia\templates\main\util\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1310546f00661d6ad8-08920489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '025cdb14e3968578a5461305ae43669125eb30d7' => 
    array (
      0 => 'E:\\xampp\\htdocs\\shiptoarmenia\\templates\\main\\util\\header.tpl',
      1 => 1416561205,
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
    'ns' => 0,
    'SITE_PATH' => 0,
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
            <a class="navbar-brand" href="#">Ship To Armenia</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <?php if ($_smarty_tpl->tpl_vars['ns']->value['userLevel']===$_smarty_tpl->tpl_vars['ns']->value['userGroupsUser']){?>
              	<li>
              		<a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/user/do_logout">Logout</a>
              	</li>
              <?php }else{ ?>
             	 <li>
             	 	<a href="#">
             	 		Login
         	 		</a>
     	 		</li>
         	 <?php }?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</header>
<?php }} ?>