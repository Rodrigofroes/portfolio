<?php
    $year = date("Y");
?>
<script src="https://cdn.tailwindcss.com"></script>
<footer class="bg-back py-8">
    <div class="container mx-auto px-6">
        <!-- Links principais -->
        <div class="flex justify-center space-x-8 mb-6 text-sm font-medium text-gray-500">
            <a href="#inicio" class="hover:text-white">Início</a>
            <a href="#projetos" class="hover:text-white">Projetos</a>
            <a href="#exp" class="hover:text-white">Experiência</a>
            <a href="#contato" class="hover:text-white">Contato</a>
        </div>

        <!-- Redes Sociais -->
        <div class="flex justify-center space-x-6 mb-6 text-gray-400">
            <a href="https://www.instagram.com/oliveirafroes.dev" target="_blank" class="group">
                <img src="../../img/instagram-svgrepo-com.svg" class="h-6 w-6 group-hover:filter group-hover:brightness-75 transition duration-200" alt="">
            </a>

            <a href="https://github.com/Rodrigofroes" target="_blank" class="hover:text-gray-600 brightness-75 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0C5.371 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.387.599.11.82-.26.82-.578 0-.285-.01-1.04-.015-2.04-3.338.727-4.043-1.61-4.043-1.61-.546-1.385-1.333-1.755-1.333-1.755-1.09-.744.083-.729.083-.729 1.204.086 1.838 1.237 1.838 1.237 1.07 1.835 2.807 1.304 3.492.997.107-.774.418-1.305.762-1.606-2.665-.303-5.466-1.333-5.466-5.931 0-1.31.468-2.381 1.235-3.221-.123-.304-.535-1.526.118-3.182 0 0 1.008-.322 3.303 1.23a11.491 11.491 0 013.008-.404c1.02.004 2.048.137 3.008.404 2.294-1.552 3.302-1.23 3.302-1.23.654 1.656.242 2.878.119 3.182.77.84 1.235 1.911 1.235 3.221 0 4.609-2.804 5.625-5.475 5.921.43.37.823 1.103.823 2.224 0 1.606-.015 2.902-.015 3.295 0 .319.218.693.824.577C20.565 21.8 24 17.304 24 12c0-6.627-5.373-12-12-12z" />
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/rodrigo-oliveira-39b33a315/" target="_blank" class="hover:text-gray-600 brightness-75 transition duration-200">
                <img src="../../img/linkedin-svgrepo-com.svg" class="h-6 w-6 group-hover:filter group-hover:brightness-75 transition duration-200" alt="">
            </a>
        </div>

        <p class="text-center text-gray-400 text-sm">
            © <?php echo $year; ?> Rodrigo Oliveira. Feito com ❤️. Todos os direitos reservados.

        </p>
    </div>
</footer>