
$(document).ready(function() {
    var mainDiv = $('.main-edit-div').clone();
    $('.digit-format').on('keyup', function() {
        var x = $(this).val();
        $(this).val(x.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });
    
    $('.ui-state-default').click(function(e){
        e.preventDefault();
        //$(this).addClass('TabbedPanelsTabSelected');
        var href = $(this).children('a').attr('href');
        var div = mainDiv.find(href).clone();
        $('.main-edit-div').html(div);
        div.removeClass('ui-tabs-hide');        
    })
});

function countChar(val) {
    var len = val.value.length;
    if (len >= 1000) {
        val.value = val.value.substring(0, 500);
    } else {
        $('.char-count').text(1000 - len + ' characters left');
    }
};







