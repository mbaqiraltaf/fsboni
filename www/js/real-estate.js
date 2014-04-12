
$(document).ready(function() {
    //var mainDiv = $('.main-edit-div').clone();
    $('.digit-format').on('keyup', function() {
        var x = $(this).val();
        $(this).val(x.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });

    $('.ui-state-default').click(function(e) {
        e.preventDefault();
        var href = $(this).children('a').attr('href');
        var mainEditDiv = $('.main-edit-div');
        mainEditDiv.find('.ui-widget-content:visible').hide();
        mainEditDiv.find(href).show().removeClass('ui-tabs-hide');
    })
});

function countChar(val) {
    var len = val.value.length;
    if (len >= 1000) {
        val.value = val.value.substring(0, 500);
    } else {
        $('.char-count').text(1000 - len + ' characters left');
    }
}
;







