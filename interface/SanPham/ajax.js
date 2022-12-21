$(document).ready(function(){
    $(".thuonghieu").change(function(){
        var id = $(".thuonghieu").val();
        $.post("data.php", {id: id}, function(data){
            $(".sanpham").html(data);
        });
    })
});


