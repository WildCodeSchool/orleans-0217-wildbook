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
                success: function (html) {
                    $('#wild-list').html(html);
                },
                error: function () {
                    $('#wild-list').text('Ajax call error');
                }
            });
        }
    });

    $(".ajax_wild_list").keyup(function () {
        var input = $(this).val();
        if (input.length >= 2) {
            $.ajax({
                type: "POST",
                url: "/search_wilder_simple/ajax/" + input,
                success: function (html) {
                    $('#wild-list').html(html);
                    $('#wild-list .lastname').on('click', function () {
                        $('#bookbundle_homewilder_wilder').val($(this).text());
                        $('#wilderList').html('');
                    });

                },
                error: function () {
                    $('#wild-list').text('Ajax call error');
                }
            });
        }
    });

    $("#book_bundle_project_search_type_Recherche").keyup(function () {
        var input = $(this).val();
        if (input.length >= 2) {
            $.ajax({
                type: "POST",
                url: "/search_realisation/ajax-thumbnail/" + input,
                success: function (html) {
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


