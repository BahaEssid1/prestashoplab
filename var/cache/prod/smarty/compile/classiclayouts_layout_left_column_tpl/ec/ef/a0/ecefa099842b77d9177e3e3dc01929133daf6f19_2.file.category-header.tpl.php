<?php
/* Smarty version 4.5.5, created on 2025-09-28 17:28:46
  from 'C:\MAMP\htdocs\prestashop\themes\classic\templates\catalog\_partials\category-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68d9623ee23766_89196187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecefa099842b77d9177e3e3dc01929133daf6f19' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\category-header.tpl',
      1 => 1746186921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d9623ee23766_89196187 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-header">
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="block-category card card-block">
            <h1 class="h1"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');?>
</h1>
            <div class="block-category-inner">
                <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                    <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['cover']['large']['url'])) {?>
                    <div class="category-cover">
                        <picture>
                            <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['cover']['large']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['large']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['cover']['large']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['large']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                            <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['large']['url']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['cover']['legend'])) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['legend']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');
}?>" fetchpriority="high" width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['large']['width']), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['cover']['large']['height']), ENT_QUOTES, 'UTF-8');?>
">
                        </picture>
                    </div>
                <?php }?>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
