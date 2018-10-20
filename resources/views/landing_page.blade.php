    @extends('layouts.app')

    @section('content')
    <header class="masthead">
        <div class="background-image-fade"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="header-content mx-auto">
                        <h1>
                            Não consegue encontrar um artista para seu evento?
                        </h1>
                        <span>Não se preocupe, nós resolvemos o seu problema.</span>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="btn btn-outline btn-xl js-scroll-trigger">Aproveite, é totalmente gratuito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="features" id="features">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Funcionalidades da nossa ferramenta</h2>
                <p>Tanto no PC quanto no seu Celular, acesse todas as funcionalidades!</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-4 my-auto">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <img src="{{ asset('images/utilities/samsung-note-9.png') }}" class="img-fluid" alt="Aplicativo Mobile e Responsivo.">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fas fa-mobile-alt"></i>
                                    <h3>Responsivo</h3>
                                    <p>Acesse nossa ferramenta de seu celular, notebook ou PC.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fas fa-search"></i>
                                    <h3>Buscas</h3>
                                    <p>Busque pelo artista ideal a partir de alguns cliques.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fas fa-comments"></i>
                                    <h3>Chat</h3>
                                    <p>Entre em contato com o artista diretamente de nossa ferramenta,
                                    através de um chat rapido e prático.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="fas fa-check"></i>
                                    <h3>Avaliações</h3>
                                    <p>Avaliações sobre o serviço prestado pelos artistas cadastrados em nosso sistema.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="download bg-download-app text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h2 class="section-heading">Baixe nosso aplicativo!</h2>
                    <p>Nosso aplicativo está disponível para download! <br>Faça o download agora!</p>
                    <div class="badges">
                        <a class="badge-link" href="#">
                            <img src="{{ asset('assets/images/utilities/google-play-badge.svg') }}" alt="Baixe nosso aplicativo para Android">
                        </a>
                        <span class="px-5"></span>
                        <a class="badge-link" href="#">
                            <img src="{{ asset('assets/images/utilities/app-store-badge.svg') }}" alt="Baixe nosso aplicativo para IOs">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team" id="team">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Nosso Time de Profissionais</h2>
                <p>Conheça nosso incrível time de profissionais.</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('images/team/joao.jpg') }}" alt="">
                        <h4>João Vitor</h4>
                        <p>Desenvolvedor Mobile</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#" class="social-icon" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-icon" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-icon" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('images/team/leonardo.jpg') }}" alt="">
                        <h4>Leonardo</h4>
                        <p>Desenvolvedor Back-End</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#" class="social-icon" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-icon" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-icon" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('images/team/victor.jpg') }}" alt="">
                        <h4>Victor Hugo</h4>
                        <p>Desenvolvedor Front-End</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#" class="social-icon" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-icon" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="social-icon" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">
                        A nossa equipe é composta de amantes por música, técnologia, inovação e conhecimento.
                        Nos acompanhe nas redes sociais.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @endsection
