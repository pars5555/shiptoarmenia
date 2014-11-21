<?php /* Smarty version Smarty-3.1.11, created on 2014-11-21 09:05:42
         compiled from "E:\xampp\htdocs\shiptoarmenia\templates\main\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26016546f0066032905-25259587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56da4cd66e81721b9f7e6137d5dbeb80323346c0' => 
    array (
      0 => 'E:\\xampp\\htdocs\\shiptoarmenia\\templates\\main\\main.tpl',
      1 => 1416560698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26016546f0066032905-25259587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_546f00660d4a47_99008831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546f00660d4a47_99008831')) {function content_546f00660d4a47_99008831($_smarty_tpl) {?><?php if (!is_callable('smarty_function_nest')) include 'E:/xampp/htdocs/shiptoarmenia/classes/lib/smarty/plugins\\function.nest.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/headerControls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>    
    <body>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
        <?php echo smarty_function_nest(array('ns'=>'content'),$_smarty_tpl);?>
                        
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE_DIR']->value)."/main/util/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <input type="hidden" id="initialLoad" name="initialLoad" value="main" />
        <input type="hidden" id="contentLoad" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['contentLoad'];?>
" />	
    </body>


</html><?php }} ?>