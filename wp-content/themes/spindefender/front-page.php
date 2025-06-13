<?php
/*
Template Name: Spin Defender Landing
Description: A modern, product-focused landing page for Spin Defender.
*/
get_header(); ?>
<main id="main-content">
    <section class="hero">
        <div class="hero-inner">
            <div class="hero-content">
                <h1>Spin Defender</h1>
                <p>Train like the pros. The ultimate hockey skills trainer for fast hands, quick feet, and game-ready moves.</p>
                <a href="#buy" class="cta-btn">Get Yours Now</a>
            </div>
            <div class="hero-image-wrap">
                <img class="hero-image" src="https://place-hold.it/500x350/393E46/7BC74D?text=Spin+Defender+in+Action" alt="Spin Defender Product Hero">
            </div>
        </div>
    </section>
    <section class="product-section">
        <div class="product-inner">
            <div class="product-image-wrap">
                <img class="product-image" src="https://place-hold.it/400x400/222831/7BC74D?text=Spin+Defender+Product" alt="Spin Defender Product">
            </div>
            <div class="product-info">
                <h2>Unleash Your Potential</h2>
                <p>Spin Defender is the dynamic hockey training tool that simulates a real defender. Two rotating sticks force you to react, adapt, and improve your puck handling, agility, and creativity—on and off the ice.</p>
                <ul>
                    <li>✔️ Fast-paced, game-like drills</li>
                    <li>✔️ Perfect for all ages and skill levels</li>
                    <li>✔️ Used by elite players and coaches</li>
                    <li>✔️ Portable, durable, and easy to set up</li>
                </ul>
                <a href="#buy" class="cta-btn">Buy Now</a>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="testimonials-inner">
            <h3>What Players & Coaches Say</h3>
            <div class="testimonials-list">
                <div class="testimonial">
                    <img src="https://place-hold.it/80x80/7BC74D/222831?text=IG" alt="Instagram">
                    <p>“The Spin Defender is a game changer for stickhandling and reaction time. My team loves it!”</p>
                </div>
                <div class="testimonial">
                    <img src="https://place-hold.it/80x80/7BC74D/222831?text=FB" alt="Facebook">
                    <p>“Nothing else pushes my skills like this. The Spin Defender is intense and fun!”</p>
                </div>
                <div class="testimonial">
                    <img src="https://place-hold.it/80x80/7BC74D/222831?text=TW" alt="Twitter">
                    <p>“If you want to get creative and fast with the puck, you need the Spin Defender.”</p>
                    <span>@coachmike</span>
                </div>
            </div>
        </div>
    </section>
    <section class="social-showcase">
        <h2>Spin Defender in Action</h2>
        <div class="grid">
            <div class="grid-sizer"></div>
            <?php
            $action_videos = [
                get_template_directory_uri() . '/assets/media/spin-defender-vid-1.mp4',
                get_template_directory_uri() . '/assets/media/spin-defender-vid-2.mp4',
                get_template_directory_uri() . '/assets/media/spin-defender-vid-3.mp4',
                get_template_directory_uri() . '/assets/media/spin-defender-vid-4.mp4',
            ];
            foreach ($action_videos as $video_path_url):
                $video_path = str_replace(get_template_directory_uri(), get_template_directory(), $video_path_url);
            ?>
                <div class="grid-item">
                    <?php if (file_exists($video_path)): ?>
                        <video class="action-video" preload="auto" tabindex="0" poster="" muted>
                            <source src="<?= esc_url($video_path_url) ?>#t=0.1" type="video/mp4">Your browser does not support the video tag.
                        </video>
                        <button class="play-pause-btn" aria-label="Play/Pause">
                            <span class="play-icon"></span>
                            <span class="pause-icon"><span></span><span></span></span>
                        </button>
                    <?php else: ?>
                        <img src="https://place-hold.it/320x180/222831/7BC74D?text=No+Video+Available" alt="Placeholder Video" class="video-placeholder">
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/spin-masonry.js"></script>