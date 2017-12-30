<?php

/*

Template Name: Full width

*/
	get_header();
?>

<div class="post__area">
	<div class="barber__bar"></div>
    <?php 
    	$post = get_post(43);
    	$title = apply_filters('the_content', $post->post_title);
        $content = apply_filters('the_content', $post->post_content);
    ?>
    <main id="we">
        <div class="post__title">
        	<div class="container content-wrapper">
        		<div class="row">
        			<div class="col-xs-12">
        				<h1><?php echo $title; ?></h1>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="post__content">
        	<div class="container content-wrapper">
        		<div class="row">
        			<div class="col-xs-12">
        				<p><?php echo $content; ?></p>
        			</div>
        		</div>
        	</div>
        </div>
    </main>
</div>

<div class="post__area">
	<div class="barber__bar"></div>
    <?php 
    	$post = get_post(45);
    	$title = apply_filters('the_content', $post->post_title);
        $content = apply_filters('the_content', $post->post_content);
    ?>
    <main id="about">
        <div class="post__title">
        	<div class="container content-wrapper">
        		<div class="row">
        			<div class="col-xs-12">
        				<h1><?php echo $title; ?></h1>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="post__content">
        	<div class="container content-wrapper">
        		<div class="row">
        			<div class="col-xs-12 about_logo">
        				<img src="<?php echo get_template_directory_uri().'/images/academy.jpg';?>" alt="">
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-xs-12">
        				<p><?php echo $content; ?></p>
        			</div>
        		</div>
        		<div class="row about_img-bottom">
        			<div class="col-xs-4">
        				<img src="<?php echo get_template_directory_uri().'/images/reuzel.png';?>" alt="">
        			</div>
        			<div class="col-xs-4">
        				<img src="<?php echo get_template_directory_uri().'/images/visa.png';?>" alt="">
        			</div>
        			<div class="col-xs-4">
        				<img src="<?php echo get_template_directory_uri().'/images/mastercard.png';?>" alt="">
        			</div>
        		</div>
        	</div>
        </div>
    </main>
</div>

<div class="post__area">
	<div class="barber__bar"></div>
    <?php 
    	$post = get_post(47);
    	$title = apply_filters('the_content', $post->post_title);
        $content = apply_filters('the_content', $post->post_content);
    ?>
    <main id="pictures">
        <div class="post__title">
        	<div class="container content-wrapper">
        		<div class="row">
        			<div class="col-xs-12">
        				<h1><?php echo $title; ?></h1>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="post__content">
        	<div class="container content-wrapper">
        		<div class="row">
        			<div class="col-xs-12">
        				<p><?php echo $content; ?></p>
        			</div>
        		</div>
        	</div>
        </div>
    </main>
</div>

<div class="post__area">
	<div class="barber__bar"></div>
    <?php 
    	$post = get_post(41);
    	$title = apply_filters('the_content', $post->post_title);
        $content = apply_filters('the_content', $post->post_content);
    ?>
    <main id="where">
        <div class="post__title">
        	<div class="container content-wrapper">
        		<div class="row">
        			<div class="col-xs-12">
        				<h1><?php echo $title; ?></h1>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="post__content">
        	<div class="container content-wrapper">
        		<div class="row">
        			<div class="col-xs-12">
        				<p><?php echo $content; ?></p>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-xs-12">
        				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2446.559323894087!2d21.005863415961358!3d52.178705169218084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd56369db8480b205!2sBarberhog+%26+AEM+Hair!5e0!3m2!1spl!2spl!4v1513154293487" height="525" frameborder="0" style="border:0;width: 100%;padding: 10px 0;" allowfullscreen></iframe>
        			</div>
        		</div>
        	</div>
        </div>
    </main>
</div>

<div class="post__area">
	<div class="barber__bar"></div>
    <?php 
    	$post = get_post(49);
    	$title = apply_filters('the_content', $post->post_title);
        $content = apply_filters('the_content', $post->post_content);
    ?>
    <main id="contact">
        <div class="post__title">
        	<div class="container content-wrapper">
        		<div class="row">
        			<div class="col-xs-12">
        				<h1><?php echo $title; ?></h1>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="post__content">
        	<div class="container content-wrapper">
        		<div class="row">
        			<?php echo $content; ?>
        		</div>
        	</div>
        </div>
    </main>
</div>
<?php get_footer(); ?>

