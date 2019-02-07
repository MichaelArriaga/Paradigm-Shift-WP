<!-- Section -->
<section>
    <header>
      <h2><?php echo get_theme_mod('footer_heading', 'Get In Touch'); ?></h2>
    </header>
    <div class="content">
      <p><?php echo get_theme_mod('footer_content', "<strong> Footer Content Strong </strong> {$lorem}"); ?></p>
      <form>
        <div class="fields">
          <div class="field half">
            <input type="text" name="name" id="name" placeholder="Name" />
          </div>
          <div class="field half">
            <input type="email" name="email" id="email" placeholder="Email" />
          </div>
          <div class="field">
            <textarea name="message" id="message" placeholder="Message" rows="7"></textarea>
          </div>
        </div>
        <ul class="actions">
          <li><input type="submit" value="Send Message" class="button primary" /></li>
        </ul>
      </form>
    </div>

	<footer>
		<ul class="items">
			<li>
				<h3>Email</h3>
				<a href="#"><?php echo get_theme_mod('footer_email', 'information@untitled.ext'); ?></a>
			</li>
			<li>
				<h3>Phone</h3>
				<a href="#"><?php echo get_theme_mod('footer_phone', '(555) 555-5555'); ?></a>
			</li>
			<li>
				<h3>Address</h3>
				<span><?php echo get_theme_mod('footer_address', '1234 Somewhere Road, Nashville, TN 00000'); ?></span>
			</li>
			<li>
				<h3>Elsewhere</h3>
				<ul class="icons">
					<li><a href="<?php echo get_theme_mod('footer_icon_twitter', 'https://twitter.com/'); ?>" class="icon fa-twitter"      target="_blank"><span class="label">Twitter</span></a></li>
					<li><a href="<?php echo get_theme_mod('footer_icon_facebook', 'https://facebook.com/'); ?>" class="icon fa-facebook"     target="_blank"><span class="label">Facebook</span></a></li>
					<li><a href="<?php echo get_theme_mod('footer_icon_instagram', 'https://instagram.com/'); ?>" class="icon fa-instagram"    target="_blank"><span class="label">Instagram</span></a></li>
					<li><a href="<?php echo get_theme_mod('footer_icon_linkedin', 'https://linkedin.com/'); ?>" class="icon fa-linkedin"   target="_blank"><span class="label">LinkedIn</span></a></li>
					<li><a href="<?php echo get_theme_mod('footer_icon_github', 'https://github.com/'); ?>" class="icon fa-github"  target="_blank"><span class="label">GitHub</span></a></li>
					<li><a href="<?php echo get_theme_mod('footer_icon_codepen', 'https://codepen.io/'); ?>" class="icon fa-codepen" target="_blank"><span class="label">Codepen</span></a></li>
				</ul>
			</li>
		</ul>
	</footer>
</section>

		<!-- Copyright -->
			<div class="copyright">&copy; Untitled. All rights reserved. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

	</div>



			<?php wp_footer(); ?>  

	</body>
</html>
