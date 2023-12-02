<h1 style="text-align: center">Hello PHP 8.0 </h1>

<?php 
get_header();
if(have_posts()):
while(have_posts()): the_post();?>
<h2><?php the_title() ?></h2>
<?php endwhile;
else:
 echo '<p>There is no posts</p>';
endif;
get_footer();
