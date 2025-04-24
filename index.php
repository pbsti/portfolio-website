<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while (have_posts()): the_post()?>

            <?php
                // Fetch data from page
                $heroHeadline = get_field("hero_headline");
                $heroSubheading = get_field("hero_subheading");
                $heroDescription = get_field("hero_description");
                $heroButtonLeft = get_field("hero_button_left");
                $heroButtonRight = get_field("hero_button_right");
                $heroImage = get_field("hero_image");

                $aboutHeadline = get_field("about_headline");
                $aboutDescription = get_field("about_description");
                $aboutSubheading = get_field("about_subheading");
                $aboutSkills = get_field("about_skills");
                $aboutButton = get_field("about_button");
                $aboutVideo = get_field("about_video");

                $workHeadline = get_field("work_headline");
                $workSubheading = get_field("work_subheading");

                $contactHeadline = get_field("contact_headline");
                $contactTagline = get_field("contact_tagline");
                $contactDescription = get_field("contact_description");
                $contactPhoneNumber = get_field("contact_phone_number");
                $contactEmail = get_field("contact_email");
                $contactLink = get_field("contact_link");
                $contactImage= get_field("contact_image");
            

            ?>

        <section id="hero" class="hero-block col-12" style="padding-top: 62px;">
            <div class="hero-area col-10">
                <div class="hero-image">
                    <img src="<?php echo esc_url($heroImage["url"])?>" class="frame" alt="profile image"/>
                </div>
                <div class="content-text">
                    <h1><?php echo esc_html($heroHeadline)?></h1>
                    <h3><?php echo esc_html($heroSubheading)?></h3>
                    <p class="space"><?php echo esc_html($heroDescription)?></p>
                    <div class="button-container">
                    <a href="#about">
                        <button><?php echo esc_html($heroButtonLeft)?></button>
                    </a>
                    <a href="#work">
                        <button><?php echo esc_html($heroButtonRight)?></button>
                    </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about-block col-12">
            <div class="about-area col-10">
                <div class="content-text">
                    <h2><?php echo esc_html($aboutHeadline)?></h2>
                    <p class="space-small"><?php echo esc_html($aboutDescription)?></p>
                    <h3><?php echo esc_html($aboutSubheading)?></h3>
                    <p class="space"><?php echo esc_html($aboutSkills)?></p>
                    <div class="button-container">
                        <a href="<?php echo esc_url($aboutButton['url']); ?>" download class="download-link">
                            <button>DOWNLOAD CV</button>
                        </a>
                    </div>
                </div>
                <div class="video-cv">
                    <div class="frame-cv">
                        <iframe src="<?php echo esc_html($aboutVideo)?>" frameborder="0" allowfullscreen style=" width: 100%; height:100%;"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section id="work" class="work-block col-12">
            <h2><?php echo esc_html($workHeadline)?></h2>
            <p><?php echo esc_html($workSubheading)?></p>
            <?php get_template_part("template-parts/index", "work") ?>
        </section>

        <section id="contact" class="contact-block col-12">
            <h2><?php echo esc_html($contactHeadline)?></h2>
            <div class="contact-area col-10">
                <div class="contact-image">
                    <img src="<?php echo esc_url($contactImage["url"])?>" class="frame" alt="qr-code"/>
                </div>
                <div class="contact-text">
                    <h3><?php echo esc_html($contactTagline)?></h3>
                    <p class="space-small"><?php echo esc_html($contactDescription)?></p>
                    <div class="contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <p><?php echo esc_html($contactPhoneNumber)?></p>
                    </div>
                    <div class="contact-item"style="padding:1rem 0;">
                        <i class="fa-solid fa-envelope"></i> 
                        <p><?php echo esc_html($contactEmail)?></p>
                    </div>
                        <div class="contact-item">
                        <i class="fa-brands fa-linkedin"></i>
                        <a href="https://www.linkedin.com/in/paulina-stiuj-180699"><?php echo esc_html($contactLink)?></a>
                    </div>
                </div>
            </div>
        </section>

        <?php endwhile ?>
    <?php endif ?>
<?php get_footer()?>