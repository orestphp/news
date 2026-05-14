{extends file="index.tpl"}

{block name="content"}

	<div class="categories-grid" >
		<div class="category">
			<div class="category-name">
				<span style="color: dodgerblue;font-weight: bold !important;">
					{$data.categoryArticles[0].category_name}
				</span>
			</div>

			<div id="articles-sort-by-views" class="articles-sort-by">
				<a href="/news/category-articles?page={$data.currentPage}&sort_views={!$data.sortViews}&sort_date={$data.sortDate}">
					sort by Views
				</a>
			</div>
			<div id="articles-sort-by-date" class="articles-sort-by">
				<a href="/news/category-articles?page={$data.currentPage}&sort_date={!$data.sortDate}&sort_views={$data.sortViews}">
					sort by Date
				</a>
			</div>
		</div>

		<div class="category-description">
			{$data.categoryArticles[0].category_description}
		</div>

		<div class="articles-grid">
			{foreach $data.categoryArticles as $article}
				<div class="article">
					<a href="/news/article/{$article.id}">
						<img src="/images/articles/{$article.image}" alt="{$article.name}">
					</a>

					<h4>{$article.name}</h4>

					<div class="article-date">
						{$article.created_at|date_format}

						<div class="article-views-count-num">
							{$article.views_count}
						</div>
						<div class="article-views-count-img"></div>
					</div>

					<div class="article-description">
						{{$article.content_text|truncate:150:"...":true}}
					</div>

					<div class="article-open">
						<a href="/news/article/{$article.id}">Подробнее ...</a>
					</div>

					{if $article@iteration % 3 == 0}
						<div style="display:block;clear: both;"></div>
					{/if}
				</div>
			{/foreach}
		</div>
	</div>

	{include file="pagination.tpl"}
{/block}
