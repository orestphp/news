<?php
/* Smarty version 5.8.0, created on 2026-05-08 13:25:55
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69fde463f086b8_93441738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dbb93686841d3fb38b2fef0ea3e6ae9e3df0a49' => 
    array (
      0 => 'index.tpl',
      1 => 1778245549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fde463f086b8_93441738 (\Smarty\Template $_smarty_tpl) {
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_64944946469fde463ee9ce0_13971565', 'title');
?>

    </title>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_42669385169fde463ef7ed3_34620811', 'head');
?>

</head>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_181072011469fde463efaee4_30622579', 'body');
?>


</html><?php }
/* {block 'title'} */
class Block_64944946469fde463ee9ce0_13971565 extends \Smarty\Runtime\Block
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
class Block_42669385169fde463ef7ed3_34620811 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
}
}
/* {/block 'head'} */
/* {block "content"} */
class Block_162660786869fde463f04de1_82246967 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

                    <?php
}
}
/* {/block "content"} */
/* {block 'body'} */
class Block_181072011469fde463efaee4_30622579 extends \Smarty\Runtime\Block
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
        <span class="home"><a href="<?php echo URL;?>
/main/task">News Today</a></span>
        <span class="alt"><a href="<?php echo URL;?>
/main/task">The Task</a></span>
        <span class="alt"><a href="<?php echo URL;?>
/main/contacts">Contacts</a></span>
    </div>

    <div class="main_nav">
        <div class="sub_menu">
            <div>Categories</div>
            <a href="<?php echo URL;?>
/main/task">The Task</a>
            <a href="<?php echo URL;?>
/main/contact">Contact</a>
        </div>
    </div>

    <div class="content">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_162660786869fde463f04de1_82246967', "content", $this->tplIndex);
?>

    </div>
</div>

<br>

<?php
}
}
/* {/block 'body'} */
}
