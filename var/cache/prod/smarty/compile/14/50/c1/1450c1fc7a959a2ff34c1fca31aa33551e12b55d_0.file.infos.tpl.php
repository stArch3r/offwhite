<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 17:49:28
  from 'C:\xampp\htdocs\offwhite\modules\pesapal\views\templates\hook\infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffdb6f87a4555_61307730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1450c1fc7a959a2ff34c1fca31aa33551e12b55d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\offwhite\\modules\\pesapal\\views\\templates\\hook\\infos.tpl',
      1 => 1610462157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdb6f87a4555_61307730 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['my_module_display_name']->value) && $_smarty_tpl->tpl_vars['my_module_display_name']->value) {?>
		<h2><?php echo $_smarty_tpl->tpl_vars['my_module_display_name']->value;?>
</h2>
	<?php } else { ?>
        <h2>Pesapal</h2>
	<?php }?>
	<div class ="alert alert-info">
	<fieldset>
	<legend> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Help'),$_smarty_tpl ) );?>
 </legend>
		<a href="http://www.pesapal.com/" style="float: right;">
			<img src="../modules/<?php echo $_smarty_tpl->tpl_vars['my_module_name']->value;?>
/logo_pesapal.jpg" alt="Pesapal" />
		</a>
		
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1. Open an account online at'),$_smarty_tpl ) );?>

		<a href="http://www.pesapal.com/">www.pesapal.com</a> as a merchant.
		<br><br>
		<p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pesapal requires Full names and email/phone number.'),$_smarty_tpl ) );?>
 
		<?php $_smarty_tpl->_assignInScope('ipn_setting', "PesaPal requires Full names and email/phone number.<br/>To handle APN return requests, please set IPN Listener URL field to:<br><b>".((string)$_smarty_tpl->tpl_vars['ipn_url']->value)."</b> on your pesapal account settings");?>
		<?php echo $_smarty_tpl->tpl_vars['ipn_setting']->value;?>

		</p>
		<br/>
		<blockquote>You will receive an email with a consumer_key and consumer_secret</blockquote>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'2. Fill in the consumer key and consumer secret in the general settings below'),$_smarty_tpl ) );?>

		<br><br>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'3. Add a small decription about the transaction. Ideally a 5-10 letter description'),$_smarty_tpl ) );?>

		<blockquote>Eg. Purchase on goods from ABC company<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Donations to XYZ organization</blockquote>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'4. Input a 3-4 letter code to be used as a reference for each transaction '),$_smarty_tpl ) );?>

		<b>Note:</b> Each business MUST have a unique code 
		<blockquote>Eg. ABC - For organization ABC <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ZACK - For the bring ZACK back home campaign etc</blockquote>
		<br><br>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'5. Key in the message that will be displayed to the client after a payment has been made.'),$_smarty_tpl ) );?>

		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pending message: </b>There is an ongoing communication between pesapal and an external entity hence the status is yet to be confirmed.<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Invalid message: </b>This system can not actually verify the status of the payment due to some reason. <br /> However, as a merchant you can check the actual status when you login to your merchants account.
		<br /><br />
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'6. Update your settings and test the pesapal payment plugin'),$_smarty_tpl ) );?>
</p>
		
	</fieldset>
	</div>
	<?php }
}
