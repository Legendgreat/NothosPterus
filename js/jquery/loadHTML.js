(function(){
    $(".loadHTML").each(function(){
        $(this).load((this).attr("id"));
    });
});