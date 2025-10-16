<?php
require_once "Agenda.class.php";
require_once "Contato.class.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAD Agenda</title>
    <link rel="stylesheet" href="css/agenda.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

    <header>
        <div class="logo">
            <i class="bi bi-person-lines-fill"></i>
            <h1>TAD Agenda</h1>
        </div>

        <nav>
            <a href="#">Início</a>
            <a href="#" class="active">Contatos</a>
        </nav>
    </header>

    <main>
        <?php
        // Instanciação dos contatos
        $contato1 = new Contato("Matheus", "(99) 99999-9999");
        $contato2 = new Contato("Giovanna", "(88) 88888-8888");
        $contato3 = new Contato("Raquel", "(77) 77777-7777");
        $contato4 = new Contato("Lucas", "(66) 66666-6666");
        $contato5 = new Contato("Amanda", "(55) 55555-5555");
        $contato6 = new Contato("Felipe", "(44) 44444-4444");
        $contato7 = new Contato("Bruna", "(33) 33333-3333");
        $contato8 = new Contato("Carlos", "(22) 22222-2222");
        $contato9 = new Contato("Juliana", "(11) 11111-1111");
        $contato10 = new Contato("Thiago", "(00) 00000-0000");

        // Instanciação da agenda
        $agenda = new Agenda();

        // Adição dos contatos na agenda
        $agenda->adicionarContato($contato1);
        $agenda->adicionarContato($contato2);
        $agenda->adicionarContato($contato3);
        $agenda->adicionarContato($contato4);
        $agenda->adicionarContato($contato5);
        $agenda->adicionarContato($contato6);
        $agenda->adicionarContato($contato7);
        $agenda->adicionarContato($contato8);
        $agenda->adicionarContato($contato9);
        $agenda->adicionarContato($contato10);

        // Listagem dos contatos
        echo "<h3>Lista de Contatos</h3>";
        echo "<ul>";
        $agenda->listarContatos();
        echo "</ul>";

        // Busca de um contato
        $agenda->encontrarContato("Bruna");
        $agenda->encontrarContato("Giovanna");
        $agenda->encontrarContato("Bruno"); // Contato inexistente
        $agenda->encontrarContato("Ricardo"); // Contato inexistente
        ?>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> - Desenvolvido por <strong>Matheus Amaral da Costa</strong>
    </footer>

</body>

</html>