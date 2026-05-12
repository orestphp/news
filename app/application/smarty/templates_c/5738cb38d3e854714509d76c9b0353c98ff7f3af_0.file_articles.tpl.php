<?php
/* Smarty version 5.8.0, created on 2026-05-12 15:56:22
  from 'file:articles.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a034da65d01a4_38374423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5738cb38d3e854714509d76c9b0353c98ff7f3af' => 
    array (
      0 => 'articles.tpl',
      1 => 1778601377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a034da65d01a4_38374423 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9499686656a034da65a6810_34766577', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "index.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_9499686656a034da65a6810_34766577 extends \Smarty\Runtime\Block
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
			<a href="/news/articles/1?sort_views=<?php echo !$_smarty_tpl->getValue('data')['sortViews'];?>
&sort_date=<?php echo $_smarty_tpl->getValue('data')['sortDate'];?>
">
				sort by Views
			</a>
		</div>
		<div id="articles-sort-by-date" class="articles-sort-by">
			<a href="/news/articles/1?sort_date=<?php echo !$_smarty_tpl->getValue('data')['sortDate'];?>
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

	<?php echo '<script'; ?>
>
		$(function() {
			const urlParams = new URLSearchParams(window.location.search);
			const sortViews = parseInt(urlParams.get('sort_views')) || 0;
			const sortDate = parseInt(urlParams.get('sort_date')) || 0;
			console.log(sortViews, sortDate);
			// Sorted sign
			if(sortViews===1) {
				$('#articles-sort-by-views a').css('text-decoration', 'underline');
			} else {
				$('#articles-sort-by-views a').css('text-decoration', 'none');
			}
			if(sortDate===1) {
				$('#articles-sort-by-date a').css('text-decoration', 'underline');
			} else {
				$('#articles-sort-by-date a').css('text-decoration', 'none');
			}
		});
	<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
