<?php
/* Smarty version 5.8.0, created on 2026-05-12 13:38:28
  from 'file:article.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a032d54a88a96_07803243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0b7f80052af77ea5ef6c50197de1ea3d492a15' => 
    array (
      0 => 'article.tpl',
      1 => 1778593106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a032d54a88a96_07803243 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3602622346a032d54a42618_27116459', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "index.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_3602622346a032d54a42618_27116459 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/news/app/application/smarty/templates';
?>


	<div class="article-layout">

		<div class="article-container1">
			<div class="article-tags">
				<strong>Теги: </strong>
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['articleTags'], 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
					<span class="article-tags">
						&nbsp; <a href="/news/category-articles/<?php echo $_smarty_tpl->getValue('category')['id'];?>
"><?php echo $_smarty_tpl->getValue('category')['name'];?>
</a> &nbsp;|
					</span>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</div>
			<img src="/images/articles/<?php echo $_smarty_tpl->getValue('data')['article']['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('data')['article']['name'];?>
" width="450">
		</div>

		<div class="article-container2">
			<h2 style="color:#139EFF"><?php echo $_smarty_tpl->getValue('data')['article']['name'];?>
</h2>

			<div class="article-date">
				<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('data')['article']['created_at']);?>


				<div class="article-views-count-num">
					<?php echo $_smarty_tpl->getValue('data')['article']['views_count'];?>

				</div>
				<div class="article-views-count-img"></div>
			</div>

			<div class="article-header">
				<?php echo $_smarty_tpl->getValue('data')['article']['description'];?>

			</div>

			<div class="article-description">
				<?php echo $_smarty_tpl->getValue('data')['article']['content_text'];?>

			</div>
		</div>

		<div class="article-container3">
			<div class="articles-grid" style="padding-left: 0 !important;">
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['categoryArticles'], 'article');
$_smarty_tpl->getVariable('article')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('article')->iteration++;
$foreach1Backup = clone $_smarty_tpl->getVariable('article');
?>
					<div class="article" style="margin-left: 40px !important;">

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

	</div>

<?php
}
}
/* {/block "content"} */
}
