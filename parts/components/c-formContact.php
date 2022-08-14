<div class="c-contactForm">
    <form action="#" class="c-form" id="contactForm">
        <div class="c-form__hero">
            <div class="c-form__group u-fw100">
                <div class="c-form__field u-fw50">
                    <div class="c-field --input">
                        <label for="#">Nome</label>
                        <input type="text" placeholder="Digite seu nome">
                    </div>
                </div>
                <div class="c-form__field u-fw50">
                    <div class="c-field --input">
                        <label for="#">E-mail</label>
                        <input type="email" placeholder="Digite seu e-mail">
                    </div>
                </div>
                <div class="c-form__field u-fw50">
                    <div class="c-field --input">
                        <label for="#">Telefone</label>
                        <input type="text" placeholder="(XX) XXXXX-XXXX">
                    </div>
                </div>
                <div class="c-form__field u-fw50">
                    <div class="c-field --input">
                        <label for="#">Assunto</label>
                        <input type="text" placeholder="Assunto">
                    </div>
                </div>
                <div class="c-form__field u-fw100">
                    <div class="c-field --confirmRead">
                        <input type="checkbox" id="formId_option2">
                        <label for="formId_option2">Li e concordo com os <a href="termos-de-uso">termos de Uso</a> e com a
                            <a href="privacidade">política de privacidade</a>.</label>
                    </div>
                </div>
                <div class="c-form__field u-fw100">
                    <div class="c-field --textarea">
                        <label for="#">Telefone</label>
                        <textarea name="#" id="#" placeholder="Mensagem"></textarea>
                    </div>
                </div>
                <div class="c-form__field u-fw100">
                    <div class="c-field --btn">
                        <button class="c-btn --m --primary">
                            <div class="c-btn__content">
                                <span class="c-btn__caption">Enviar</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-form__feedback">
            <?php
            $feedbackForm = array(
                'modifiers' => '',
                'caption_ok' => 'E-mail enviado com sucesso!',
                'btn_ok' => 'Enviar outro e-mail',
                'caption_fail' => 'Erro ao enviar',
                'btn_fail' => 'Tentar novamente',
                'caption_load' => 'Enviando...',
            );
            include('parts/components/c-formFeedbacks.php');
            ?>
        </div>
    </form>
</div>