<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 08:52:03
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffe8a83337794_01744575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1606918382,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5ffe8a83337794_01744575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/offwhite/my-account" rel="nofollow">
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
            <li>
          <a href="http://localhost/offwhite/identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
            <li>
          <a href="http://localhost/offwhite/order-history" title="Orders" rel="nofollow">
            Orders
          </a>
        </li>
            <li>
          <a href="http://localhost/offwhite/credit-slip" title="Credit slips" rel="nofollow">
            Credit slips
          </a>
        </li>
            <li>
          <a href="http://localhost/offwhite/addresses" title="Addresses" rel="nofollow">
            Addresses
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
