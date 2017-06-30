/**
 * Created by biovor on 27/06/17.
 */
$( document ).ready(function() {
    $("#book_bundle_wilder_search_type_Recherche").keyup(function(){
        var input = $(this).val();
        if ( input.length >= 2 ) {
            $.ajax({
                type: "POST",
                url: "/wilder/ajax/" + input,
                dataType: 'json',
                // timeout: 3000,
                success: function(response){
                    var wilders = JSON.parse(response.data);
                    html = "";
                    for (i = 0; i < wilders.length; i++) {

                        html +=  "<tr>" +
                            "<td><a href=\"/wilder/"+ wilders[i].id +"\"> <img src=\"../uploads/" + wilders[i].profilPicture +
                            "\" width='150px'> </a></td>"+
                            "<td>" + wilders[i].firstname + "</td>"+
                            "<td>" + wilders[i].lastname + "</td>"+
                            "<td>" + wilders[i].city + "</td>"+
                            "<td>" + wilders[i].promotion + "</td>"+
                            "<td>";

                        if (wilders[i].userActivation == true){
                            html +=  'Oui';
                        } else{
                            html += 'Non';
                        }
                        html += "</td><td>";

                        if (wilders[i].managerActivation == true){
                            html += 'Oui';
                        }else{
                            html += 'Non';
                        }
                        html += "</td><td>"+
                            "<a href=\"/wilder/"+ wilders[i].id +"/edit\" class='btn btn-success'> <span" +
                            " class='glyphicon glyphicon-pencil'></span> Modifier </a> " +
                            "<a href=\"/wilder_delete/"+ wilders[i].id +"\" class='btn btn-default'> " +
                            "<span class='glyphicon glyphicon-trash'></span> Delete </a> </td>"+
                            "</tr>"
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
