<?php
/* Smarty version 5.8.0, created on 2026-05-10 04:41:09
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a000c651432d3_28064337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333bb0fc8f6e2f154b9948d5d1787f08fd809c4e' => 
    array (
      0 => 'main.tpl',
      1 => 1778388065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a000c651432d3_28064337 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9727507026a000c65125131_23881400', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "index.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_9727507026a000c65125131_23881400 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

	<?php $_smarty_tpl->assign('i', 0, false, NULL);?>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['articles'], 'article');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach0DoElse = false;
?>
		<div class="article">
			<img src="/images/articles/<?php echo $_smarty_tpl->getValue('article')['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('article')['name'];?>
">
			<h4><?php echo $_smarty_tpl->getValue('article')['name'];?>
</h4>
			<div class="category-desc">
				<?php echo $_smarty_tpl->getValue('article')['description'];?>

			</div>
			<div class="categories">
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('article')['categories'], 'cat');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach1DoElse = false;
?>
					<span class="label"><?php echo $_smarty_tpl->getValue('cat')['name'];?>
</span>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</div>
		</div>
		<?php $_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, true, NULL);?>
		<?php if ($_smarty_tpl->getValue('i')%3 == 0) {?>
						<div style="display:block;clear: both;"></div>
		<?php }?>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

	<div class="pagination-container content">
		<ul class="pagination">

			<?php if ($_smarty_tpl->getValue('data')['currentPage'] > 1) {?>
				<li>
					<a href="?page=<?php echo $_smarty_tpl->getValue('data')['currentPage']-1;?>
">&laquo; Назад</a>
				</li>
			<?php } else { ?>
				<li class="disabled"><span>&laquo; Назад</span></li>
			<?php }?>
			
			<?php
$_smarty_tpl->assign('p', null);$_smarty_tpl->tpl_vars['p']->step = 1;$_smarty_tpl->tpl_vars['p']->total = (int) ceil(($_smarty_tpl->tpl_vars['p']->step > 0 ? $_smarty_tpl->getValue('data')['totalPages']+1 - (1) : 1-($_smarty_tpl->getValue('data')['totalPages'])+1)/abs($_smarty_tpl->tpl_vars['p']->step));
if ($_smarty_tpl->tpl_vars['p']->total > 0) {
for ($_smarty_tpl->tpl_vars['p']->value = 1, $_smarty_tpl->tpl_vars['p']->iteration = 1;$_smarty_tpl->tpl_vars['p']->iteration <= $_smarty_tpl->tpl_vars['p']->total;$_smarty_tpl->tpl_vars['p']->value += $_smarty_tpl->tpl_vars['p']->step, $_smarty_tpl->tpl_vars['p']->iteration++) {
$_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->iteration === 1;$_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration === $_smarty_tpl->tpl_vars['p']->total;?>
				<?php if ($_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('data')['currentPage']) {?>
					<li class="active li-margin"><span><?php echo $_smarty_tpl->getValue('p');?>
</span></li>
				<?php } else { ?>
					<?php if ($_smarty_tpl->getValue('p') == 1 || $_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('data')['totalPages'] || ($_smarty_tpl->getValue('p') >= $_smarty_tpl->getValue('data')['currentPage']-2 && $_smarty_tpl->getValue('p') <= $_smarty_tpl->getValue('data')['currentPage']+2)) {?>
						<li class="li-margin">
							<a href="?page=<?php echo $_smarty_tpl->getValue('p');?>
"><?php echo $_smarty_tpl->getValue('p');?>
</a>
						</li>
					<?php } elseif ($_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('data')['currentPage']-3 || $_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('data')['currentPage']+3) {?>
						<li class="dots li-margin"><span>...</span></li>
					<?php }?>
				<?php }?>
			<?php }
}
?>


			<?php if ($_smarty_tpl->getValue('data')['currentPage'] < $_smarty_tpl->getValue('data')['totalPages']) {?>
				<li>
					<a href="?page=<?php echo $_smarty_tpl->getValue('data')['currentPage']+1;?>
">Вперед &raquo;</a>
				</li>
			<?php } else { ?>
				<li class="disabled"><span>Вперед &raquo;</span></li>
			<?php }?>

		</ul>
	</div>

<?php
}
}
/* {/block "content"} */
}
