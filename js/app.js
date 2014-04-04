$(document).ready(function(){

	$("#menuButton").click(function(e){
		e.preventDefault();
		$("#slidingDiv").toggle(10);
	});
	
	//para evitar BFCache
	$(window).unload(function(){
			$("#slidingDiv").hide();		
	});
	
	// BFcache
	$("#slidingDiv a").click(function(){
		$("#slidingDiv").hide();
	});
	
	// RSS
	
	urlfeed="http://www.t2o.es/blog/feed/";
      $.ajax({
    url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(urlfeed),
    dataType: 'json',
    success: function(data) {
      entradas=data.responseData.feed.entries;
    noticias="";
    for(n=0;n<3;n++){
    item=entradas[n];

	imgsrc_regex = /<img[^>]+>/;
    var matches = item.content.match(imgsrc_regex);
    imagen = matches.length > 0 ? matches[0].replace(/(width|height)=\"[0-9]*\"/g, 'width="75" height="75"') : '';
    
	m = n+1;

      noticias+='<li id="list'+m+'" class="ui-link-inherit"><a id="link'+m+'" href="' + item.link +  '">' + imagen + item.title +'</a> </li>';
    }
    $("#articleList").append(noticias);
	$('#articleList').listview('refresh');
	$('#articleList div.ui-btn-inner').css({"padding":"5px"});
	
    }
      });
	
});