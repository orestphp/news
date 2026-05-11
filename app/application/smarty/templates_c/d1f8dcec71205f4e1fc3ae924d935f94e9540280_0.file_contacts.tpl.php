<?php
/* Smarty version 5.8.0, created on 2026-05-10 11:12:56
  from 'file:contacts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a006838cdb206_18449957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1f8dcec71205f4e1fc3ae924d935f94e9540280' => 
    array (
      0 => 'contacts.tpl',
      1 => 1778411574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a006838cdb206_18449957 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2320308246a006838cd6ef6_88679861', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "index.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_2320308246a006838cd6ef6_88679861 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>


	<div class="container-in-content">
		<h3> Author </h3>

		<p>
			Orest Lozynsky
		</p>
		<p>
			<b>Email:</b> orest.b2b@gmail.com
		</p>
		<p>
			<b>Telegram:</b> @orestphp
		</p>
		<p>
			<b>Phone:</b> +38 067 913 87 81
		</p>
	</div>

	<br>
<?php
}
}
/* {/block "content"} */
}
