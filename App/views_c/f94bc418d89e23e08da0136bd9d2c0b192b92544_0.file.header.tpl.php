<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 19:16:52
  from 'T:\OSPanel\domains\test-bj.loc\App\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7cd574b9b422_03258769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f94bc418d89e23e08da0136bd9d2c0b192b92544' => 
    array (
      0 => 'T:\\OSPanel\\domains\\test-bj.loc\\App\\views\\header.tpl',
      1 => 1585239412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7cd574b9b422_03258769 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>

    <style>
        .sort {
            display: inline-flex;
            flex-direction: column;
            height: 100%;
        }

        .sort__btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 16px;
            height: 16px;
            font-size: 16px;
            line-height: 16px;
            transform: rotate(90deg);
            left: auto;
            padding: 0;
            position: relative;
            border: 1px solid #1b1f21;
            color: #1b1f21;
            margin: 2px;
        }

        .sort__btn:hover {
            text-decoration: none;
        }

        .sort__btn, .sort__btn:focus {
            outline: 0;
        }

        .sort__btn > span {
            position: relative;
            top: -2px;
        }

        input.error,
        textarea.error {
            color: red !important;
            border-color: red !important;
        }

        input.error::-webkit-input-placeholder,
        textarea.error::-webkit-input-placeholder {
            color: red !important;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 mt-3">
                <div class="row">
                    <div class="col-9">
                        <a title="Главная" href="/" class="btn btn-primary">Главная</a>

                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6 text-right"><?php if (isset($_smarty_tpl->tpl_vars['login']->value) && !empty($_smarty_tpl->tpl_vars['login']->value)) {
echo $_smarty_tpl->tpl_vars['login']->value;
}?></div>
                            <div class="col-6 text-right">
                                <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value == true) {?>
                                    <a title="Выйти" href="/login/out/" class="btn btn-primary">Выйти</a>
                                <?php } else { ?>
                                    <a title="Авторизация" href="/login" class="btn btn-primary">Авторизация</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<?php }
}
