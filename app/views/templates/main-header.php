<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title ?></title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/uikit.css">
    </head>

    <body>

        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

            <div class="uk-button-dropdown" data-uk-dropdown>
                <button class="uk-button">Idioma <i class="uk-icon-caret-down"></i></button>

                    <div class="uk-dropdown uk-dropdown-small">

                        <ul class="uk-nav uk-nav-dropdown">
                            <li><a href="./br">Português - Brasil</a></li>
                            <li><a href="./en">Inglês - Internacional</a></li>
                        </ul>

                    </div>

            </div>