<?php
/*
Template Name: Spin Defender Landing
Description: A modern, product-focused landing page for Spin Defender.
*/
get_header(); ?>
<main id="main-content">
    <section class="hero" style="position:relative;overflow:hidden;">
        <video class="hero-bg-video" autoplay loop muted playsinline style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:0;">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/temporary-header-video.mp4" type="video/mp4">
        </video>
        <div style="position:relative;z-index:1;">
            <h1>Spin Defender</h1>
            <p>Train like the pros. The ultimate hockey skills trainer for fast hands, quick feet, and game-ready moves. <span style="color:#00ff5a; font-weight:700;">#PotentHockey</span></p>
            <img class="hero-image" src="https://placehold.it/500x350/111/00ff5a?text=Spin+Defender+in+Action" alt="Spin Defender Product Hero">
            <a href="#buy" class="cta-btn">Get Yours Now</a>
        </div>
    </section>
    <section class="product-section" id="product">
        <img class="product-image" src="https://placehold.it/400x400/000/00ff5a?text=Spin+Defender+Product" alt="Spin Defender Product">
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
    </section>
    <section class="testimonials">
        <h3>What Players & Coaches Say</h3>
        <div style="display:flex; flex-wrap:wrap; gap:2rem; justify-content:center;">
            <div class="testimonial">
                <img src="https://placehold.it/80x80/00ff5a/000?text=IG" alt="Instagram">
                <p>“The Spin Defender is a game changer for stickhandling and reaction time. My team loves it!”</p>
                <span>@potenthockey</span>
            </div>
            <div class="testimonial">
                <img src="https://placehold.it/80x80/00ff5a/000?text=FB" alt="Facebook">
                <p>“Nothing else pushes my skills like this. The Spin Defender is intense and fun!”</p>
                <span>@hockeytraining</span>
            </div>
            <div class="testimonial">
                <img src="https://placehold.it/80x80/00ff5a/000?text=TW" alt="Twitter">
                <p>“If you want to get creative and fast with the puck, you need the Spin Defender.”</p>
                <span>@coachmike</span>
            </div>
        </div>
    </section>
    <section class="social-showcase">
        <h2>Spin Defender in Action</h2>
        <div class="social-grid">
            <?php
            $video_files = [
                'spin-defender-vid-1.mp4',
                'spin-defender-vid-2.mp4',
                'spin-defender-vid-3.mp4',
                'spin-defender-vid-4.mp4'
            ];
            $theme_url = get_template_directory_uri();
            foreach ($video_files as $idx => $video) {
                $video_path = get_template_directory() . '/assets/' . $video;
                $video_url = $theme_url . '/assets/' . $video;
                echo '<div class="social-card">';
                if (file_exists($video_path)) {
                    echo '<video width="320" height="180" controls poster="https://placehold.it/320x180/111/00ff5a?text=Spin+Defender+Video"><source src="' . esc_url($video_url) . '" type="video/mp4">Your browser does not support the video tag.</video>';
                } else {
                    echo '<img src="https://placehold.it/320x180/111/00ff5a?text=No+Video+Available" alt="Placeholder Video">';
                }
                echo '<div class="social-label">Spin Defender Video ' . ($idx + 1) . '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>
    <section class="cta-section" id="buy">
        <h2>Ready to Train Harder?</h2>
        <p>Order your Spin Defender today and join the next generation of hockey players.</p>
        <a href="#" class="cta-btn">Shop Now</a>
    </section>
</main>
<?php get_footer(); ?>