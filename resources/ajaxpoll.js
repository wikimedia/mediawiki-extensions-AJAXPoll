var ajaxpolltmp;

$(".ajaxpoll-answer-vote").live("mouseover",
	function(){
	var sp=$(this).find("span");
	ajaxpolltmp=sp.html();
	sp.text(sp.attr("title"));
	sp.attr("title","");
	}
);

$(".ajaxpoll-answer-vote").live("mouseout",
	function(){
	var sp=$(this).find("span");
	sp.attr("title",sp.text());
	sp.text(ajaxpolltmp);
	}
);


$(".ajaxpoll-answer-name:not(.ajaxpoll-answer-name-revoke)").live("mouseover",
	function(){
		$(this).addClass("ajaxpoll-hover-vote");
	}
);
$(".ajaxpoll-answer-name:not(.ajaxpoll-answer-name-revoke)").live("mouseout",
	function(){
		$(this).removeClass("ajaxpoll-hover-vote");
	}
);

$(".ajaxpoll-answer-name-revoke").live("mouseover", 
	function(){
		$(this).addClass("ajaxpoll-hover-revoke");
	}
);
$(".ajaxpoll-answer-name-revoke").live("mouseout", 
	function(){
		$(this).removeClass("ajaxpoll-hover-revoke");
	}
);
