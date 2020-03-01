<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soapatrickseven
 */

?>

    </div>

    <?php
    if ( is_home() && !is_paged() ) :
      get_template_part( 'layout-parts/instagram');
    endif;
    ?>


    <footer class="site-footer<?php if ( is_page() || is_paged() || is_archive() ) : ?> highlight<?php endif; ?>">
			<p class="site-footer__copyright">
        <?php echo sprintf( __( 'Stuff from 2000 to %s by SoaPatrick/<a href="%s">Seven</a>', 'soapatrickseven' ), date('Y'), esc_url( home_url( '/log' )) ); ?>
      </p>
      <p class="site-footer__data-protection">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>data-protection" aria-label="<?php esc_html_e( 'Data Protection', 'soapatrickseven' ); ?>">
          <span><?php esc_html_e( 'Data Protection', 'soapatrickseven' ); ?></span>
          <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor" class="secondary" d="M255.38 421.22L224 480l-31.38-58.78L208 352l-17.79-35.58a161.25 161.25 0 0 0 67.58 0L240 352zM224 288a128 128 0 0 0 128-127.21c-7.49 1.54-15.51 3-24 4.2v6.59c-.11.11-6.07 3.47-6.93 6.28-4.23 12.9-7.59 26.65-17.88 36.19-10.94 10.07-52 24.26-69.33-27.09-3-9.1-16.69-9.1-19.83 0-18.41 54.39-60.66 35.1-69.33 27.09-10.29-9.54-13.76-23.29-17.88-36.19-.86-2.7-6.82-6.17-6.82-6.28V165c-8.48-1.25-16.5-2.66-24-4.2A128 128 0 0 0 224 288z"></path>
            <path fill="currentColor" class="primary" d="M120 165v6.59c0 .11 6 3.58 6.82 6.28 4.12 12.9 7.59 26.65 17.88 36.19 8.67 8 50.92 27.3 69.33-27.09 3.14-9.1 16.79-9.1 19.83 0 17.33 51.35 58.39 37.16 69.33 27.09 10.29-9.54 13.65-23.29 17.88-36.19.86-2.81 6.82-6.17 6.93-6.28V165c52.95-7.83 88-21.47 88-37 0-13.75-27.51-26-70.6-34.09-9.35-32.11-26.69-64.08-40-80.72a32.1 32.1 0 0 0-39.5-8.8l-27.6 13.8a32 32 0 0 1-28.6 0l-27.6-13.8a32.1 32.1 0 0 0-39.5 8.8c-13.22 16.64-30.6 48.61-40 80.72C59.51 102 32 114.25 32 128c0 15.52 35.05 29.16 88 37zm263.9 143.27l23.9-62.58a16 16 0 0 0-15-21.7h-32.12L224 480 87.32 224h-31a16 16 0 0 0-14.7 22.3l25.74 60.06A133.56 133.56 0 0 0 0 422.4V464a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48v-41.6a133.5 133.5 0 0 0-64.1-114.13z"></path>
          </svg>
        </a>
      </p>
	  </footer>

	</div>

<?php wp_footer(); ?>

</body>
</html>
