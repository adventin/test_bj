<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 19:38:57
  from 'T:\OSPanel\domains\test-bj.loc\App\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7cdaa1ddf8c8_91183241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea010f182255513627f05455d8ce250d9c40ca0f' => 
    array (
      0 => 'T:\\OSPanel\\domains\\test-bj.loc\\App\\views\\login.tpl',
      1 => 1585240737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7cdaa1ddf8c8_91183241 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="login">
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <div class="message"><?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {
echo $_smarty_tpl->tpl_vars['message']->value;
}?></div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value !== true) {?>
                <div class="offset-3 col-6">
                    <form action="/login/auth/" method="post" class="formJs">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="login">Login</label>
                                <input type="text" class="form-control form-control-sm validateInputJs" name="login"
                                       id="login" placeholder="Login">
                            </div>
                            <div class="form-group col-12">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control form-control-sm validateInputJs" name="pwd"
                                       id="pwd" placeholder="Password">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary submitFormJs">Войти</button>
                    </form>
                </div>
            <?php }?>
        </div>
    </div>
</section><?php }
}
