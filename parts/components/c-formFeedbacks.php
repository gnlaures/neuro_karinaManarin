<div class="c-feedbackForm <?php echo $feedbackForm["modifiers"] ?>">
    <div class="c-feedbackForm__status --success u-dnone">
        <div class="c-feedbackForm__status__icon">
            <?php include('media/img/icons/icon_formFeedback_done.svg'); ?>
        </div>
        <div class="c-feedbackForm__status__text"><?php echo $feedbackForm["caption_ok"] ?></div>
        <div class="c-feedbackForm__status__btn">
            <a href="#" class="c-btn --m --primary">
                <div class="c-btn__content">
                    <i class="c-btn__icon"><?php include('media/img/icons/social_mail.svg');?></i>
                    <span class="c-btn__caption"><?php echo $feedbackForm["btn_ok"] ?></span>
                </div>
            </a>
        </div>
    </div>
    <div class="c-feedbackForm__status --fail u-dnone">
        <div class="c-feedbackForm__status__icon">
            <?php include('media/img/icons/icon_formFeedback_error.svg'); ?>
        </div>
        <div class="c-feedbackForm__status__text"><?php echo $feedbackForm["caption_fail"] ?></div>
        <div class="c-feedbackForm__status__btn">
            <a href="#" class="c-btn --m --primary">
                <div class="c-btn__content">
                    <span class="c-btn__caption"><?php echo $feedbackForm["btn_fail"] ?></span>
                </div>
            </a>
        </div>
    </div>
    <div class="c-feedbackForm__status --load u-dnone">
        <div class="c-feedbackForm__status__icon">
            <?php include('media/img/icons/icon_formFeedback_load.svg'); ?>
        </div>
        <div class="c-feedbackForm__status__text"><?php echo $feedbackForm["caption_load"] ?></div>
    </div>
</div>