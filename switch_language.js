$('[lang="fr"]').hide();
$('[lang="es"]').hide();
$('[lang="jp"]').hide();

$('#switch-lang').change(function() {
    var lang = $(this).val; // decide which language to display using switch case. The rest is obvious (i think)
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
