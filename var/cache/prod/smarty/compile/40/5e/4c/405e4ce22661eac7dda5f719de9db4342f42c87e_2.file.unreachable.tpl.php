<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 08:53:39
  from 'C:\xampp\htdocs\offwhite\themes\classic\templates\checkout\_partials\steps\unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffe8ae3021ea4_08217759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '405e4ce22661eac7dda5f719de9db4342f42c87e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\offwhite\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffe8ae3021ea4_08217759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20713343655ffe8ae3020493_20168842', 'step');
?>

<?php }
/* {block 'step'} */
class Block_20713343655ffe8ae3020493_20168842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_20713343655ffe8ae3020493_20168842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
