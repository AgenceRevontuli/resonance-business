<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resonancebusiness
 */

?>

<?php 
	$footerOptions = get_field('footer-logo', 'option');
?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-logo footer__part">
				<img src="<?php echo esc_url($footerOptions['url']); ?>" alt="<?php echo esc_attr($footerOptions['alt']); ?>" />
			</div>
			<div class="footer-clubs footer__part">
				<h3 class="footer-title">
					Les clubs
				</h3>
				<div class="footer-clubs_menu footer-menus">
					<?php wp_nav_menu( array( 'footer-clubs' => 'footer-clubs' ) ); ?>
				</div>
			</div>
			<div class="footer-reseau footer__part">
				<h3 class="footer-title">
					Le réseau
				</h3>
				<div class="footer-reseau footer-menus">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-3',
								'menu_id'        => 'Reseau',
							)
						);
						?>
				</div>
			</div>
			<div class="footer-ressources footer__part">
				<h3 class="footer-title">
					Ressources
				</h3>
				<div class="footer-ressources footer-menus">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-4',
							'menu_id'        => 'Ressources',
						)
					);
					?>
				</div>
			</div>
		</div><!-- .site-info -->
		<div class="copyright">
			<p>© 2021 - Resonance Business</p>
		</div>
		<!-- Plugin Axeption -->
		<script>
			window.axeptioSettings = {
			clientId: "6082734ea507fe65d76df8ba",
			cookiesVersion: "resonance-base",
			};
			
			(function(d, s) {
			var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
			e.async = true; e.src = "//static.axept.io/sdk.js";
			t.parentNode.insertBefore(e, t);
			})(document, "script");
		</script>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/6082c22a5eb20e09cf35e765/1f3vcctr0';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
