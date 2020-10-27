<?php /* Template Name: Вакансии */ ?>

<?php get_header(); ?>

  <main class="main">
    <section class="section-top section-review">
    	<div class="container">
              <h1><?php echo esc_html( get_the_title() ); ?></h1>
        </div>
        <div class="container">
            <div class="content-wrapper">
                <div class="block-img">
                    <img src="<?php the_field('image'); ?>" alt="vacancy">
                </div>
                <div class="offer">
                    <h2><?php the_field('title'); ?></h2>
                    <ul class="offer-list">
                        <li>
                            <?php
                                $offer = get_field('what_we_offer');
                                if( $offer ): ?>
                                    <div class="icon">
                                        <img src="<?php echo ( $offer['icon_1'] ); ?>" alt="">
                                    </div>
                                    <p><?php echo ( $offer['text_1'] ); ?></p>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                                $offer = get_field('what_we_offer');
                                if( $offer ): ?>
                                    <div class="icon">
                                        <img src="<?php echo ( $offer['icon_2'] ); ?>" alt="">
                                    </div>
                                    <p><?php echo ( $offer['text_2'] ); ?></p>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                                $offer = get_field('what_we_offer');
                                if( $offer ): ?>
                                    <div class="icon">
                                        <img src="<?php echo ( $offer['icon_3'] ); ?>" alt="">
                                    </div>
                                    <p><?php echo ( $offer['text_3'] ); ?></p>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                                $offer = get_field('what_we_offer');
                                if( $offer ): ?>
                                    <div class="icon">
                                        <img src="<?php echo ( $offer['icon_4'] ); ?>" alt="">
                                    </div>
                                    <p><?php echo ( $offer['text_4'] ); ?></p>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="vacancy-info">
                    <div class="accordion">
                       

                        <?php



// check if the repeater field has rows of data
if( have_rows('list_vacancies') ):
    
    
    // loop through the rows of data for the tab header
    while ( have_rows('list_vacancies') ) : the_row();
        
        $header = get_sub_field('title');
        $content = get_sub_field('text');

    ?>
    
        <div class="accordion__caption"><h3><?php echo $header; ?></h3></div>
        <div class="accordion__content">
          <p><?php echo $content; ?></p>
        </div>    
        <?php
    endwhile; //End the loop 

else :

    // no rows found
    echo 'Come back tomorrow';

endif; ?>
                    </div>



                    <div class="block-form" id="block-form">
                        <h2>Отправьте резюме</h2>
                       <?php echo do_shortcode('[contact-form-7 id="407"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
  
<?php get_footer(); ?>