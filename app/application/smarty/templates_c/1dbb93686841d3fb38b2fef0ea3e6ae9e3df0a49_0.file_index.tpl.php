<?php
/* Smarty version 5.8.0, created on 2026-05-10 02:46:01
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69fff1695605c5_17868284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dbb93686841d3fb38b2fef0ea3e6ae9e3df0a49' => 
    array (
      0 => 'index.tpl',
      1 => 1778358156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fff1695605c5_17868284 (\Smarty\Template $_smarty_tpl) {
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_38759834069fff169551929_97016833', 'title');
?>

    </title>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_141776142469fff1695562f4_79402680', 'head');
?>

</head>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_142304118469fff169557d27_32526336', 'body');
?>


</html><?php }
/* {block 'title'} */
class Block_38759834069fff169551929_97016833 extends \Smarty\Runtime\Block
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
class Block_141776142469fff1695562f4_79402680 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
}
}
/* {/block 'head'} */
/* {block "content"} */
class Block_88508185669fff16955dfe8_34398039 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

                    <?php
}
}
/* {/block "content"} */
/* {block 'body'} */
class Block_142304118469fff169557d27_32526336 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>


<div class="container">
    <div class="header">
        <span>News <?php echo $_smarty_tpl->getValue('name');?>
 :)</span>
    </div>
    <div class="menu_1">
        <span class="home"><a href="<?php echo URL;?>
/main/task">News Today</a></span>
        <span class="alt"><a href="<?php echo URL;?>
/main/task">The Task</a></span>
        <span class="alt"><a href="<?php echo URL;?>
/main/contacts">Contacts</a></span>
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
                    <a class="category_link" href=""><?php echo $_smarty_tpl->getValue('cat')['name'];?>
</a>
                </span>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>

    <div class="content">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_88508185669fff16955dfe8_34398039', "content", $this->tplIndex);
?>

    </div>


    </div>

<br>

<?php
}
}
/* {/block 'body'} */
}
