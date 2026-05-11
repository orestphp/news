{extends file="index.tpl"}

{block name="content"}
	{foreach $data.categories as $key =>$category}
		<div class="categories-grid" >

			<div class="category">
				<div class="category-name">
					<span>{$category.name}</span>
					<div>
						<a href="#">View all</a>
					</div>
				</div>
			</div>

			<div class="articles-grid">
				{foreach $category.articles as $article}
					<div class="article">

						<img src="/images/articles/{$article.image}" alt="{$article.name}">

						<h4>{$article.name}</h4>

						<div class="article-description">
							{$article.description}
						</div>

						{if $article@iteration % 3 == 0}
							<div style="display:block;clear: both;"></div>
						{/if}
					</div>
				{/foreach}
			</div>
		</div>
	{/foreach}

{/block}
