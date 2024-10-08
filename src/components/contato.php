<script>
    $(document).ready(function() {
        $('form').submit(function(e) {
            e.preventDefault();

            let nome = $('#inputName').val();
            let email = $('#inputEmail').val();
            let msg = $('#msg').val();

            const button = $('#submitButton');
            const buttonText = $('#buttonText');
            const spinner = $('#spinner');

            button.prop('disabled', true);
            buttonText.addClass('hidden');
            spinner.removeClass('hidden');

            $.ajax({
                type: 'post',
                url: 'gmail.php',
                data: {
                    name: nome,
                    email: email,
                    msg: msg
                },
                success: function(data) {
                    if (data.ok) {
                        $('#toast-success').css('opacity', '1');
                        setTimeout(() => {
                            $('#toast-success').css('opacity', '0');
                        }, 5000);
                    } else {
                        alert(data.msg);
                    }
                },
                error: function() {
                    alert('Erro ao enviar a mensagem.');
                },
                complete: function() {
                    button.prop('disabled', false);
                    buttonText.removeClass('hidden');
                    spinner.addClass('hidden');
                }
            });
        });
    });
</script>

<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-footer flex flex-col items-center justify-center w-full py-2">
    <div class="mb-6 items-center flex justify-center">
        <h1 class="text-2xl font-extrabold  text-laranjaGrad mb-6">Contato</h1>
    </div>

    <div class="w-full max-w-md px-8">
        <form method="post" class="flex flex-col gap-6">
            <div class="flex flex-col">
                <label for="inputName" class="text-lg text-white mb-2">Nome:</label>
                <input type="text" class="p-3 rounded-md bg-zinc-100 text-zinc-700 placeholder-zinc-500 outline-none focus:ring-2 focus:ring-blue-400"
                    id="inputName" name="name" placeholder="Digite seu nome" required>
            </div>

            <div class="flex flex-col">
                <label for="inputEmail" class="text-lg text-white mb-2">E-mail:</label>
                <input type="email" class="p-3 rounded-md bg-zinc-100 text-zinc-700 placeholder-zinc-500 outline-none focus:ring-2 focus:ring-blue-400"
                    id="inputEmail" name="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="flex flex-col">
                <label for="msg" class="text-lg text-white mb-2">Mensagem:</label>
                <textarea rows="5" class="p-3 rounded-md bg-zinc-100 text-zinc-700 placeholder-zinc-500 outline-none focus:ring-2 focus:ring-blue-400 resize-none"
                    id="msg" name="msg" placeholder="Digite sua mensagem" required></textarea>
            </div>

            <button id="submitButton" type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium p-3 rounded-md transition duration-300 flex items-center justify-center">
                <span id="buttonText">Enviar</span>
                <div id="spinner" class="spinner-border text-light ml-2 hidden" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>

        </form>
    </div>
</div>

<!-- Toast Container -->
<div id="toast-success" class="fixed bottom-5 right-5 bg-green-500 text-white px-6 py-4 rounded-md shadow-lg opacity-0 transition-opacity duration-300 z-50">
    <div class="flex items-center">
        <span class="mr-2 font-bold">Sucesso:</span>
        <p>Sua mensagem foi enviada com sucesso!</p>
    </div>
</div>