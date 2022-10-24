<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|', true, 'right'); bloginfo('name');?></title>
<script src="https://kit.fontawesome.com/46f4177606.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?keKTd8lPfBI%3D" charset="utf-8"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8876780969497676"
     crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/modal-video.css">
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modal-video.js"></script>
	<!-- Twitter universal website tag code -->

<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','o8ji6');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->
<!-- Global site tag (gtag.js) - Google Ads: 982885287 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-982885287"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-982885287');
</script>
<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-982885287/H6r_CN2dnbwDEKfH1tQD'});
</script>

<script>
  gtag('config', 'AW-982885287/maWbCJ-s_sgDEKfH1tQD', {
    'phone_conversion_number': '06-6743-4174'
  });
</script>

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1606214943113089');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1606214943113089&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
	
<?php wp_head(); ?>
</head>

    <body>
    	<div id="cursor" class="cursor"></div>
    	<?php if ( is_home() || is_front_page() ) : ?>
			<div id="top" class="wrapper top-new">
		<?php elseif (is_post_type_archive($post_types = 'works') || is_tax("works_type")) : ?>
			<div id="works" class="wrapper sub">
		<?php elseif (is_singular('works')) : ?>
			<div id="works-detail" class="wrapper sub">
		<?php elseif (is_post_type_archive($post_types = 'blogs') || is_tax("blogs_type")) : ?>
			<div id="blogs" class="wrapper sub">
		<?php elseif (is_singular('blogs')) : ?>
			<div id="blogs-detail" class="wrapper sub">
		<?php elseif (is_single()) : ?>
			<div id="single-detail" class="wrapper sub">
		<?php elseif (is_404()) : ?>
			<div id="not-found" class="wrapper sub">
		<?php else : ?>	
			<div id="<?php echo get_post_field( 'post_name', get_the_ID() ); ?>" class="wrapper sub">
		<?php endif; ?>
        
    <header class="midnight">	
			<div class="container flex">
				<div class="left flex">
					<h1>
						<a href="<?php echo home_url( '/' ); ?>">
							<svg role="img" aria-label="<?php wp_title('|', true, 'right'); bloginfo('name');?>">
						    	<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg#logo"></use>
						  	</svg>
						</a>
					</h1>
					
						<a href="<?php echo home_url( '/' ); ?>sdgs">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sdgs-img12.png" alt="sdgs logo">
						</a>
					
				</div>
				<div class="right flex">
					<div class="modal_box">
				        <button class="modalbtn" id="modalbtn">
				        	<span class="en"></span>
				        </button>
						<div class="nav-box modalnav">
							<nav>
								<ul class="flex">
									<li class="en nav-item fadeRightTrigger fadeRight delay-time02"><a href="<?php echo home_url( '/' ); ?>service">Service</a></li>
									<li class="en nav-item fadeRightTrigger fadeRight delay-time03"><a href="<?php echo home_url( '/' ); ?>company">Company</a></li>
									<li class="en nav-item fadeRightTrigger fadeRight delay-time04"><a href="<?php echo home_url( '/' ); ?>works">Works</a></li>
									<li class="en nav-item fadeRightTrigger fadeRight delay-time05"><a href="<?php echo home_url( '/' ); ?>blogs">Blogs</a></li>
									<li class="en nav-item fadeRightTrigger fadeRight delay-time06"><a href="<?php echo home_url( '/' ); ?>sdgs">SDGs</a></li>
									<li class="en nav-item fadeRightTrigger fadeRight delay-time07"><a href="<?php echo home_url( '/' ); ?>contact">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--<?php if ( !is_home() || !is_front_page() ) : ?>
		<div class="fv-btn pc <?php if (is_singular('works')) : ?>worksfv-btn<?php endif; ?>">
            <a href="https://page.line.me/437nljgg" target="_blank" rel="noopener noreferrer">
            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon05.svg">
                <p>LINE無料<br>サイト診断</p>
            </a>
        </div>
        <?php endif; ?>-->
