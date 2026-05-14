<?php
/* Smarty version 5.8.0, created on 2026-05-14 11:16:27
  from 'file:articles.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a05af0b80eb94_14519474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5738cb38d3e854714509d76c9b0353c98ff7f3af' => 
    array (
      0 => 'articles.tpl',
      1 => 1778757384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
))) {
function content_6a05af0b80eb94_14519474 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7146514896a05af0b7ef750_75349153', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "index.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_7146514896a05af0b7ef750_75349153 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

	<div class="category" style="margin-top: 80px !important;">
		<div class="category-name">
				<span style="color: dodgerblue;font-weight: bold !important;">
					Все статьи
				</span>
		</div>

		<div id="articles-sort-by-views" class="articles-sort-by">
			<a href="/news/articles?page=<?php echo $_smarty_tpl->getValue('data')['currentPage'];?>
&sort_views=<?php echo !$_smarty_tpl->getValue('data')['sortViews'];?>
&sort_date=<?php echo $_smarty_tpl->getValue('data')['sortDate'];?>
">
				sort by Views
			</a>
		</div>
		<div id="articles-sort-by-date" class="articles-sort-by">
			<a href="/news/articles?page=<?php echo $_smarty_tpl->getValue('data')['currentPage'];?>
&sort_date=<?php echo !$_smarty_tpl->getValue('data')['sortDate'];?>
&sort_views=<?php echo $_smarty_tpl->getValue('data')['sortViews'];?>
">
				sort by Date
			</a>
		</div>
	</div>

	<div class="articles-grid" style="margin-top: 20px;">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['articles'], 'article');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach0DoElse = false;
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
					<?php echo $_smarty_tpl->getValue('article')['description'];?>

				</div>

				<div class="article-tags" style="margin-top: 15px !important;max-width: 250px;">
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
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</div>

	<?php $_smarty_tpl->renderSubTemplate("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
/* {/block "content"} */
}
