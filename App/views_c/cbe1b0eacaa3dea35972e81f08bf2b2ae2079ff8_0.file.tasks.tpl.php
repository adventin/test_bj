<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-22 18:50:18
  from 'T:\OSPanel\domains\test-bj.loc\App\views\task.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e77893ab5bcb6_54213712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbe1b0eacaa3dea35972e81f08bf2b2ae2079ff8' => 
    array (
      0 => 'T:\\OSPanel\\domains\\test-bj.loc\\App\\views\\task.tpl',
      1 => 1584888689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e77893ab5bcb6_54213712 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="todo-list">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Имя</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Задача</th>
                            <th scope="col">Статус</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mail'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['task'];?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['v']->value['status'] === 1) {?>Выполнено<?php } else { ?>В работе<?php }?></td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}
