
/*$('#convert').on('click', function() {
    $.ajax({
        type: 'POST',
        dataType: 'text',
        url: 'index.php',
        data:"param="+JSON.stringify(ob)
            success: function(html){
                $(html).prependTo('#result');
            }
    });
});*/


$( "#show" ).click(function() {
    $(this).hide();
        $( "#hide" ).show();
});

$( "#hide" ).click(function() {
    $(this).hide();
        $( "#show" ).show();
});