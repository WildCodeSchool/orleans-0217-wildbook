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

                        html +=  "<tr>" +
                            "<td><a href=\"{{ path('wilder_show', { 'id': wilder.id }) }}\">{{ wilder.id" +
                            " }}</a></td>"+
                            "<td>" + wilders[i].lastname + "</td>"+
                            "<td>" + wilders[i].firstname + "</td>"+
                            "<td>{% if wilder.birthDate %}{{ wilder.birthDate|date('Y-m-d') }}{% endif %}</td>"+
                            "<td>" + wilders[i].address + "</td>"+
                            "<td>" + wilders[i].postalCode + "</td>"+
                            "<td>" + wilders[i].city + "</td>"+
                            "<td>" + wilders[i].modjo + "</td>"+
                            "<td></td>"+
                            "<td>{{ wilder.contactEmail }}</td>"+
                            "<td><img src=\"{{ asset('uploads/'~ wilder.profilPicture|basename ) }} \"alt=\"{{" +
                            " wilder.firstname }} {{ wilder.lastname }}\" width='150px'></td>"+
                            "<td><ul>{% for language in wilder.languages %} <li>  {{ language.language }}</li> {% endfor" +
                            " %} </ul> </td>"+
                            "<td>{% if wilder.userActivation %}Yes{% else %}No{% endif %}</td>"+
                            "<td>{% if wilder.managerActivation %}Yendifes{% else %}No{%  %}</td>"+
                            "<td>"+
                            "<a href=\"{{ path('wilder_edit', { 'id': wilder.id }) }}\" class='btn btn-success'> <span" +
                            " class='glyphicon glyphicon-pencil'></span> Modifier </a> " +
                            "<a href=\"{{ path('wilder_delete', { 'id': wilder.id }) }}\" class='btn btn-default'> " +
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
