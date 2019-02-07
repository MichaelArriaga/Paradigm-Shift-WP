<?php get_header(); ?>

	<!-- Wrapper -->
  <div id="wrapper">
<?php
  $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus magni magnam velit esse voluptates repellendus assumenda voluptatibus sunt facilis architecto autem earum ratione, dignissimos nisi ullam cupiditate tempore laudantium.';
?>
<!-- Intro -->
  <section class="intro">
    <header>
      <!-- site title from customize in dashboard -->
      <h1><?php echo get_theme_mod('showcase_heading', 'Hello World'); ?></h1>
      <p><?php echo get_theme_mod('showcase_subheading', 'Just Another Wordpress Site'); ?></p>
      <p> A FREE RESPONSIVE SITE TEMPLATE DESIGNED BY <a href="https://twitter.com/ajlkn"> @ajlkn</a> / <a href="https://html5up.net">HTML5 UP</a></p>
      <ul class="actions">
        <li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
      </ul>
    </header>
    <div class="content">
      <span class="image fill" data-position="center"><img src="<?php echo get_theme_mod('showcase_img',  get_bloginfo('template_url').'/images/pic01.jpg') ?>" alt="" /></span>
    </div>
  </section>

<!-- Section -->
  <section id="first">
    <header>
      <h2><?php echo get_theme_mod('body_section_one_heading', 'Section 1 Heading'); ?></h2>
    </header>

    
    <div class="content">
      <p><?php echo get_theme_mod('body_section_one_content', "<strong>Section 1 Content</strong> {$lorem}"); ?></p>
      <span class="image main"><img src="<?php echo get_theme_mod('body_section_one_img',  get_bloginfo('template_url').'/images/pic02.jpg') ?>" alt="" /></span>
    </div>
  </section>


<!-- Section -->
  <section>
    <header>
      <h2><?php echo get_theme_mod('body_section_two_heading', 'Section 2 Heading'); ?></h2>
    </header>
    <div class="content">
      <p><?php echo get_theme_mod('body_section_two_top_text', "<strong>Section 2 Top Text</strong> {$lorem}"); ?></p>
      <ul class="feature-icons">
        <li class="icon fa-laptop"><?php echo get_theme_mod('body_section_two_icon_one_text', 'Font Awesome Icon 1') ?></li>
        <li class="icon fa-bolt"><?php echo get_theme_mod('body_section_two_icon_two_text', 'Font Awesome Icon 2') ?></li>
        <li class="icon fa-signal"><?php echo get_theme_mod('body_section_two_icon_three_text', 'Font Awesome Icon 3') ?></li>
        <li class="icon fa-gear"><?php echo get_theme_mod('body_section_two_icon_four_text', 'Font Awesome Icon 4') ?></li>
        <li class="icon fa-map-marker"><?php echo get_theme_mod('body_section_two_icon_five_text', 'Font Awesome Icon 5') ?></li>
        <li class="icon fa-code"><?php echo get_theme_mod('body_section_two_icon_six_text', 'Font Awesome Icon 6') ?></li>
      </ul>
      <p><?php echo get_theme_mod('body_section_two_bottom_text', "<strong>Section 2 Bottom Text</strong> {$lorem}"); ?></p>
    </div>
  </section>

