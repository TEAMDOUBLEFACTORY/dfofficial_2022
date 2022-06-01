		<?php if ( is_home() || is_front_page() ) : ?>
		<div class="sns-box"><a href="https://www.instagram.com/doublefactory/" target="_brank">Instagram</a><a href="https://www.facebook.com/doublefactory/" target="_brank">Facebook</a></div>
		<?php endif; ?>
         
		
		<footer data-midnight="white">
			<div class="new-cta pc">
				<a href="<?php echo home_url( '/' ); ?>contact" class="flex">
					<div class="left">
						<p class="text1">WEB制作で<br>お困りならまずは</p>
						<p class="text2">無料相談</p>
						<p class="text3">相談してみる</p>
					</div>
					<div class="right">
						<p class="text1">問題<br>解決</p>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/akihiro.png" alt="WEB制作でお困りならまずは無料相談">
					</div>
				</a>
			</div>
			<div class="container">
				<div class="top">
					<div class="flex">
						<div class="left">
							<div class="logo">
								<svg>
							    	<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg#logo"></use>
							  	</svg>
							  	<div class="footer-title sp">ダブルファクトリー株式会社</div>
							  </div>
							<a href="https://goo.gl/maps/Yx7S75T5G6ERSKf1A" target="_brank" class="en sp" rel="noopener">Google map</a>
							
						</div>
						<div class="right">
							<div class="address-box flex">
								<div class="address">
									<div class="footer-title pc">ダブルファクトリー株式会社</div>
									<p>〒550-0003 <br class="sp">大阪府大阪市西区京町堀1-14-25 京二ビル 310</p>
								</div>
								<a href="https://goo.gl/maps/Yx7S75T5G6ERSKf1A" target="_brank" class="en pc" rel="noopener">Google map</a>
							</div>
							<div class="tel-box flex">
								<div class="tel flex">
									<span class="en">TEL</span>
									<a href="tel:06-6743-4174" class="en">06-6743-4174</a>
								</div>
								<p>営業時間 <br class="pc">平日10:00 - 18:00</p>
							</div>
						</div>
						<div class="security-action"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/security_action_futatsuboshi-large_bw.png" alt="セキュリティアクション自己宣言企業です"></div>
					</div>
				</div>
				<div class="bottom">
					<small>COPYRIGHT - 2021 doublefacotry.com</small>
				</div>
				<div class="sp footer-menu">
					<nav>
						<ul class="flex">
							<li><a href="<?php echo home_url( '/' ); ?>service" class="en"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon01.png"></div>Service</a></li>
							<li><a href="<?php echo home_url( '/' ); ?>company" class="en"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon02.png"></div>Company</a></li>
							<li><a href="<?php echo home_url( '/' ); ?>works" class="en"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon03.png"></div>Works</a></li>
							<li><a href="<?php echo home_url( '/' ); ?>contact" class="en"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon04.png"></div>Contact</a></li>
							<li><a href="https://page.line.me/437nljgg" target="_blank" rel="noopener" class="en"><div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon05.svg"></div>LINE</a></li>
						</ul>
					</nav>
				</div>
		</footer>
		<div class="black-bg" id="js-black-bg"></div>
		<script>
		jQuery(function ($) {  
			$('.black-bg').click(function(){
		    $('body').removeClass("nav-open")
		    $('.modalnav').slideToggle()
		    $('.modalbtn').removeClass("active")
		  });
		});
		</script>

		</div>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/midnight.jquery.js"></script>

<?php wp_footer(); ?>


    </body>
</html>