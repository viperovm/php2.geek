$(function () {
    $('#showmore').click(function(e) {
        e.preventDefault();
        let last_id = $('.container .goods').last().attr('data-id');
        console.log(last_id);
        $.ajax({
            type: 'POST',
            url: '&controller=goods&action=ajax',
            data: {goods: last_id},
            success: function (data) {
                $('.catalogue').append(data);
            }
        });

        // $.ajax({
        //     type: 'POST',
        //     url: 'catalog.ajax.php',
        //     data: {GOODS: last_id},
        //     success: function (data) {
        //         $('.catalogue').append(result.html);
        //
        //     }
        // });

    });

});