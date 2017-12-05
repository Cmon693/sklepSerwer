<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:58:05
         compiled from "/var/www/html/adminjs/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21086564535a00787db6a5e3-80871225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c31e65020800966fc91de5ec7b648b18887b81e4' => 
    array (
      0 => '/var/www/html/adminjs/themes/default/template/content.tpl',
      1 => 1509924142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21086564535a00787db6a5e3-80871225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00787db7cb67_74387610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00787db7cb67_74387610')) {function content_5a00787db7cb67_74387610($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
