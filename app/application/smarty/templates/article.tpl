{extends file="index.tpl"}

{block name="content"}

	<div class="article-container">

		<div class="article-tags">
			<strong>Теги: </strong>
			{foreach $data.articleTags as $category}
				<span class="article-tags">
					<a href="/news/category-articles/{$category.id}">{$category.name}</a> &nbsp;|
				</span>
			{/foreach}
		</div>

		<img src="/images/articles/{$data.article.image}" alt="{$data.article.name}" width="500">

		<h2 style="color:#139EFF">{$data.article.name}</h2>

		<div class="article-date">{$data.article.created_at|date_format}</div>

		<div class="article-description" style="font-weight: bold;margin-top: 15px;margin-bottom: 15px;">
			{$data.article.description}
		</div>

		<div class="article-description">
			{$data.article.content_text}
		</div>

	</div>

{/block}
