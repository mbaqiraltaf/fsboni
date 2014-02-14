$(document).ready(function () {
    $("#autostart").fancybox({
        'width': '70%',
        'height': '54%',
        'autoScale': true,
        'titlePosition': 'over',
        'type': 'iframe'
    });
}); // document ready

var query = location.search.substring(1);
if (query != "") {
    var pos = query.indexOf('=');
    var argname = query.substring(pos + 1, query.length);
    if (argname == "yes") {
        window.onload = function(){$('#autostart').trigger('click');};
    }
}


$(document).ready(function () {
    $(".buy2").fancybox({
        'width': '70%',
        'height': '45%',
        'autoScale': true,
        'titlePosition': 'over',
        'type': 'iframe'
    });
    $(".sell2").fancybox({
        'width': '70%',
        'height': '45%',
        'autoScale': true,
        'titlePosition': 'over',
        'type': 'iframe'
    });

});


function objWidth(obj) { if (obj.offsetWidth) return obj.offsetWidth; if (obj.clip) return obj.clip.width; return 0; } var mqr = []; function mq(id) { this.mqo = document.getElementById(id); var wid = objWidth(this.mqo.getElementsByTagName('span')[0]) + 200; var fulwid = objWidth(this.mqo); var txt = this.mqo.getElementsByTagName('span')[0].innerHTML; this.mqo.innerHTML = ''; var heit = this.mqo.style.height; this.mqo.onmouseout = function () { mqRotate(mqr); }; this.mqo.onmouseover = function () { clearTimeout(mqr[0].TO); }; this.mqo.ary = []; var maxw = Math.ceil(fulwid / wid) + 1; for (var i = 0; i < maxw; i++) { this.mqo.ary[i] = document.createElement('div'); this.mqo.ary[i].innerHTML = txt; this.mqo.ary[i].style.position = 'absolute'; this.mqo.ary[i].style.left = (wid * i) + 'px'; this.mqo.ary[i].style.width = wid + 'px'; this.mqo.ary[i].style.height = heit; this.mqo.appendChild(this.mqo.ary[i]); } mqr.push(this.mqo); } function mqRotate(mqr) { if (!mqr) return; for (var j = mqr.length - 1; j > -1; j--) { maxa = mqr[j].ary.length; for (var i = 0; i < maxa; i++) { var x = mqr[j].ary[i].style; x.left = (parseInt(x.left, 10) - 1) + 'px'; } var y = mqr[j].ary[0].style; if (parseInt(y.left, 10) + parseInt(y.width, 10) < 0) { var z = mqr[j].ary.shift(); z.style.left = (parseInt(z.style.left) + parseInt(z.style.width) * maxa) + 'px'; mqr[j].ary.push(z); } } mqr[0].TO = setTimeout('mqRotate(mqr)', 10); }
function start() {
    new mq('m1');
    mqRotate(mqr);
}
window.onload = start;

$(document).ready(function(){

    $('#slider1').bxSlider({
        displaySlideQty: 10,
        moveSlideQty: 1,
        auto: true
    });

    $("#guess").fancybox({
        'titlePosition'		: 'inside',
        'transitionIn'		: 'none',
        'transitionOut'		: 'none'
    });

    $("#login").fancybox({
        'titlePosition'		: 'inside',
        'transitionIn'		: 'none',
        'transitionOut'		: 'none'
    });



    $("#various_ans").fancybox({
        'width'				: '63%',
        'height'			: '88.6%',
        'autoScale'			:  true,
        'transitionIn'		: 'elastic',
        'transitionOut'		: 'elastic',
        'titlePosition'	    : 'over',
        'type'				: 'iframe'
    });



    $("#various_login").fancybox({
        'width'				: '70%',
        'height'			: '45%',
        'autoScale'			:  true,
        'titlePosition'	    : 'over',
        'type'				: 'iframe'
    });

    for(i=0;i<3;i++)
        $("#nav"+i).fancybox({
            'width'				: '70%',
            'height'			: '54%',
            'autoScale'			:  true,
            'titlePosition'	    : 'over',
            'type'				: 'iframe'
        });

});

