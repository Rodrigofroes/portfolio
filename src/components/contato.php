<?php
include 'gmail.php';
if (isset($_POST['email']) && isset($_POST['msg']) && isset($_POST['name'])) {
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $name = $_POST['name'];
    sendEmail($email, $msg, $name);
}
?>

<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-footer flex flex-col items-center justify-center w-full py-12">
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

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium p-3 rounded-md transition duration-300">
                Enviar
            </button>
        </form>
    </div>
</div>