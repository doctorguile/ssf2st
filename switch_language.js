$('[lang="fr"]').hide();
$('[lang="es"]').hide();
$('[lang="jp"]').hide();

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

var url = window.location.href;
console.log(url);

var qlang = getUrlParameter('lang');
switch (qlang) {
case 'en':
    $('.option-bar option[value=en]').attr('selected', 'selected');
    $('[lang]').hide();
    $('[lang="en"]').show();
    break;
case 'fr':
    $('.option-bar option[value=fr]').attr('selected', 'selected');
    $('[lang]').hide();
    $('[lang="fr"]').show();
    break;
case 'es':
    $('.option-bar option[value=es]').attr('selected', 'selected');
    $('[lang]').hide();
    $('[lang="es"]').show();
    break;
case 'jp':
    $('.option-bar option[value=jp]').attr('selected', 'selected');
    $('[lang]').hide();
    $('[lang="jp"]').show();
    break;
default:
    $('.option-bar option[value=en]').attr('selected', 'selected');
    $('[lang]').hide();
    $('[lang="en"]').show();
}

$('#switch-lang').change(function() {
    var lang = $(this).val(); // decide which language to display using switch case. The rest is obvious (i think)
    switch (lang) {
    case 'en':
        $('[lang]').hide();
        $('[lang="en"]').show();
        break;
    case 'fr':
        $('[lang]').hide();
        $('[lang="fr"]').show();
        break;
    case 'es':
        $('[lang]').hide();
        $('[lang="es"]').show();
        break;
    case 'jp':
        $('[lang]').hide();
        $('[lang="jp"]').show();
        break;
    default:
        $('[lang]').hide();
        $('[lang="en"]').show();
    }
});

