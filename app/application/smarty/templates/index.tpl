<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" href="../../../css/style.css" type="text/css" />
    <script src="../../../js/jquery-3.3.1.min.js" type="text/javascript"></script>

    <title>
        {block name=title}
            News Today
        {/block}
    </title>
    {block name=head}{/block}
</head>

{block name=body}

<div class="main-wrapper">
    <div class="container">

        <div class="header">
            <span>News Today :)</span>
        </div>

        <div class="menu_1">
            <span class="home"><a href="{URL}">News Today</a></span>
            <span class="alt"><a href="{URL}/news/articles">Articles</a></span>
            <span class="alt"><a href="{URL}/main/task">The Task</a></span>
        </div>

        <div class="menu_2">
            <div class="category-all-topics">Все темы: </div>
            {foreach $data.categories as $cat}
                <span class="category-badge {if isset($data.currentCategory.id) && $data.currentCategory.id == $cat.id}category-badge-hover{/if}">
                    <a class="category-link" href="/news/category-articles/{$cat.id}">{$cat.name}</a>
                </span>
            {/foreach}
        </div>

        <div class="content">
            {block name="content"}
                {* Sub-templates *}
            {/block}
        </div>

    </div>
</div>

{/block}

</html>