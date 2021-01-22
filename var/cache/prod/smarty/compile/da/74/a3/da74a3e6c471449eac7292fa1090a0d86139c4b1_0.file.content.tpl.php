<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 17:39:26
  from 'C:\xampp\htdocs\offwhite\admin132syoj34\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffdb49e1ff453_12206328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da74a3e6c471449eac7292fa1090a0d86139c4b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\offwhite\\admin132syoj34\\themes\\default\\template\\content.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdb49e1ff453_12206328 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
