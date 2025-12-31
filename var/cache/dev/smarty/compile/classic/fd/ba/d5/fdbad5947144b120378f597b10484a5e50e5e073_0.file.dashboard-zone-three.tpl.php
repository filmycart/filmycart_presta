<?php
/* Smarty version 4.5.5, created on 2025-12-31 14:13:07
  from '/var/www/html/filmycart_presta/modules/ps_mbo/views/templates/hook/dashboard-zone-three.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6954e21b41e176_58640321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdbad5947144b120378f597b10484a5e50e5e073' => 
    array (
      0 => '/var/www/html/filmycart_presta/modules/ps_mbo/views/templates/hook/dashboard-zone-three.tpl',
      1 => 1765867242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6954e21b41e176_58640321 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  window.$(document).ready(function () {
    if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
      if (typeof renderCdcError === 'function') {
        renderCdcError($('#cdc-dashboard-news'));
      }
    } else {
      const renderNews = window.mboCdc.renderDashboardNews
      if (!window.mboDashboardContext) {
        setTimeout(() => {
            if (window.mboDashboardContext) {
              renderNews(window.mboDashboardContext, '#cdc-dashboard-news')
            }
          },
          1000)
      } else {
        renderNews(window.mboDashboardContext, '#cdc-dashboard-news')
      }
    }
  });
<?php echo '</script'; ?>
>

<section id="cdc-dashboard-news" class="dash_news cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
