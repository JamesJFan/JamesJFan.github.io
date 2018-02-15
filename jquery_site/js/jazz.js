$(document).ready(function() {

	$("nav").fadeIn(3000);

	$("a:eq(1)").click(function() {
		//$('.links').removeClass('selected');
		//$(this).addClass('selected');

		$('#output').empty();
		// play video from youtube
		var video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/n2rVnRwW0h8" frameborder="0" allowfullscreen></iframe>';
		$('#output').html(video);
	})

	$("a:eq(2)").click(function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('links').empty();
		var jazzphoto = '<img src="images/jazz.jpg" border=2>' + '<br>' +
						'<img src="images/jazz1.jpg" border=2>' + '<br>' +
						'<img src="images/jazz2.jpg" border=2>';
		$('#output').html(jazzphoto);
	})

	$("a:eq(3)").click(function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('#output').empty();
		var concerts = '<p>Fri Dec 1 – A Night Of Arabesque (featuring Yuji Tsunemi & Christopher Hardy) at Koen-Dori Classics, Shibuya</p>' + 
						'<p>Mon Dec 4 – Erena Terakubo Quartet at Dolphy, Yokohama</p>' +
						'<p>Mon Dec 4 – DJ Kumagai at Bar 45, Shibuya</p>' +
						'<p>Tue Dec 5 – Shibusa Shirazu at Pit Inn, Shinjuku</p>';
		$('#output').html(concerts);
	})

});