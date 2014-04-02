
$(document).ready(function() {
    $('.digit-format').on('keyup', function() {
        var x = $(this).val();
        $(this).val(x.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });
    
    $('.ui-state-default').click(function(){
        $(this).addClass('TabbedPanelsTabSelected');
        var href = $(this).children('a').attr('href');
        console.log(href);
        var div = $(href).clone();
        console.log(div);
        
        $('.main-edit-div').html(div);
        div.css('display', 'block !important');
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







