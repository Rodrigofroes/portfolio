<script src="https://cdn.tailwindcss.com"></script>

<nav class="bg-nav fixed top-0 left-0 right-0 z-50">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-center">
            <!-- Menu Mobile - Hamburguer -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400  hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Logo e Links centralizados -->
            <div class="flex  items-center justify-between sm:items-stretch sm:justify-start">
                <div class="flex items-center">
                    <img class="h-8 w-auto" src="../../img/logo.svg" alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="#inicio" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300  hover:text-white" aria-current="page">Início</a>
                        <a href="#projetos" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300  hover:text-white">Projetos</a>
                        <a href="#exp" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300  hover:text-white">Experiência</a>
                        <a href="#contato" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300  hover:text-white">Contato</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="sm:hidden hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="#inicio" class="block rounded-md px-3 py-2 text-base font-medium text-white  hover:text-white" aria-current="page">Início</a>
            <a href="#projetos" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300  hover:text-white">Projetos</a>
            <a href="#exp" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300  hover:text-white">Experiência</a>
            <a href="#contato" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300  hover:text-white">Contato</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.querySelector('button[aria-controls="mobile-menu"]');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>