<link rel="stylesheet" href="src/components/output.css">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="./img/logo.svg">
    <title>Portfólio</title>
</head>

<html>

<body>
    <div>
        <?php include "src/components/navbar.php" ?>
    </div>
    <div class="pt-16" id="inicio">
        <?php include "src/components/home.php" ?>
    </div>
    <div id="projetos">
        <?php include "src/components/projetos.php" ?>
    </div>
    <div id="exp">
        <?php include "src/components/experiencia.php" ?>
    </div>
    <div id="contato">
        <?php include "src/components/contato.php" ?>
    </div>
    <div>
        <?php include "src/components/footer.php" ?>
    </div>

    <script>
        $(document).ready(function() {
            $('a').click(function() {
                var target = $(this).attr('href');
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 800);
                return false;
            });
        });
    </script>
</body>

</html>