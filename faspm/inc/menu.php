<?php
/**
 * Created by PhpStorm.
 * User: carsj
 * Date: 27/10/2017
 * Time: 23:28
 */
?>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">|| sisJunin ||</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="">Protocolo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Liquidação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Empenho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Empenho e Liquidação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Prestação de Contas</a>
            </li>

            <!-- Dropdown 1 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Cadastrar
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../app/contribuinte.php">Contribuinte</a>
                    <a class="dropdown-item" href="../app/dependente.php">Dependente</a>
                    <a class="dropdown-item" href="#">Fornecedor</a>
                    <a class="dropdown-item" href="#">Dentista</a>
                    <a class="dropdown-item" href="#">Psicólogo</a>
                </div>
            </li>
            <!-- Dropdown 2 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Gerar Documentos
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Parte</a>
                    <a class="dropdown-item" href="#">Ofício</a>
                    <a class="dropdown-item" href="#">Memorando</a>
                    <a class="dropdown-item" href="#">Certidão</a>
                    <a class="dropdown-item" href="#">Negativa</a>
                </div>
            </li>
        </ul>
    </nav>


<?php