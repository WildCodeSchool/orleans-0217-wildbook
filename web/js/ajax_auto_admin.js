/**
 * Created by biovor on 27/06/17.
 */
$( document ).ready(function() {
    $("#book_bundle_wilder_search_type_Recherche").keyup(function(){
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

                        html +=  "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" style='width: 300px; height:" +
                            " 300px'> <a" +
                            " href=\"/profile_wilder/"+ wilders[i].id +
                            "\" class=\"thumbnail\">" +
                            "<img src=\"../uploads/" + wilders[i].profilPicture + "\" alt=\"\">"+
                            "<h4>" + wilders[i].lastname + " " + wilders[i].firstname + "</h4></a></div>"
                    }
                    $('#wild-list').html(html);
                },
                error: function() {
                    $('#wild-list').text('Ajax call error');
                }
            });
        } else {
            $('#wild-list').html('');
        }
    });
});
