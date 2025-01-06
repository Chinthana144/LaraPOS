$(document).ready(function () {

    $("#btn_open_category").click(function(){
        // alert("working...");
        $("#category_modal").modal('toggle');
    });

    $("#btn_close_category").click(function(){
        $("#category_modal").modal('hide');
    });

    $("#tbl_category").on('click', '.btn_edit_category', function(){
        var row = $(this).closest('tr');
        var id = row.find('td').eq(0).html();

        $.ajax({
            type: "get",
            url: "/showOneCategory",
            data: {
                category_id: id
            },
            success: function (response) {
                console.log(response['data']);
                // alert(response['data']);
                var category_id = response['data']['id'];
                var category_name = response['data']['CategoryName'];

                $("#category_edit_modal").modal('toggle');

                $("#hide_category_id").val(category_id);
                $("#category_name").val(category_name);
            }
        });
    });

    $("#btn_close_category_edit").click(function(){
        $("#category_edit_modal").modal('hide');
    });
});//Category jquery
