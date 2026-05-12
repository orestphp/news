<?php
/* Smarty version 5.8.0, created on 2026-05-12 02:46:37
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a02948d5dfdb2_50704001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dbb93686841d3fb38b2fef0ea3e6ae9e3df0a49' => 
    array (
      0 => 'index.tpl',
      1 => 1778553996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a02948d5dfdb2_50704001 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" href="../../../css/style.css" type="text/css" />
    <?php echo '<script'; ?>
 src="../../../js/jquery-3.3.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>

    <title>
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8158907646a02948d5bbbf1_65366294', 'title');
?>

    </title>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11154639556a02948d5c1e78_31616721', 'head');
?>

</head>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_4110356166a02948d5c6141_36937616', 'body');
?>


</html><?php }
/* {block 'title'} */
class Block_8158907646a02948d5bbbf1_65366294 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

            News Today
        <?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_11154639556a02948d5c1e78_31616721 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
}
}
/* {/block 'head'} */
/* {block "content"} */
class Block_18873174556a02948d5dd2e0_74955985 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

                            <?php
}
}
/* {/block "content"} */
/* {block 'body'} */
class Block_4110356166a02948d5c6141_36937616 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>


<div class="main-wrapper">
    <div class="container">

        <div class="header">
            <span>News Today :)</span>
        </div>

        <div class="menu_1">
            <span class="home"><a href="<?php echo URL;?>
">News Today</a></span>
            <span class="alt"><a href="<?php echo URL;?>
/news/articles">Articles</a></span>
            <span class="alt"><a href="<?php echo URL;?>
/main/task">The Task</a></span>
        </div>

        <div class="menu_2">
            <div class="category-all-topics">Все темы: </div>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['categories'], 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
                <span class="category-badge <?php if ((true && (true && null !== ($_smarty_tpl->getValue('data')['currentCategory']['id'] ?? null))) && $_smarty_tpl->getValue('data')['currentCategory']['id'] == $_smarty_tpl->getValue('cat')['id']) {?>category-badge-hover<?php }?>">
                    <a class="category-link" href="/news/category-articles/<?php echo $_smarty_tpl->getValue('cat')['id'];?>
"><?php echo $_smarty_tpl->getValue('cat')['name'];?>
</a>
                </span>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

        <div class="content">
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18873174556a02948d5dd2e0_74955985', "content", $this->tplIndex);
?>

        </div>

    </div>
</div>

<?php
}
}
/* {/block 'body'} */
}
