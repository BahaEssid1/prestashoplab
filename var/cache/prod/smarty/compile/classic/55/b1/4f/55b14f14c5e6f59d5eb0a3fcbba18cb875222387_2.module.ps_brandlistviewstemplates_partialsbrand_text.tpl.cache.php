<?php
/* Smarty version 4.5.5, created on 2025-09-28 17:28:46
  from 'module:ps_brandlistviewstemplates_partialsbrand_text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68d9623edb5233_29819551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55b14f14c5e6f59d5eb0a3fcbba18cb875222387' => 
    array (
      0 => 'module:ps_brandlistviewstemplates_partialsbrand_text.tpl',
      1 => 1746186921,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d9623edb5233_29819551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '142989725368d9623edb3498_79102607';
?>

<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand', false, NULL, 'brand_list', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_brand_list']->value['iteration']++;
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_brand_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_brand_list']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
      <li class="facet-label">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['brand']->value['link']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['brand']->value['name']), ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['brand']->value['name']), ENT_QUOTES, 'UTF-8');?>

        </a>
      </li>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
