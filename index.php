<?php 
    include 'php/header.php';
    include 'php/fixedSocialBar.php';
    include 'php/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/mobile/indexMobile.css">
    <link rel="stylesheet" href="css/mobile/mainMobile.css">
    <title>Meu Help</title>
</head>
<body>

    <!-- Header -->
    <?php
        getHeader();
    ?>

    <!-- Fixed social bar -->
    <?php
        getFixedSocialBar();
    ?>

    <main>

        <!-- Landpage -->
        <img src="img/fundos/fundoMain.png" alt="" class="bg-main">
        <div class="container-landpage">
            <div class="image-container">
                <img src="img/imagens/img4.png" alt="" class="img-mob">
                <img src="img/imagens/img1.png" alt="" class="img-desk">
            </div>            
            <div class="landpage-content">
                <h1>O <strong>Meu<span>Help</span></strong> é um cartão de crédito  pré-pago com multibenefícios,
                    que  oferece a você muita economia, acesso a serviços de assistências e saúde 24 horas.
                </h1>
                <a href="" class="normal-button lightblue-bg scroll-down-btn">Quero agora</a>
            </div>
        </div>
        
        <!-- Second content -->
        <div class="container-second-content">
            <div>
                <h1>Sua conta digital, com serviços de <span>saúde e assistência 24 horas</span></h1>
                <h2>O <strong>Meu<span>Help</span></strong> é uma solução multibenefícios, também com a função crédito pré-pago,
                    que oferece ao associado muita economia,
                    acesso a serviços de saúde e assistência 24 horas.
                </h2>
                <a href="beneficios" class="normal-button yellow-bg">Saiba mais</a>
            </div>
            <div class="image-container">
                <img src="img/imagens/img2.png" alt="Mulher feliz com o cartão pré-pago Meu Help" class="hide-content">
            </div>
        </div>

        <!-- Planos -->
        <div class="container-planos">

            <!-- Card Planos -->
            <h1>Planos Meu Help</h1>
            <div class="planos-content">
                <!-- Card 1 -->
                <div class="card card-plano">
                    <div>
                        <h2>Individual</h2>
                        <img src="img/icon/iconPlano1.png" alt="">  
                    </div>
                    <div>
                        <br>
                        <h1>39,90</h1>
                        <h6>por mês</h6>
                        <br>
                    </div>
                    <div class="card-btn">
                        <a href="" class="normal-button darkblue-bg">Saiba mais</a>
                        <a href="" class="normal-button yellow-bg" onclick="openForm(event, 1)">Contrate Já</a>
                    </div>
                </div>
                <div class="form-container-1">
                    <h3>Preencha o formulário para entrarmos em contato com você</h3>
                        <style>
                            #_form_10_ { font-size:14px; line-height:1.6; font-family:arial, helvetica, sans-serif; margin:0; }
                            #_form_10_ * { outline:0; }
                            ._form_hide { display:none; visibility:hidden; }
                            ._form_show { display:block; visibility:visible; }
                            #_form_10_._form-top { top:0; }
                            #_form_10_._form-bottom { bottom:0; }
                            #_form_10_._form-left { left:0; }
                            #_form_10_._form-right { right:0; }
                            #_form_10_ input[type="text"],#_form_10_ input[type="date"],#_form_10_ textarea { padding:6px; height:auto; border:#979797 1px solid; border-radius:4px; color:#000 !important; font-size:13px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
                            #_form_10_ textarea { resize:none; }
                            #_form_10_ ._submit { -webkit-appearance:none; cursor:pointer; font-family:arial, sans-serif; font-size:14px; text-align:center; background:#333 !important; border:0 !important; -moz-border-radius:4px !important; -webkit-border-radius:4px !important; border-radius:4px !important; color:#fff !important; padding:10px !important; }
                            #_form_10_ ._close-icon { cursor:pointer; background-image:url('https://d226aj4ao1t61q.cloudfront.net/esfkyjh1u_forms-close-dark.png'); background-repeat:no-repeat; background-size:14.2px 14.2px; position:absolute; display:block; top:11px; right:9px; overflow:hidden; width:16.2px; height:16.2px; }
                            #_form_10_ ._close-icon:before { position:relative; }
                            #_form_10_ ._form-body { margin-bottom:30px; }
                            #_form_10_ ._form-image-left { width:150px; float:left; }
                            #_form_10_ ._form-content-right { margin-left:164px; }
                            #_form_10_ ._form-branding { color:#fff; font-size:10px; clear:both; text-align:left; margin-top:30px; font-weight:100; }
                            #_form_10_ ._form-branding ._logo { display:block; width:130px; height:14px; margin-top:6px; background-image:url('https://d226aj4ao1t61q.cloudfront.net/hh9ujqgv5_aclogo_li.png'); background-size:130px auto; background-repeat:no-repeat; }
                            #_form_10_ ._form-label,#_form_10_ ._form_element ._form-label { font-weight:bold; margin-bottom:5px; display:block; }
                            #_form_10_._dark ._form-branding { color:#333; }
                            #_form_10_._dark ._form-branding ._logo { background-image:url('https://d226aj4ao1t61q.cloudfront.net/jftq2c8s_aclogo_dk.png'); }
                            #_form_10_ ._form_element { position:relative; margin-bottom:10px; font-size:0; max-width:100%; }
                            #_form_10_ ._form_element * { font-size:14px; }
                            #_form_10_ ._form_element._clear { clear:both; width:100%; float:none; }
                            #_form_10_ ._form_element._clear:after { clear:left; }
                            #_form_10_ ._form_element input[type="text"],#_form_10_ ._form_element input[type="date"],#_form_10_ ._form_element select,#_form_10_ ._form_element textarea:not(.g-recaptcha-response) { display:block; width:100%; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
                            #_form_10_ ._field-wrapper { position:relative; }
                            #_form_10_ ._inline-style { float:left; margin-left: 20px; margin-bottom: 20px;}
                            #_form_10_ ._inline-style input[type="text"] { width:150px; }
                            /* #_form_10_ ._inline-style:not(._clear) + ._inline-style:not(._clear) { margin-left:20px; } */
                            #_form_10_ ._form_element img._form-image { max-width:100%; }
                            #_form_10_ ._clear-element { clear:left; }
                            #_form_10_ ._full_width { width:100%; }
                            #_form_10_ ._form_full_field { display:block; width:100%; margin-bottom:10px; }
                            #_form_10_ input[type="text"]._has_error,#_form_10_ textarea._has_error { border:#f37c7b 1px solid; }
                            #_form_10_ input[type="checkbox"]._has_error { outline:#f37c7b 1px solid; }
                            #_form_10_ ._error { display:block; position:absolute; font-size:13px; z-index:10000001; }
                            #_form_10_ ._error._above { padding-bottom:4px; bottom:39px; right:0; }
                            #_form_10_ ._error._below { padding-top:4px; top:100%; right:0; }
                            #_form_10_ ._error._above ._error-arrow { bottom:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #f37c7b; }
                            #_form_10_ ._error._below ._error-arrow { top:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-bottom:5px solid #f37c7b; }
                            #_form_10_ ._error-inner { padding:8px 12px; background-color:#f37c7b; font-size:13px; font-family:arial, sans-serif; color:#fff; text-align:center; text-decoration:none; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px; }
                            #_form_10_ ._error-inner._form_error { margin-bottom:5px; text-align:left; }
                            #_form_10_ ._button-wrapper ._error-inner._form_error { position:static; }
                            #_form_10_ ._error-inner._no_arrow { margin-bottom:10px; }
                            #_form_10_ ._error-arrow { position:absolute; width:0; height:0; }
                            #_form_10_ ._error-html { margin-bottom:10px; }
                            .pika-single { z-index:10000001 !important; }
                            @media all and (min-width:320px) and (max-width:667px) { ::-webkit-scrollbar { display:none; }
                            #_form_10_ { margin:0; width:100%; min-width:100%; max-width:100%; box-sizing:border-box; }
                            #_form_10_ * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; font-size:1em; }
                            #_form_10_ ._form-content { margin:0; width:100%; }
                            #_form_10_ ._form-inner { display:block; min-width:100%; }
                            #_form_10_ ._form-title,#_form_10_ ._inline-style { margin-top:0; margin-right:0; margin-left:0; }
                            #_form_10_ ._form-title { font-size:1.2em; }
                            #_form_10_ ._form_element { margin:0 0 20px; padding:0; width:100%; }
                            #_form_10_ ._form-element,#_form_10_ ._inline-style,#_form_10_ input[type="text"],#_form_10_ label,#_form_10_ p,#_form_10_ textarea:not(.g-recaptcha-response) { float:none; display:block; width:100%; }
                            #_form_10_ ._row._checkbox-radio label { display:inline; }
                            #_form_10_ ._row,#_form_10_ p,#_form_10_ label { margin-bottom:0.7em; width:100%; }
                            #_form_10_ ._row input[type="checkbox"],#_form_10_ ._row input[type="radio"] { margin:0 !important; vertical-align:middle !important; }
                            #_form_10_ ._row input[type="checkbox"] + span label { display:inline; }
                            #_form_10_ ._row span label { margin:0 !important; width:initial !important; vertical-align:middle !important; }
                            #_form_10_ ._form-image { max-width:100%; height:auto !important; }
                            #_form_10_ input[type="text"] { padding-left:10px; padding-right:10px; font-size:16px; line-height:1.3em; -webkit-appearance:none; }
                            #_form_10_ input[type="radio"],#_form_10_ input[type="checkbox"] { display:inline-block; width:1.3em; height:1.3em; font-size:1em; margin:0 0.3em 0 0; vertical-align:baseline; }
                            #_form_10_ button[type="submit"] { padding:20px; font-size:1.5em; }
                            #_form_10_ ._inline-style { margin:20px 0 0 !important; }
                            }
                            #_form_10_ { position:relative; text-align:left; margin:25px auto 0; padding:20px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; *zoom:1; background:#fff !important; border:0px solid #b0b0b0 !important; -moz-border-radius:0px !important; -webkit-border-radius:0px !important; border-radius:0px !important; color:#000 !important; }
                            #_form_10_ ._form-title { font-size:22px; line-height:22px; font-weight:600; margin-bottom:0; }
                            #_form_10_:before,#_form_10_:after { content:" "; display:table; }
                            #_form_10_:after { clear:both; }
                            #_form_10_._inline-style { width:auto; display:inline-block; }
                            #_form_10_._inline-style input[type="text"],#_form_10_._inline-style input[type="date"] { padding:10px 12px; }
                            #_form_10_._inline-style button._inline-style { position:relative; top:27px; }
                            #_form_10_._inline-style p { margin:0; }
                            #_form_10_._inline-style ._button-wrapper { position:relative; margin:27px 12.5px 0 20px; }
                            #_form_10_ ._form-thank-you { position:relative; left:0; right:0; text-align:center; font-size:18px; }
                            @media all and (min-width:320px) and (max-width:667px) { #_form_10_._inline-form._inline-style ._inline-style._button-wrapper { margin-top:20px !important; margin-left:0 !important; }
                            }
                        </style>
                        <div style="text-align: center;">
                            <form method="POST" action="https://meuhelp.activehosted.com/proc.php" id="_form_10_" class="_form _form_10 _inline-form _inline-style _dark" novalidate>
                            <input type="hidden" name="u" value="10" />
                            <input type="hidden" name="f" value="10" />
                            <input type="hidden" name="s" />
                            <input type="hidden" name="c" value="0" />
                            <input type="hidden" name="m" value="0" />
                            <input type="hidden" name="act" value="sub" />
                            <input type="hidden" name="v" value="2" />
                            <div class="_form-content">
                                <div class="_form_element _x88494245 _inline-style " >
                                <label class="_form-label">
                                    Nome completo*
                                </label>
                                <div class="_field-wrapper">
                                    <input type="text" name="fullname" placeholder="Digite seu nome" required/>
                                </div>
                                </div>
                                <div class="_form_element _field6 _inline-style " >
                                <label class="_form-label">
                                    CPF*
                                </label>
                                <div class="_field-wrapper">
                                    <input type="text" name="field[6]" value="" placeholder="Digite seu CPF" required/>
                                </div>
                                </div>
                                <div class="_form_element _x44611527 _inline-style " >
                                <label class="_form-label">
                                    E-mail*
                                </label>
                                <div class="_field-wrapper">
                                    <input type="text" name="email" placeholder="Digite seu e-mail" required/>
                                </div>
                                </div>
                                <div class="_form_element _x57409484 _inline-style " >
                                <label class="_form-label">
                                    Telefone*
                                </label>
                                <div class="_field-wrapper">
                                    <input type="text" name="phone" placeholder="Digite seu telefone" required/>
                                </div>
                                </div>
                                <div class="_form_element _field37 _inline-style " >
                                <label class="_form-label">
                                    Endereço*
                                </label>
                                <div class="_field-wrapper">
                                    <input type="text" name="field[37]" value="" placeholder="" required/>
                                </div>
                                </div>
                                <div class="_form_element _field16 _inline-style " >
                                <label class="_form-label">
                                    CEP*
                                </label>
                                <div class="_field-wrapper">
                                    <input type="text" name="field[16]" value="" placeholder="" required/>
                                </div>
                                </div>
                                <div class="_form_element _field2 _inline-style " >
                                <label class="_form-label">
                                    Cidade*
                                </label>
                                <div class="_field-wrapper">
                                    <input type="text" name="field[2]" value="" placeholder="" required/>
                                </div>
                                </div>
                                <div class="_form_element _field3 _inline-style " >
                                <label class="_form-label">
                                    Estado*
                                </label>
                                <div class="_field-wrapper">
                                    <input type="text" name="field[3]" value="" placeholder="" required/>
                                </div>
                                </div>
                                <div class="_button-wrapper _inline-style">
                                <button id="_form_10_submit" class="_submit" type="submit">
                                    Enviar
                                </button>
                                </div>
                                <div class="_clear-element">
                                </div>
                            </div>
                            <div class="_form-thank-you" style="display:none;">
                            </div>
                            </form>
                        </div><script type="text/javascript">
                        window.cfields = {"6":"cpf","37":"endereo","16":"cep","2":"cidade","3":"estado"};
                        window._show_thank_you = function(id, message, trackcmp_url) {
                            var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
                            form.querySelector('._form-content').style.display = 'none';
                            thank_you.innerHTML = message;
                            thank_you.style.display = 'block';
                            if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
                            // Site tracking URL to use after inline form submission.
                            _load_script(trackcmp_url);
                            }
                            if (typeof window._form_callback !== 'undefined') window._form_callback(id);
                        };
                        window._show_error = function(id, message, html) {
                            var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
                            if (old_error) old_error.parentNode.removeChild(old_error);
                            err.innerHTML = message;
                            err.className = '_error-inner _form_error _no_arrow';
                            var wrapper = document.createElement('div');
                            wrapper.className = '_form-inner';
                            wrapper.appendChild(err);
                            button.parentNode.insertBefore(wrapper, button);
                            document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
                            if (html) {
                            var div = document.createElement('div');
                            div.className = '_error-html';
                            div.innerHTML = html;
                            err.appendChild(div);
                            }
                        };
                        window._load_script = function(url, callback) {
                            var head = document.querySelector('head'), script = document.createElement('script'), r = false;
                            script.type = 'text/javascript';
                            script.charset = 'utf-8';
                            script.src = url;
                            if (callback) {
                                script.onload = script.onreadystatechange = function() {
                                if (!r && (!this.readyState || this.readyState == 'complete')) {
                                r = true;
                                callback();
                                }
                                };
                            }
                            head.appendChild(script);
                        };
                        (function() {
                            if (window.location.search.search("excludeform") !== -1) return false;
                            var getCookie = function(name) {
                            var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
                            return match ? match[2] : null;
                            }
                            var setCookie = function(name, value) {
                            var now = new Date();
                            var time = now.getTime();
                            var expireTime = time + 1000 * 60 * 60 * 24 * 365;
                            now.setTime(expireTime);
                            document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
                            }
                                var addEvent = function(element, event, func) {
                            if (element.addEventListener) {
                                element.addEventListener(event, func);
                            } else {
                                var oldFunc = element['on' + event];
                                element['on' + event] = function() {
                                oldFunc.apply(this, arguments);
                                func.apply(this, arguments);
                                };
                            }
                            }
                            var _removed = false;
                            var form_to_submit = document.getElementById('_form_10_');
                            var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

                            var getUrlParam = function(name) {
                            var regexStr = '[\?&]' + name + '=([^&#]*)';
                            var results = new RegExp(regexStr, 'i').exec(window.location.href);
                            return results != undefined ? decodeURIComponent(results[1]) : false;
                            };

                            for (var i = 0; i < allInputs.length; i++) {
                            var regexStr = "field\\[(\\d+)\\]";
                            var results = new RegExp(regexStr).exec(allInputs[i].name);
                            if (results != undefined) {
                                allInputs[i].dataset.name = window.cfields[results[1]];
                            } else {
                                allInputs[i].dataset.name = allInputs[i].name;
                            }
                            var fieldVal = getUrlParam(allInputs[i].dataset.name);

                            if (fieldVal) {
                                if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
                                if (allInputs[i].value == fieldVal) {
                                    allInputs[i].checked = true;
                                }
                                } else {
                                allInputs[i].value = fieldVal;
                                }
                            }
                            }

                            var remove_tooltips = function() {
                            for (var i = 0; i < tooltips.length; i++) {
                                tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
                            }
                                tooltips = [];
                            };
                            var remove_tooltip = function(elem) {
                            for (var i = 0; i < tooltips.length; i++) {
                                if (tooltips[i].elem === elem) {
                                tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
                                tooltips.splice(i, 1);
                                return;
                                }
                            }
                            };
                            var create_tooltip = function(elem, text) {
                            var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
                            if (elem.type != 'radio' && elem.type != 'checkbox') {
                                tooltip.className = '_error';
                                arrow.className = '_error-arrow';
                                inner.className = '_error-inner';
                                inner.innerHTML = text;
                                tooltip.appendChild(arrow);
                                tooltip.appendChild(inner);
                                elem.parentNode.appendChild(tooltip);
                            } else {
                                tooltip.className = '_error-inner _no_arrow';
                                tooltip.innerHTML = text;
                                elem.parentNode.insertBefore(tooltip, elem);
                                new_tooltip.no_arrow = true;
                            }
                            new_tooltip.tip = tooltip;
                            new_tooltip.elem = elem;
                            tooltips.push(new_tooltip);
                            return new_tooltip;
                            };
                            var resize_tooltip = function(tooltip) {
                            var rect = tooltip.elem.getBoundingClientRect();
                            var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
                            if (scrollPosition < 40) {
                                tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
                            } else {
                                tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
                            }
                            };
                            var resize_tooltips = function() {
                            if (_removed) return;
                            for (var i = 0; i < tooltips.length; i++) {
                                if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
                            }
                            };
                            var validate_field = function(elem, remove) {
                            var tooltip = null, value = elem.value, no_error = true;
                            remove ? remove_tooltip(elem) : false;
                            if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
                            if (elem.getAttribute('required') !== null) {
                                if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
                                var elems = form_to_submit.elements[elem.name];
                                if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
                                    no_error = elem.checked;
                                }
                                else {
                                    no_error = false;
                                    for (var i = 0; i < elems.length; i++) {
                                    if (elems[i].checked) no_error = true;
                                    }
                                }
                                if (!no_error) {
                                    tooltip = create_tooltip(elem, "Por favor, escolha uma opção.");
                                }
                                } else if (elem.type =='checkbox') {
                                var elems = form_to_submit.elements[elem.name], found = false, err = [];
                                no_error = true;
                                for (var i = 0; i < elems.length; i++) {
                                    if (elems[i].getAttribute('required') === null) continue;
                                    if (!found && elems[i] !== elem) return true;
                                    found = true;
                                    elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
                                    if (!elems[i].checked) {
                                    no_error = false;
                                    elems[i].className = elems[i].className + ' _has_error';
                                    err.push("É necessário assinalar %s".replace("%s", elems[i].value));
                                    }
                                }
                                if (!no_error) {
                                    tooltip = create_tooltip(elem, err.join('<br/>'));
                                }
                                } else if (elem.tagName == 'SELECT') {
                                var selected = true;
                                if (elem.multiple) {
                                    selected = false;
                                    for (var i = 0; i < elem.options.length; i++) {
                                    if (elem.options[i].selected) {
                                        selected = true;
                                        break;
                                    }
                                    }
                                } else {
                                    for (var i = 0; i < elem.options.length; i++) {
                                    if (elem.options[i].selected && !elem.options[i].value) {
                                        selected = false;
                                    }
                                    }
                                }
                                if (!selected) {
                                    elem.className = elem.className + ' _has_error';
                                    no_error = false;
                                    tooltip = create_tooltip(elem, "Por favor, escolha uma opção.");
                                }
                                } else if (value === undefined || value === null || value === '') {
                                elem.className = elem.className + ' _has_error';
                                no_error = false;
                                tooltip = create_tooltip(elem, "Este campo é obrigatório.");
                                }
                            }
                            if (no_error && elem.name == 'email') {
                                if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
                                elem.className = elem.className + ' _has_error';
                                no_error = false;
                                tooltip = create_tooltip(elem, "Introduza um endereço de e-mail válido.");
                                }
                            }
                            if (no_error && /date_field/.test(elem.className)) {
                                if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
                                elem.className = elem.className + ' _has_error';
                                no_error = false;
                                tooltip = create_tooltip(elem, "Introduza uma data válida.");
                                }
                            }
                            tooltip ? resize_tooltip(tooltip) : false;
                            return no_error;
                            };
                            var needs_validate = function(el) {
                            return el.name == 'email' || el.getAttribute('required') !== null;
                            };
                            var validate_form = function(e) {
                            var err = form_to_submit.querySelector('._form_error'), no_error = true;
                            if (!submitted) {
                                submitted = true;
                                for (var i = 0, len = allInputs.length; i < len; i++) {
                                var input = allInputs[i];
                                if (needs_validate(input)) {
                                    if (input.type == 'text') {
                                    addEvent(input, 'blur', function() {
                                        this.value = this.value.trim();
                                        validate_field(this, true);
                                    });
                                    addEvent(input, 'input', function() {
                                        validate_field(this, true);
                                    });
                                    } else if (input.type == 'radio' || input.type == 'checkbox') {
                                    (function(el) {
                                        var radios = form_to_submit.elements[el.name];
                                        for (var i = 0; i < radios.length; i++) {
                                        addEvent(radios[i], 'click', function() {
                                            validate_field(el, true);
                                        });
                                        }
                                    })(input);
                                    } else if (input.tagName == 'SELECT') {
                                    addEvent(input, 'change', function() {
                                        validate_field(this, true);
                                    });
                                    } else if (input.type == 'textarea'){
                                    addEvent(input, 'input', function() {
                                        validate_field(this, true);
                                    });
                                    }
                                }
                                }
                            }
                            remove_tooltips();
                            for (var i = 0, len = allInputs.length; i < len; i++) {
                                var elem = allInputs[i];
                                if (needs_validate(elem)) {
                                if (elem.tagName.toLowerCase() !== "select") {
                                    elem.value = elem.value.trim();
                                }
                                validate_field(elem) ? true : no_error = false;
                                }
                            }
                            if (!no_error && e) {
                                e.preventDefault();
                            }
                            resize_tooltips();
                            return no_error;
                            };
                            addEvent(window, 'resize', resize_tooltips);
                            addEvent(window, 'scroll', resize_tooltips);
                            window._old_serialize = null;
                            if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
                            _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
                            window._form_serialize = window.serialize;
                            if (window._old_serialize) window.serialize = window._old_serialize;
                            });
                            var form_submit = function(e) {
                            e.preventDefault();
                            if (validate_form()) {
                                // use this trick to get the submit button & disable it using plain javascript
                                document.querySelector('#_form_10_submit').disabled = true;
                                    var serialized = _form_serialize(document.getElementById('_form_10_'));
                                var err = form_to_submit.querySelector('._form_error');
                                err ? err.parentNode.removeChild(err) : false;
                                _load_script('https://meuhelp.activehosted.com/proc.php?' + serialized + '&jsonp=true');
                            }
                            return false;
                            };
                            addEvent(form_to_submit, 'submit', form_submit);
                        })();

                        </script>
                </div>

                <!-- Card 2 -->
                <div class="card card-plano">
                    <div>
                        <h2>Familiar</h2>
                        <img src="img/icon/iconPlano2.png" alt="">  
                    </div>
                    <div>
                        <br>
                        <h1>39,90</h1>
                        <h6>por mês</h6>
                        <p>R$29,90 adicionais por pessoa na residência</p>
                    </div>
                    <div class="card-btn">
                        <a href="" class="normal-button darkblue-bg">Saiba mais</a>
                        <a href="" class="normal-button yellow-bg" onclick="openForm(event, 2)">Contrate Já</a>
                    </div>
                </div>
                <div class="form-container-2">
                    <h3>Preencha o formulário para entrarmos em contato com você</h3>
                    <style>
                    #_form_12_ { font-size:14px; line-height:1.6; font-family:arial, helvetica, sans-serif; margin:0; }
                    #_form_12_ * { outline:0; }
                    ._form_hide { display:none; visibility:hidden; }
                    ._form_show { display:block; visibility:visible; }
                    #_form_12_._form-top { top:0; }
                    #_form_12_._form-bottom { bottom:0; }
                    #_form_12_._form-left { left:0; }
                    #_form_12_._form-right { right:0; }
                    #_form_12_ input[type="text"],#_form_12_ input[type="date"],#_form_12_ textarea { padding:6px; height:auto; border:#979797 1px solid; border-radius:4px; color:#000 !important; font-size:13px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
                    #_form_12_ textarea { resize:none; }
                    #_form_12_ ._submit { -webkit-appearance:none; cursor:pointer; font-family:arial, sans-serif; font-size:14px; text-align:center; background:#333 !important; border:0 !important; -moz-border-radius:4px !important; -webkit-border-radius:4px !important; border-radius:4px !important; color:#fff !important; padding:10px !important; }
                    #_form_12_ ._close-icon { cursor:pointer; background-image:url('https://d226aj4ao1t61q.cloudfront.net/esfkyjh1u_forms-close-dark.png'); background-repeat:no-repeat; background-size:14.2px 14.2px; position:absolute; display:block; top:11px; right:9px; overflow:hidden; width:16.2px; height:16.2px; }
                    #_form_12_ ._close-icon:before { position:relative; }
                    #_form_12_ ._form-body { margin-bottom:30px; }
                    #_form_12_ ._form-image-left { width:150px; float:left; }
                    #_form_12_ ._form-content-right { margin-left:164px; }
                    #_form_12_ ._form-branding { color:#fff; font-size:10px; clear:both; text-align:left; margin-top:30px; font-weight:100; }
                    #_form_12_ ._form-branding ._logo { display:block; width:130px; height:14px; margin-top:6px; background-image:url('https://d226aj4ao1t61q.cloudfront.net/hh9ujqgv5_aclogo_li.png'); background-size:130px auto; background-repeat:no-repeat; }
                    #_form_12_ ._form-label,#_form_12_ ._form_element ._form-label { font-weight:bold; margin-bottom:5px; display:block; }
                    #_form_12_._dark ._form-branding { color:#333; }
                    #_form_12_._dark ._form-branding ._logo { background-image:url('https://d226aj4ao1t61q.cloudfront.net/jftq2c8s_aclogo_dk.png'); }
                    #_form_12_ ._form_element { position:relative; margin-bottom:10px; font-size:0; max-width:100%; }
                    #_form_12_ ._form_element * { font-size:14px; }
                    #_form_12_ ._form_element._clear { clear:both; width:100%; float:none; }
                    #_form_12_ ._form_element._clear:after { clear:left; }
                    #_form_12_ ._form_element input[type="text"],#_form_12_ ._form_element input[type="date"],#_form_12_ ._form_element select,#_form_12_ ._form_element textarea:not(.g-recaptcha-response) { display:block; width:100%; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
                    #_form_12_ ._field-wrapper { position:relative; }
                    #_form_12_ ._inline-style { float:left; margin-left: 20px; margin-bottom: 20px;}
                    #_form_12_ ._inline-style input[type="text"] { width:150px; }
                    /* #_form_12_ ._inline-style:not(._clear) + ._inline-style:not(._clear) { margin-left:20px; } */
                    #_form_12_ ._form_element img._form-image { max-width:100%; }
                    #_form_12_ ._clear-element { clear:left; }
                    #_form_12_ ._full_width { width:100%; }
                    #_form_12_ ._form_full_field { display:block; width:100%; margin-bottom:10px; }
                    #_form_12_ input[type="text"]._has_error,#_form_12_ textarea._has_error { border:#f37c7b 1px solid; }
                    #_form_12_ input[type="checkbox"]._has_error { outline:#f37c7b 1px solid; }
                    #_form_12_ ._error { display:block; position:absolute; font-size:13px; z-index:10000001; }
                    #_form_12_ ._error._above { padding-bottom:4px; bottom:39px; right:0; }
                    #_form_12_ ._error._below { padding-top:4px; top:100%; right:0; }
                    #_form_12_ ._error._above ._error-arrow { bottom:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #f37c7b; }
                    #_form_12_ ._error._below ._error-arrow { top:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-bottom:5px solid #f37c7b; }
                    #_form_12_ ._error-inner { padding:8px 12px; background-color:#f37c7b; font-size:13px; font-family:arial, sans-serif; color:#fff; text-align:center; text-decoration:none; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px; }
                    #_form_12_ ._error-inner._form_error { margin-bottom:5px; text-align:left; }
                    #_form_12_ ._button-wrapper ._error-inner._form_error { position:static; }
                    #_form_12_ ._error-inner._no_arrow { margin-bottom:10px; }
                    #_form_12_ ._error-arrow { position:absolute; width:0; height:0; }
                    #_form_12_ ._error-html { margin-bottom:10px; }
                    .pika-single { z-index:10000001 !important; }
                    @media all and (min-width:320px) and (max-width:667px) { ::-webkit-scrollbar { display:none; }
                    #_form_12_ { margin:0; width:100%; min-width:100%; max-width:100%; box-sizing:border-box; }
                    #_form_12_ * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; font-size:1em; }
                    #_form_12_ ._form-content { margin:0; width:100%; }
                    #_form_12_ ._form-inner { display:block; min-width:100%; }
                    #_form_12_ ._form-title,#_form_12_ ._inline-style { margin-top:0; margin-right:0; margin-left:0; }
                    #_form_12_ ._form-title { font-size:1.2em; }
                    #_form_12_ ._form_element { margin:0 0 20px; padding:0; width:100%; }
                    #_form_12_ ._form-element,#_form_12_ ._inline-style,#_form_12_ input[type="text"],#_form_12_ label,#_form_12_ p,#_form_12_ textarea:not(.g-recaptcha-response) { float:none; display:block; width:100%; }
                    #_form_12_ ._row._checkbox-radio label { display:inline; }
                    #_form_12_ ._row,#_form_12_ p,#_form_12_ label { margin-bottom:0.7em; width:100%; }
                    #_form_12_ ._row input[type="checkbox"],#_form_12_ ._row input[type="radio"] { margin:0 !important; vertical-align:middle !important; }
                    #_form_12_ ._row input[type="checkbox"] + span label { display:inline; }
                    #_form_12_ ._row span label { margin:0 !important; width:initial !important; vertical-align:middle !important; }
                    #_form_12_ ._form-image { max-width:100%; height:auto !important; }
                    #_form_12_ input[type="text"] { padding-left:10px; padding-right:10px; font-size:16px; line-height:1.3em; -webkit-appearance:none; }
                    #_form_12_ input[type="radio"],#_form_12_ input[type="checkbox"] { display:inline-block; width:1.3em; height:1.3em; font-size:1em; margin:0 0.3em 0 0; vertical-align:baseline; }
                    #_form_12_ button[type="submit"] { padding:20px; font-size:1.5em; }
                    #_form_12_ ._inline-style { margin:20px 0 0 !important; }
                    }
                    #_form_12_ { position:relative; text-align:left; margin:25px auto 0; padding:20px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; *zoom:1; background:#fff !important; border:0px solid #b0b0b0 !important; -moz-border-radius:0px !important; -webkit-border-radius:0px !important; border-radius:0px !important; color:#000 !important; }
                    #_form_12_ ._form-title { font-size:22px; line-height:22px; font-weight:600; margin-bottom:0; }
                    #_form_12_:before,#_form_12_:after { content:" "; display:table; }
                    #_form_12_:after { clear:both; }
                    #_form_12_._inline-style { width:auto; display:inline-block; }
                    #_form_12_._inline-style input[type="text"],#_form_12_._inline-style input[type="date"] { padding:10px 12px; }
                    #_form_12_._inline-style button._inline-style { position:relative; top:27px; }
                    #_form_12_._inline-style p { margin:0; }
                    #_form_12_._inline-style ._button-wrapper { position:relative; margin:27px 12.5px 0 20px; }
                    #_form_12_ ._form-thank-you { position:relative; left:0; right:0; text-align:center; font-size:18px; }
                    @media all and (min-width:320px) and (max-width:667px) { #_form_12_._inline-form._inline-style ._inline-style._button-wrapper { margin-top:20px !important; margin-left:0 !important; }
                    }
                    </style>
                    <div style="text-align: center;">
                    <form method="POST" action="https://meuhelp.activehosted.com/proc.php" id="_form_12_" class="_form _form_12 _inline-form _inline-style _dark" novalidate>
                        <input type="hidden" name="u" value="12" />
                        <input type="hidden" name="f" value="12" />
                        <input type="hidden" name="s" />
                        <input type="hidden" name="c" value="0" />
                        <input type="hidden" name="m" value="0" />
                        <input type="hidden" name="act" value="sub" />
                        <input type="hidden" name="v" value="2" />
                        <div class="_form-content">
                        <div class="_form_element _x09949585 _inline-style " >
                            <label class="_form-label">
                            Nome completo*
                            </label>
                            <div class="_field-wrapper">
                            <input type="text" name="fullname" placeholder="Digite seu nome" required/>
                            </div>
                        </div>
                        <div class="_form_element _field6 _inline-style " >
                            <label class="_form-label">
                            CPF*
                            </label>
                            <div class="_field-wrapper">
                            <input type="text" name="field[6]" value="" placeholder="" required/>
                            </div>
                        </div>
                        <div class="_form_element _x41636284 _inline-style " >
                            <label class="_form-label">
                            E-mail*
                            </label>
                            <div class="_field-wrapper">
                            <input type="text" name="email" placeholder="Digite seu e-mail" required/>
                            </div>
                        </div>
                        <div class="_form_element _field38 _inline-style " >
                            <label class="_form-label">
                            Telefone*
                            </label>
                            <div class="_field-wrapper">
                            <input type="text" name="field[38]" value="" placeholder="" required/>
                            </div>
                        </div>
                        <div class="_form_element _field37 _inline-style " >
                            <label class="_form-label">
                            Endereço*
                            </label>
                            <div class="_field-wrapper">
                            <input type="text" name="field[37]" value="" placeholder="" required/>
                            </div>
                        </div>
                        <div class="_form_element _field16 _inline-style " >
                            <label class="_form-label">
                            CEP*
                            </label>
                            <div class="_field-wrapper">
                            <input type="text" name="field[16]" value="" placeholder="" required/>
                            </div>
                        </div>
                        <div class="_form_element _field2 _inline-style " >
                            <label class="_form-label">
                            Cidade*
                            </label>
                            <div class="_field-wrapper">
                            <input type="text" name="field[2]" value="" placeholder="" required/>
                            </div>
                        </div>
                        <div class="_form_element _field3 _inline-style " >
                            <label class="_form-label">
                            Estado*
                            </label>
                            <div class="_field-wrapper">
                            <input type="text" name="field[3]" value="" placeholder="" required/>
                            </div>
                        </div>
                        <div class="_button-wrapper _inline-style">
                            <button id="_form_12_submit" class="_submit" type="submit">
                            Enviar
                            </button>
                        </div>
                        <div class="_clear-element">
                        </div>
                        </div>
                        <div class="_form-thank-you" style="display:none;">
                        </div>
                    </form>
                    </div><script type="text/javascript">
                    window.cfields = {"6":"cpf","38":"telefone","37":"endereo","16":"cep","2":"cidade","3":"estado"};
                    window._show_thank_you = function(id, message, trackcmp_url) {
                    var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
                    form.querySelector('._form-content').style.display = 'none';
                    thank_you.innerHTML = message;
                    thank_you.style.display = 'block';
                    if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
                        // Site tracking URL to use after inline form submission.
                        _load_script(trackcmp_url);
                    }
                    if (typeof window._form_callback !== 'undefined') window._form_callback(id);
                    };
                    window._show_error = function(id, message, html) {
                    var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
                    if (old_error) old_error.parentNode.removeChild(old_error);
                    err.innerHTML = message;
                    err.className = '_error-inner _form_error _no_arrow';
                    var wrapper = document.createElement('div');
                    wrapper.className = '_form-inner';
                    wrapper.appendChild(err);
                    button.parentNode.insertBefore(wrapper, button);
                    document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
                    if (html) {
                        var div = document.createElement('div');
                        div.className = '_error-html';
                        div.innerHTML = html;
                        err.appendChild(div);
                    }
                    };
                    window._load_script = function(url, callback) {
                        var head = document.querySelector('head'), script = document.createElement('script'), r = false;
                        script.type = 'text/javascript';
                        script.charset = 'utf-8';
                        script.src = url;
                        if (callback) {
                        script.onload = script.onreadystatechange = function() {
                        if (!r && (!this.readyState || this.readyState == 'complete')) {
                            r = true;
                            callback();
                            }
                        };
                        }
                        head.appendChild(script);
                    };
                    (function() {
                    if (window.location.search.search("excludeform") !== -1) return false;
                    var getCookie = function(name) {
                        var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
                        return match ? match[2] : null;
                    }
                    var setCookie = function(name, value) {
                        var now = new Date();
                        var time = now.getTime();
                        var expireTime = time + 1000 * 60 * 60 * 24 * 365;
                        now.setTime(expireTime);
                        document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
                    }
                        var addEvent = function(element, event, func) {
                        if (element.addEventListener) {
                        element.addEventListener(event, func);
                        } else {
                        var oldFunc = element['on' + event];
                        element['on' + event] = function() {
                            oldFunc.apply(this, arguments);
                            func.apply(this, arguments);
                        };
                        }
                    }
                    var _removed = false;
                    var form_to_submit = document.getElementById('_form_12_');
                    var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

                    var getUrlParam = function(name) {
                        var regexStr = '[\?&]' + name + '=([^&#]*)';
                        var results = new RegExp(regexStr, 'i').exec(window.location.href);
                        return results != undefined ? decodeURIComponent(results[1]) : false;
                    };

                    for (var i = 0; i < allInputs.length; i++) {
                        var regexStr = "field\\[(\\d+)\\]";
                        var results = new RegExp(regexStr).exec(allInputs[i].name);
                        if (results != undefined) {
                        allInputs[i].dataset.name = window.cfields[results[1]];
                        } else {
                        allInputs[i].dataset.name = allInputs[i].name;
                        }
                        var fieldVal = getUrlParam(allInputs[i].dataset.name);

                        if (fieldVal) {
                        if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
                            if (allInputs[i].value == fieldVal) {
                            allInputs[i].checked = true;
                            }
                        } else {
                            allInputs[i].value = fieldVal;
                        }
                        }
                    }

                    var remove_tooltips = function() {
                        for (var i = 0; i < tooltips.length; i++) {
                        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
                        }
                        tooltips = [];
                    };
                    var remove_tooltip = function(elem) {
                        for (var i = 0; i < tooltips.length; i++) {
                        if (tooltips[i].elem === elem) {
                            tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
                            tooltips.splice(i, 1);
                            return;
                        }
                        }
                    };
                    var create_tooltip = function(elem, text) {
                        var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
                        if (elem.type != 'radio' && elem.type != 'checkbox') {
                        tooltip.className = '_error';
                        arrow.className = '_error-arrow';
                        inner.className = '_error-inner';
                        inner.innerHTML = text;
                        tooltip.appendChild(arrow);
                        tooltip.appendChild(inner);
                        elem.parentNode.appendChild(tooltip);
                        } else {
                        tooltip.className = '_error-inner _no_arrow';
                        tooltip.innerHTML = text;
                        elem.parentNode.insertBefore(tooltip, elem);
                        new_tooltip.no_arrow = true;
                        }
                        new_tooltip.tip = tooltip;
                        new_tooltip.elem = elem;
                        tooltips.push(new_tooltip);
                        return new_tooltip;
                    };
                    var resize_tooltip = function(tooltip) {
                        var rect = tooltip.elem.getBoundingClientRect();
                        var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
                        if (scrollPosition < 40) {
                        tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
                        } else {
                        tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
                        }
                    };
                    var resize_tooltips = function() {
                        if (_removed) return;
                        for (var i = 0; i < tooltips.length; i++) {
                        if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
                        }
                    };
                    var validate_field = function(elem, remove) {
                        var tooltip = null, value = elem.value, no_error = true;
                        remove ? remove_tooltip(elem) : false;
                        if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
                        if (elem.getAttribute('required') !== null) {
                        if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
                            var elems = form_to_submit.elements[elem.name];
                            if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
                            no_error = elem.checked;
                            }
                            else {
                            no_error = false;
                            for (var i = 0; i < elems.length; i++) {
                                if (elems[i].checked) no_error = true;
                            }
                            }
                            if (!no_error) {
                            tooltip = create_tooltip(elem, "Por favor, escolha uma opção.");
                            }
                        } else if (elem.type =='checkbox') {
                            var elems = form_to_submit.elements[elem.name], found = false, err = [];
                            no_error = true;
                            for (var i = 0; i < elems.length; i++) {
                            if (elems[i].getAttribute('required') === null) continue;
                            if (!found && elems[i] !== elem) return true;
                            found = true;
                            elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
                            if (!elems[i].checked) {
                                no_error = false;
                                elems[i].className = elems[i].className + ' _has_error';
                                err.push("É necessário assinalar %s".replace("%s", elems[i].value));
                            }
                            }
                            if (!no_error) {
                            tooltip = create_tooltip(elem, err.join('<br/>'));
                            }
                        } else if (elem.tagName == 'SELECT') {
                            var selected = true;
                            if (elem.multiple) {
                            selected = false;
                            for (var i = 0; i < elem.options.length; i++) {
                                if (elem.options[i].selected) {
                                selected = true;
                                break;
                                }
                            }
                            } else {
                            for (var i = 0; i < elem.options.length; i++) {
                                if (elem.options[i].selected && !elem.options[i].value) {
                                selected = false;
                                }
                            }
                            }
                            if (!selected) {
                            elem.className = elem.className + ' _has_error';
                            no_error = false;
                            tooltip = create_tooltip(elem, "Por favor, escolha uma opção.");
                            }
                        } else if (value === undefined || value === null || value === '') {
                            elem.className = elem.className + ' _has_error';
                            no_error = false;
                            tooltip = create_tooltip(elem, "Este campo é obrigatório.");
                        }
                        }
                        if (no_error && elem.name == 'email') {
                        if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
                            elem.className = elem.className + ' _has_error';
                            no_error = false;
                            tooltip = create_tooltip(elem, "Introduza um endereço de e-mail válido.");
                        }
                        }
                        if (no_error && /date_field/.test(elem.className)) {
                        if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
                            elem.className = elem.className + ' _has_error';
                            no_error = false;
                            tooltip = create_tooltip(elem, "Introduza uma data válida.");
                        }
                        }
                        tooltip ? resize_tooltip(tooltip) : false;
                        return no_error;
                    };
                    var needs_validate = function(el) {
                        return el.name == 'email' || el.getAttribute('required') !== null;
                    };
                    var validate_form = function(e) {
                        var err = form_to_submit.querySelector('._form_error'), no_error = true;
                        if (!submitted) {
                        submitted = true;
                        for (var i = 0, len = allInputs.length; i < len; i++) {
                            var input = allInputs[i];
                            if (needs_validate(input)) {
                            if (input.type == 'text') {
                                addEvent(input, 'blur', function() {
                                this.value = this.value.trim();
                                validate_field(this, true);
                                });
                                addEvent(input, 'input', function() {
                                validate_field(this, true);
                                });
                            } else if (input.type == 'radio' || input.type == 'checkbox') {
                                (function(el) {
                                var radios = form_to_submit.elements[el.name];
                                for (var i = 0; i < radios.length; i++) {
                                    addEvent(radios[i], 'click', function() {
                                    validate_field(el, true);
                                    });
                                }
                                })(input);
                            } else if (input.tagName == 'SELECT') {
                                addEvent(input, 'change', function() {
                                validate_field(this, true);
                                });
                            } else if (input.type == 'textarea'){
                                addEvent(input, 'input', function() {
                                validate_field(this, true);
                                });
                            }
                            }
                        }
                        }
                        remove_tooltips();
                        for (var i = 0, len = allInputs.length; i < len; i++) {
                        var elem = allInputs[i];
                        if (needs_validate(elem)) {
                            if (elem.tagName.toLowerCase() !== "select") {
                            elem.value = elem.value.trim();
                            }
                            validate_field(elem) ? true : no_error = false;
                        }
                        }
                        if (!no_error && e) {
                        e.preventDefault();
                        }
                        resize_tooltips();
                        return no_error;
                    };
                    addEvent(window, 'resize', resize_tooltips);
                    addEvent(window, 'scroll', resize_tooltips);
                    window._old_serialize = null;
                    if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
                    _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
                        window._form_serialize = window.serialize;
                        if (window._old_serialize) window.serialize = window._old_serialize;
                    });
                    var form_submit = function(e) {
                        e.preventDefault();
                        if (validate_form()) {
                        // use this trick to get the submit button & disable it using plain javascript
                        document.querySelector('#_form_12_submit').disabled = true;
                                var serialized = _form_serialize(document.getElementById('_form_12_'));
                        var err = form_to_submit.querySelector('._form_error');
                        err ? err.parentNode.removeChild(err) : false;
                        _load_script('https://meuhelp.activehosted.com/proc.php?' + serialized + '&jsonp=true');
                        }
                        return false;
                    };
                    addEvent(form_to_submit, 'submit', form_submit);
                    })();

                    </script>
                </div>

                <!-- Card 3 -->
                <div class="card card-plano">
                    <div>
                        <h2>Para empresas</h2>
                        <img src="img/icon/iconPlano3.png" alt="">  
                    </div>
                    <div>
                        <p>A partir de</p>
                        <h1>7,99</h1>
                        <h6>por mês</h6>
                        <br>
                    </div>
                    <div class="card-btn">
                        <a href="" class="normal-button darkblue-bg">Saiba mais</a>
                        <a href="" class="normal-button yellow-bg" onclick="openForm(event, 3)">Contrate Já</a>
                    </div>
                </div>
                <div class="form-container-3">
                    <h3>Preencha o formulário para entrarmos em contato com você</h3>
                    <style>
                        #_form_14_ { font-size:14px; line-height:1.6; font-family:arial, helvetica, sans-serif; margin:0; }
                        #_form_14_ * { outline:0; }
                        ._form_hide { display:none; visibility:hidden; }
                        ._form_show { display:block; visibility:visible; }
                        #_form_14_._form-top { top:0; }
                        #_form_14_._form-bottom { bottom:0; }
                        #_form_14_._form-left { left:0; }
                        #_form_14_._form-right { right:0; }
                        #_form_14_ input[type="text"],#_form_14_ input[type="date"],#_form_14_ textarea { padding:6px; height:auto; border:#979797 1px solid; border-radius:4px; color:#000 !important; font-size:13px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
                        #_form_14_ textarea { resize:none; }
                        #_form_14_ ._submit { -webkit-appearance:none; cursor:pointer; font-family:arial, sans-serif; font-size:14px; text-align:center; background:#333 !important; border:0 !important; -moz-border-radius:4px !important; -webkit-border-radius:4px !important; border-radius:4px !important; color:#fff !important; padding:10px !important; }
                        #_form_14_ ._close-icon { cursor:pointer; background-image:url('https://d226aj4ao1t61q.cloudfront.net/esfkyjh1u_forms-close-dark.png'); background-repeat:no-repeat; background-size:14.2px 14.2px; position:absolute; display:block; top:11px; right:9px; overflow:hidden; width:16.2px; height:16.2px; }
                        #_form_14_ ._close-icon:before { position:relative; }
                        #_form_14_ ._form-body { margin-bottom:30px; }
                        #_form_14_ ._form-image-left { width:150px; float:left; }
                        #_form_14_ ._form-content-right { margin-left:164px; }
                        #_form_14_ ._form-branding { color:#fff; font-size:10px; clear:both; text-align:left; margin-top:30px; font-weight:100; }
                        #_form_14_ ._form-branding ._logo { display:block; width:130px; height:14px; margin-top:6px; background-image:url('https://d226aj4ao1t61q.cloudfront.net/hh9ujqgv5_aclogo_li.png'); background-size:130px auto; background-repeat:no-repeat; }
                        #_form_14_ ._form-label,#_form_14_ ._form_element ._form-label { font-weight:bold; margin-bottom:5px; display:block; }
                        #_form_14_._dark ._form-branding { color:#333; }
                        #_form_14_._dark ._form-branding ._logo { background-image:url('https://d226aj4ao1t61q.cloudfront.net/jftq2c8s_aclogo_dk.png'); }
                        #_form_14_ ._form_element { position:relative; margin-bottom:10px; font-size:0; max-width:100%; }
                        #_form_14_ ._form_element * { font-size:14px; }
                        #_form_14_ ._form_element._clear { clear:both; width:100%; float:none; }
                        #_form_14_ ._form_element._clear:after { clear:left; }
                        #_form_14_ ._form_element input[type="text"],#_form_14_ ._form_element input[type="date"],#_form_14_ ._form_element select,#_form_14_ ._form_element textarea:not(.g-recaptcha-response) { display:block; width:100%; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
                        #_form_14_ ._field-wrapper { position:relative; }
                        #_form_14_ ._inline-style { float:left; margin-left: 20px; margin-bottom: 20px;}
                        #_form_14_ ._inline-style input[type="text"] { width:150px; }
                        /* #_form_14_ ._inline-style:not(._clear) + ._inline-style:not(._clear) { margin-left:20px; } */
                        #_form_14_ ._form_element img._form-image { max-width:100%; }
                        #_form_14_ ._clear-element { clear:left; }
                        #_form_14_ ._full_width { width:100%; }
                        #_form_14_ ._form_full_field { display:block; width:100%; margin-bottom:10px; }
                        #_form_14_ input[type="text"]._has_error,#_form_14_ textarea._has_error { border:#f37c7b 1px solid; }
                        #_form_14_ input[type="checkbox"]._has_error { outline:#f37c7b 1px solid; }
                        #_form_14_ ._error { display:block; position:absolute; font-size:13px; z-index:10000001; }
                        #_form_14_ ._error._above { padding-bottom:4px; bottom:39px; right:0; }
                        #_form_14_ ._error._below { padding-top:4px; top:100%; right:0; }
                        #_form_14_ ._error._above ._error-arrow { bottom:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #f37c7b; }
                        #_form_14_ ._error._below ._error-arrow { top:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-bottom:5px solid #f37c7b; }
                        #_form_14_ ._error-inner { padding:8px 12px; background-color:#f37c7b; font-size:13px; font-family:arial, sans-serif; color:#fff; text-align:center; text-decoration:none; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px; }
                        #_form_14_ ._error-inner._form_error { margin-bottom:5px; text-align:left; }
                        #_form_14_ ._button-wrapper ._error-inner._form_error { position:static; }
                        #_form_14_ ._error-inner._no_arrow { margin-bottom:10px; }
                        #_form_14_ ._error-arrow { position:absolute; width:0; height:0; }
                        #_form_14_ ._error-html { margin-bottom:10px; }
                        .pika-single { z-index:10000001 !important; }
                        @media all and (min-width:320px) and (max-width:667px) { ::-webkit-scrollbar { display:none; }
                        #_form_14_ { margin:0; width:100%; min-width:100%; max-width:100%; box-sizing:border-box; }
                        #_form_14_ * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; font-size:1em; }
                        #_form_14_ ._form-content { margin:0; width:100%; }
                        #_form_14_ ._form-inner { display:block; min-width:100%; }
                        #_form_14_ ._form-title,#_form_14_ ._inline-style { margin-top:0; margin-right:0; margin-left:0; }
                        #_form_14_ ._form-title { font-size:1.2em; }
                        #_form_14_ ._form_element { margin:0 0 20px; padding:0; width:100%; }
                        #_form_14_ ._form-element,#_form_14_ ._inline-style,#_form_14_ input[type="text"],#_form_14_ label,#_form_14_ p,#_form_14_ textarea:not(.g-recaptcha-response) { float:none; display:block; width:100%; }
                        #_form_14_ ._row._checkbox-radio label { display:inline; }
                        #_form_14_ ._row,#_form_14_ p,#_form_14_ label { margin-bottom:0.7em; width:100%; }
                        #_form_14_ ._row input[type="checkbox"],#_form_14_ ._row input[type="radio"] { margin:0 !important; vertical-align:middle !important; }
                        #_form_14_ ._row input[type="checkbox"] + span label { display:inline; }
                        #_form_14_ ._row span label { margin:0 !important; width:initial !important; vertical-align:middle !important; }
                        #_form_14_ ._form-image { max-width:100%; height:auto !important; }
                        #_form_14_ input[type="text"] { padding-left:10px; padding-right:10px; font-size:16px; line-height:1.3em; -webkit-appearance:none; }
                        #_form_14_ input[type="radio"],#_form_14_ input[type="checkbox"] { display:inline-block; width:1.3em; height:1.3em; font-size:1em; margin:0 0.3em 0 0; vertical-align:baseline; }
                        #_form_14_ button[type="submit"] { padding:20px; font-size:1.5em; }
                        #_form_14_ ._inline-style { margin:20px 0 0 !important; }
                        }
                        #_form_14_ { position:relative; text-align:left; margin:25px auto 0; padding:20px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; *zoom:1; background:#fff !important; border:0px solid #b0b0b0 !important; -moz-border-radius:0px !important; -webkit-border-radius:0px !important; border-radius:0px !important; color:#000 !important; }
                        #_form_14_ ._form-title { font-size:22px; line-height:22px; font-weight:600; margin-bottom:0; }
                        #_form_14_:before,#_form_14_:after { content:" "; display:table; }
                        #_form_14_:after { clear:both; }
                        #_form_14_._inline-style { width:auto; display:inline-block; }
                        #_form_14_._inline-style input[type="text"],#_form_14_._inline-style input[type="date"] { padding:10px 12px; }
                        #_form_14_._inline-style button._inline-style { position:relative; top:27px; }
                        #_form_14_._inline-style p { margin:0; }
                        #_form_14_._inline-style ._button-wrapper { position:relative; margin:27px 12.5px 0 20px; }
                        #_form_14_ ._form-thank-you { position:relative; left:0; right:0; text-align:center; font-size:18px; }
                        @media all and (min-width:320px) and (max-width:667px) { #_form_14_._inline-form._inline-style ._inline-style._button-wrapper { margin-top:20px !important; margin-left:0 !important; }
                        }
                        </style>
                        <div style="text-align: center;">
                        <form method="POST" action="https://meuhelp.activehosted.com/proc.php" id="_form_14_" class="_form _form_14 _inline-form _inline-style _dark" novalidate>
                            <input type="hidden" name="u" value="14" />
                            <input type="hidden" name="f" value="14" />
                            <input type="hidden" name="s" />
                            <input type="hidden" name="c" value="0" />
                            <input type="hidden" name="m" value="0" />
                            <input type="hidden" name="act" value="sub" />
                            <input type="hidden" name="v" value="2" />
                            <div class="_form-content">
                            <div class="_form_element _x26096116 _inline-style " >
                                <label class="_form-label">
                                Nome completo*
                                </label>
                                <div class="_field-wrapper">
                                <input type="text" name="fullname" placeholder="Digite seu nome" required/>
                                </div>
                            </div>
                            <div class="_form_element _field10 _inline-style " >
                                <label class="_form-label">
                                CNPJ*
                                </label>
                                <div class="_field-wrapper">
                                <input type="text" name="field[10]" value="" placeholder="" required/>
                                </div>
                            </div>
                            <div class="_form_element _field12 _inline-style " >
                                <label class="_form-label">
                                Nome fantasia*
                                </label>
                                <div class="_field-wrapper">
                                <input type="text" name="field[12]" value="" placeholder="" required/>
                                </div>
                            </div>
                            <div class="_form_element _x86312170 _inline-style " >
                                <label class="_form-label">
                                E-mail*
                                </label>
                                <div class="_field-wrapper">
                                <input type="text" name="email" placeholder="Digite seu e-mail" required/>
                                </div>
                            </div>
                            <div class="_form_element _field15 _inline-style " >
                                <label class="_form-label">
                                Telefone da empresa*
                                </label>
                                <div class="_field-wrapper">
                                <input type="text" name="field[15]" value="" placeholder="" required/>
                                </div>
                            </div>
                            <div class="_form_element _field8 _inline-style " >
                                <label class="_form-label">
                                Endereço comercial*
                                </label>
                                <div class="_field-wrapper">
                                <input type="text" name="field[8]" value="" placeholder="" required/>
                                </div>
                            </div>
                            <div class="_form_element _field16 _inline-style " >
                                <label class="_form-label">
                                CEP*
                                </label>
                                <div class="_field-wrapper">
                                <input type="text" name="field[16]" value="" placeholder="" required/>
                                </div>
                            </div>
                            <div class="_form_element _field2 _inline-style " >
                                <label class="_form-label">
                                Cidade*
                                </label>
                                <div class="_field-wrapper">
                                <input type="text" name="field[2]" value="" placeholder="" required/>
                                </div>
                            </div>
                            <div class="_form_element _field3 _inline-style " >
                                <label class="_form-label">
                                Estado*
                                </label>
                                <div class="_field-wrapper">
                                <input type="text" name="field[3]" value="" placeholder="" required/>
                                </div>
                            </div>
                            <div class="_button-wrapper _inline-style">
                                <button id="_form_14_submit" class="_submit" type="submit">
                                Enviar
                                </button>
                            </div>
                            <div class="_clear-element">
                            </div>
                            </div>
                            <div class="_form-thank-you" style="display:none;">
                            </div>
                        </form>
                        </div><script type="text/javascript">
                        window.cfields = {"10":"cnpj","12":"nome_fantasia","15":"telefone_da_empresa","8":"endereo_comercial","16":"cep","2":"cidade","3":"estado"};
                        window._show_thank_you = function(id, message, trackcmp_url) {
                        var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
                        form.querySelector('._form-content').style.display = 'none';
                        thank_you.innerHTML = message;
                        thank_you.style.display = 'block';
                        if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
                            // Site tracking URL to use after inline form submission.
                            _load_script(trackcmp_url);
                        }
                        if (typeof window._form_callback !== 'undefined') window._form_callback(id);
                        };
                        window._show_error = function(id, message, html) {
                        var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
                        if (old_error) old_error.parentNode.removeChild(old_error);
                        err.innerHTML = message;
                        err.className = '_error-inner _form_error _no_arrow';
                        var wrapper = document.createElement('div');
                        wrapper.className = '_form-inner';
                        wrapper.appendChild(err);
                        button.parentNode.insertBefore(wrapper, button);
                        document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
                        if (html) {
                            var div = document.createElement('div');
                            div.className = '_error-html';
                            div.innerHTML = html;
                            err.appendChild(div);
                        }
                        };
                        window._load_script = function(url, callback) {
                            var head = document.querySelector('head'), script = document.createElement('script'), r = false;
                            script.type = 'text/javascript';
                            script.charset = 'utf-8';
                            script.src = url;
                            if (callback) {
                            script.onload = script.onreadystatechange = function() {
                            if (!r && (!this.readyState || this.readyState == 'complete')) {
                                r = true;
                                callback();
                                }
                            };
                            }
                            head.appendChild(script);
                        };
                        (function() {
                        if (window.location.search.search("excludeform") !== -1) return false;
                        var getCookie = function(name) {
                            var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
                            return match ? match[2] : null;
                        }
                        var setCookie = function(name, value) {
                            var now = new Date();
                            var time = now.getTime();
                            var expireTime = time + 1000 * 60 * 60 * 24 * 365;
                            now.setTime(expireTime);
                            document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
                        }
                            var addEvent = function(element, event, func) {
                            if (element.addEventListener) {
                            element.addEventListener(event, func);
                            } else {
                            var oldFunc = element['on' + event];
                            element['on' + event] = function() {
                                oldFunc.apply(this, arguments);
                                func.apply(this, arguments);
                            };
                            }
                        }
                        var _removed = false;
                        var form_to_submit = document.getElementById('_form_14_');
                        var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

                        var getUrlParam = function(name) {
                            var regexStr = '[\?&]' + name + '=([^&#]*)';
                            var results = new RegExp(regexStr, 'i').exec(window.location.href);
                            return results != undefined ? decodeURIComponent(results[1]) : false;
                        };

                        for (var i = 0; i < allInputs.length; i++) {
                            var regexStr = "field\\[(\\d+)\\]";
                            var results = new RegExp(regexStr).exec(allInputs[i].name);
                            if (results != undefined) {
                            allInputs[i].dataset.name = window.cfields[results[1]];
                            } else {
                            allInputs[i].dataset.name = allInputs[i].name;
                            }
                            var fieldVal = getUrlParam(allInputs[i].dataset.name);

                            if (fieldVal) {
                            if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
                                if (allInputs[i].value == fieldVal) {
                                allInputs[i].checked = true;
                                }
                            } else {
                                allInputs[i].value = fieldVal;
                            }
                            }
                        }

                        var remove_tooltips = function() {
                            for (var i = 0; i < tooltips.length; i++) {
                            tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
                            }
                            tooltips = [];
                        };
                        var remove_tooltip = function(elem) {
                            for (var i = 0; i < tooltips.length; i++) {
                            if (tooltips[i].elem === elem) {
                                tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
                                tooltips.splice(i, 1);
                                return;
                            }
                            }
                        };
                        var create_tooltip = function(elem, text) {
                            var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
                            if (elem.type != 'radio' && elem.type != 'checkbox') {
                            tooltip.className = '_error';
                            arrow.className = '_error-arrow';
                            inner.className = '_error-inner';
                            inner.innerHTML = text;
                            tooltip.appendChild(arrow);
                            tooltip.appendChild(inner);
                            elem.parentNode.appendChild(tooltip);
                            } else {
                            tooltip.className = '_error-inner _no_arrow';
                            tooltip.innerHTML = text;
                            elem.parentNode.insertBefore(tooltip, elem);
                            new_tooltip.no_arrow = true;
                            }
                            new_tooltip.tip = tooltip;
                            new_tooltip.elem = elem;
                            tooltips.push(new_tooltip);
                            return new_tooltip;
                        };
                        var resize_tooltip = function(tooltip) {
                            var rect = tooltip.elem.getBoundingClientRect();
                            var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
                            if (scrollPosition < 40) {
                            tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
                            } else {
                            tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
                            }
                        };
                        var resize_tooltips = function() {
                            if (_removed) return;
                            for (var i = 0; i < tooltips.length; i++) {
                            if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
                            }
                        };
                        var validate_field = function(elem, remove) {
                            var tooltip = null, value = elem.value, no_error = true;
                            remove ? remove_tooltip(elem) : false;
                            if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
                            if (elem.getAttribute('required') !== null) {
                            if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
                                var elems = form_to_submit.elements[elem.name];
                                if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
                                no_error = elem.checked;
                                }
                                else {
                                no_error = false;
                                for (var i = 0; i < elems.length; i++) {
                                    if (elems[i].checked) no_error = true;
                                }
                                }
                                if (!no_error) {
                                tooltip = create_tooltip(elem, "Por favor, escolha uma opção.");
                                }
                            } else if (elem.type =='checkbox') {
                                var elems = form_to_submit.elements[elem.name], found = false, err = [];
                                no_error = true;
                                for (var i = 0; i < elems.length; i++) {
                                if (elems[i].getAttribute('required') === null) continue;
                                if (!found && elems[i] !== elem) return true;
                                found = true;
                                elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
                                if (!elems[i].checked) {
                                    no_error = false;
                                    elems[i].className = elems[i].className + ' _has_error';
                                    err.push("É necessário assinalar %s".replace("%s", elems[i].value));
                                }
                                }
                                if (!no_error) {
                                tooltip = create_tooltip(elem, err.join('<br/>'));
                                }
                            } else if (elem.tagName == 'SELECT') {
                                var selected = true;
                                if (elem.multiple) {
                                selected = false;
                                for (var i = 0; i < elem.options.length; i++) {
                                    if (elem.options[i].selected) {
                                    selected = true;
                                    break;
                                    }
                                }
                                } else {
                                for (var i = 0; i < elem.options.length; i++) {
                                    if (elem.options[i].selected && !elem.options[i].value) {
                                    selected = false;
                                    }
                                }
                                }
                                if (!selected) {
                                elem.className = elem.className + ' _has_error';
                                no_error = false;
                                tooltip = create_tooltip(elem, "Por favor, escolha uma opção.");
                                }
                            } else if (value === undefined || value === null || value === '') {
                                elem.className = elem.className + ' _has_error';
                                no_error = false;
                                tooltip = create_tooltip(elem, "Este campo é obrigatório.");
                            }
                            }
                            if (no_error && elem.name == 'email') {
                            if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
                                elem.className = elem.className + ' _has_error';
                                no_error = false;
                                tooltip = create_tooltip(elem, "Introduza um endereço de e-mail válido.");
                            }
                            }
                            if (no_error && /date_field/.test(elem.className)) {
                            if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
                                elem.className = elem.className + ' _has_error';
                                no_error = false;
                                tooltip = create_tooltip(elem, "Introduza uma data válida.");
                            }
                            }
                            tooltip ? resize_tooltip(tooltip) : false;
                            return no_error;
                        };
                        var needs_validate = function(el) {
                            return el.name == 'email' || el.getAttribute('required') !== null;
                        };
                        var validate_form = function(e) {
                            var err = form_to_submit.querySelector('._form_error'), no_error = true;
                            if (!submitted) {
                            submitted = true;
                            for (var i = 0, len = allInputs.length; i < len; i++) {
                                var input = allInputs[i];
                                if (needs_validate(input)) {
                                if (input.type == 'text') {
                                    addEvent(input, 'blur', function() {
                                    this.value = this.value.trim();
                                    validate_field(this, true);
                                    });
                                    addEvent(input, 'input', function() {
                                    validate_field(this, true);
                                    });
                                } else if (input.type == 'radio' || input.type == 'checkbox') {
                                    (function(el) {
                                    var radios = form_to_submit.elements[el.name];
                                    for (var i = 0; i < radios.length; i++) {
                                        addEvent(radios[i], 'click', function() {
                                        validate_field(el, true);
                                        });
                                    }
                                    })(input);
                                } else if (input.tagName == 'SELECT') {
                                    addEvent(input, 'change', function() {
                                    validate_field(this, true);
                                    });
                                } else if (input.type == 'textarea'){
                                    addEvent(input, 'input', function() {
                                    validate_field(this, true);
                                    });
                                }
                                }
                            }
                            }
                            remove_tooltips();
                            for (var i = 0, len = allInputs.length; i < len; i++) {
                            var elem = allInputs[i];
                            if (needs_validate(elem)) {
                                if (elem.tagName.toLowerCase() !== "select") {
                                elem.value = elem.value.trim();
                                }
                                validate_field(elem) ? true : no_error = false;
                            }
                            }
                            if (!no_error && e) {
                            e.preventDefault();
                            }
                            resize_tooltips();
                            return no_error;
                        };
                        addEvent(window, 'resize', resize_tooltips);
                        addEvent(window, 'scroll', resize_tooltips);
                        window._old_serialize = null;
                        if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
                        _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
                            window._form_serialize = window.serialize;
                            if (window._old_serialize) window.serialize = window._old_serialize;
                        });
                        var form_submit = function(e) {
                            e.preventDefault();
                            if (validate_form()) {
                            // use this trick to get the submit button & disable it using plain javascript
                            document.querySelector('#_form_14_submit').disabled = true;
                                    var serialized = _form_serialize(document.getElementById('_form_14_'));
                            var err = form_to_submit.querySelector('._form_error');
                            err ? err.parentNode.removeChild(err) : false;
                            _load_script('https://meuhelp.activehosted.com/proc.php?' + serialized + '&jsonp=true');
                            }
                            return false;
                        };
                        addEvent(form_to_submit, 'submit', form_submit);
                        })();

                        </script>
                </div>
                
                <div class="js-form-blur"></div>

            </div>

            <!-- Card Clientes -->
            <h1>Já é nosso cliente?</h1>
            <div class="clientes-content">

                <!-- Card 1 -->
                <div class="card yellow-bg card-cliente">
                    <h1>Ative seu cartão</h1>
                    <p>Agora é hora de cadastrar sua senha de acesso e 
                        consultar seu saldo, extratos de utilização do 
                        cartão  e consultar toda a Rede Credenciada. 
                        Ligue  e cadastre sua senha.
                    </p>
                    <p class="telefone">Ligue (11) 4780-0700</p>
                </div>

                <!-- Card 2 -->
                <div class="card red-bg card-cliente">
                    <h1>Área de vantagens</h1>
                    <p>Acesse a área de vantagens de seu estabelecimento, 
                        e realize a divulgação de produtos e promoções.
                    </p>
                    <a href="" class="normal-button yellow-bg">Acesse já</a>
                </div>

                <!-- Card 3 -->
                <div class="card lightblue-bg card-cliente">
                    <h1>Comprou um cartão na loja?</h1>
                    <p>Então, cadastre seu cartão agora mesmo, e depois, 
                        ligue para a central de relacionamento e cadastre
                        sua nova senha 
                    </p>
                    <p class="telefone">Ligue (11) 4780-0700</p>
                </div>
            </div>
        </div>

        <!-- <div class="container-access-service red-bg">
            <h1>Se você já é nosso cliente, acesse e agende nossos serviços</h1>
            <a href="" class="normal-button darkblue-bg">Acesso aos serviços</a>
        </div> -->

        <!-- Slider Parceiros -->
        <div id="sliderParceiros">
            <a href="parceiros">
                <div>
                    <img src="img/imagens/burgerkingLogo.png" alt="">
                    <img src="img/imagens/cinemarkLogo.png" alt="">      
                    <img src="img/imagens/bluefitLogo.png" alt="">
                </div>
            </a>

            <a href="parceiros">
                <div>
                    <img src="img/imagens/magazineLogo.png" alt="">
                    <img src="img/imagens/sonyLogo.png" alt="">
                    <img src="img/imagens/netshoesLogo.png" alt="">
                </div>
            </a>
        </div>

        <div id="sliderParceirosMobile">
            <a href="">
                <img src="img/imagens/burgerkingLogo.png" alt="">
            </a>
            <a href="">
                <img src="img/imagens/cinemarkLogo.png" alt="">
            </a>
            <a href="">
                <img src="img/imagens/bluefitLogo.png" alt="">
            </a>
            <a href="">
                <img src="img/imagens/magazineLogo.png" alt="">
            </a>
            <a href="">
                <img src="img/imagens/sonyLogo.png" alt="">
            </a>
            <a href="">
                <img src="img/imagens/netshoesLogo.png" alt="">
            </a>
        </div>

        <!-- Formulário -->

        <div class="container-form">
            <div class="contact-form-text">
                <h1>Contato, dúvidas ou comentários</h1>
                <p>Nossa equipe de atendimento está pronta para falar
                    comvocê. Utilize o formulário abaixo e mande sua
                    mensagem. se preferir, ligue para nossa central
                    de atendimento.
                </p>
            </div>
            <div>
            <div class="_form_16"></div><script src="https://meuhelp.activehosted.com/f/embed.php?id=16" type="text/javascript" charset="utf-8"></script>
            </div>
        </div>

        <!-- Slider Comentários -->
        <div id="sliderComentario">
            <div class="container-comentario">
                <!-- Comentário 1 -->
                <div class="comentario">
                    <div>
                        <img src="" alt="" class="comentario-img">
                    </div>
                    <div>
                        <span class="comentario-nome">Juliana Ferreira</span>
                        <span class="comentario-texto">Não vivo mais sem esse cartão.</span>
                    </div>
                </div>

                <!-- Comentário 2 -->
                <div class="comentario">
                    <div>
                        <img src="" alt="" class="comentario-img">
                    </div>
                    <div>
                        <span class="comentario-nome">Wilson Gomes</span>
                        <span class="comentario-texto">Serviços muito bem prestados.</span>
                    </div>
                </div>
            </div>
            <div class="container-comentario">
                <!-- Comentário 2 -->
                <div class="comentario">
                    <div>
                        <img src="" alt="" class="comentario-img">
                    </div>
                    <div>
                        <span class="comentario-nome">Juliana Ferreira</span>
                        <span class="comentario-texto">Não vivo mais sem esse cartão.</span>
                    </div>
                </div>

                <!-- Comentário 2 -->
                <div class="comentario">
                    <div>
                        <img src="" alt="" class="comentario-img">
                    </div>
                    <div>
                        <span class="comentario-nome">Wilson Gomes</span>
                        <span class="comentario-texto">Serviços muito bem prestados.</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="sliderComentarioMobile">
            <div>
                <div class="comentario-nome">Juliana Ferreira</div>
                <div class="comentario-texto">Não vivo mais sem esse cartão.</div>
            </div>
            <div>
                <div class="comentario-nome">Wilson Gomes</div>
                <div class="comentario-texto">Serviços muito bem prestados.</div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php 
        getFooter();
    ?>

    <script src="jquery/jquery.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/sliders.js"></script>
    <script src="js/index.js"></script>
    <script src="js/mobileMenu.js"></script>

</body>
</html>