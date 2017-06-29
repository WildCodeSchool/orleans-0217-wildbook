
$( document ).ready(function() {
    $("#bookbundle_homeproject_title").keyup(function(){
    var input = $(this).val();
    if ( input.length >= 2 ) {
        $.ajax({
            type: "POST",
            url: "/project/accueil/ajax/" + input,
            dataType: 'json',
            success: function(response) {
                var project = JSON.parse(response.data);
                html = "";
                for (i = 0; i < project.length; i++) {
                    html += "<li>" + project[i].title + "</li>"
                }
                $('#projectList').html(html);
                $('#projectList li').on('click', function () {
                    $('#bookbundle_homeproject_title').val($(this).text());
                    $('#projectList').html('');
                });
            },
            error: function() {
                $('#projectList').text('Ajax call error');
            }
        });
    } else {
        $('#projectList').html('');
    }
});
});
