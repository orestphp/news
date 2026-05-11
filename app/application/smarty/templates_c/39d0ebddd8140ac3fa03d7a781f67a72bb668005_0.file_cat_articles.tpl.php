<?php
/* Smarty version 5.8.0, created on 2026-05-11 15:45:18
  from 'file:cat_articles.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a01f98e51d892_40533350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d0ebddd8140ac3fa03d7a781f67a72bb668005' => 
    array (
      0 => 'cat_articles.tpl',
      1 => 1778514317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a01f98e51d892_40533350 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7793042116a01f98e48a251_86505748', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "index.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_7793042116a01f98e48a251_86505748 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>


	<div class="categories-grid" >

		<div class="category">
			<div class="category-name">
				<span style="color: dodgerblue;font-weight: bold !important;"><?php echo $_smarty_tpl->getValue('data')['categoryArticles'][0]['category_name'];?>
</span>
			</div>
		</div>

		<div class="articles-grid">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['categoryArticles'], 'article');
$_smarty_tpl->getVariable('article')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('article')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('article');
?>
				<div class="article">

					<img src="/images/articles/<?php echo $_smarty_tpl->getValue('article')['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('article')['name'];?>
">

					<h4><?php echo $_smarty_tpl->getValue('article')['name'];?>
</h4>

					<div class="article-date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('article')['created_at']);?>
</div>

					<div class="article-description">
						<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('article')['content_text'],150,"...",true);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

					</div>

					<div class="article-open">
						<a href="/news/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
">Подробнее ...</a>
					</div>

					<?php if ($_smarty_tpl->getVariable('article')->iteration%3 == 0) {?>
						<div style="display:block;clear: both;"></div>
					<?php }?>
				</div>
			<?php
$_smarty_tpl->setVariable('article', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</div>
	</div>

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
