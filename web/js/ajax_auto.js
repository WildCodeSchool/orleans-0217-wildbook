/**
 * Created by biovor on 12/06/17.
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

    $("#book_bundle_project_search_type_Recherche").keyup(function(){
        var input = $(this).val();
        if ( input.length >= 2 ) {
            $.ajax({
                type: "POST",
                url: "/search_realisation/ajax/" + input,
                dataType: 'json',
                // timeout: 3000,
                success: function(response){
                    var projects = JSON.parse(response.data);
                    html = "";
                    for (i = 0; i < projects.length; i++) {

                        html +=  "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\" style='width: 300px; height:" +
                            " 300px'> <a" +
                            " href=\"/detail_project/"+ projects[i].id +
                            "\" class=\"thumbnail\">" +
                            "<img src=\"../images/LOGO_COLO.png\" alt=\"\">"+
                            "<h4>" + projects[i].title + "</h4></a></div>"
                    }
                    $('#project-list').html(html);
                },
                error: function() {
                    $('#project-list').text('Ajax call error');
                }
            });
        } else {
            $('#project-list').html('');
        }
    });

    // détection de la saisie dans le champ de recherche
    $("#book_bundle_wilder_search_type_school").blur(function(){ //
        $field = $(this);
        $retour= 'res'+this.name;
        $long=this.name.length;

        $requete='&c='+this.name.substring(0,1)+'&p='+$('#projet'+$l).val();

        $('#results').html(''); // on vide les resultats
        $('#ajax-loader').remove(); // on retire le loader

        // on commence à traiter à partir du 2ème caractère saisie
        if( $field.val().length > 1 )
        {
            // on envoie la valeur recherché en GET au fichier de traitement
            $.ajax({
                type : 'GET', // envoi des données en GET ou POST
                url : 'ajax-search.php' , // url du fichier de traitement
                data : 'q='+$(this).val()+$requete , // données à envoyer en  GET ou POST
                beforeSend : function() { // traitements JS à faire AVANT l'envoi
                    $field.after('<img src="ajax-loader.gif" alt="loader" id="ajax-loader" />'); // ajout d'un loader pour signifier l'action
                },
                success : function(data){ // traitements JS à faire APRES le retour d'ajax-search.php
                    $('#ajax-loader').remove(); // on enleve le loader
                    $('#'+$retour).html(data); // affichage des résultats dans le bloc
                }
            });
        }
    });
});


