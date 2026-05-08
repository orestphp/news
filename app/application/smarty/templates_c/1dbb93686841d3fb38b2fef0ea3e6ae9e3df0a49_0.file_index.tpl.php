<?php
/* Smarty version 5.8.0, created on 2026-05-08 10:27:03
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69fdba772134d8_15161410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dbb93686841d3fb38b2fef0ea3e6ae9e3df0a49' => 
    array (
      0 => 'index.tpl',
      1 => 1778236021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fdba772134d8_15161410 (\Smarty\Template $_smarty_tpl) {
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_151762039169fdba77205296_16103755', 'title');
?>

    </title>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2976662869fdba7720c646_98070699', 'head');
?>

</head>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_193646199169fdba7720dcf2_48732701', 'body');
?>


</html><?php }
/* {block 'title'} */
class Block_151762039169fdba77205296_16103755 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

            <?php if ((true && ($_smarty_tpl->hasVariable('name') && null !== ($_smarty_tpl->getValue('name') ?? null)))) {?> News <?php echo $_smarty_tpl->getValue('name');?>
 <?php } else { ?> $name not found. <?php }?>
        <?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_2976662869fdba7720c646_98070699 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
}
}
/* {/block 'head'} */
/* {block "content"} */
class Block_116206669469fdba77211005_15950821 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

                    <?php
}
}
/* {/block "content"} */
/* {block 'body'} */
class Block_193646199169fdba7720dcf2_48732701 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>


<div class="container">
    <div class="header">
        <span>News <?php echo $_smarty_tpl->getValue('name');?>
)</span>
    </div>
    <div class="menu">

    </div>

    <div class="main_nav">
        <div class="sub_menu">
            <div>Menu</div>
            <a href="<?php echo URL;?>
/main/task">The Task</a>
            <a href="<?php echo URL;?>
/main/contact">Contact</a>
        </div>
    </div>

    <div class="content">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_116206669469fdba77211005_15950821', "content", $this->tplIndex);
?>

    </div>
</div>

<br>

<?php
}
}
/* {/block 'body'} */
}
