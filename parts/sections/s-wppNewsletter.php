<section class="s-defaultSection --newsletterWpp u-bg-secondary">
    <div class="s-defaultSection__content">
        <div class="u-container">
            <div class="c-newsletterWpp">
                <div class="c-newsletterWpp__icons">
                    <i><?php include('media/img/icons/social_mail.svg');?></i>
                    <span>+</span>
                    <i><?php include('media/img/icons/social_wpp.svg');?></i>
                </div>
                <div class="c-newsletterWpp__title">
                    <h3>Receba notícias diretamente em seu e-mail e Whatsapp!</h3>
                </div>
                <div class="c-newsletterWpp__form">
                    <form action="#" class="c-form">
                        <form action="#" class="c-form">
                            <div class="c-form__hero">
                                <div class="c-form__field u-fw33">
                                    <div class="c-field --input">
                                        <input type="text" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="c-form__field u-fw33">
                                    <div class="c-field --input">
                                        <input type="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="c-form__field u-fw33">
                                    <div class="c-field --input">
                                        <input type="text" placeholder="Whatsapp">
                                    </div>
                                </div>
                                <div class="c-form__field u-fw70">
                                    <div class="c-field --confirmRead">
                                        <label class="u-noPadding">Ou entre no grupo do Whatsapp pelo <a href="#">link público</a>.</label>
                                    </div>
                                </div>
                                <div class="c-form__field u-fw30">
                                   <div class="c-field --btn">
                                       <button class="c-btn --m --primary">
                                           <div class="c-btn__content">
                                               <span class="c-btn__caption">Cadastrar</span>
                                           </div>
                                       </button>
                                   </div>
                                </div>
                            </div>
                            <div class="c-form__feedback">
                                <?php
                                $feedbackForm = array(
                                    'modifiers' => '',
                                    'caption_ok' => 'Cadastro realizado com sucesso!',
                                    'btn_ok' => 'Cadastrar outro contato',
                                    'caption_fail' => 'Erro ao cadastrar',
                                    'btn_fail' => 'Tentar novamente',
                                    'caption_load' => 'Cadastrando...',
                                );
                                include('parts/components/c-formFeedbacks.php');
                                ?>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>