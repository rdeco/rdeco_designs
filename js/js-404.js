
jQuery(function($) {
   $('#sun_yellow').animate({'top':'96%','opacity':0.4}, 12000,function(){
       $('#stars').animate({'opacity':1}, 5000,function(){
            $('#moon').animate({'top':'10%','opacity':1}, 5000, function(){
                $('#sstar').animate({'opacity':1}, 300);
                $('#sstar').animate({
                    'backgroundPosition':'0px 0px','top':'15%', 'opacity':0
                }, 1500);
            });
       });
   });
   $('#sun_red').animate({'top':'96%','opacity':0.8}, 12000);
   $('#sky').animate({'backgroundColor':'#4F0030'}, 15000);
   $('#clouds').animate({ "left": "+=200px",'opacity':0}, 25000);
   $('#night').animate({'opacity':0.9}, 20000);
   
   $("#title").hide().fadeIn(30000);
});



