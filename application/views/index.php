<link rel="stylesheet" href="/assets/css/index.css" type="text/css">
<script src="/assets/js/unslider.min.js"></script>
<script>
	$(function() {
		var slidey=$('#slider').unslider();
		var data = slidey.data('unslider');
		$('#previous').click(function(){
			data.prev();
		});
		$('#next').click(function(){
			data.next();
		});
		$('.products .floor .floor-head .filter ul li:last-child').css({border:"none"});
		/*
		$(".products .floor .lists .box").mouseover(function(){
			$(this).children(".product-info").show();
		});*/
	});
</script>
<div class="main-slider clearfix">
	<div class="slider" id="slider">
		<ul>
			<li><a href="/"><img src="/assets/img/index/1.jpg"/></a></li>
			<li><a href="/"><img src="/assets/img/index/2.jpg"/></a></li>
			<li><a href="/"><img src="/assets/img/index/3.jpg"/></a></li>
		</ul>
	</div>
	<a class="bt_nav icon-slides-prev icon-slides" id="previous">Previous</a>
	<a class="bt_nav icon-slides-next icon-slides" id="next">Next</a>
</div>
<div class="products">
	<div class="floor">
		<div class="floor-head">
			<h3>数码电子</h3>
			<div class="filter">
				<ul>
					<li><a>全部</a></li>
					<li><a>手机</a></li>
					<li><a>电脑</a></li>
					<li><a>音箱</a></li>
				</ul>
			</div>
		</div>
		<ul class="lists">
		<?php for($i=0;$i<10;$i++):?>
			<li class="box">
				<a>
					<img src="/assets/img/product/tv.jpg"/>
				</a>
				<div class="product-info">
					<h4 class="name txt mr_t80">电视</h4>
					<span class="user txt color-red2">Snake</span>
				</div>
			</li>
		<?php endfor;?>
		</ul>
	</div>
</div>