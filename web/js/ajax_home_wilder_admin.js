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
                    var wilders = JSON.parse(response.data);
                    html = "";
                    for (wilder in wilders) {

                        html += '<li><span class="firstname">' + wilder.firstname + '<span>' + ' ' + '<span class="lastname">' + wilder.lastname + '</span></li>';

                    }
                    $('#wilderList').html(html);
                    $('#wilderList .lastname').on('click', function () {
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

