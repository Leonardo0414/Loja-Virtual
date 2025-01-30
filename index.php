<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>E-Commerce</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=ADLaM+Display&family=Bebas+Neue&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,400;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

        <?php include 'templates/includes/header.html';?>


    <section id="banner">
        <div class="container">
            <img src="assets/imagens/banner.svg" alt="Black Friday LP Tech" />
        </div>
    </section>

    <nav>
        <?php include 'templates/section/produtos.html';?>
        <?php include 'templates/section/notebooks.html';?>
        <?php include 'templates/section/cpus.html';?>
        <?php include 'templates/section/monitores.html';?>
      
        <a href="templates/section/monitores.html"></a>
    </nav>

    <section id="sponsors">
        <div class="container">
            <div class="content-sponsors">
                <div class="slider-sponsors">
                    <img src="assets/imagens/sponsors/sponsor-1.svg" alt="Patrocinador 1" />
                    <img src="assets/imagens/sponsors/sponsor-2.svg" alt="Patrocinador 2" />
                    <img src="assets/imagens/sponsors/sponsor-3.svg" alt="Patrocinador 3" />
                    <img src="assets/imagens/sponsors/sponsor-4.svg" alt="Patrocinador 4" />
                    <img src="assets/imagens/sponsors/sponsor-5.svg" alt="Patrocinador 5" />
                    <img src="assets/imagens/sponsors/sponsor-6.svg" alt="Patrocinador 6" />
                    <img src="assets/imagens/sponsors/sponsor-7.svg" alt="Patrocinador 7" />
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="container">
            <div class="content-testimonial">
                <div class="testimonial" data-slide="1">
                    <p>Depoimentos de clientes
                    </p>
                    <div class="name-testimonial">
                        <p>Nome dos clientes</p>
                    </div>
                </div>
                <div class="testimonial" data-slide="2">
                    <p>Estou muito acabei encontrando muito mais do que eu esperava.
                    </p>
                    <div class="name-testimonial">
                        <p>Nome dos clientes</p>
                    </div>
                </div>
                <div class="testimonial" data-slide="3">
                    <p>Estou muito
                    </p>
                    <div class="name-testimonial">
                        <p>Nome dos clientes</p>
                    </div>
                </div>
                <div class="testimonial" data-slide="4">
                    <p>Estou muito feliz
                    </p>
                    <div class="name-testimonial">
                        <p>Nome dos clientes</p>
                    </div>
                </div>
                <div class="controls-testimonial">
                    <span class="active-testimonial" data-slide="1"></span>
                    <span data-slide="2"></span>
                    <span data-slide="3"></span>
                    <span data-slide="4"></span>
                </div>
            </div>
        </div>
    </section>

    <section id="quality">
        <div class="container">
            <div class="info-quality">
                <div class="card-quality">
                    <img src="assets/imagens/support.svg" alt="Suporte LP Tech" />
                    <h1>Suporte</h1>
                    <h2>Nosso suporte funciona de Segunda à Sexta de 09h às 17h30</h2>
                </div>
                <div class="card-quality">
                    <img src="assets/imagens/best-price.svg" alt="Garantia LP Tech" />
                    <h1>Garantia</h1>
                    <h2>Nossa garantia é de 1 ano após a compra de qualquer equipamento</h2>
                </div>
                <div class="card-quality">
                    <img src="assets/imagens/guarantee.svg" alt="Melhor preço LP Tech" />
                    <h1>Melhor preço</h1>
                    <h2>Todos os nossos produtos estão pelo menos 20% mais baratos do que os concorrentes</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="general-content-form">
                <div class="intern-content-form">
                    <form>
                        <div class="titles-form">
                            <h1>Entre em contato</h1>
                            <p>Se você tiver qualquer dúvida, você pode ligar para a nossa loja ou enviar uma mensagem
                                no formulário de contato abaixo!</p>
                        </div>
                        <div class="info-content-form">
                            <div class="line-form">
                                <div class="group-form">
                                    <label>Nome<span>*</span></label>
                                    <input type="text" id="name" placeholder="Nome" />
                                </div>
                                <div class="group-form">
                                    <label>Assunto<span>*</span></label>
                                    <input type="text" id="subject" placeholder="Assunto" />
                                </div>
                            </div>
                            <div class="line-form">
                                <div class="group-form">
                                    <label>Telefone<span>*</span></label>
                                    <input type="text" id="cellphone" placeholder="Telefone" />
                                </div>
                                <div class="group-form">
                                    <label>E-mail<span>*</span></label>
                                    <input type="email" id="email" placeholder="E-mail" />
                                </div>
                            </div>
                            <div class="group-form">
                                <label>Mensagem<span>*</span></label>
                                <textarea id="message" placeholder="Escreva toda a sua dúvida"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Enviar" />
                    </form>
                    <p id="loading" style="display: none;">Carregando..</p>
                    <p id="success-message" style="display: none;">Mensagem enviada com sucesso!</p>
                    <p id="error-message" style="display: none;">Erro ao enviar a mensagem. Envie um e-mail para
                        contato@lptech.com</p>
                </div>
                <div class="infos-contact">
                    <div class="line-contact-info">
                        <img src="assets/imagens/address-icon.svg" alt="Endereço LP Tech" />
                        <div class="text-contact-info">
                            <h3>Endereço</h3>
                            <h4>Rua da LP Tech, 123</h4>
                        </div>
                    </div>
                    <div class="line-contact-info">
                        <img src="assets/imagens/cel-icon.svg" alt="Telefone LP Tech" />
                        <div class="text-contact-info">
                            <h3>Telefone</h3>
                            <h4>(31) 9999 - 9999</h4>
                        </div>
                    </div>
                    <div class="line-contact-info">
                        <img src="assets/imagens/time-icon.svg" alt="Horario LP Tech" />
                        <div class="text-contact-info">
                            <h3>Horário</h3>
                            <h4>Segunda - Sexta: 9:00 - 17:30</h4>
                        </div>
                    </div>
                    <div class="line-contact-info">
                        <img src="assets/imagens/mail-icon.svg" alt="Email LP Tech" />
                        <div class="text-contact-info">
                            <h3>E-mail</h3>
                            <h4>contato@lptech.com</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <?php include 'templates/includes/footer.html'; ?>



    

    <script src="assets/js/script.js"></script>
</body>

</html>