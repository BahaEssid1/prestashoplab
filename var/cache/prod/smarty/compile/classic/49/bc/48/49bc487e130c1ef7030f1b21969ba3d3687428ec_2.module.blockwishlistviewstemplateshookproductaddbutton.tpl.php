<?php
/* Smarty version 4.5.5, created on 2025-09-25 18:22:35
  from 'module:blockwishlistviewstemplateshookproductaddbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68d57a5ba0e8a6_11908858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49bc487e130c1ef7030f1b21969ba3d3687428ec' => 
    array (
      0 => 'module:blockwishlistviewstemplateshookproductaddbutton.tpl',
      1 => 1728052801,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d57a5ba0e8a6_11908858 (Smarty_Internal_Template $_smarty_tpl) {
?><div
  class="wishlist-button"
  data-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
"
  data-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
  data-product-attribute-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
"
  data-is-logged="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['customer']->value['is_logged']), ENT_QUOTES, 'UTF-8');?>
"
  data-list-id="1"
  data-checked="true"
  data-is-product="true"
></div>

<?php }
}
