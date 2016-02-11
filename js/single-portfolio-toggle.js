$('.screenshots').click(function() {
if ($(".screenshots-grid").is(":hidden")) {
    $(".screenshots-grid").fadeIn("slow");
     $(".mockups-grid").hide();   
} else {
    $(".screenshots-grid").show();
}

});

 $('.mockups').click(function() {
if ($(".mockups-grid").is(":hidden")) {
    $(".mockups-grid").fadeIn("slow");
    $(".screenshots-grid").hide();
    
} else {
    $(".mockups-grid").show();
}
 });
