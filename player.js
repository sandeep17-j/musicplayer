
$(document).ready(function(){
    var t;
    $("#medium").hide();
  $("#low").hide();
  $("#vol-range").hide();
  $("#pause").hide();
    var i=0;
    var audio=new Audio(x[i].path);
    $("img").attr("width","100px");
  function num(){
    audio.play();
    $("#pause").show();
    $("#play").hide();
  }
  function pau(){
    audio.pause();
    $("#pause").hide();
    $("#play").show();
  }
  $("#play").click(function(){
    num();
  });
  
  $("#pause").click(function(){
    pau();
  });
  
  $("#next").click(function(){
    var y=x.length;
    if(i==y){
      audio.src=x[i].path;
      num();
    }
    else{
    i = i+1;
    audio.src = x[i].path;
    pau();
    setTimeout(num,1000);
    }
  });
  $("#next").click(function(){
    var img=document.getElementById("photo");
    img.src=x[i].image;
    $("#photo").css('width','200px');
    $("#photo").css('height','300px');
    $("#song-name").text(x[i].title);
  })
  
  $("#prev").click(function(){
    if(i==0){
      audio.src=x[i].path;
      num();
    }
    else{
    i = i-1;
    audio.src = x[i].path;
    pau();
    setTimeout(num,1000);}
  });
  $("#prev").click(function(){
    var img=document.getElementById("photo");
    img.src=x[i].image;
    $("#photo").css('width','200px');
    $("#photo").css('height','300px');
    $("#song-name").text(x[i].title);
  
  })
  $("#time").hide();
  $("#time-ok").hide();
  $("#timer").click(function(){
    $("#time").show();
    $("#time-ok").show();
    $("#timer").hide();
  });
  $("#time-ok").click(function(){
    $("#time").hide();
    $("#time-ok").hide();
   t= $("#time").val();
   $("#timer").show();
    timestop();
  })
  function timestop(){
    setTimeout(pau,t*60000);
  }
  $("#high,#medium,#low").click(function(){
    $("#vol-range").show();
  $("#vol-range").click(function(){
  y=$("#vol-range").val();
    audio.volume=y;
    if(y<=1&&y>=0.6){
    $("#high").show();
    $("#medium").hide();
  $("#low").hide();
  }
  else if(y<=0.5&&y>=0.1){
    $("#high").hide();
    $("#medium").show();
  $("#low").hide();
  }
  else if(y==0){
    $("#high").hide();
    $("#medium").hide();
  $("#low").show();
  }
    setTimeout(voldisappear,7000);
  })
  })
   function voldisappear(){
     $("#vol-range").hide();
   }
   $("#light-theme").hide();
   $("#dark-theme").click(function(){
$("body").css("background-color","black");
$("#light-theme").css('color','white');
$("aside ul li a").css("color","green");
$("#light-theme").show();
$("#dark-theme").hide();
   })
   $("#light-theme").click(function(){
    $("body").css("background-color","white");
    $("aside ul li a").css("color","green");
    $("aside ul li a").css("font-weight","medium");
    $("#light-theme").hide();
$("#dark-theme").show();
       });
       $("#sub-menu").hide();
       $("#close-menu-bar").hide();
       $("#menu-bar").click(function(){
        $("#sub-menu").show();
        $("#menu-bar").hide();
        $("#close-menu-bar").show();
      });
      $("#close-menu-bar").click(function(){
        $("#sub-menu").hide();
        $("#menu-bar").show();
        $("#close-menu-bar").hide();
      });
      
        
      
  });
  