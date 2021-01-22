<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 09:45:18
  from 'module:pesapalviewstemplateshook' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffe96fe535543_99255442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '959454f4efb5d7519dc8f249dac9a3663793ab3b' => 
    array (
      0 => 'module:pesapalviewstemplateshook',
      1 => 1610462157,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffe96fe535543_99255442 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="center_column">
    <h1>Order confirmation</h1>
    
    <p>Pesapal payment method is <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value, ENT_QUOTES, 'UTF-8');?>
</p>
            
    <?php if ($_smarty_tpl->tpl_vars['status']->value == "COMPLETED") {?>
        <?php $_smarty_tpl->_assignInScope('transaction_response_style', "alert-success");?>

        <?php $_smarty_tpl->_assignInScope('transaction_response', "<h4>Payment Completed</h4>
        Thank you <b>".((string)$_smarty_tpl->tpl_vars['buyer']->value)."</b>, your payment has been processed successfully.");?>
      
    
    <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "PENDING") {?>
        <?php $_smarty_tpl->_assignInScope('transaction_response_style', "alert-info");?>

        <?php $_smarty_tpl->_assignInScope('transaction_response', "<h4>Payment Pending</h4>
        Thank you <b>".((string)$_smarty_tpl->tpl_vars['buyer']->value)."</b>, Your payment is being processed.<br/>
        Once confirmed, You will receive an Email/SMS notification, and your payment settled instantly");?>

      
    
    <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "FAILED") {?>
        <?php $_smarty_tpl->_assignInScope('transaction_response_style', "alert-warning");?>
        <?php $_smarty_tpl->_assignInScope('transaction_response', "<h4>Payment Failed</h4>
        Sorry <b>".((string)$_smarty_tpl->tpl_vars['buyer']->value)."</b>, Your payment has failed. This could be because of several reasons:
        <br/>
        <ol style='margin:0 0 5px 30px;'>
        <li>The card details you entered are incorrect.</li>
        <li>Your bank may have blocked online payments.</li>
        <li>You have insufficient funds in the card/mobile money account you are attempting to use.</li> 
        <li>Your bank may have declined this transaction, kindly check with your bank.</li>
        </ol>
        <br>
        Kindly try again or contact support at support@pesapal.com for assistance");?>

     
    
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('transaction_response_style', "alert-danger");?>
        <?php $_smarty_tpl->_assignInScope('transaction_response', "Your payment was Invalid. Kindly try again or contact support at support@pesapal.com for assistance");?>

    <?php }?>
    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transaction_response_style']->value, ENT_QUOTES, 'UTF-8');?>
" style="border-left:5px solid; padding:5px 10px;">
        <?php if ($_smarty_tpl->tpl_vars['ipn_resp']->value) {?>
            <div style="margin:10px 0 20px 0;"><h3>IPN Return Response:</h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ipn_resp']->value, ENT_QUOTES, 'UTF-8');?>
</div>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['transaction_response']->value;?>
     </div>
    
</div><?php }
}
