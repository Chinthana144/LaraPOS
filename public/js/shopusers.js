$(document).ready(function () {
    $("#btn_open_user").click(function(){
        $("#shop_users_modal").modal('toggle');

        $("#btn_add_user").css('display', 'block');
        $("#btn_add_user").attr('disabled', false);

        $("#btn_update_user").css('display', 'none');
        $("#btn_update_user").attr('disabled', true);

        $("#btn_delete_user").css('display', 'none');
        $("#btn_delete_user").attr('disabled', true);

    });

    $("#tbl_shop_users").on('click', '.btn_edit_users', function(){
        var row = $(this).closest('tr');
        var id = row.find('td').eq(0).html();

        // alert("id = " + id);

        $.ajax({
            url: "/showShopUsers",
            type: "get",
            data: {
                shop_user_id: id
            },
            success: function (response) {
                //alert(response['data']['shop_id']);
                //console.log(response['data']['shop_id']);

                var user_id = response['data']['user_id'];
                var shop_id = response['data']['shop_id'];

                $("#update_shopusers_modal").modal('toggle');

                $("#hide_shopuser_id").val(id);

                $("#cmb_users").val(user_id);
                $("#cmb_shops").val(shop_id);
            }
        });
    });

});//shop user jquery
