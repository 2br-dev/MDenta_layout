<?php
/* Smarty version 3.1.39, created on 2021-12-01 14:16:18
  from 'C:\!Genesys_archives\M-Denta\Layout\release\setup\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a75982e7f501_92933085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d4849fbdbe03b952bcf91d8d606680ac95974e0' => 
    array (
      0 => 'C:\\!Genesys_archives\\M-Denta\\Layout\\release\\setup\\templates\\footer.tpl',
      1 => 1638357247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a75982e7f501_92933085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\!Genesys_archives\\M-Denta\\Layout\\release\\core\\model\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_prefixVariable1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
