$(document).ready(function () {

    $("#shop_logo").change(function(event){
        var size=this.files[0].size;

        if (size>=5000000)
        {
            $("#success").fadeOut();
            $("#danger").fadeIn();
            $(this).css("border-color","red");
        }//greater than 5 mb
        else
        {
            $("#success").fadeIn();
            $("#danger").fadeOut();
            $(this).css("border-color","lime");

            var url = URL.createObjectURL(event.target.files[0]);
            $("#img_shop_logo").attr("src", url);
        }
    });//change

    $("#receipt_logo").change(function(event){
        var size=this.files[0].size;

        if (size>=5000000)
        {
            $("#success").fadeOut();
            $("#danger").fadeIn();
            $(this).css("border-color","red");
        }//greater than 5 mb
        else
        {
            $("#success").fadeIn();
            $("#danger").fadeOut();
            $(this).css("border-color","lime");

            var url = URL.createObjectURL(event.target.files[0]);
            $("#img_receipt_logo").attr("src", url);
        }
    });//change

});//shop jquery
