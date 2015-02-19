var ajaxpollTmp;

var setupEventHandlers = function(){
	$(".ajaxpoll-answer-vote").on("mouseover",
		function(){
			var sp=$(this).find("span");
			ajaxpollTmp=sp.html();
			sp.text(sp.attr("title"));
			sp.attr("title","");
		}
	);

	$(".ajaxpoll-answer-vote").on("mouseout",
		function(){
			var sp=$(this).find("span");
			sp.attr("title",sp.text());
			sp.text(ajaxpollTmp);
		}
	);

	/* attach click handler */
	$(".ajaxpoll-answer-name label")
		.on("click",
			function(event){
				event.preventDefault();
				event.stopPropagation();
				$this = $(this).parent().parent();
				var poll = $this.attr( "poll" );
				var answer = $this.attr( "answer" );
				var token = $this.parent().find("input[name='ajaxPollToken']").val();
				$this.find(".ajaxpoll-hover-vote").addClass("ajaxpoll-checkevent");
				$this.find("input").prop("checked","checked");
				$( "#ajaxpoll-ajax-"+poll )
					.text( mw.message( 'ajaxpoll-submitting' ).text() )
					.css("display","inline-block");
				if (useAjax){
					$.get(
						mw.util.wikiScript(),
						{
							action: 'ajax',
							rs:     "AJAXPoll::submitVote",
							rsargs: [poll,answer,token]
						},
						function(newHTML){
							$("#ajaxpoll-container-"+poll).html(newHTML);
							setupEventHandlers();
						}
					);	
				} else {
					$("#ajaxpoll-answer-id-"+poll).submit();
				}
			}
		)

	$(".ajaxpoll-answer-name:not(.ajaxpoll-answer-name-revoke) label").on("mouseover",
		function(){
			$(this).addClass("ajaxpoll-hover-vote");
		}
	);
	$(".ajaxpoll-answer-name:not(.ajaxpoll-answer-name-revoke) label").on("mouseout",
		function(){
			$(this).removeClass("ajaxpoll-hover-vote");
		}
	);

	$(".ajaxpoll-answer-name-revoke label").on("mouseover", 
		function(){
			$(this).addClass("ajaxpoll-hover-revoke");
		}
	);
	$(".ajaxpoll-answer-name-revoke label").on("mouseout", 
		function(){
			$(this).removeClass("ajaxpoll-hover-revoke");
		}
	);
}
setupEventHandlers();