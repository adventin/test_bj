<section id="todo-list">
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
                {if $tasks}
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">
                                    <div class="sort">
                                        <a href="{if $pagination.current != 1}/{$pagination.current}{/if}/name/asc"
                                           class="sort__btn sort_btn_up {*sortJs*}" data-order="name" data-sort="asc">
                                            <span><</span>
                                        </a>
                                        <a href="{if $pagination.current != 1}/{$pagination.current}{/if}/name/desc"
                                           class="sort__btn sort_btn_down {*sortJs*}" data-order="name"
                                           data-sort="desc">
                                            <span>></span>
                                        </a>
                                    </div>
                                    <span>Имя</span>
                                </th>
                                <th scope="col">
                                    <div class="sort">
                                        <a href="{if $pagination.current != 1}/{$pagination.current}{/if}/mail/asc"
                                           class="sort__btn sort_btn_up {*sortJs*}" data-order="mail" data-sort="asc">
                                            <span><</span>
                                        </a>
                                        <a href="{if $pagination.current != 1}/{$pagination.current}{/if}/mail/desc"
                                           class="sort__btn sort_btn_down {*sortJs*}" data-order="mail"
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
                                        <a href="{if $pagination.current != 1}/{$pagination.current}{/if}/status/asc"
                                           class="sort__btn sort_btn_up {*sortJs*}" data-order="status" data-sort="asc">
                                            <span><</span>
                                        </a>
                                        <a href="{if $pagination.current != 1}/{$pagination.current}{/if}/status/desc"
                                           class="sort__btn sort_btn_down {*sortJs*}" data-order="status"
                                           data-sort="desc">
                                            <span>></span>
                                        </a>
                                    </div>
                                    <span>Статус</span>
                                </th>
                                {if $isAdmin === true}
                                    <th></th>
                                {/if}
                            </tr>
                            </thead>
                            <tbody class="tasksJs">
                            {include file="task_row.tpl"}
                            </tbody>
                        </table>
                    </div>
                {/if}
            </div>
            {if isset($pagination)}
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item{if $pagination.current == 1} disabled{/if}">
                                <a class="page-link"
                                   href="{if ($pagination.current-1) > 1}/{$pagination.current-1}{$urlGetParams}{else}/{$urlGetParams}{/if}"
                                   tabindex="-1">Previous</a>
                            </li>
                            {for $page = 1 to $pagination.count}
                                <li class="page-item{if $page == $pagination.current} disabled{/if}">
                                    {if $page > 1}
                                        <a class="page-link"
                                           href="/{$page}{$urlGetParams}">{$page}</a>
                                    {else}
                                        <a class="page-link"
                                           href="{if $urlGetParams}{$urlGetParams}{else}/{/if}">{$page}</a>
                                    {/if}
                                </li>
                            {/for}
                            <li class="page-item{if $pagination.count == $pagination.current} disabled{/if}">
                                <a class="page-link"
                                   href="{if ($pagination.current) < $pagination.count}/{$pagination.current+1}{$urlGetParams}{else}#{/if}">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            {/if}
        </div>
    </div>
</section>