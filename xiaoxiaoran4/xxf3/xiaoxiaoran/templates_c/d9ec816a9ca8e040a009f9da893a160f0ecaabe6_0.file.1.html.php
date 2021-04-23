<?php
/* Smarty version 3.1.39, created on 2021-04-17 11:58:36
  from 'D:\phpStudy\PHPTutorial\WWW\xiaoxiaoran\cfcc\xiaoxiaoran\templates\1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607acd6c2c3845_91952141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9ec816a9ca8e040a009f9da893a160f0ecaabe6' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\xiaoxiaoran\\cfcc\\xiaoxiaoran\\templates\\1.html',
      1 => 1618660706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607acd6c2c3845_91952141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "site.conf", null, 0);
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "style.conf", $_smarty_tpl->tpl_vars['hobby']->value, 0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cfcc</title>
    <style>
        div {
            color: <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'clr');?>
;
        }
    </style>
</head>

<body>
    <h2>xiaoxiaoran</h2>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
<br>
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    </p>
    <h2>保留变量使用</h2>
    <div><?php echo $_smarty_tpl->tpl_vars['get']->value;?>
=<?php echo $_GET['name'];?>
</div>
    <div><?php echo Smarty::SMARTY_VERSION;?>
</div>
    <h2>配置变量使用</h2>
    <div><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'network');?>
--><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'polise');?>
</div>
    <div>包含的不会解析</div>
    <h2>数组的使用</h2>
    <div><?php echo $_smarty_tpl->tpl_vars['fruit']->value[2];?>
--<?php echo $_smarty_tpl->tpl_vars['fruit']->value[3];?>
--<?php echo $_smarty_tpl->tpl_vars['fruitt']->value['q1'];?>
</div>
    <div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fruit']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br>
        <?php
}
if ($_smarty_tpl->tpl_vars['v']->do_else) {
?> 数组没有元素...
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <h2>分支的使用</h2>
    <div>
        <?php if ($_smarty_tpl->tpl_vars['week']->value == 1) {?> this->is->1
        <?php } elseif ($_smarty_tpl->tpl_vars['week']->value == 2) {?> this->is->2
        <?php } elseif ($_smarty_tpl->tpl_vars['week']->value == 4) {?> this->is->3
        <?php } else { ?>666
        <?php }?>
    </div>

</body>

</html><?php }
}
