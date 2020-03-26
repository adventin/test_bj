{foreach $tasks AS $k => $v}
    <tr data-id="{$v.id}" class="taskJs">
        <td>{$v.name}</td>
        <td>{$v.mail}</td>
        <td>
            {if $isAdmin === true}
                <textarea name="task" id="task_{$v.id}" cols="30" rows="3" style="width: 100%" class="taskTextJs">{$v.task|escape}</textarea>
            {else}
                {$v.task|escape}
            {/if}
        </td>
        <td>
            <label>
                <input type="checkbox" {if $v.status == 1}checked="checked"{/if} class="taskStatusJs">
                {if $v.status == 1}Выполнено{else}В работе{/if}
            </label>
            <div>{if $v.moderation == 1}отредактировано администратором{/if}</div>

        </td>
        {if $isAdmin === true}
            <td>
                <button class="btn btn-primary saveTaskJs">Сохранить</button>
            </td>
        {/if}
    </tr>
{/foreach}