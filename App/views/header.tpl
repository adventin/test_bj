<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
                            <div class="col-6 text-right">{if isset($login) && !empty($login)}{$login}{/if}</div>
                            <div class="col-6 text-right">
                                {if $isAdmin == true}
                                    <a title="Выйти" href="/login/out/" class="btn btn-primary">Выйти</a>
                                {else}
                                    <a title="Авторизация" href="/login" class="btn btn-primary">Авторизация</a>
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


