$(document).ready(function() {

    $('.show-quick').click(function() {
        $('.search_results').hide();
        $(this).addClass('TabbedPanelsTabSelected');
        $('.show-advanced').removeClass('TabbedPanelsTabSelected');
        $('.second_row, .last_row, .third_row').hide();
        $('.normal-search-button').show();
    });

    $('.show-advanced').click(function() {
        $('.search_results').hide();
        $(this).addClass('TabbedPanelsTabSelected');
        $('.show-quick').removeClass('TabbedPanelsTabSelected');        
        $('.second_row, .last_row, .third_row').show();
        $('.normal-search-button').hide();
    });
});

