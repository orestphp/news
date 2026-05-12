{extends file="index.tpl"}

{block name="content"}

	<div class="article-layout">

		<div class="article-container1">
			<div class="article-tags">
				<strong>Теги: </strong>
				{foreach $data.articleTags as $category}
					<span class="article-tags">
						&nbsp; <a href="/news/category-articles/{$category.id}">{$category.name}</a> &nbsp;|
					</span>
				{/foreach}
			</div>
			<img src="/images/articles/{$data.article.image}" alt="{$data.article.name}" width="450">
		</div>

		<div class="article-container2">
			<h2 style="color:#139EFF">{$data.article.name}</h2>

			<div class="article-date">{$data.article.created_at|date_format}</div>

			<div class="article-header">
				{$data.article.description}
			</div>

			<div class="article-description">
				{$data.article.content_text}
			</div>
		</div>

		<div class="article-container3">
			<div class="articles-grid" style="padding-left: 0px !important;">
				{foreach $data.categoryArticles as $article}
					<div class="article" style="margin-left: 40px !important;">

						<img src="/images/articles/{$article.image}" alt="{$article.name}">

						<h4>{$article.name}</h4>

						<div class="article-date">{$article.created_at|date_format}</div>

						<div class="article-description">
							{{$article.content_text|truncate:150:" ...":true}}
						</div>

						<div class="article-open">
							<a href="/news/article/{$article.id}">Подробнее ...</a>
						</div>

						{if $article@iteration % 3 == 0}
							{break}
						{/if}
					</div>
				{/foreach}
			</div>
		</div>

	</div>

{/block}
