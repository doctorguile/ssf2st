var selectedImage; 

function insertImageP1(src) { 
    if (window.parent && window.parent.frames) { 
        window.parent.frames[1].insertImageP1(src); 
    }  
}  

function insertImageP2(src) { 
    if (window.parent && window.parent.frames) { 
        window.parent.frames[1].insertImageP2(src); 
    } 
} 

function add1p() { 
    insertImageP1(selectedImage); 
}

function add2p() { 
    insertImageP2(selectedImage); 
} 

function onMouseoverEvt(evt) {
selectedImage = this.src;
var imgid = this.id;
$('#addimagemenu').show();
$('#addimagemenu').position({
    my: "center",
    at: "center",
    of: "#" + imgid
}).show();
}

function getParameterByName(name, url) {
if (!url) {
    url = window.location.href;
}
name = name.replace(/[\[\]]/g, "\$&");
var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
if (!results) return null;
if (!results[2]) return '';
return decodeURIComponent(results[2].replace(/\+/g, " "));
}

$(function() {
    $('.movesetimg').mouseover(onMouseoverEvt);
});

var index = window.location.href.indexOf('?');
if(index != -1){
    var querystring = window.location.href.slice(index + 1)       
            $('a[class="fixquery"]').each(function() {
                var $this = $(this);       
                var href = $this.attr("href");
                href += (href.indexOf('?') != -1) ? '&' : '?';
                href += querystring;
                $this.attr("href", href);
            });
    }