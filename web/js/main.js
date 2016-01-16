$(document).ready(function() {

    $('.delete-item').click(function(e) {

        var this_item = $(this);

        var link = $(this).attr('href');

        var table = $('#users_list');
        var table_type = table.attr('data-type');

        var insert = '<tr><td><i><small>пусто</small></i></td><td><i><small>пусто</small></i></td>'+
            '<td><i><small>пусто</small></i></td><td><i><small>пусто</small></i></td></tr>';

        $.ajax({
            type: 'GET',
            url: link,
            dataType: 'JSON',
            success: function(data) {
                if(data == 1) {
                    this_item.parent().parent().hide(150);
                    setTimeout(function() {
                        this_item.parent().parent().remove();
                        if($('#users_list tbody').children().length == 0) {
                            $('#users_list tbody').append(insert);
                        }
                    }, 150);
                }
            }
        });

        e.preventDefault();

    })


    $('#create_btn').click(function() {

        $('#create_modal .modal-body').load('/form/new');


    })

})