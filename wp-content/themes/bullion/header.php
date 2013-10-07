<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * Learn more: http://www.github.com/mvaqasuddin
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage bullion
 * @since bullion
 * mvaqasuddin@gmail.com
 * skype : vaqasuddin
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
<script type="text/javascript" src="js/jquery.js"></script> 

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jshowoff.min.js"></script>


</head>

<body>

<div class="header_area">
  <div class="wrapper">
  		
        <div class="login_area"><a href="#">Login</a> /    <a href="#">Support cases</a></div>
        
        <div class="logo_area">
    	<div class="logo"><img src="<?php bloginfo('template_url');?>/images/logo.png" /></div>
        <!--Logo End-->
        
        <div class="right_nav">
        	<ul>
            	<li><a href="#">Market News</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#" class="last">Contact Us</a></li>
            </ul>
        </div>
        
        <!--Right Nav Area End-->
        
        </div>
        <!--Logo Area End-->
        
    <div class="nav_area">
    
    	<div class="menu_btn"><a href="#">Menu</a></div>
    	<div class="nav_sec">
            <ul>
                <li><a href="#">Buy  now</a></li>
                <li><a href="#">Sell Your Bullion</a></li>
                <li><a href="#">Price Compare</a></li>
                <li><a href="#">Why Choose Us</a></li>
                <li><a href="#">Your Guarantee</a></li>
                <li><a href="#">Testimonials</a></li>
            </ul>
        </div>
        
       <script language="javascript">
    $(document).ready(function() {
        $('head').append('<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=2.0"/>');
    });
    
    $('.menu_btn').click(function() {
      $('.nav_sec').slideToggle('slow', function() {
      });
    });
    
    $(window).resize(function(){
        var w = $(window).width();
        if(w > 760 && $('.nav').css('display', 'none') ) {
            $('.nav_sec').css('display', 'block')
        }
        if(w < 760 && $('.main_nav').css('display', 'block') ) {
            $('.nav_sec').css('display', 'none')
        }				
    });
    </script>
    <!--Nav Area End-->
    
    <div class="top_social_area">
    	<a href="#" class="fb"></a>
        <a href="#" class="twitter"></a>
        <a href="#" class="linkedin"></a>
    </div>
    
    <!--Top Social Area End-->
    
</div>
<!--Navigation Bar Area End-->
    
  </div>
</div>
<!--Header Area End-->



<div class="banner_area">
   	  
    <div class="wrapper">
    	<img src="<?php bloginfo('template_url');?>/images/banner_img.png" />
    </div>
    
</div>

<!--Banner Area End-->

<div class="white_content_area">
	<div class="wrapper">
    	<div class="top_three_segments">
        	<div class="first"><img src="<?php bloginfo('template_url');?>/images/buy_glod.png" /></div>
            <div class="first"><img src="<?php bloginfo('template_url');?>/images/buy_silver.png" /></div>
            <div class="last"><img src="<?php bloginfo('template_url');?>/images/price_compare.png" /></div>
        </div>
    </div>
</div>
<!--White Content Area End-->

<div class="current_special_area">
	<div class="wrapper">
    	<h1>Current Specials</h1>
        <ul>
        	<li>
            	<img src="<?php bloginfo('template_url');?>/images/c_s_img1.png" />
                <p>NZ 1 oz Gold bar</br>
(Discount)</p>
				<div class="pice_area">
                	<div class="text">$1,868.20 </div>
                    <div class="img_orange"></div>
                </div>
            </li>
            <li>
            	<img src="<?php bloginfo('template_url');?>/images/c_s_img2.png" />
                <p>NZ 1 oz Gold bar</br>
(Discount)</p>
				<div class="pice_area">
                	<div class="text">$1,868.20 </div>
                    <div class="img_orange"></div>
                </div>
            </li>
            <li>
            	<img src="<?php bloginfo('template_url');?>/images/c_s_img3.png" />
                <p>NZ 1 oz Gold bar</br>
(Discount)</p>
				<div class="pice_area">
                	<div class="text">$1,868.20 </div>
                    <div class="img_blue"></div>
                </div>
            </li>
            <li class="last">
            	<img src="<?php bloginfo('template_url');?>/images/c_s_img4.png" />
                <p>NZ 1 oz Gold bar</br>
(Discount)</p>
				<div class="pice_area">
                	<div class="text">$1,868.20 </div>
                    <div class="img_blue"></div>
                </div>
            </li>
        </ul>
        
        <a href="#" class="view">View all silver items</a>
        
    </div>
</div>
<!--Current Special Area End-->


