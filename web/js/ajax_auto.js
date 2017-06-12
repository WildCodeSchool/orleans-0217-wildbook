/**
 * Created by biovor on 12/06/17.
 */
$( document ).ready(function() {
    $("#form_input").keyup(function(){
        var input = $(this).val();
        if ( input.length >= 2 ) {
            $.ajax({
                type: "POST",
                url: "/search_wilder/ajax/" + input,
                dataType: 'json',
                // timeout: 3000,
                success: function(response){
                    var wilders = JSON.parse(response.data);
                    html = "";
                    for (i = 0; i < wilders.length; i++) {
                        html += "<li>" + wilders[i].firstname + " " + wilders[i].lastname + "</li>";
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