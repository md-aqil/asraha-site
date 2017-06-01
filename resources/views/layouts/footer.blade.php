
	<div class="container-fluid">
			<div class="row">
				<footer class="footer">
					<div class="container">
					<div class="col-md-4">
						<a href="/" class="logo-text">Asraha</a>
					</div>
					<div class="col-md-8">
						<ul class="list-inline footer-list">
							<li><a href="/">Home</a></li>
						<li><a href="/india">About India</a></li>
						<li><a href="{{ route('asrahainfo') }}">Asraha info</a></li>
                        <li><a href="/about">About us</a></li>
						<li><a href="{{ route('templates.template') }}">Templates</a></li>
						
						</ul>
					</div>
				</div>
				<hr>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<p class="text-muted">&copy; 2017 Asraha All rights reserved</p>
						</div>
						<div class="col-md-4 text-center">
							<ul class="list-inline fsocial">
								<li>
									<a href="https://www.facebook.com/profile.php?id=100011049845433" target="_blank">
										<img src="/img/facebook.png" alt="">
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/in/md-aqil-09430a109/" target="_blank">
										<img src="/img/linkedin.png" alt="">
									</a>
								</li>
								<li>
								<a href="tel:7210562014" title="7210562014">
								<img style="margin-top: -6px;" src="/img/whatsapp.png" alt="">
								</a>
								</li>
								<li><a href="https://twitter.com/aqil4k">
								<img src="/img/twitter.png" alt=""></a></li>	
								<li>
								<a href="https://www.youtube.com/channel/UC61XYpVLeBp8g_BqUo6lvsw"><img src="/img/youtube.png" alt=""></a></li>
								
							</ul>
						</div>
						<div class="col-md-4">
							<p class="text-muted pull-right">Designed by &nbsp; <strong>
							<a href="https://www.facebook.com/profile.php?id=100011049845433" class="text-white">Md Aqil</a></strong></p>
						</div>
					</div>
				</div>
				</footer>
			</div>
	</div>
	
</div><!-- main-warapper -->

<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.fittext.js"></script>
<script src="/js/jquery.lettering.js"></script>
<script src="/js/jquery.textillate.js"></script>
<script src="/js/malsap.js"></script>
<script src="/js/carousel.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/atvImg.js"></script>
<script src="/js/pinterest_grid.js"></script>
<script src="js/wow.js"></script>
<script src="js/morphingdevice.js"></script>
<script src="js/load.min.js"></script>
<script src="js/main.js"></script>

<script>
	$(document).ready(function() {
	$('.tlt').textillate({
		loop: true,
		minDisplayTime: 1000,
		// initialDelay: 1000,
    	shuffle: true,
 	});
 	
	$('.tabs-a').click(function(e) {
		e.preventDefault();
		var name = $(this).attr('href');
		$(name).show().siblings('div').hide();
		$(name).addClass('bounceInRight').siblings().removeClass('fadeInRight');
		$(this).parent().addClass('some').siblings().removeClass('some');
	});
		$('.tabs-a').eq(0).trigger('click');
		// $('.tabs-a').parent.eq(0).trigger('some');
	$('[data-icon],[data-letter]').each(function(e) {
		var d = $(this).data(),
			el = $(this);
		['before', 'main', 'after'].forEach(function(v) {
			if(d.icon) {
				$('<span />', {
					class: [d.icon, v].join(' '),
				}).appendTo(el);
			} else if(d.letter) {
				$('<span />', {
					class: v,
					text: d.letter
				}).appendTo(el);
			}
		});
	})
	
// var mobHeader = $('.mobile-inner-header');
// var body = $('.header');
// 	$(window).scroll(function() {
// 		var h = mobHeader.scrollTop();
		
// 		var top = $(this).scrollTop();
	
// 		if(top >= 680) {
// 			body.addClass('scrolled fadeInDown');
// 		} else {
// 			body.removeClass('scrolled fadeInDown');
// 		}
// 		if(top > 265) {
// 			mobHeader.addClass('pos-fixed fadeInDown');
// 		} else {
// 			mobHeader.removeClass('pos-fixed fadeInDown');
// 		}
// 	});
	
$('.a').click(function(e) {
		e.preventDefault();
		var link = $(this).attr('href');
		var targetEl = $(link);
		var topOffset = targetEl.offset().top;
		$('body').animate({
			scrollTop: topOffset
		});
		$(this).parent('li').addClass('active').siblings('li').removeClass('active');
	});
// responsive script here
$(".mobile-inner-header-icon").click(function(){
	$(this).toggleClass("mobile-inner-header-icon-click mobile-inner-header-icon-out");
	$(".mobile-inner-nav").slideToggle(250);
	
});

$(".mobile-inner-nav a").each(function( index ) {
  	$( this ).css({'animation-delay': (index/10) + 's'});
  });
});

// multiple images slider


(function() {
	if(!$('#myCarousel').length) return;
	$('#myCarousel').carousel({
	  interval: 20000
	})
	$('.carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  for (var i=0;i<2;i++) {
	    next=next.next();
	    if (!next.length) {
	    	next = $(this).siblings(':first');
	  	}
	    
	    next.children(':first-child').clone().appendTo($(this));
	  }
	});
})();


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<!-- for ripple effec  -->
<script type="">
	(function (window, $) {
  $(function() {
    $('.ripple').on('click', function (event) {
      
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 2000);
    });
    
  });
})(window, jQuery);

atvImg();
</script>
<!-- for ripple effec  End-->

<script>
(function() {
$('.segment-gallery')
	.find('a').click(openModal);
	function openModal(e) {
		e.preventDefault();
		var modal = $('#myModal').modal('show');
		var src = $(this).attr('href');
		var img = $('<img />', {src: src});
		console.log(src);
		modal.find('.modal-content').html(img);
	}
})();
(function() {

	var postLength = $('#postlisting .postindex').each(function(i, item) {
		if(i > 3) $(item).addClass('hidden')
	})
})();


 $(document).ready(function() {

            $('#blog-landing').pinterest_grid({
                no_columns: 2,
                padding_x: 10,
                padding_y: 10,
                margin_bottom: 50,
                single_column_breakpoint: 700
            });
            new WOW().init();

        });
</script>