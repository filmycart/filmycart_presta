<?php
/* Smarty version 4.5.5, created on 2025-12-31 14:21:15
  from '/var/www/html/filmycart_presta/modules/ps_accounts/views/templates/admin/app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6954e403b781f0_37522045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '078e1b944af75a8b022d78af5e9307c8cc0adc9d' => 
    array (
      0 => '/var/www/html/filmycart_presta/modules/ps_accounts/views/templates/admin/app.tpl',
      1 => 1765867242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6954e403b781f0_37522045 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urlAccountsCdn']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link rel="stylesheet" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathAppAssets']->value,'htmlall','UTF-8' ));?>
" type="text/css" media="all">

<div id="app"></div>

<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urlAccountsCdn']->value,'htmlall','UTF-8' ));?>
" type="text/javascript" defer><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
" type="module" defer><?php echo '</script'; ?>
>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>

<?php }
}
