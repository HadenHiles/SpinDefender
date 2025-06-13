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

    // Set grid-item width/height based on video aspect ratio, then init Masonry
    var $grid = $('.grid');
    if ($grid.length && typeof Masonry !== 'undefined') {
        var $items = $grid.find('.grid-item');
        var pending = $items.length;
        $items.each(function () {
            var $item = $(this);
            var $video = $item.find('video.action-video')[0];
            if ($video) {
                if ($video.readyState >= 1) {
                    setAspect($item, $video);
                    checkDone();
                } else {
                    $($video).one('loadedmetadata', function () {
                        setAspect($item, $video);
                        checkDone();
                    });
                }
            } else {
                // fallback for images or placeholders
                var $img = $item.find('img.video-placeholder')[0];
                if ($img && $img.complete) {
                    setAspect($item, $img);
                    checkDone();
                } else if ($img) {
                    $($img).one('load', function () {
                        setAspect($item, $img);
                        checkDone();
                    });
                } else {
                    checkDone();
                }
            }
        });
        function setAspect($item, media) {
            var w = media.videoWidth || media.naturalWidth || 16;
            var h = media.videoHeight || media.naturalHeight || 9;
            if (w && h) {
                var aspect = w / h;
                // Set width to 100% and height based on aspect ratio
                $item.css({ width: '', height: '' }); // reset
                $item.width($item.parent().width() * 0.24); // 4 columns
                $item.height($item.width() / aspect);
            }
        }
        function checkDone() {
            pending--;
            if (pending <= 0) {
                $grid.masonry({
                    itemSelector: '.grid-item',
                    columnWidth: '.grid-sizer',
                    percentPosition: true
                });
            }
        }
    }
});
