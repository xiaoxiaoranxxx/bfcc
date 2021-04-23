<?php
/* Smarty version 3.1.39, created on 2021-04-18 07:13:40
  from 'D:\phpStudy\PHPTutorial\WWW\xiaoxiaoran\cfcc\xiaoxiaoran\templates\3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607bdc24358372_84206784',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '75df6a6af8c04714bfa6d5b6f7a7dbf9c6101101' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\xiaoxiaoran\\cfcc\\xiaoxiaoran\\templates\\3.html',
      1 => 1618730014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607bdc24358372_84206784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1905467587607bdc24267939_11610341';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cfcc</title>
</head>

<body>
    <h2>缓存</h2>
    <div>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animal']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        缓存文件在cache文件夹中,删除可更新,此文件更改可更新<br>
        一个小时会自动更新缓存文件<br>
        caching=1&caching=2<br>

    </div>
    <h2>局部不缓存</h2>
    <div>
        <?php echo time();?>

        <?php echo '/*%%SmartyNocache:1905467587607bdc24267939_11610341%%*/<?php echo time();?>
/*/%%SmartyNocache:1905467587607bdc24267939_11610341%%*/';?>

        <?php echo '/*%%SmartyNocache:1905467587607bdc24267939_11610341%%*/<?php echo $_smarty_tpl->tpl_vars[\'mytime\']->value;?>
/*/%%SmartyNocache:1905467587607bdc24267939_11610341%%*/';?>

        不缓存
    </div>
    
    <h2></h2>
    <div>
        
    </div>
</body>

</html><?php }
}
