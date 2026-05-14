$(function() {
    // GET params
    const urlParams = new URLSearchParams(window.location.search);
    const sortViews = urlParams.get('sort_views');
    const sortDate = urlParams.get('sort_date');

    // Sort links
    if(sortViews==='1') {
        $('#articles-sort-by-views a').css('text-decoration', 'underline');
    } else {
        $('#articles-sort-by-views a').css('text-decoration', 'none');
    }
    if(sortDate==='1') {
        $('#articles-sort-by-date a').css('text-decoration', 'underline');
    } else {
        $('#articles-sort-by-date a').css('text-decoration', 'none');
    }

    // URL path
    const arrayURIPath = window.location.pathname.split('/').filter(Boolean);

    const controller = (0 in arrayURIPath) ? arrayURIPath[0] : '';
    const action = (1 in arrayURIPath) ? arrayURIPath[1] : '';
    if(controller === 'news' && action === 'articles') {
        // Top ".menu_1"
        $('.menu_1  span.articles').css('background', '#139EFF');
        $('.menu_1  span.articles a').css('background', '#139EFF');
        $('.menu_1  span.home').css('background', '#99DE00');
        $('.menu_1  span.home a').css('background', '#99DE00');
    } else if(controller === 'main' && action === 'task') {
        // Top ".menu_1"
        $('.menu_1  span.task').css('background', '#139EFF');
        $('.menu_1  span.task a').css('background', '#139EFF');
        $('.menu_1  span.home').css('background', '#99DE00');
        $('.menu_1  span.home a').css('background', '#99DE00');
    }

});