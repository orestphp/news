{extends file="index.tpl"}

{block name="content"}
	{foreach $data.categoriesAndArticles as $key =>$category}
		<div class="categories-grid" >

			<div class="category">
				<div class="category-name">
					<span>{$category.name}</span>
				</div>
				<div class="articles-sort-by">
					<a class="articles-cat-all" href="/news/category-articles/{$category.id}">View all</a>
				</div>
			</div>

			<div class="articles-grid">
				{foreach $category.articles as $article}
					<div class="article">

						<a href="/news/article/{$article.id}">
							<img src="/images/articles/{$article.image}" alt="{$article.name}">
						</a>

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
	{/foreach}

{/block}
