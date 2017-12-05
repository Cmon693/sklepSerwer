<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 16:20:21
         compiled from "/var/www/html/adminjs/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5400111955a007db5a5bef5-43854989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090a24f0099ec22b4b30c5b75436201c0ec0a8fd' => 
    array (
      0 => '/var/www/html/adminjs/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1509924142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5400111955a007db5a5bef5-43854989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a007db5a906b8_45634798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a007db5a906b8_45634798')) {function content_5a007db5a906b8_45634798($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
