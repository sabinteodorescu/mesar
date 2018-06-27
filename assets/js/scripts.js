function openPopup(elem){
	var dataItemValue = $(elem).attr('data-item');
	var popup = $('.portfolio_item_popup[data-target="' + dataItemValue + '"]');
	var popupChild = popup.find('.content');
	popup.fadeIn();

	var screenHeight = $(window).height();
	var popupHeight = popupChild.outerHeight();
	var marginTop = (screenHeight - popupHeight) / 2;
	popupChild.css('margin-top', marginTop);
}

function closePopup(){
	$('.portfolio_item_popup').fadeOut();
}

function skillPercentage(){
	$('.skill_percentage').each(function(){
		var percentage = $(this).text();
		$(this).css('width', percentage);
	});
}

function toggleMenu(){
	$('.menu').toggleClass('open');
}

function scroll(){
	$('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
}

$(function(){
	skillPercentage();
	scroll();
	if($('window').width() > 740) {
		$('.posts').masonry({
		 	itemSelector: '.post',
		 	columnWidth: '.post',
		 	gutter: 30
		});
	}
})