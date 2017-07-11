/**
 * Created by biovor on 12/06/17.
 */
$(document).ready(function () {
    $("#book_bundle_wilder_search_type_Recherche").keyup(function () {
        var input = $(this).val();
        if (input.length >= 2) {
            $.ajax({
                type: "POST",
                url: "/search_wilder/ajax/" + input,
                dataType: 'json',
                // timeout: 3000,
                success: function (response) {
                    var wilders = JSON.parse(response.data);
                    html = "";
                    for (i = 0; i < wilders.length; i++) {
                        if ((wilders[i].userActivation == true) && (wilders[i].managerActivation == true)) {

                            html += '<div class="col-xs-6 col-md-5 vignetteWilder">' +
                                '<div class="col-md-7 image-listWilders" style="background-image: url(\'../uploads/' + wilders[i].profilPicture +'\')">' +
                                '<img src="" alt="" class="image" style="width:100%"><div class="middle">' +
                                '<div class="hoverDispoWilder">' + wilders[i].label + '</div></div>' +
                                '<a href="/profile_wilder/' + wilders[i].id + '">' +
                                '<img class="img-listWilders" src="../uploads/' + wilders[i].profilPicture + ' " alt="{{ wilder.firstname }} {{ wilder.lastname }}"></a>' +
                                '</div><div class="col-md-5 titreVignetteWilder"><a href="/profile_wilder/' + wilders[i].id + '"><h3>' + wilders[i].lastname + '</h3></a>' +
                                    '<h3>' + wilders[i].firstname + '</h3><h4>Ecole : ' + wilders[i].school + ' </h4><h5>Promotion : ' + wilders[i].promotion + ' </h5></div><div class="modjoWilder col-md-12">' +
                                    '<h4>' + wilders[i].modjo + '</h4></div></div>';
                        }
                    }
                    $('#wild-list').html(html);
                },
                error: function () {
                    $('#wild-list').text('Ajax call error');
                }
            });
        } else {
            $('#wild-list').html('');
        }
    });

    $("#book_bundle_project_search_type_Recherche").keyup(function () {
        var input = $(this).val();
        if (input.length >= 2) {
            $.ajax({
                type: "POST",
                url: "/search_realisation/ajax/" + input,
                dataType: 'json',
                // timeout: 3000,
                success: function (response) {
                    var projects = JSON.parse(response.data);
                    html = "";
                    for (i = 0; i < projects.length; i++) {

                        html += '<div class="col-xs-6 col-md-5 vignetteProject">' +
                            '<div class="col-md-12 image-listProjects" style="background-image: url(\'../uploads/' + projects[i].path + '\')">' +
                            '<img src="" alt="" class="image" style="width:100%"><div class="middle"><div class="hoverDispoProject">' +
                            '<a href="/detail_project/' + projects[i].id + '"><button type="button" class="btn btn-default btn-lg">' +
                            '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></a></div></div>' +
                            '<a href="/detail_project/' + projects[i].id + '"><img class="img-listProjects"></a></div>' +
                            '<div class="col-md-12 titreVignetteProject"><a href="/detail_project/' + projects[i].id + '">' +
                            '<h3>' + projects[i].title + '</h3></a></div></div></div></div>';

                    }


                    $('#project-list').html(html);
                },
                error: function () {
                    $('#project-list').text('Ajax call error');
                }
            });
        } else {
            $('#project-list').html('');
        }
    });
});


