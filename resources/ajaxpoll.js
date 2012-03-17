var ajaxpollTmp;

$(".ajaxpoll-answer-vote").live("mouseover",
	function(){
		var sp=$(this).find("span");
		ajaxpollTmp=sp.html();
		sp.text(sp.attr("title"));
		sp.attr("title","");
	}
);

$(".ajaxpoll-answer-vote").live("mouseout",
	function(){
		var sp=$(this).find("span");
		sp.attr("title",sp.text());
		sp.text(ajaxpollTmp);
	}
);

/* attach click handler */
$(".ajaxpoll-answer")
	.live("click",
		function(event){
			event.preventDefault();
			event.stopPropagation();
			$this = $(this);
			var poll = $this.attr( "poll" );
			var answer = $this.attr("answer");
			$this
				.addClass("ajaxpoll-checkevent")
				.find("input").prop("checked",true);
			$( "#ajaxpoll-ajax-"+poll )
				.html("Please wait, submitting your vote.")
				.css("display","block");
			if (useAjax){
				sajax_do_call(
					"AJAXPoll::submitVote",
					[poll,answer],
					$("#ajaxpoll-container-"+poll)[0]
				)
			} else {
				$("#ajaxpoll-answer-id-"+poll).submit();
			}
		}
	)

$(".ajaxpoll-answer-name:not(.ajaxpoll-answer-name-revoke) label").live("mouseover",
	function(){
		$(this).addClass("ajaxpoll-hover-vote");
	}
);
$(".ajaxpoll-answer-name:not(.ajaxpoll-answer-name-revoke) label").live("mouseout",
	function(){
		$(this).removeClass("ajaxpoll-hover-vote");
	}
);

$(".ajaxpoll-answer-name-revoke label").live("mouseover", 
	function(){
		$(this).addClass("ajaxpoll-hover-revoke");
	}
);
$(".ajaxpoll-answer-name-revoke label").live("mouseout", 
	function(){
		$(this).removeClass("ajaxpoll-hover-revoke");
	}
);
