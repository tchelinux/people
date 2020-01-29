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
        <style>
        nav {
            background-color: rgb(0, 0, 0);
        }
        body {
            margin: 0 !important;
            padding: 0 !important;
        }
        .container {
            margin-top: 2em;
            margin-right: 1em;
            margin-left: 1em;
        }
        .card-deck {
            margin: 0 auto;
            width: 100%;
        }
        .card {
            width: 125px !important;
            height: 125px !important;
            margin: 0 auto !important;
            padding: 5px;
            background-color: rgb(255,255,255) !important;
            border: None !important;
        }
        .card-title {
            text-shadow: 0px 0px 5px rgb(0,0,0);
            font-size: small;
            font-weight: bolder;
            position: absolute;
            bottom: 0px;
        }
        img.card-img {
            width: 100px !important;
            height: 100px !important;
            border-radius: 5px 5px;
            border: solid thin rgb(200,200,200);
            margin:0 auto !important;
        }
        @media (min-width: 660px) {
            .container {
                margin-top: 2em;
                margin-right: 0em;
                margin-left: 0em;
            }
            .card {
                width: 180px !important;
                height: 180px !important;
            }
            img.card-img {
                width: 150px !important;
                height: 150px !important;
                background-color: rgb(255,255,255) !important;
            }
            .card-title {
                font-size: x-large;
            }
        }
        @media (min-width: 980px) {
            .card {
                width: 325px !important;
                height: 325px !important;
            }
            img.card-img {
                width: 300px !important;
                height: 300px !important;
            }
            .card-title {
                font-size: x-large;
            }
        }
        </style>
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
            <!-- <div class="card-deck"> -->
                <?php
                // base directory for users.
                $user_repo = "people/";
                // number of cards per row = 12 / $size;
                $size = 4;

                function render_card($user)
                {
                    // base directory for users.
                    $user_repo = "people/";
                    // number of cards per row = 12 / $size;
                    $size = 4;
                    $filename = "{$user_repo}/{$user}/template.json";
                    $data = file_get_contents($filename);
                    $json = json_decode($data);
                    if (!isset($json->Foto)) {
                        $json->Foto = "https://avatars1.githubusercontent.com/u/8228496";
                    }
                    if (isset($json)) {
                        $card = <<<EOS
                        <a class="card text-white col-sm-{$size}" href="https://people.tchelinux.org/{$json->User}">
                            <img class="card-img" src="{$json->Foto}" alt="{$json->User}">
                            <p class="card-title">{$json->User}</p>
                        </a>
EOS;
                        echo $card;
                    }
                }

                $row = $size;
                echo '<div class="row">';
                render_card('tchelinux');
                $users = scandir($user_repo);
                shuffle($users);
                foreach ($users as $user) {
                    if ($user[0] != '.' and $user != 'tchelinux') {
                        if ($row % 12 == 0) {
                            echo '</div><div class="row">';
                        }
                        $row += $size;
                        render_card($user);
                    }
                }
                echo '</div>';
                ?>
            <!-- </div> -->
        </div>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
