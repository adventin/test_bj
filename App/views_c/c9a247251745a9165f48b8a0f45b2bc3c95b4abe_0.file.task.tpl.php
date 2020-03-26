<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 19:42:19
  from 'T:\OSPanel\domains\test-bj.loc\App\views\task.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7cdb6b377092_93467201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a247251745a9165f48b8a0f45b2bc3c95b4abe' => 
    array (
      0 => 'T:\\OSPanel\\domains\\test-bj.loc\\App\\views\\task.tpl',
      1 => 1585240938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:task_row.tpl' => 1,
  ),
),false)) {
function content_5e7cdb6b377092_93467201 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="todo-list">
    <div class="container">
        <div class="row">
            <div class="col-6 mb-4">
                <h4>Добавьте новую задачу</h4>
                <form action="/task/post/" method="post" class="formJs">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control form-control-sm validateInputJs" name="name"
                                   id="name">
                        </div>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="mail">Email</label>
                            <input type="email" class="form-control form-control-sm validateInputJs mailJs" name="mail"
                                   id="mail">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="task">Задача</label>
                            <textarea class="form-control form-control-sm validateInputJs" name="task"
                                      id="task"></textarea>

                        </div>
                    </div>

                    <button type="button" class="btn btn-primary submitFormJs">Добавить</button>
                </form>
                <div class="form-response formResponseJs"></div>
            </div>
            <div class="col-12">
                <?php if ($_smarty_tpl->tpl_vars['tasks']->value) {?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">
                                    <div class="sort">
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['current'] != 1) {?>/<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current'];
}?>/name/asc"
                                           class="sort__btn sort_btn_up " data-order="name" data-sort="asc">
                                            <span><</span>
                                        </a>
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['current'] != 1) {?>/<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current'];
}?>/name/desc"
                                           class="sort__btn sort_btn_down " data-order="name"
                                           data-sort="desc">
                                            <span>></span>
                                        </a>
                                    </div>
                                    <span>Имя</span>
                                </th>
                                <th scope="col">
                                    <div class="sort">
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['current'] != 1) {?>/<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current'];
}?>/mail/asc"
                                           class="sort__btn sort_btn_up " data-order="mail" data-sort="asc">
                                            <span><</span>
                                        </a>
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['current'] != 1) {?>/<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current'];
}?>/mail/desc"
                                           class="sort__btn sort_btn_down " data-order="mail"
                                           data-sort="desc">
                                            <span>></span>
                                        </a>
                                    </div>
                                    <span>E-mail</span>
                                </th>
                                <th scope="col">
                                    <span>Задача</span>
                                </th>
                                <th scope="col">
                                    <div class="sort">
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['current'] != 1) {?>/<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current'];
}?>/status/asc"
                                           class="sort__btn sort_btn_up " data-order="status" data-sort="asc">
                                            <span><</span>
                                        </a>
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['current'] != 1) {?>/<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current'];
}?>/status/desc"
                                           class="sort__btn sort_btn_down " data-order="status"
                                           data-sort="desc">
                                            <span>></span>
                                        </a>
                                    </div>
                                    <span>Статус</span>
                                </th>
                                <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value === true) {?>
                                    <th></th>
                                <?php }?>
                            </tr>
                            </thead>
                            <tbody class="tasksJs">
                            <?php $_smarty_tpl->_subTemplateRender("file:task_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </tbody>
                        </table>
                    </div>
                <?php }?>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item<?php if ($_smarty_tpl->tpl_vars['pagination']->value['current'] == 1) {?> disabled<?php }?>">
                                <a class="page-link"
                                   href="<?php if (($_smarty_tpl->tpl_vars['pagination']->value['current']-1) > 1) {?>/<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current']-1;
echo $_smarty_tpl->tpl_vars['urlGetParams']->value;
} else { ?>/<?php echo $_smarty_tpl->tpl_vars['urlGetParams']->value;
}?>"
                                   tabindex="-1">Previous</a>
                            </li>
                            <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pagination']->value['count']+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagination']->value['count'])+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
                                <li class="page-item<?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['pagination']->value['current']) {?> disabled<?php }?>">
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                                        <a class="page-link"
                                           href="/<?php echo $_smarty_tpl->tpl_vars['page']->value;
echo $_smarty_tpl->tpl_vars['urlGetParams']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                                    <?php } else { ?>
                                        <a class="page-link"
                                           href="<?php if ($_smarty_tpl->tpl_vars['urlGetParams']->value) {
echo $_smarty_tpl->tpl_vars['urlGetParams']->value;
} else { ?>/<?php }?>"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                                    <?php }?>
                                </li>
                            <?php }
}
?>
                            <li class="page-item<?php if ($_smarty_tpl->tpl_vars['pagination']->value['count'] == $_smarty_tpl->tpl_vars['pagination']->value['current']) {?> disabled<?php }?>">
                                <a class="page-link"
                                   href="<?php if (($_smarty_tpl->tpl_vars['pagination']->value['current']) < $_smarty_tpl->tpl_vars['pagination']->value['count']) {?>/<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current']+1;
echo $_smarty_tpl->tpl_vars['urlGetParams']->value;
} else { ?>#<?php }?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            <?php }?>
        </div>
    </div>
</section><?php }
}
