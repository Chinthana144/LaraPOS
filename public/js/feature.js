$(document).ready(function () {
    $("#btn_open_feature").click(function(){
        $("#add_feature_modal").modal('toggle');
    });

    $("#btn_run").click(function(){
        var rowCount = $("#tbl_features tr").length;

        const arr = "";
        for (let i = 1; i < rowCount; i++) {
            //const element = array[i];
            alert("data = " + i);
        }
    });
});//feature
