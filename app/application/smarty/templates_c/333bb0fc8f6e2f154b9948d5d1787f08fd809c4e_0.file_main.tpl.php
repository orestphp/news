<?php
/* Smarty version 5.8.0, created on 2026-05-12 11:47:58
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a03136e099cf9_62180882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333bb0fc8f6e2f154b9948d5d1787f08fd809c4e' => 
    array (
      0 => 'main.tpl',
      1 => 1778586476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a03136e099cf9_62180882 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20706583056a03136e08ef37_90236208', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "index.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_20706583056a03136e08ef37_90236208 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>

	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['categoriesAndArticles'], 'category', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
		<div class="categories-grid" >

			<div class="category">
				<div class="category-name">
					<span><?php echo $_smarty_tpl->getValue('category')['name'];?>
</span>
				</div>
				<div class="articles-sort-by">
					<a class="articles-cat-all" href="/news/category-articles/<?php echo $_smarty_tpl->getValue('category')['id'];?>
">View all</a>
				</div>
			</div>

			<div class="articles-grid">
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')['articles'], 'article');
$_smarty_tpl->getVariable('article')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('article')->iteration++;
$foreach1Backup = clone $_smarty_tpl->getVariable('article');
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

						<div class="article-date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('article')['created_at']);?>
</div>

						<div class="article-description">
							<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('article')['content_text'],150," ...",true);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

						</div>

						<div class="article-open">
							<a href="/news/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
">Подробнее ...</a>
						</div>

						<?php if ($_smarty_tpl->getVariable('article')->iteration%3 == 0) {?>
							<?php break 1;?>
						<?php }?>
					</div>
				<?php
$_smarty_tpl->setVariable('article', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block "content"} */
}
