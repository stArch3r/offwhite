<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 17:46:22
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffdb63e1a6966_25337173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a3fbdbbaf4c17b3f3d70f925fe6312d03f2c1c' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1605532416,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdb63e1a6966_25337173 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-comment-list-item row" data-product-comment-id="@COMMENT_ID@" data-product-id="@PRODUCT_ID@">
  <div class="col-md-3 col-sm-3 comment-infos">
    <div class="grade-stars"></div>
    <div class="comment-date">
      @COMMENT_DATE@
    </div>
    <div class="comment-author">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By %1$s','sprintf'=>array('@CUSTOMER_NAME@'),'d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </div>
  </div>

  <div class="col-md-9 col-sm-9 comment-content">
    <h4>@COMMENT_TITLE@</h4>
    <p>@COMMENT_COMMENT@</p>
    <div class="comment-buttons btn-group">
      <?php if ($_smarty_tpl->tpl_vars['usefulness_enabled']->value) {?>
        <a class="useful-review">
          <i class="material-icons thumb_up">thumb_up</i>
          <span class="useful-review-value">@COMMENT_USEFUL_ADVICES@</span>
        </a>
        <a class="not-useful-review">
          <i class="material-icons thumb_down">thumb_down</i>
          <span class="not-useful-review-value">@COMMENT_NOT_USEFUL_ADVICES@</span>
        </a>
      <?php }?>
      <a class="report-abuse" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
        <i class="material-icons outlined_flag">flag</i>
      </a>
    </div>
  </div>
</div>
<?php }
}
