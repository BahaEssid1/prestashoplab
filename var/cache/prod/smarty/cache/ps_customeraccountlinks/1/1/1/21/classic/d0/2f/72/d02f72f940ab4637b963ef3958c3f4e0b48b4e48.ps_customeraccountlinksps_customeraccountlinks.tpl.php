<?php
/* Smarty version 4.5.5, created on 2025-09-25 18:22:09
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68d57a418a3975_21363307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1746186921,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_68d57a418a3975_21363307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\MAMP\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\40\\8d\\49\\408d4970b4fd782b2c802e4dfbca2c033c5b2cdf_2.file.helpers.tpl.php',
    'uid' => '408d4970b4fd782b2c802e4dfbca2c033c5b2cdf',
    'call_name' => 'smarty_template_function_renderLogo_27279102068d57a4168c517_46137707',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop/my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/prestashop/guest-tracking" title="Order tracking" rel="nofollow">Order tracking</a></li>
        <li><a href="http://localhost/prestashop/my-account" title="Log in to your customer account" rel="nofollow">Sign in</a></li>
        <li><a href="http://localhost/prestashop/registration" title="Create account" rel="nofollow">Create account</a></li>
        <li>
  <a href="//localhost/prestashop/module/ps_emailalerts/account" title="My alerts">
    My alerts
  </a>
</li>

       
	</ul>
</div>
<?php }
}
