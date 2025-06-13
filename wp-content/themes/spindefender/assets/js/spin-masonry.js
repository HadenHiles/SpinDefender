$(document).ready(function () {
    // Play/pause logic for videos
    $('.grid-item').each(function () {
        var card = $(this);
        var video = card.find('video.action-video');
        var btn = card.find('.play-pause-btn');
        var playIcon = btn.find('.play-icon');
        var pauseIcon = btn.find('.pause-icon');
        if (!video.length) return;

        // Show play button on hover/focus if video is paused
        card.on('mouseenter focusin', function () {
            if (video[0].paused) btn.addClass('visible');
        });
        card.on('mouseleave focusout', function () {
            if (video[0].paused) btn.removeClass('visible');
        });

        // Play/pause on hover (mouseenter = play, mouseleave = pause)
        card.on('mouseenter', function () {
            if (video[0].paused) {
                video[0].play();
            }
        });
        card.on('mouseleave', function () {
            if (!video[0].paused) {
                video[0].pause();
            }
        });

        // Play/pause button logic (click)
        btn.on('click', function (e) {
            e.stopPropagation();
            if (video[0].paused) {
                video[0].play();
            } else {
                video[0].pause();
            }
            updateBtn();
        });
        // Allow clicking on the card (not button) to play/pause
        card.on('click', function (e) {
            if ($(e.target).is('.play-pause-btn, .play-pause-btn *')) return;
            if (video[0].paused) {
                video[0].play();
            } else {
                video[0].pause();
            }
            updateBtn();
        });
        video.on('play pause', updateBtn);
        function updateBtn() {
            if (video[0].paused) {
                playIcon.show();
                pauseIcon.hide();
                btn.addClass('visible');
            } else {
                playIcon.hide();
                pauseIcon.show();
                btn.removeClass('visible');
            }
        }
        video.on('loadedmetadata', function () {
            video[0].currentTime = 0.1;
            updateBtn();
        });
        // Ensure correct button state on load
        updateBtn();
    });
    // Masonry initialization (CodePen logic)
    var $grid = $('.grid');
    if ($grid.length && typeof Masonry !== 'undefined') {
        $grid.masonry({
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });
    }
});
