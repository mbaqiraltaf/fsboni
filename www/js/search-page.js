$(document).ready(function() {

    $('.show-quick').click(function() {
        $('.search_results').hide();
        $(this).addClass('TabbedPanelsTabSelected');
        $('.show-advanced').removeClass('TabbedPanelsTabSelected');
        $('.second_row, .last_row').hide();
        $('.normal-search-button').show();
    });

    $('.show-advanced').click(function() {
        $('.search_results').hide();
        $(this).addClass('TabbedPanelsTabSelected');
        $('.show-quick').removeClass('TabbedPanelsTabSelected');        
        $('.second_row, .last_row').show();
        $('.normal-search-button').hide();
    });

//    $('.search-button').live('click', function() {
//        if (!($('.specific-div').length > 0))
//            $('.search_results').show();
//    });
});

