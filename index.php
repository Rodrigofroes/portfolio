<link rel="stylesheet" href="src/components/output.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<html>
    <body>
        <div>
            <?php include "src/components/navbar.php" ?>
        </div>
        <div class="pt-16" id="inicio">
            <?php include "src/components/home.php"?>
        </div>
        <div id="projetos">
            <?php include "src/components/projetos.php"?>
        </div>
        <div id="exp">
            <?php include "src/components/experiencia.php"?>
        </div>
        <div id="contato">
            <?php include "src/components/contato.php"?>
        </div>
        <div>
            <?php include "src/components/footer.php"?>
        </div>

        <script>
            $(document).ready(function(){
                $('a').click(function(){
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