<?php
include 'gmail.php';
if (isset($_POST['email']) && isset($_POST['msg']) && isset($_POST['name'])) {
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $name = $_POST['name'];
    sendEmail($email, $msg, $name);
}
?>

<link rel="stylesheet" href="output.css">
<div class="bg-footer flex flex-col items-center justify-center w-full">
    <div class="mt-4 mb-4">
        <h1 class="text-2xl font-medium text-white">Contato</h1>
    </div>
    <div>
        <form method="post" class="flex flex-col gap-2 mb-4">
            <div class="flex flex-col">
                <div class="flex flex-col">
                    <label for="inputName" class="text-lg text-white">Nome:</label>
                    <input type="text" class="w-60 p-2 rounded-md bg-zinc-200 placeholder-zinc-700 outline-none"
                        id="inputName" name="name" placeholder="Digite seu nome">
                </div>
                <div class="flex flex-col">
                    <label for="inputEmail" class="mt-4 text-lg text-white">E-mail:</label>
                    <input type="email" class="w-60 p-2 rounded-md bg-zinc-200 placeholder-zinc-700 outline-none"
                        id="inputEmail" name="email" placeholder="Digite seu e-mail">
                </div>
            </div>
            <div class="w-20 rounded-md">
                <label for="msg" class="mt-4 text-lg text-white">Mensagem:</label>
                <textarea rows="4" cols="50" name="msg" id="msg" class="p-2 rounded-md bg-zinc-200 outline-none">
                </textarea>
            </div>
            <button type="submit" class="bg-blue-500 w-20 p-2 text-white rounded-md">Enviar</button>
        </form>
    </div>
</div>