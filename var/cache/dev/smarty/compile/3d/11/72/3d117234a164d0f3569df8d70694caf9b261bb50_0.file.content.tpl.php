<?php
/* Smarty version 4.5.5, created on 2025-12-31 14:13:07
  from '/var/www/html/filmycart_presta/admin804cxdm1fukdsml2oad/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6954e21b45bca6_23198448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d117234a164d0f3569df8d70694caf9b261bb50' => 
    array (
      0 => '/var/www/html/filmycart_presta/admin804cxdm1fukdsml2oad/themes/default/template/content.tpl',
      1 => 1765867242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6954e21b45bca6_23198448 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
