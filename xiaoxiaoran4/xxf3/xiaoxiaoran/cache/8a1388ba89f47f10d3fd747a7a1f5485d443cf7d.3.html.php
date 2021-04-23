<?php
/* Smarty version 3.1.39, created on 2021-04-18 07:13:40
  from 'D:\phpStudy\PHPTutorial\WWW\xiaoxiaoran\cfcc\xiaoxiaoran\templates\3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607bdc243a1a16_34782576',
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
  'cache_lifetime' => 3600,
),true)) {
function content_607bdc243a1a16_34782576 (Smarty_Internal_Template $_smarty_tpl) {
?><br />
<b>Warning</b>:  strftime(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. in <b>D:\phpStudy\PHPTutorial\WWW\xiaoxiaoran\cfcc\smarty\libs\sysplugins\smarty_internal_runtime_codeframe.php</b> on line <b>48</b><br />
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
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>67</li>
                    </ul>
        缓存文件在cache文件夹中,删除可更新,此文件更改可更新<br>
        一个小时会自动更新缓存文件<br>
        caching=1&caching=2<br>

    </div>
    <h2>局部不缓存</h2>
    <div>
        1618730020
        <?php echo time();?>

        <?php echo $_smarty_tpl->tpl_vars['mytime']->value;?>

        不缓存
    </div>
    
    <h2></h2>
    <div>
        
    </div>
</body>

</html><?php }
}
