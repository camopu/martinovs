<?php /* Template Name: Новости */ ?>

<?php get_header(); ?>
<h1 class="title">Новости</h1>
<main class="main">
    <section class="section-top section-news">
        <div class="container">
			
			<?php the_field('news_feed'); ?>
            
        </div>
    </section>
  </main>

  
<?php get_footer(); ?>