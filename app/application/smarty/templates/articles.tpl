{extends file="index.tpl"}

{block name="content"}
	<div class="category" style="margin-top: 80px !important;">
		<div class="category-name">
				<span style="color: dodgerblue;font-weight: bold !important;">
					Все статьи
				</span>
		</div>

		<div id="articles-sort-by-views" class="articles-sort-by">
			<a href="/news/articles/1?sort_views={!$data.sortViews}&sort_date={$data.sortDate}">
				sort by Views
			</a>
		</div>
		<div id="articles-sort-by-date" class="articles-sort-by">
			<a href="/news/articles/1?sort_date={!$data.sortDate}&sort_views={$data.sortViews}">
				sort by Date
			</a>
		</div>
	</div>

	<div class="articles-grid" style="margin-top: 20px;">
		{foreach $data.articles as $article}
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
					{$article.description}
				</div>

				<div class="article-tags" style="margin-top: 15px !important;max-width: 250px;">
					{foreach $article.categories as $cat}
						<span class="label">{$cat.name}</span>
					{/foreach}
				</div>

			</div>
		{/foreach}
	</div>

	<div class="pagination-container content">
		<ul class="pagination">

			{if $data.currentPage > 1}
				<li>
					<a href="?page={$data.currentPage - 1}">&laquo; Назад</a>
				</li>
			{else}
				<li class="disabled"><span>&laquo; Назад</span></li>
			{/if}

			{for $p=1 to $data.totalPages}
				{if $p == $data.currentPage}
					<li class="active li-margin"><span>{$p}</span></li>
				{else}
					{if $p == 1 || $p == $data.totalPages || ($p >= $data.currentPage - 2 && $p <= $data.currentPage + 2)}
						<li class="li-margin">
							<a href="?page={$p}">{$p}</a>
						</li>
					{elseif $p == $data.currentPage - 3 || $p == $data.currentPage + 3}
						<li class="dots li-margin"><span>...</span></li>
					{/if}
				{/if}
			{/for}

			{if $data.currentPage < $data.totalPages}
				<li>
					<a href="?page={$data.currentPage + 1}">Вперед &raquo;</a>
				</li>
			{else}
				<li class="disabled"><span>Вперед &raquo;</span></li>
			{/if}

		</ul>
	</div>

{/block}