<!-- Section -->
  <section>
    <header>
      <h2><?php echo get_theme_mod('body_section_three_heading', 'Section 3 Heading'); ?></h2>
    </header>
    <div class="content">
      <p><?php echo get_theme_mod('body_section_three_content', "<strong>Section 3 Text Strong</strong> ${lorem}"); ?></p>

      <!-- Aside 1 -->
        <section>
          <header>
            <h3><?php echo get_theme_mod('aside_one_heading', 'Small Aside 1 Heading'); ?></h3>
            <p><?php echo get_theme_mod('aside_one_content', $lorem); ?></p>
          </header>
          <div class="content">
            <div class="gallery">
              <?php
                // Gallery Image Paths for site & modal
                $asideOneGalleryImgOne = get_theme_mod('aside_one_gallery_one', get_theme_file_uri('/images/gallery/fulls/01.jpg') );

                $asideOneGalleryImgTwo =  get_theme_mod('aside_one_gallery_two', get_theme_file_uri('/images/gallery/fulls/02.jpg') ); 

                $asideOneGalleryImgThree =  get_theme_mod('aside_one_gallery_three', get_theme_file_uri('/images/gallery/fulls/03.jpg') );

                $asideOneGalleryImgFour =  get_theme_mod('aside_one_gallery_four', get_theme_file_uri('/images/gallery/fulls/04.jpg') ); 

              ?>

              <a href="<?php echo $asideOneGalleryImgOne ?>" class="landscape"><img src="<?php echo $asideOneGalleryImgOne ?>" alt="" /></a>

              <a href="<?php echo $asideOneGalleryImgTwo ?>"><img src="<?php echo $asideOneGalleryImgTwo ?>" alt="" /></a>

              <a href="<?php echo $asideOneGalleryImgThree?>"><img src="<?php echo $asideOneGalleryImgThree?>" alt="" /></a>

              <a href="<?php echo $asideOneGalleryImgFour?>" class="landscape"><img src="<?php echo $asideOneGalleryImgFour?>" alt="" /></a>

            </div>
          </div>
        </section>

      <!-- Aside 2 -->
        <section>
          <header>
          <h3><?php echo get_theme_mod('aside_two_heading', 'Small Aside 2 Heading'); ?></h3>
            <p><?php echo get_theme_mod('aside_two_content', $lorem); ?></p>
          </header>
          <div class="content">
            <div class="gallery">
              <?php
                // Gallery Image Paths for site & modal

                $asideTwoGalleryImgOne = get_theme_mod('aside_two_gallery_one', get_theme_file_uri('/images/gallery/fulls/05.jpg') );

                $asideTwoGalleryImgTwo = get_theme_mod('aside_two_gallery_two', get_theme_file_uri('/images/gallery/fulls/06.jpg') );

                $asideTwoGalleryImgThree = get_theme_mod('aside_two_gallery_three', get_theme_file_uri('/images/gallery/fulls/07.jpg') );

              ?>
              <a href="<?php echo $asideTwoGalleryImgOne ?>" class="landscape" ><img src="<?php echo $asideTwoGalleryImgOne ?>" alt="" /></a>

              <a href="<?php echo $asideTwoGalleryImgTwo?>"><img src="<?php echo $asideTwoGalleryImgTwo ?>" alt="" /></a>

              <a href="<?php echo $asideTwoGalleryImgThree ?>"><img src="<?php echo $asideTwoGalleryImgThree ?>" alt="" /></a>
              
            </div>
          </div>
        </section>

      <!-- Aside 3 -->
        <section>
          <header>
            <h3><?php echo get_theme_mod('aside_three_heading', 'Small Aside 3 Heading'); ?></h3>
            <p><?php echo get_theme_mod('aside_three_content', $lorem) ?></p>
          </header>
          <div class="content">
            <div class="gallery">

            <?php
               $asideThreeGalleryImgOne = get_theme_mod('aside_three_gallery_one', get_theme_file_uri('/images/gallery/fulls/08.jpg') );

               $asideThreeGalleryImgTwo= get_theme_mod('aside_three_gallery_two', get_theme_file_uri('/images/gallery/fulls/09.jpg') );

               $asideThreeGalleryImgThree = get_theme_mod('aside_three_gallery_three', get_theme_file_uri('/images/gallery/fulls/10.jpg') );

            ?>
            
              <a href="<?php echo $asideThreeGalleryImgOne ?>" class="portrait"><img src="<?php echo $asideThreeGalleryImgOne ?>" alt="" /></a>
              <a href="<?php echo $asideThreeGalleryImgTwo ?>" class="portrait"><img src="<?php echo $asideThreeGalleryImgTwo ?>" alt="" /></a>
              <a href="<?php echo $asideThreeGalleryImgThree ?>" class="landscape"><img src="<?php echo $asideThreeGalleryImgThree ?>" alt="" /></a>
            </div>
          </div>
        </section>

    </div>
  </section>

<!-- Section -->
  <section>
    <header>
      <h2><?php echo get_theme_mod('body_section_four_heading', 'Section 4 Heading'); ?></h2>
    </header>
    <div class="content">
      <p><?php echo get_theme_mod('body_section_four_content', "<strong>Section 4 Text Strong</strong> {$lorem}"); ?>
      <ul class="actions">
        <li><a href="<?php echo get_theme_mod('body_section_four_button_primary_link', '#'); ?>"  target="_blank" class="button primary large"><?php echo get_theme_mod('body_section_four_button_primary_text', 'Get Started'); ?></a></li>
        <li><a href="<?php echo get_theme_mod('body_section_four_button_secondary_link', '#'); ?>"  target="_blank" class="button large"><?php echo get_theme_mod('body_section_four_button_secondary_text', 'Learn More'); ?></a></li>
      </ul>
    </div>
  </section>

