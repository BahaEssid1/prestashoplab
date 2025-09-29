<?php
/* Smarty version 4.5.5, created on 2025-09-28 17:29:32
  from 'C:\MAMP\htdocs\prestashop\themes\classic\templates\catalog\_partials\product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68d9626c629c73_17950519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4f257398cedde213e5faeef902ea92d80211555' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
      1 => 1746186921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d9626c629c73_17950519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart js-product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184039632668d9626c6220e7_14669993', 'product_quantity');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79890854468d9626c623eb7_57358705', 'product_availability');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13337914568d9626c628c59_67536324', 'product_minimal_quantity');
?>

  <?php }?>
</div>
<?php }
/* {block 'product_quantity'} */
class Block_184039632668d9626c6220e7_14669993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_184039632668d9626c6220e7_14669993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity">
        <div class="qty">
          <input
            type="number"
            name="qty"
            id="quantity_wanted"
            inputmode="numeric"
            pattern="[0-9]*"
            <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_wanted']) {?>
              value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['quantity_wanted']), ENT_QUOTES, 'UTF-8');?>
"
              min="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']), ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
              value="1"
              min="1"
            <?php }?>
            class="input-group"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>
          >
            <i class="material-icons shopping-cart">&#xE547;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_availability'} */
class Block_79890854468d9626c623eb7_57358705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_79890854468d9626c623eb7_57358705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="product-availability" class="product-availability js-product-availability">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'in_stock') {?>
            <?php $_smarty_tpl->_assignInScope('availability_icon', 'E5CA');?>
            <?php $_smarty_tpl->_assignInScope('availability_color', 'success');?>
          <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available' || $_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
            <?php $_smarty_tpl->_assignInScope('availability_icon', 'E002');?>
            <?php $_smarty_tpl->_assignInScope('availability_color', 'warning');?>
          <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('availability_icon', 'E14B');?>
            <?php $_smarty_tpl->_assignInScope('availability_color', 'danger');?>
          <?php }?>

                    <div class="alert alert-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['availability_color']->value), ENT_QUOTES, 'UTF-8');?>
" role="alert">
            <div class="alert-content-wrapper">
              <div><i class="material-icons rtl-no-flip">&#x<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['availability_icon']->value), ENT_QUOTES, 'UTF-8');?>
;</i></div>
              <div>
                <div><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['availability_message']), ENT_QUOTES, 'UTF-8');?>
</div>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['availability_submessage'])) {?>
                  <div><small><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['availability_submessage']), ENT_QUOTES, 'UTF-8');?>
</small></div>
                <?php }?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_minimal_quantity'} */
class Block_13337914568d9626c628c59_67536324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_13337914568d9626c628c59_67536324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="product-minimal-quantity js-product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

        <?php }?>
      </p>
    <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
