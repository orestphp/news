<?php
/* Smarty version 5.8.0, created on 2026-05-11 15:40:52
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a01f8845a4e64_81507993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dbb93686841d3fb38b2fef0ea3e6ae9e3df0a49' => 
    array (
      0 => 'index.tpl',
      1 => 1778514047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a01f8845a4e64_81507993 (\Smarty\Template $_smarty_tpl) {
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15188809616a01f88459e221_39930057', 'title');
?>

    </title>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9886040446a01f88459f248_01893435', 'head');
?>

</head>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_505009226a01f88459ff05_85200468', 'body');
?>


</html><?php }
/* {block 'title'} */
class Block_15188809616a01f88459e221_39930057 extends \Smarty\Runtime\Block
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
class Block_9886040446a01f88459f248_01893435 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
}
}
/* {/block 'head'} */
/* {block "content"} */
class Block_10040835696a01f8845a3a36_64490760 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

                            <?php
}
}
/* {/block "content"} */
/* {block 'body'} */
class Block_505009226a01f88459ff05_85200468 extends \Smarty\Runtime\Block
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
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach2DoElse = false;
?>
                <span class="category-badge">
                    <a class="category_link" href="/news/category-articles/<?php echo $_smarty_tpl->getValue('cat')['id'];?>
"><?php echo $_smarty_tpl->getValue('cat')['name'];?>
</a>
                </span>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

        <div class="content">
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10040835696a01f8845a3a36_64490760', "content", $this->tplIndex);
?>

        </div>

    </div>
</div>

<?php
}
}
/* {/block 'body'} */
}
