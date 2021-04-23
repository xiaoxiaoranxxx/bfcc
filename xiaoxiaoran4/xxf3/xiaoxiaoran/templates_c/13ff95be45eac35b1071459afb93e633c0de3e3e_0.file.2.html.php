<?php
/* Smarty version 3.1.39, created on 2021-04-18 01:24:38
  from 'D:\phpStudy\PHPTutorial\WWW\xiaoxiaoran\cfcc\xiaoxiaoran\templates\2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607b8a56d75104_71382976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13ff95be45eac35b1071459afb93e633c0de3e3e' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\xiaoxiaoran\\cfcc\\xiaoxiaoran\\templates\\2.html',
      1 => 1618709034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607b8a56d75104_71382976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\phpStudy\\PHPTutorial\\WWW\\xiaoxiaoran\\cfcc\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'D:\\phpStudy\\PHPTutorial\\WWW\\xiaoxiaoran\\cfcc\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),2=>array('file'=>'D:\\phpStudy\\PHPTutorial\\WWW\\xiaoxiaoran\\cfcc\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bfcc</title>
    <style>
        h2 {
            color: blue;
        }
    </style>
</head>

<body>
    <h2>复选框</h2>
    <div>
        <?php echo smarty_function_html_checkboxes(array('name'=>"hobby",'options'=>$_smarty_tpl->tpl_vars['outval']->value,'selected'=>$_smarty_tpl->tpl_vars['seled']->value,'separator'=>"&nbsp;",'label_ids'=>true),$_smarty_tpl);?>

    </div>
    <h2>下拉列表</h2>
    <div>
        <?php echo smarty_function_html_options(array('name'=>"city",'options'=>$_smarty_tpl->tpl_vars['area']->value,'selected'=>$_smarty_tpl->tpl_vars['seledd']->value),$_smarty_tpl);?>

    </div>
    <h2>布局/继承</h2><br>
    <h2>变量修饰器</h2>
    <div>
        <?php echo time();?>
<br>
        <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
<br>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['add']->value)===null||$tmp==='' ? 'xiaoxiaoran' : $tmp);?>
<br>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bai']->value, ENT_QUOTES, 'UTF-8', true);?>
<br>
    </div>
    <h2>复选框</h2>

</body>

</html><?php }
}
