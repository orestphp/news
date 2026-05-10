{extends file="index.tpl"}

{block name="content"}
	{$i = 0}
	{foreach $data.articles as $article}
		<div class="article">
			<img src="/images/articles/{$article.image}" alt="{$article.name}">
			<h4>{$article.name}</h4>
			<div class="category-desc">
				{$article.description}
			</div>
			<div class="categories">
				{foreach $article.categories as $cat}
					<span class="label">{$cat.name}</span>
				{/foreach}
			</div>
		</div>
		{$i = $i + 1}
		{if $i % 3 == 0}
			{* Tree in a row *}
			<div style="display:block;clear: both;"></div>
		{/if}
	{/foreach}

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
{*					 Show first, last and next by, from current page*}
					{if $p == 1 || $p == $data.totalPages || ($p >= $data.currentPage - 2 && $p <= $data.currentPage + 2)}
						<li class="li-margin">
							<a href="?page={$p}">{$p}</a>
						</li>
					{elseif $p == $data.currentPage - 3 || $p == $data.currentPage + 3}
						<li class="dots li-margin"><span>...</span></li>
					{/if}
				{/if}
			{/for}


{*			 Forward button*}
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
