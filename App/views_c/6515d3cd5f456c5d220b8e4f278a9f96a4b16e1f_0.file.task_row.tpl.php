<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 20:07:49
  from 'T:\OSPanel\domains\test-bj.loc\App\views\task_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7ce165061055_68492765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6515d3cd5f456c5d220b8e4f278a9f96a4b16e1f' => 
    array (
      0 => 'T:\\OSPanel\\domains\\test-bj.loc\\App\\views\\task_row.tpl',
      1 => 1585242385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7ce165061055_68492765 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="taskJs">
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mail'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value === true) {?>
                <textarea name="task" id="task_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" cols="30" rows="3" style="width: 100%" class="taskTextJs"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['task'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['task'], ENT_QUOTES, 'UTF-8', true);?>

            <?php }?>
        </td>
        <td>
            <label>
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['status'] == 1) {?>checked="checked"<?php }?> class="taskStatusJs">
                <?php if ($_smarty_tpl->tpl_vars['v']->value['status'] == 1) {?>Выполнено<?php } else { ?>В работе<?php }?>
            </label>
            <div><?php if ($_smarty_tpl->tpl_vars['v']->value['moderation'] == 1) {?>отредактировано администратором<?php }?></div>

        </td>
        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value === true) {?>
            <td>
                <button class="btn btn-primary saveTaskJs">Сохранить</button>
            </td>
        <?php }?>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
