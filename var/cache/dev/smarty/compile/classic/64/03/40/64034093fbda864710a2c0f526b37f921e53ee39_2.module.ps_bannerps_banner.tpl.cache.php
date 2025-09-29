<?php
/* Smarty version 4.5.5, created on 2025-09-29 19:09:40
  from 'module:ps_bannerps_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68dacb64427454_67113977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_bannerps_banner.tpl',
      1 => 1746186921,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68dacb64427454_67113977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '108059147168dacb64424be4_53487103';
?>
<!-- begin C:\MAMP\htdocs\prestashop/themes/classic/modules/ps_banner/ps_banner.tpl --><a class="banner" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_link']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
">
  <?php if ((isset($_smarty_tpl->tpl_vars['banner_img']->value))) {?>
    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_img']->value), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" loading="lazy" width="1110" height="213">
  <?php } else { ?>
    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<!-- end C:\MAMP\htdocs\prestashop/themes/classic/modules/ps_banner/ps_banner.tpl --><?php }
}
