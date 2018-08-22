$("document").ready(function(){
    $("#Amain-container").load("admin/adminContent/Newsletter.php");
   
    $(".link").click(function(){
       var page= $(this).attr("href");
       $("#Amain-container").load(`admin/adminContent/${page}.php`);
       return false;
   
    });

});


