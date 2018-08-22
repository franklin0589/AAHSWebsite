$("document").ready(function(){
    $("#main-container").load("content/Main.php");
   
    $(".link").click(function(){
       var page= $(this).attr("href");
       $("#main-container").load(`content/${page}.php`);
       return false;
   
    });
    $("#login").click(function(){
        $("html").load(`admin/Create.php`);
        return false;
    
     });
});
