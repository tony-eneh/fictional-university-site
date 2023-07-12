<!-- blog posts home page -->
<?php
get_header();
?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( "images/ocean.jpg" ) ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Events</h1>
    <div class="page-banner__intro">
      <p>Our fun activities</p>
    </div>
  </div>
</div>
<?php
    while (have_posts()) {
      the_post();
      ?>
        <div class="event-summary container container--narrow">
          <a class="event-summary__date t-center" href="<?php the_permalink() ?>">
            <span class="event-summary__month"><?php
            $theDate = new DateTime(get_field('event_date'));
            echo $theDate->format('M');
            ?></span>
            <span class="event-summary__day"><?php
            echo $theDate->format('d')
              ?></span>
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
            <p><?php
            if (has_excerpt()) {
              echo get_the_excerpt();
            } else {
              echo wp_trim_words(get_the_content(), 18);
            }
            ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
          </div>
        </div>
      <?php
    }
?>
<div class="container container--narrow page-section"><?php echo paginate_links(  ); ?></div>

<?php
get_footer();
?>