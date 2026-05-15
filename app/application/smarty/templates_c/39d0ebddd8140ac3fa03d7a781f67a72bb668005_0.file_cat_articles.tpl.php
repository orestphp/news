<?php
/* Smarty version 5.8.0, created on 2026-05-14 11:46:20
  from 'file:cat_articles.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a05b60c705014_74130227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d0ebddd8140ac3fa03d7a781f67a72bb668005' => 
    array (
      0 => 'cat_articles.tpl',
      1 => 1778757473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_6a05b60c705014_74130227 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6654163526a05b60c6f0fb7_42700011', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "index.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_6654163526a05b60c6f0fb7_42700011 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>


	<div class="categories-grid" >
		<div class="category">
			<div class="category-name">
				<span style="color: dodgerblue;font-weight: bold !important;">
					<?php echo $_smarty_tpl->getValue('data')['categoryArticles'][0]['category_name'];?>

				</span>
			</div>

			<div id="articles-sort-by-views" class="articles-sort-by">
				<a href="/news/category-articles?page=<?php echo $_smarty_tpl->getValue('data')['currentPage'];?>
&sort_views=<?php echo !$_smarty_tpl->getValue('data')['sortViews'];?>
&sort_date=<?php echo $_smarty_tpl->getValue('data')['sortDate'];?>
">
					sort by Views
				</a>
			</div>
			<div id="articles-sort-by-date" class="articles-sort-by">
				<a href="/news/category-articles?page=<?php echo $_smarty_tpl->getValue('data')['currentPage'];?>
&sort_date=<?php echo !$_smarty_tpl->getValue('data')['sortDate'];?>
&sort_views=<?php echo $_smarty_tpl->getValue('data')['sortViews'];?>
">
					sort by Date
				</a>
			</div>
		</div>

		<div class="category-description">
			<?php echo $_smarty_tpl->getValue('data')['categoryArticles'][0]['category_description'];?>

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
					<a href="/news/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
">
						<img src="/images/articles/<?php echo $_smarty_tpl->getValue('article')['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('article')['name'];?>
">
					</a>

					<h4><?php echo $_smarty_tpl->getValue('article')['name'];?>
</h4>

					<div class="article-date">
						<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('article')['created_at']);?>


						<div class="article-views-count-num">
							<?php echo $_smarty_tpl->getValue('article')['views_count'];?>

						</div>
						<div class="article-views-count-img"></div>
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

	<?php $_smarty_tpl->renderSubTemplate("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
/* {/block "content"} */
}
