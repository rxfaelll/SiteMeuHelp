<?php
function getFooter(){
    echo '<footer class="darkblue-bg">
                <div class="footer-logo">
                    <span>
                        <img src="img/logo/logoFooter.png" alt="">
                    </span>
                </div>
                <div class="container-links-footer">
                    <a href="">Termos e condições</a>
                    <a href="">Políticas de privacidade</a>
                    <a href="" class="footer-form-btn">Seja representante comercial</a>
                    <a href="">Encontre os parceiros mais próximos</a>
                </div>
                <div class="container-local-footer">
                    <ul>
                        <li>Matriz: Av. Doutor Yojiro<br>  Takaoká • 4384<br>  Cj. 5721 • Alphaville<br>  Santana de Parnaíba</li>
                        <li>Filial: R. Josef Zarzour • 93<br>  Cj. 801 • Centro • Guarulhos</li>
                    </ul>
                </div>
                <div>
                    <div class="container-social-footer">
                        <a target="_blank" href="https://www.facebook.com/meuhelp/"><img src="img/icon/facebook2.png" alt="">meuhelp</a>
                        <a target="_blank" href="https://www.instagram.com/meuhelp_ja/"><img src="img/icon/instagram2.png" alt="">@meuhelp_ja</a>
                        <span>Em breve:</span>
                        <a href=""><img src="img/icon/googleplay.png" alt=""></a>
                        <a href=""><img src="img/icon/appstore.png" alt=""></a>
                    </div>
                </div>
                <div id="footerFormBlur" class="footer-form-blur-closed"></div>
                <div class="footer-form">
                    <div class="js-close-footer-form-button close-form-btn">
                        <div></div>
                        <div></div>
                    </div>
                    <h1>Seja um Representante Comercial!</h1>
                    <h4>Cadastre seus dados que nossa equipe fará contato</h4>
                    <link rel="stylesheet" href="css/FooterForm.css">
                    <div style="text-align: center;">
                        <form method="POST" action="https://meuhelp.activehosted.com/proc.php" id="_form_20_" class="_form _form_20 _inline-form _inline-style _dark" novalidate>
                        <input type="hidden" name="u" value="20" />
                        <input type="hidden" name="f" value="20" />
                        <input type="hidden" name="s" />
                        <input type="hidden" name="c" value="0" />
                        <input type="hidden" name="m" value="0" />
                        <input type="hidden" name="act" value="sub" />
                        <input type="hidden" name="v" value="2" />
                        <div class="_form-content">
                            <div class="_form_element _x72916345 _inline-style " >
                            <label class="_form-label">
                                Nome completo
                            </label>
                            <div class="_field-wrapper">
                                <input type="text" name="fullname" placeholder="Digite seu nome" />
                            </div>
                            </div>
                            <div class="_form_element _field38 _inline-style " >
                            <label class="_form-label">
                                Telefone
                            </label>
                            <div class="_field-wrapper">
                                <input type="text" name="field[38]" value="" placeholder="" />
                            </div>
                            </div>
                            <div class="_form_element _x19971259 _inline-style " >
                            <label class="_form-label">
                                E-mail*
                            </label>
                            <div class="_field-wrapper">
                                <input type="text" name="email" placeholder="Digite seu e-mail" required/>
                            </div>
                            </div>
                            <div class="_form_element _field37 _inline-style " >
                            <label class="_form-label">
                                Endereço
                            </label>
                            <div class="_field-wrapper">
                                <input type="text" name="field[37]" value="" placeholder="" />
                            </div>
                            </div>
                            <div class="_form_element _field2 _inline-style " >
                            <label class="_form-label">
                                Cidade
                            </label>
                            <div class="_field-wrapper">
                                <input type="text" name="field[2]" value="" placeholder="" />
                            </div>
                            </div>
                            <div class="_form_element _field3 _inline-style " >
                            <label class="_form-label">
                                Estado
                            </label>
                            <div class="_field-wrapper">
                                <input type="text" name="field[3]" value="" placeholder="" />
                            </div>
                            </div>
                            <div class="_button-wrapper _inline-style">
                            <button id="_form_20_submit" class="_submit" type="submit">
                                Enviar
                            </button>
                            </div>
                            <div class="_clear-element">
                            </div>
                        </div>
                        <div class="_form-thank-you" style="display:none;">
                        </div>
                        </form>
                    </div>
                    <script src="js/footerForm.js">   
                    </script>
                </div>                       
            </footer>
            <script src="js/openFooterForm.js"></script>';
}
?>