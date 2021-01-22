<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 08:57:46
  from 'module:pesapalviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffe8bdaafabf0_11709905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06ec8ec6f460ebe10118e7f20bd742fb043089c9' => 
    array (
      0 => 'module:pesapalviewstemplatesfron',
      1 => 1610462157,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffe8bdaafabf0_11709905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1410205085ffe8bda9eb051_49037519', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_1410205085ffe8bda9eb051_49037519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1410205085ffe8bda9eb051_49037519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\offwhite\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>


  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

          <section>
            <iframe src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" width='100%' height='620px' scrolling='no' frameBorder='0'>
                <p>Browser unable to load iFrame</p>
            </iframe>
          </section>

      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        <div class="card cart-summary">
            <div class="cart-detailed-totals">
            
                <div class="card-block">
                    <div class="cart-summary-line" id="cart-subtotal-products">
                        <span class="label js-subtotal">
                              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ordered_items']->value, ENT_QUOTES, 'UTF-8');?>
 Items
                        </span>
                        <span class="value"><?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['order_currency']->value).(''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['ordered_items_total']->value), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                    <div class="cart-summary-line" id="cart-subtotal-shipping">
                        <span class="label">
                          Shipping
                        </span>
                        <span class="value"><?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['order_currency']->value).(''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['order_shipping']->value), ENT_QUOTES, 'UTF-8');?>
</span>
                        
                  </div>
                </div>

                <hr>

                <div class="card-block">

                  <div class="cart-summary-line cart-total">
                    <span class="label">Total (tax incl.)</span>

                    <span class="value"><?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['order_currency']->value).(''), ENT_QUOTES, 'UTF-8');
echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['ordered_items_total']->value,'y'=>$_smarty_tpl->tpl_vars['order_shipping']->value,'format'=>"%.2f"),$_smarty_tpl);?>
</span>
                  </div>

                </div>

            </div>
            
        </div>

      </div>

    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
