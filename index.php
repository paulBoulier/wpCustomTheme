<?php
get_header();
?>
	<!-- Wrapper -->
    <div id="wrapper">

<!-- Header -->
<?php get_template_part("template/header") ?>
    

<!-- Menu -->
 <?php get_template_part("template/menu") ?>

<!-- Main -->
    <div id="main">

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
    ?>
	<a href="<?= $post->guid; ?>">Lien vers ????</a>
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="<?= the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><? /* CarbonFields */ ?></p>
            </div>
            <div class="meta">
                <time class="published" datetime="2015-10-22"><?php the_date(); ?></time>
                <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" class="author"><span class="name"><?php the_author(); ?></span><img src="<?= get_avatar_url( get_current_user_id() ) ?>" alt=""></a>
            </div>
        </header>
        <a href="<?php the_permalink(); ?>" class="image featured"><img src="<?= get_the_post_thumbnail_url(); ?>" alt="" /></a>
        <p><?php the_excerpt(); ?></p>
        <footer>
            <ul class="actions">
                <li><a href="<?php the_permalink(); ?>" class="button large">Continue Reading</a></li>
            </ul>
            <ul class="stats">
                <li><a href="#">General</a></li>
                <li><a href="#" class="icon solid fa-heart">28</a></li>
                <li><a href="#" class="icon solid fa-comment"><?= get_comments_number(); ?></a></li>
            </ul>
        </footer>
    </article>
<?php
    endwhile;
endif;
?>

						<!-- Pagination -->
                        <ul class="actions pagination">
                            <li>
                                <?php if(get_previous_posts_link()): ?>
                                    <a href="<?= get_previous_posts_page_link(); ?>" class="button large previous">Previous Page</a></li>
                                <?php else: ?>
                                    <div class="disabled button large previous">Previous Page</li>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if(get_next_posts_link()): ?>
                                    <a href="<?= get_next_posts_page_link(); ?>" class="button large next">Next Page</a></li>
                                <?php else: ?>
                                    <div class="disabled button large next">Next Page</li>
                                <?php endif; ?>
                            </li>
                        </ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="<?=  home_url( '/' ); ?>" class="logo"><?php the_logo_setup(); ?></a>
								<header>
									<h2 style="word-break: break-all;"><?= bloginfo( "name" ); ?></h2>
									<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Vitae sed condimentum</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="images/pic04.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Rutrum neque accumsan</a></h3>
												<time class="published" datetime="2015-10-19">October 19, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="images/pic05.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Odio congue mattis</a></h3>
												<time class="published" datetime="2015-10-18">October 18, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="images/pic06.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Enim nisl veroeros</a></h3>
												<time class="published" datetime="2015-10-17">October 17, 2015</time>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="images/pic07.jpg" alt="" /></a>
										</article>

								</div>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic08.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Convallis maximus nisl mattis nunc id lorem</a></h3>
												<time class="published" datetime="2015-10-15">October 15, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic09.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Euismod amet placerat vivamus porttitor</a></h3>
												<time class="published" datetime="2015-10-10">October 10, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic10.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Magna enim accumsan tortor cursus ultricies</a></h3>
												<time class="published" datetime="2015-10-08">October 8, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic11.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Congue ullam corper lorem ipsum dolor</a></h3>
												<time class="published" datetime="2015-10-06">October 7, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic12.jpg" alt="" /></a>
										</article>
									</li>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>

<?php
get_footer();
?>