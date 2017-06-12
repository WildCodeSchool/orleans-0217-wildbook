/**
 * Created by biovor on 12/06/17.
 */
$( document ).ready(function() {
    $("#form_input").keyup(function(){
        var wilder = $(this).val();
        if ( wilder.length >= 3 ) {
            $.ajax({
                type: "POST",
                url: "ajax/" + wilder,
                dataType: 'json',
                // timeout: 3000,
                success: function(response){
                    var wilders = JSON.parse(response.data);
                    html = "";
                    for (i = 0; i < wilders.length; i++) {
                        html += "<li>" + wilders[i].firsname + "</li>";
                    }
                    $('#autocomplete').html(html);
                    $('#autocomplete li').on('click', function() {
                        $('#form_input').val($(this).text());
                        $('#autocomplete').html('');
                    });
                },
                error: function() {
                    $('#autocomplete').text('Ajax call error');
                }
            });
        } else {
            $('#autocomplete').html('');
        }
    });
});