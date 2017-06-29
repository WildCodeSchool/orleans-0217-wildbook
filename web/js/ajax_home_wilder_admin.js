$( document ).ready(function() {
    $("#bookbundle_homewilder_wilder").keyup(function(){
        var input = $(this).val();
        if ( input.length >= 2 ) {
            $.ajax({
                type: "POST",
                url: "/wilder/accueil/ajax/" + input,
                dataType: 'json',
                // timeout: 3000,
                success: function(response) {
                    var wilder = JSON.parse(response.data);
                    html = "";
                    for (i = 0; i < wilder.length; i++) {
                        html += "<li>" + wilder[i].lastname + "</li>"
                    }
                    $('#wilderList').html(html);
                    $('#wilderList li').on('click', function () {
                        $('#bookbundle_homewilder_wilder').val($(this).text());
                        $('#wilderList').html('');
                    });
                },
                error: function() {
                    $('#wilderList').text('Ajax call error');
                }
            })
        } else {
            $('#wilderList').html('');
        }
    });
});

