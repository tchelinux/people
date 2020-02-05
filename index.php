<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tchelinux">
        <meta name="author" content="Tchelinux">

        <title>Tchelinux | Grupo de Usuários de Software Livre do Sul do Brasil</title>

        <link rel="shortcut icon" type="image/x-icon" href="https://tchelinux.org/favicon.ico">
        <link rel="stylesheet" href="https://tchelinux.org/css/tchelinux.css">
        <link rel="stylesheet" href="people.css">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="https://tchelinux.org">Tchelinux</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <a class="nav-item nav-link active" href="https://wiki.tchelinux.org/#!sobre.md">Sobre o Tchelinux</a>
                    <a class="nav-item nav-link" href="https://wiki.tchelinux.org/#!como_participar.md">Como participar?</a>
                    <a class="nav-item nav-link" href="https://wiki.tchelinux.org/#!como_ajudar.md">Como ajudar?</a>
                    <a class="nav-item nav-link" href="https://wiki.tchelinux.org/#!eventos/calendario.md">Calendário de Eventos</a>
                    <a class="nav-item nav-link" href="https://certificados.tchelinux.org">Certificados</a>
                    <a class="nav-item nav-link" href="https://wiki.tchelinux.org">Wiki</a>
                    <a class="nav-item nav-link" href="https://tchelinux.org/en">EN</a>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="gallery">
                <?php
                // base directory for users.
                $user_repo = "../dados_people/people";

                function render_card($user)
                {
                    // base directory for users.
                    $user_repo = "../dados_people/people/";
                    $filename = "{$user_repo}/{$user}/template.json";
                    $data = file_get_contents($filename);
                    $json = json_decode($data);
                    if (!isset($json->Foto)) {
                        $json->Foto = "https://avatars1.githubusercontent.com/u/8228496";
                    }
                    if (isset($json)) {
                        $card = "<div class=\"col-sm-2 avatar\"><a href=\"https://people.tchelinux.org/{$json->User}\"><img class=\"photo\" src=\"{$json->Foto}\" alt=\"{$json->User}\" title=\"{$json->Nome}\"><p class=\"username\">{$json->User}</p></a></div>";
                        echo $card;
                    }
                }

                $row = 1;
                echo '<div class="gallery_line"><div class="avatar col-sm-1">&nbsp;</div>';
                render_card('tchelinux');
                $users = scandir($user_repo);
                shuffle($users);
                foreach ($users as $user) {
                    if ($user[0] != '.' and $user != 'tchelinux') {
                        if ($row % 5 == 0) {
                            echo '<div class="avatar col-sm-1">&nbsp;</div></div><div class="gallery_line"><div class="avatar col-sm-1">&nbsp;</div>';
                        }
                        $row += 1;
                        render_card($user);
                    }
                }
                echo '<div class="avatar col-sm-1">&nbsp;</div></div>';
                ?>
            </div>
        </div>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
