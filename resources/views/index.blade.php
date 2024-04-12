@component('signature.body')

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Recibos Sob Controle, Finanças no Lugar.</h1>
                            <p class="p-large">Planeje, Acompanhe e Conquiste seus Objetivos Financeiros com Facilidade</p>
                            <a class="btn-solid-lg page-scroll" href="{{ route('signature.register') }}">CADASTRAR-ME</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="{{ asset('assets/images/undraw_experience_design_re_dmqq.svg') }}" alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#5f4def;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>
    <!-- end of header -->




    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">SOBRE</div>
                    <h2 class="h2-heading">
                        Descomplique a Gestão Financeira da sua Empresa!</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{ asset('assets/images/description-1.png') }}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Armazenamento na Nuvem</h4>
                            <p>Acesse seus recibos e orçamentos de qualquer lugar, a qualquer momento, através da nuvem, garantindo flexibilidade e conveniência.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{ asset('assets/images/description-2.png') }}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Interface Intuitiva</h4>
                            <p>Nossa plataforma foi projetada para ser amigável e fácil de usar, mesmo para usuários sem experiência técnica.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{ asset('assets/images/description-3.png') }}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Segurança dos Dados</h4>
                            <p>Proteja as informações financeiras da sua empresa com recursos avançados de segurança, garantindo a confidencialidade e integridade dos seus dados.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->


     <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">CARACTERISTICAS</div>
                    <h2 class="h2-heading">Como Funciona?</h2>
                    <p class="p-heading">Adeus à papelada e horas gastas em planilhas complicadas! Com o nosso sistema de geração de recibos e orçamentos, você simplifica completamente o processo.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-receipt"></i>Recibos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-newspaper"></i>Orçamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-file-pdf"></i>Emissão de PDF</a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="{{ asset('assets/images/undraw_receipt_re_fre3.svg') }}" style="border-radius: 5%" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Criação de Recibos</h3>
                                        <p>Otimize sua gestão financeira com nosso novo Módulo de Criação de Recibos. Este recurso fácil de usar permite que você gere recibos de forma rápida e precisa, simplificando suas transações financeiras e fornecendo um registro claro de pagamentos.</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Personalização Flexível: Personalize seus recibos com facilidade, adicionando detalhes específicos do cliente, informações de pagamento e até mesmo o logotipo da sua empresa para uma apresentação personalizada.</div>
                                            </li>

                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Segurança dos Dados: Garanta a segurança das informações financeiras da sua empresa com recursos avançados de proteção de dados, mantendo seus registros financeiros confidenciais e seguros.</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="{{ route('signature.register') }}">CADASTRAR-ME</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="{{ asset('assets/images/undraw_pending_approval_xuu9.svg') }}" style="border-radius: 5%" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Criação de Orçamentos</h3>
                                        <p>Facilite a elaboração de orçamentos para sua empresa com o nosso novo Módulo de Criação de Orçamentos. Este recurso intuitivo permite que você crie orçamentos detalhados de forma rápida e precisa, simplificando o processo de estimativa de custos e fornecendo uma base sólida para suas transações comerciais.</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Controle Financeiro: Mantenha um controle preciso dos custos e receitas esperados com orçamentos detalhados que servem como referência durante todo o ciclo do projeto.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Customização Flexível: Personalize seus orçamentos de acordo com as necessidades específicas de cada cliente, adicionando detalhes personalizados e adaptando-se a diferentes projetos e requisitos.</div>
                                            </li>

                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="{{ route('signature.register') }}">CADASTRAR-ME</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="{{ asset('assets/images/undraw_documents_re_isxv.svg') }}" style="border-radius: 5%" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Transforme Orçamentos e Recibos em Documentos Profissionais com a Geração de PDF</h3>
                                        <p>Aprimore a apresentação e profissionalismo dos seus orçamentos e recibos com nossa nova funcionalidade de Geração de PDF. Com este recurso, você pode facilmente transformar seus orçamentos e recibos em documentos bem formatados e de alta qualidade, prontos para impressão ou envio eletrônico aos seus clientes.</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Aparência Profissional: Transforme seus orçamentos e recibos em documentos profissionais com formatação precisa e visualmente atraente, transmitindo uma imagem confiável e competente para seus clientes.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Conveniência e Acessibilidade: Acesse seus orçamentos e recibos em formato PDF a partir de qualquer dispositivo, permitindo que você os visualize, compartilhe e imprima onde quer que esteja.</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="{{ route('signature.register') }}">CADASTRAR-ME</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->
                        
                    </div> <!-- end of tab content -->
                    <!-- end of tabs content -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->




    <!-- Details -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>EXPERIMENTE AGORA!</h2>
                        <p>Transforme a maneira como você gerencia suas finanças empresariais. Experimente nosso Sistema de Recibos e Orçamentos hoje mesmo e descubra como podemos simplificar sua vida financeira.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Pagamento 100% seguro</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Suporte 24h</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg page-scroll" href="{{ route('signature.register') }}">CADASTRAR-ME</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" style="border-radius: 5%" src="{{ asset('assets/images/undraw_terms_re_6ak4.svg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details --> 





    {{-- <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">PRECIFICAÇÃO</div>
                    <h2 class="h2-heading">Tabela de Opções de Preços</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">BASIC</div>
                            <div class="price"><span class="currency">$</span><span class="value">Free</span></div>
                            <div class="frequency">14 days trial</div>
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Email Marketing Module</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User Control Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">Collected Data Reports</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="sign-up.html">ME CADASTRAR</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">ADVANCED</div>
                            <div class="price"><span class="currency">$</span><span class="value">29.99</span></div>
                            <div class="frequency">monthly</div>
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Email Marketing Module</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User Control Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">Collected Data Reports</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="sign-up.html">ME CADASTRAR</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>  --}}




    <!-- Newsletter -->
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="above-heading">NOTÍCIAS</div>
                        <h2>Fique Atualizado Com as Últimas Notícias Enviados no Seu Email</h2>

                        <!-- Newsletter Form -->
                        <form method="POST" action="{{ route('newsletter.register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="nemail" name="email">
                                <label class="label-control" for="nemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">ENVIAR</button>
                            </div>
                            <div class="form-message">
                                <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                        <!-- end of newsletter form -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of newsletter -->
@endcomponent