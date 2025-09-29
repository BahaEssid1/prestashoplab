<?php
/* Smarty version 4.5.5, created on 2025-09-29 19:09:42
  from 'C:\MAMP\htdocs\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68dacb660eafd8_84954054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '408d4970b4fd782b2c802e4dfbca2c033c5b2cdf' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1746186921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68dacb660eafd8_84954054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\MAMP\\htdocs\\prestashop\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\40\\8d\\49\\408d4970b4fd782b2c802e4dfbca2c033c5b2cdf_2.file.helpers.tpl.php',
    'uid' => '408d4970b4fd782b2c802e4dfbca2c033c5b2cdf',
    'call_name' => 'smarty_template_function_renderLogo_106146848068dacb660da033_93230886',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_106146848068dacb660da033_93230886 */
if (!function_exists('smarty_template_function_renderLogo_106146848068dacb660da033_93230886')) {
function smarty_template_function_renderLogo_106146848068dacb660da033_93230886(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_106146848068dacb660da033_93230886 */
}