<!-- Elements -->
<!--
  <section>
    <header>
      <h2>Elements</h2>
    </header>
    <div class="content">

      <section>
        <header>
          <h3>Text</h3>
        </header>
        <div class="content">
          <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
          This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
          This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
          <hr />
          <h2>Heading Level 2</h2>
          <h3>Heading Level 3</h3>
          <h4>Heading Level 4</h4>
          <h5>Heading Level 5</h5>
          <hr />
          <h5>Blockquote</h5>
          <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
          <h5>Preformatted</h5>
          <pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'Sorted in ' + i + ' iterations.';</code></pre>
        </div>
      </section>

      <section>
        <header>
          <h3>Lists</h3>
        </header>
        <div class="content">

          <h4>Unordered</h4>
          <ul>
            <li>Dolor pulvinar etiam.</li>
            <li>Sagittis adipiscing.</li>
            <li>Felis enim feugiat.</li>
          </ul>

          <h4>Alternate</h4>
          <ul class="alt">
            <li>Dolor pulvinar etiam.</li>
            <li>Sagittis adipiscing.</li>
            <li>Felis enim feugiat.</li>
          </ul>

          <h4>Ordered</h4>
          <ol>
            <li>Dolor pulvinar etiam.</li>
            <li>Etiam vel felis viverra.</li>
            <li>Felis enim feugiat.</li>
            <li>Dolor pulvinar etiam.</li>
            <li>Etiam vel felis lorem.</li>
            <li>Felis enim et feugiat.</li>
          </ol>
          <h4>Icons</h4>
          <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
          </ul>

          <h4>Actions</h4>
          <ul class="actions">
            <li><a href="#" class="button primary">Default</a></li>
            <li><a href="#" class="button">Default</a></li>
          </ul>
          <ul class="actions stacked">
            <li><a href="#" class="button primary">Default</a></li>
            <li><a href="#" class="button">Default</a></li>
          </ul>
        </div>
      </section>

      <section>
        <header>
          <h3>Table</h3>
        </header>
        <div class="content">
          <h4>Default</h4>
          <div class="table-wrapper">
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Item One</td>
                  <td>Ante turpis integer aliquet porttitor.</td>
                  <td>29.99</td>
                </tr>
                <tr>
                  <td>Item Two</td>
                  <td>Vis ac commodo adipiscing arcu aliquet.</td>
                  <td>19.99</td>
                </tr>
                <tr>
                  <td>Item Three</td>
                  <td> Morbi faucibus arcu accumsan lorem.</td>
                  <td>29.99</td>
                </tr>
                <tr>
                  <td>Item Four</td>
                  <td>Vitae integer tempus condimentum.</td>
                  <td>19.99</td>
                </tr>
                <tr>
                  <td>Item Five</td>
                  <td>Ante turpis integer aliquet porttitor.</td>
                  <td>29.99</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2"></td>
                  <td>100.00</td>
                </tr>
              </tfoot>
            </table>
          </div>

          <h4>Alternate</h4>
          <div class="table-wrapper">
            <table class="alt">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Item One</td>
                  <td>Ante turpis integer aliquet porttitor.</td>
                  <td>29.99</td>
                </tr>
                <tr>
                  <td>Item Two</td>
                  <td>Vis ac commodo adipiscing arcu aliquet.</td>
                  <td>19.99</td>
                </tr>
                <tr>
                  <td>Item Three</td>
                  <td> Morbi faucibus arcu accumsan lorem.</td>
                  <td>29.99</td>
                </tr>
                <tr>
                  <td>Item Four</td>
                  <td>Vitae integer tempus condimentum.</td>
                  <td>19.99</td>
                </tr>
                <tr>
                  <td>Item Five</td>
                  <td>Ante turpis integer aliquet porttitor.</td>
                  <td>29.99</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2"></td>
                  <td>100.00</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </section>

      <section>
        <header>
          <h3>Buttons</h3>
        </header>
        <div class="content">
          <ul class="actions">
            <li><a href="#" class="button primary">Primary</a></li>
            <li><a href="#" class="button">Default</a></li>
          </ul>
          <ul class="actions">
            <li><a href="#" class="button large">Large</a></li>
            <li><a href="#" class="button">Default</a></li>
            <li><a href="#" class="button small">Small</a></li>
          </ul>
          <ul class="actions">
            <li><a href="#" class="button primary icon fa-download">Icon</a></li>
            <li><a href="#" class="button icon fa-download">Icon</a></li>
          </ul>
          <ul class="actions">
            <li><span class="button primary disabled">Disabled</span></li>
            <li><span class="button disabled">Disabled</span></li>
          </ul>
        </div>
      </section>

      <section>
        <header>
          <h3>Form</h3>
        </header>
        <div class="content">
          <form method="post" action="#">
            <div class="fields">
              <div class="field half">
                <label for="demo-name">Name</label>
                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
              </div>
              <div class="field half">
                <label for="demo-email">Email</label>
                <input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
              </div>
              <div class="field">
                <label for="demo-category">Category</label>
                <select name="demo-category" id="demo-category">
                  <option value="">-</option>
                  <option value="1">Manufacturing</option>
                  <option value="1">Shipping</option>
                  <option value="1">Administration</option>
                  <option value="1">Human Resources</option>
                </select>
              </div>
              <div class="field half">
                <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                <label for="demo-priority-low">Low</label>
              </div>
              <div class="field half">
                <input type="radio" id="demo-priority-high" name="demo-priority">
                <label for="demo-priority-high">High</label>
              </div>
              <div class="field half">
                <input type="checkbox" id="demo-copy" name="demo-copy">
                <label for="demo-copy">Email me a copy</label>
              </div>
              <div class="field half">
                <input type="checkbox" id="demo-human" name="demo-human" checked>
                <label for="demo-human">Not a robot</label>
              </div>
              <div class="field">
                <label for="demo-message">Message</label>
                <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
              </div>
            </div>
            <ul class="actions">
              <li><input type="submit" value="Send Message" class="primary" /></li>
              <li><input type="reset" value="Reset" /></li>
            </ul>
          </form>
        </div>
      </section>

    </div>
  </section>
-->



<?php get_footer(); ?>
