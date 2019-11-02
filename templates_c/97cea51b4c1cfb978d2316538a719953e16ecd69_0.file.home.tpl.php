<?php
/* Smarty version 3.1.33, created on 2019-11-02 02:44:44
  from 'C:\xampp\htdocs\geo\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbcdf8c85d185_61358225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97cea51b4c1cfb978d2316538a719953e16ecd69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\geo\\templates\\home.tpl',
      1 => 1572638343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:handlebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbcdf8c85d185_61358225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row my-5">
        <div class="col mx-auto">
            <h1 class="text-center">Weather forecast!</h1>
        </div>
    </div>
    <div class="row my-5">
        <form method="get" action="services/weather" class="col col-md-6 mx-auto text-center">
            <div class="form-group">
                <input id="city" type="text" class="form-control" name="city" placeholder="Search for your city!">
                <button type="submit" class="btn btn-info mt-1" id="search">Search</button>
            </div>
        </form>
    </div>
    <div class="row my-5">
        <div class="col col-md-6 mx-auto">
            <?php $_smarty_tpl->_subTemplateRender("file:handlebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
