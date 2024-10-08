<link rel="stylesheet" href="output.css">

<div class="bg-back flex justify-center flex-col items-center px-4 py-8">
    <!-- Título da Seção -->
    <div class="mb-6 text-center">
        <h1 class="font-poppins font-extrabold text-2xl text-laranjaGrad">
            Projetos
        </h1>
    </div>

    <!-- Grid de Projetos -->
    <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-6xl">
        <!-- Projeto 1 -->
        <div class="bg-nav p-4 rounded-md flex flex-col items-center">
            <img src="https://via.placeholder.com/250x250" class="rounded-lg w-full h-60 object-cover" alt="Projeto 1">
            <button class="text-white font-poppins flex gap-2 hover:underline mt-4 items-center justify-center">
                Nome do projeto
                <img src="/img/share-solid.svg" class="w-4 h-4" alt="">
            </button>
        </div>

        <!-- Projeto 2 -->
        <div class="bg-nav p-4 rounded-md flex flex-col items-center">
            <img src="../.././img/splash.jpeg" class="rounded-lg w-full h-60 object-cover mx-auto" alt="Projeto 2">
            <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="text-white font-poppins flex gap-2 hover:underline mt-4 items-center justify-center">
                Gestão Fácil
                <img src="/img/share-solid.svg" class="w-4 h-4" alt="">
            </button>
        </div>


        <!-- Projeto 3 -->
        <div class="bg-nav p-4 rounded-md flex flex-col items-center">
            <img src="https://via.placeholder.com/250x250" class="rounded-lg w-full h-60 object-cover" alt="Projeto 3">
            <button class="text-white font-poppins flex gap-2 hover:underline mt-4 items-center justify-center">
                Nome do projeto
                <img src="/img/share-solid.svg" class="w-4 h-4" alt="">
            </button>
        </div>
    </figure>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered"> <!-- Modal grande e centralizado -->
        <div class="modal-content">
            <!-- Cabeçalho do Modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">📱 Projeto Mobile - Gestão Fácil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Corpo do Modal -->
            <div class="modal-body">
                <div class="row">
                    <!-- Coluna do Carrossel de Imagens -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../.././img/splash.jpeg" class="d-block w-100" alt="Splash Screen">
                                </div>
                                <div class="carousel-item">
                                    <img src="../.././img/onboard.jpeg" class="d-block w-100" alt="Onboarding">
                                </div>
                                <div class="carousel-item">
                                    <img src="../.././img/welcome.jpeg" class="d-block w-100" alt="Tela de Boas-vindas">
                                </div>
                                <div class="carousel-item">
                                    <img src="../.././img/register.jpeg" class="d-block w-100" alt="Tela de Cadastro">
                                </div>
                                <div class="carousel-item">
                                    <img src="../.././img/reperar.jpeg" class="d-block w-100" alt="Tela de Recuperação">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <!-- Coluna da Descrição do Projeto -->
                    <div class="col-lg-6 col-md-12">
                        <p>
                            Projeto em desenvolvimento para fins de estudo, com o objetivo de criar um aplicativo de gestão que permita o cadastro de clientes, serviços e despesas, oferecendo maior precisão e controle sobre o seu negócio. O projeto foi separado em duas partes: uma aplicação mobile e uma API REST, utilizando o conceito Clean Architecture e SOLID.
                        </p>

                        <!-- Tecnologias Utilizadas -->
                        <p>
                            <strong>Tecnologias utilizadas:</strong><br>
                            <span>📱 Flutter</span> <br>
                            <span>🚀 Express</span> <br>
                            <span>🛠️ TypeScript</span> <br>
                            <span>🐘 PostgreSQL</span>
                        </p>

                        <!-- Status do Projeto -->
                        <p>
                            <strong>Status: </strong>⚙️ Em desenvolvimento.
                        </p>

                        <!-- Barra de Progresso -->
                        <div class="progress mt-2" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rodapé do Modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>