<script src="https://cdn.tailwindcss.com"></script>

<div class="flex flex-col items-center justify-center w-full bg-back gap-8 px-4 py-8 md:gap-6">
    <!-- Imagem do perfil -->
    <figure class="mt-10">
        <img style="border-radius: 50%; border: 4px solid #222222; width: 200px; height: 200px; object-fit: cover;" 
             class="md:w-64 md:h-64" src="/img/perfil.jpeg" alt="avatar">
    </figure>

    <!-- Título principal -->
    <div class="text-center mb-5">
        <h1 class="font-poppins text-3xl md:text-5xl lg:text-6xl font-extrabold text-white">
            Eu codifico e transformo <span>ideias em realidade!</span>
        </h1>
    </div>

    <!-- Descrição -->
    <div class="text-center">
        <p class="font-poppins text-base md:text-lg text-zinc-400 w-full max-w-md md:max-w-lg">
            Olá, me chamo Rodrigo. Sou um desenvolvedor Júnior apaixonado por tecnologia, pronto para enfrentar desafios e contribuir para projetos inovadores.
        </p>
    </div>

    <!-- Botão de download do CV -->
    <div>
        <a href="dowloand.php" class="flex items-center text-white bg-transparent border-2 border-white p-2 rounded-lg gap-2 font-medium mb-4 mt-4 transition hover:bg-white hover:text-black">
            <img src="img/dowloand.svg" class="w-5 h-5" alt="">
            Download CV
        </a>
    </div>

    <!-- Seção de experiência -->
    <div class="flex flex-col gap-4 mb-4">
        <h1 class="font-poppins text-sm font-semibold text-zinc-400 text-center">
            Experiência com
        </h1>
        <figure class="flex flex-wrap justify-center items-center gap-4">
            <img src="/img/nodejs-plain.svg" width="40" height="40" alt="">
            <img src="/img/php-plain.svg" width="40" height="40" alt="">
            <img src="/img/mysql-plain.svg" width="40" height="40" alt="">
            <img src="/img/html5-original.svg" width="40" height="40" alt="">
            <img src="/img/css3-original.svg" width="40" height="40" alt="">
            <img src="/img/javascript-original.svg" width="40" height="40" alt="">
        </figure>
    </div>
</div>
