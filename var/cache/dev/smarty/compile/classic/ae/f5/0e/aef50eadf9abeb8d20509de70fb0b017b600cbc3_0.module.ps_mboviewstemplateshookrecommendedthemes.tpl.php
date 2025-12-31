<?php
/* Smarty version 4.5.5, created on 2025-12-31 14:10:37
  from 'module:ps_mboviewstemplateshookrecommendedthemes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6954e1857b2e38_81623388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef50eadf9abeb8d20509de70fb0b017b600cbc3' => 
    array (
      0 => 'module:ps_mboviewstemplateshookrecommendedthemes.tpl',
      1 => 1765867242,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6954e1857b2e38_81623388 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/filmycart_presta/modules/ps_mbo/views/templates/hook/recommended-themes.tpl --><?php echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_error_templating_url']->value;?>
"><?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['cdc_script_not_found']->value)) && $_smarty_tpl->tpl_vars['cdc_script_not_found']->value) {?>
  <?php echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_error_url']->value;?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
  <?php echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_url']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
  window.$(document).ready(function () {

    $('#themes-logo-page > .card > .card-body > .row').append('<div id="cdc-explore-themes-catalog" class="col-lg-3 col-md-4 col-sm-6 theme-card-container cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></div>')

    if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
      if (typeof renderCdcError === 'function') {
        renderCdcError($('#cdc-explore-themes-catalog'));
      }
    } else {
      const renderExploreThemesCatalog = window.mboCdc.renderExploreThemeCatalog

      const exploreThemesCatalogContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

      renderExploreThemesCatalog(exploreThemesCatalogContext, '#cdc-explore-themes-catalog')
    }
  });
<?php echo '</script'; ?>
>
<!-- end /var/www/html/filmycart_presta/modules/ps_mbo/views/templates/hook/recommended-themes.tpl --><?php }
}
