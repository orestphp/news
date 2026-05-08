<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" href="../../../css/style.css" type="text/css" />
    <script src="../../../js/jquery-3.3.1.min.js" type="text/javascript"></script>

    <title>
        {block name=title}
            {if isset($name)} News {$name} {else} $name not found. {/if}
        {/block}
    </title>
    {block name=head}{/block}
</head>

{block name=body}

<div class="container">
    <div class="header">
        <span>News {$name})</span>
    </div>
    <div class="menu">

    </div>

    <div class="main_nav">
        <div class="sub_menu">
            <div>Menu</div>
            <a href="{URL}/main/task">The Task</a>
            <a href="{URL}/main/contact">Contact</a>
        </div>
    </div>

    <div class="content">
        {block name="content"}
            {* Sub-templates *}
        {/block}
    </div>
</div>

<br>

{/block}

</html>