<div class="white_content_area">
	<div class="wrapper">
    	<div class="second_two_segments_area">
        	<div class="left">
            	<h1>Bullion Buying Guide</br>
                	<span>Introduction</span></h1>	
                    <ul>
                    	<li><a href="#">Chapters 1</a></li>
                        <li><a href="#">Chapters 2</a></li>
                        <li><a href="#">Chapters 3</a></li>
                        <li><a href="#">Chapters 4</a></li>
                        <li><a href="#">Chapters 5</a></li>
                        <li><a href="#">Chapters 6</a></li>
                        <li><a href="#">Chapters 7</a></li>
                        <li><a href="#">Chapters 8</a></li>
                        <li><a href="#">Chapters 9</a></li>
                    </ul>
            </div>
            <!--Left Area End-->
            
            <div class="right">
            	<h1>The Beginner's Guide to Buying Bullion</h1>
                Thinking azbout buing bullion but don't know how to start? Need to Polish up your knowledge? The <span class="bold">Bullion Trading ompany Guide to Buying Bullion</span> provides all the information you need to get you started
                <ul>
                	<li>
                    	Chapter 1
                        <span class="title">When to Buy Billion</span>
                    </li>
                    <li>
                    	Chapter 2
                        <span class="title">When to Buy Billion</span>
                    </li>
                    <li>
                    	Chapter 3
                        <span class="title">When to Buy Billion</span>
                    </li>
                    <li>
                    	Chapter 4
                        <span class="title">When to Buy Billion</span>
                    </li>
                    <li>
                    	Chapter 5
                        <span class="title">When to Buy Billion</span>
                    </li>
                    <li>
                    	Chapter 6
                        <span class="title">When to Buy Billion</span>
                    </li>
                    <li>
                    	Chapter 7
                        <span class="title">When to Buy Billion</span>
                    </li>
                    <li>
                    	Chapter 8
                        <span class="title">When to Buy Billion</span>
                    </li>
                </ul>
            </div>
            <!--Right Area End-->
            
        </div>
        
        <!--2 Segments Area End-->
        
        <div class="price_chart">
        	<h1>Live Pricing Charts</h1>
            
            <div class="title_area">
            	<div class="orange_gray">GOLD price</div>
                <div class="gray_orange">Silver price</div>
            </div>
            
            <div class="left"><img src="<?php bloginfo('template_url');?>/images/gold_price_chart.png" /></div>
            <div class="right"><img src="<?php bloginfo('template_url');?>/images/silver_proce_chart.png" /></div>
            
        </div>
        <!--Price Chart area End-->
        
        <div class="client_says_area">
        	<h1>What our client says</h1>
            <div class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
        	<a href="#">marco jones</a>
        </div>
        
        <!--Client Says Area End-->
        
        <div class="bott_adds_area"><img src="<?php bloginfo('template_url');?>/images/bott_adds.png" /></div>
        <!--Bottom Adds Area End-->
        
        
    </div>
    
    <div class="bott_client_area">
    	<div class="wrapper">
        	<ul>
            	<li><img src="<?php bloginfo('template_url');?>/images/bott_client1.png" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/bott_client2.png" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/bott_client3.png" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/bott_client4.png" /></li>
                <li class="last"><img src="<?php bloginfo('template_url');?>/images/bott_client5.png" /></li>
            </ul>
        </div>
    </div>
    <!--Bottom Clients Area End-->
    
    <div class="bott_title_area">Live Pricing and <span>24hr Online Ordering</span></div>
    
</div>
<!--second White Content Area End-->


<div class="footer_area">
	<div class="wrapper">
    	
        <div class="left">
        	<ul class="button">
            	<li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Scheduled Shipping</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Price Alert</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            
            <div class="copy_right">Copyright © 2013 Bullion Deals NZ. All rights reserved. </div>
            
            <div class="social_area">
            	<a href="#" class="facebook"><img src="<?php bloginfo('template_url');?>/images/footer_fb.png" /></a>
                <a href="#" class="twitter"><img src="<?php bloginfo('template_url');?>/images/footer_twitter.png" /></a>
                <a href="#" class="linkedin"><img src="<?php bloginfo('template_url');?>/images/footer_in.png" /></a>
            </div>
            
        </div>
        
        <div class="right">
        	<h1>Feedback</h1>
            <p>GM Stuart - Waikato
2013-01-16, 19:03</p>

<p>Recommended tangible asset satisfaction and security in a world awash in fiat paper.</p>
        </div>
        
  </div>
</div>
<!--Footer Area End-->


</body>
</html>
