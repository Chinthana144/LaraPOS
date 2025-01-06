$(document).ready(function(){

    $("#company_logo").change(function(event){
        var size=this.files[0].size;

        if (size>=5000000)
        {
            $("#success").fadeOut();
            $("#danger").fadeIn();
            $(this).css("border-color","red");
            $('#btn_save_company').attr('disabled','disabled');
        }//greater than 5 mb
        else
        {
            $("#success").fadeIn();
            $("#danger").fadeOut();
            $(this).css("border-color","lime");
            $('#btn_save_company').removeAttr('disabled','disabled');

            var url = URL.createObjectURL(event.target.files[0]);
            $("#img_company_logo").attr("src", url);
        }
    });//change

});//jquery company
