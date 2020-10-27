<?php
/**
 * "Large" layout for Display Posts Shortcode
 *
 * @package      StudyFinds2018
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

$category = get_the_category($post->ID);
$cat_title = isset( $category[0]->name ) ? esc_html( $category[0]->name ) : '';

echo '<div class="news-slider__item">';
echo '<a href="' . get_permalink() . '" style="background: url(' . get_the_post_thumbnail_url() . '">';
echo '<div class="block-desc">';
echo '<h5>' . $cat_title . '</h5>';
echo '<h4>' . get_the_title() . '</h4>';
echo '<p>' . get_the_excerpt() . '</p>';
echo '</div>';
echo '</a>';
echo '</div>';