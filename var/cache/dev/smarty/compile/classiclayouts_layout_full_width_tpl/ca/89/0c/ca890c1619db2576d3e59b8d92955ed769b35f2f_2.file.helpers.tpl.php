<?php
/* Smarty version 4.5.5, created on 2025-12-31 14:10:19
  from '/var/www/html/filmycart_presta/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6954e1732c8c72_84247153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca890c1619db2576d3e59b8d92955ed769b35f2f' => 
    array (
      0 => '/var/www/html/filmycart_presta/themes/classic/templates/_partials/helpers.tpl',
      1 => 1761888630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6954e1732c8c72_84247153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/filmycart_presta/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/ca/89/0c/ca890c1619db2576d3e59b8d92955ed769b35f2f_2.file.helpers.tpl.php',
    'uid' => 'ca890c1619db2576d3e59b8d92955ed769b35f2f',
    'call_name' => 'smarty_template_function_renderLogo_11092365576954e1732c2969_75086257',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_11092365576954e1732c2969_75086257 */
if (!function_exists('smarty_template_function_renderLogo_11092365576954e1732c2969_75086257')) {
function smarty_template_function_renderLogo_11092365576954e1732c2969_75086257(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src']), ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width']), ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height']), ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_11092365576954e1732c2969_75086257 */
}
