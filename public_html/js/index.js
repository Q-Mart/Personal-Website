$(function(){
	typeText(" I study Computer Science at the University of York");
});

function typeText(text){
	$.each(text.split(''), function(i,letter){

		setTimeout(function(){
			$('#typing-text').html($('#typing-text').html() + letter);
		}, 50*i);

	});
};