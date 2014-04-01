
$(document).ready(function() {
    $('.digit-format').on('keyup', function() {
        var x = $(this).val();
        $(this).val(x.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });
});

function countChar(val) {
    var len = val.value.length;
    if (len >= 1000) {
        val.value = val.value.substring(0, 500);
    } else {
        $('.char-count').text(1000 - len + ' characters left');
    }
};




