<div class="post-card">
    <div class="post-header">
        <img src="<?= $post['avatar'] ?>" alt="Аватар" class="avatar">
        <div class="author-name"><?= $post['author'] ?></div>
    </div>

    <div class="media-container">
        <img src="<?= $post['image'] ?>" alt="Фото" class="post-image">
        <?php if ($post['has_slider']) { ?>
            <span class="image-counter"> 1/3</span>
            <img src="src_home/images/Slider Button.svg" class="slider-button" alt="next">
            <img src="src_home/images/Slider Button.svg" class="slider-button-left" alt="prev">
        <?php } ?>
    </div>

    <?php if ($post['likes'] > 0) { ?>
        <div class="likes-row">
            <img src="src_home/images/heart.png" class="heart" alt="like">
            <span><?= $post['likes'] ?></span>
        </div>
    <?php } ?>

    <?php if (!empty($post['text'])) { ?>
        <div class="post-text">
            <p><?= $post['text'] ?></p>
            <?php if ($post['has_more']) { ?>
                <a href="#" class="more-link">ещё</a>
            <?php } ?>
        </div>
    <?php } ?>

    <?php if (!empty($post['timestamp'])) { ?>
        <div class="timestamp"><?= $post['timestamp'] ?></div>
    <?php } ?>
</div>
