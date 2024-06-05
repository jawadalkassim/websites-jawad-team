

$(document).ready(function(){

	//fancybox
	$("a.iframe").fancybox({
		'width'				: '90%',
		'height'			: '90%',
        'autoScale'     	: true,
        'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'type'				: 'iframe'
	});
	
});


//chat agent time

function updateTime() {
	
	var currentTime = new Date();
	var hours = currentTime.getHours();
	var minutes = currentTime.getMinutes();
	var ampm = hours >= 12 ? 'PM' : 'AM';
	hours = hours % 12;
	hours = hours ? hours : 12;
	var formattedTime = hours + ':' + (minutes < 10 ? '0' : '') + minutes + ' ' + ampm;
	var elements = document.getElementsByClassName('current-time');
	
	for (var i = 0; i < elements.length; i++) {
		elements[i].innerText = formattedTime;
	}

}
updateTime();
setInterval(updateTime, 1000);