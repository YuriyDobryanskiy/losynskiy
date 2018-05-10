$(document).ready(function(){
    var thisUrl = document.location.href.split("/")[3].split("?")[0];
    //document.write(thisUrl);  
    $.each($('.menu li a'),function(){ 	
    	//document.write($(this).attr("href")==thisUrl);
    	//document.write(thisUrl);
        if ($(this).attr("href")==thisUrl){
            $(".active").removeClass("active");
            $(this).addClass("active");
        }
    });
});

////series menu
$(document).ready(function(){
    var thisUrl2 = document.location.href.split("?s=")[1];
    //document.write(thisUrl);  
    $.each($('.s_menu li a'),function(){ 	
    	//document.write($(this).attr("href")==("?s="+thisUrl));
    	//document.write($(this).attr("href"));
    	//document.write("?s="+thisUrl);
        if ($(this).attr("href")==("?s="+thisUrl2)){
            $(".active2").removeClass("active2");
            $(this).addClass("active2");
        }
    });
});

/// Count img in gallery
$(document).ready(function(){    
	var coun = ($('.main_img img').length);   
	//document.write(coun);
});

function openImpressum() {
    var str = document.getElementById("impressum_text");
    if (str.style.display == 'block'){
      str.style.display = 'none';
    }
    else {
      str.style.display='block';   
    }
}
