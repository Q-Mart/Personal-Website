$(function(){

		change_background();

		$(".typing-text").typed({
			strings: ["study Computer Science at the University of York", "like to climb", "am the Computing Officer at University Radio York", "like comedy"],
			loop: true,
			backDelay: 3000
    });
		
});

function change_background(){
	var backgrounds = ['climbing', 'computer_science', 'scotland', 'spain'];
	var maximum_index = (backgrounds.length);
	var random_image_index = Math.floor(Math.random() * maximum_index);
	var background = backgrounds[random_image_index];

	if ((background == 'spain') || (background == 'climbing')){
	
		$('#text').css({
			'color' : 'black',
			'position' : 'absolute',
			'left' : '0',
			'width' : '100%',
			'padding' : '20px'
		});
	}


	$('html').css({
			'background-image' : 'url("img/bg/' + background + '.jpg")',
			'min-height' : '100%',
			'-webkit-background-size' : 'cover',
			'-moz-background-size' : 'cover',
			'-o-background-size' : 'cover',
			'background-size' : 'cover',
		});

};
