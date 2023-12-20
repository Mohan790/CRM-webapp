<?php
/* Smarty version 3.1.39, created on 2022-05-22 09:56:16
  from 'C:\xampp\htdocs\ibilling\ui\theme\ibilling\appearance_customize.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_628a4100977873_28390058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2feb2e97d00f0e5100b1df6829ec92386eae174e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\appearance_customize.tpl',
      1 => 1621318798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628a4100977873_28390058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_441486073628a410094c504_36576579', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_441486073628a410094c504_36576579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_441486073628a410094c504_36576579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">


            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</h5>


                </div>
                <div class="ibox-content">

                    <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/logo.png" alt="Logo">
                    <br><br>

                    <form role="form" name="logo" enctype="multipart/form-data" method="post"
                          action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/logo-post/">
                        <div class="form-group">
                            <label for="file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</label>
                            <input type="file" id="file" name="file">

                            <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['This will replace existing logo'];?>
 -
                                application/storage/system/logo.png</p>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>


                </div>
            </div>





            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Portal Custom Scripts'];?>
</h5>


                </div>
                <div class="ibox-content">


                    <form role="form" name="logo" method="post"
                          action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/custom_scripts/">
                        <div class="form-group">
                            <label for="header_scripts"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Header Scripts'];?>
</label>

                            <textarea class="form-control" id="header_scripts" name="header_scripts"
                                      rows="4"><?php echo $_smarty_tpl->tpl_vars['_c']->value['header_scripts'];?>
</textarea>

                        </div>
                        <div class="form-group">
                            <label for="footer_scripts"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Footer Scripts'];?>
</label>

                            <textarea class="form-control" id="footer_scripts" name="footer_scripts"
                                      rows="4"><?php echo $_smarty_tpl->tpl_vars['_c']->value['footer_scripts'];?>
</textarea>

                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>


                </div>
            </div>


        </div>




    </div>


<?php
}
}
/* {/block "content"} */
}
