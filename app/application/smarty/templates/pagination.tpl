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