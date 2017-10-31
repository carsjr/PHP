<?php
/**
 * Created by PhpStorm.
 * User: carsj
 * Date: 24/10/2017
 * Time: 20:11
 */

include_once "../html/header.html";
include_once "../inc/menu.php";

?>
    <body class="body" id="body" xmlns:align="http://www.w3.org/1999/xhtml">

    <br>
    <h1 align="center"> Cadastro de Contribuintes </h1>
    <p>
    <h3 align="center"> Informações do titular</h3>

    <div class="row">
        <br>
    </div>
    <!-- INICIO FORMULÁRIO TITULAR-->
    <form id="form" action="../app/action.php" method="post">
        <div id="div_titular" name="div_titular" style="display: block;">

            <div class="row">

                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                <br>
                    <div class="form-group">
                        <label for="fullNameTit">Nome Completo:</label>
                        <input type="text" class="form-control" id="fullNameTit" name="fullNameTit" required="" onblur="guardaValor(this,'fullNameTit');">
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label for="rgTit">RG:</label>
                                <input type="text" class="form-control" id="rgTit" name="rgTit" placeholder="Rg do Paraná - 00.000.000-0" required="">
                            </div>
                            <div class="form-group">
                                <label for="foneTit">Telefone:</label>
                                <input type="text" class="form-control" id="foneTit" name="foneTit" placeholder="41 5555 5555" required="">
                            </div>
                        <div class="form-group">
                            <label for="postoGradTit">Posto/Graduação:</label>
                            <select class="form-control" id="postoGradTit" name="postoGradTit" required="">
                                <option selected="false">Selecione</option>
                                <optgroup label="Alunos">
                                    <option>Soldado 2º Classe</option>
                                    <option>Cadete 1º Ano</option>
                                    <option>Cadete 2º Ano</option>
                                    <option>Cadete 3º Ano</option>
                                    <option>Aspirante</option>
                                </optgroup>
                                <optgroup label="Praças">
                                    <option>Soldado</option>
                                    <option>Cabo</option>
                                    <option>3º Sargento</option>
                                    <option>2º Sargento</option>
                                    <option>1º Sargento</option>
                                    <option>Subtenente</option>
                                </optgroup>
                                <optgroup label="Oficiais">
                                    <option>2º Tenente</option>
                                    <option>1º Tenente</option>
                                    <option>Capitão</option>
                                    <option>Major</option>
                                    <option>Tenente Coronel</option>
                                    <option>Coronel</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dtNascTit">Data de Nascimento:</label>
                            <input type="date" class="form-control" id="dtNascTit" name="dtNascTit" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cpfTit">CPF:</label>
                            <input type="text" class="form-control" id="cpfTit" name="cpfTit" placeholder="000.000.000-00" required="">
                        </div>
                        <div class="form-group">
                            <label for="emailTit">E-mail:</label>
                            <input type="text" class="form-control" id="emailTit" name="emailTit" placeholder="a@a.com" required="">
                        </div>
                        <div class="form-group">
                            <label for="opmTit">OPM (Lotação):</label>
                            <select class="form-control" id="opmTit" name="opmTit" required="">
                                <option selected="false">Selecione</option>
                                <option>RR</option>
                                <option>12º BPM</option>
                                <option>13º BPM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dtIncTit">Data de Inclusão:</label>
                            <input type="date" class="form-control" id="dtIncTit" name="dtIncTit" placeholder="">
                        </div>
                    </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="confirmaForm();">SALVAR</button>
                    <button  type="reset" class="btn btn-outline-primary">LIMPAR</button>
                    <br>
                    <br>
                <div class="col-sm-3"></div>
            </div>
        </div>

    </form>
    </body>



    <!-- The Modal -->
    <div class="modal fade" id="myModal" name="myModal">
        <div class="w3-modal-content w3-animate-top">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" id="modalHeader" name="modalHeader" >
                    <h3 class="modal-title">Confirma o Cadastro?</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <span class="modal-body">
                    <div class="form-group">
                        <label for="fullNameTitModal">Nome Completo:</label>
                        <input type="text" class="form-control" id="fullNameTitModal" name="fullNameTitModal" disabled>
                    </div>
                     <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label for="rgTit">RG:</label>
                                <input type="text" class="form-control" id="rgTit" name="rgTit" disabled>
                            </div>
                            <div class="form-group">
                                <label for="foneTit">Telefone:</label>
                                <input type="text" class="form-control" id="foneTit" name="foneTit" disabled>
                            </div>
                            <div class="form-group">
                                <label for="postoGradTit">Posto/Graduação:</label>
                                <input type="text" class="form-control" id="postoGradTit" name="postoGradTit" disabled>
                            </div>
                            <div class="form-group">
                                <label for="dtNascTit">Data de Nascimento:</label>
                                <input type="text" class="form-control" id="dtNascTit" name="dtNascTit" disabled>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cpfTit">CPF:</label>
                            <input type="text" class="form-control" id="cpfTit" name="cpfTit"disabled>
                        </div>
                        <div class="form-group">
                            <label for="emailTit">E-mail:</label>
                            <input type="text" class="form-control" id="emailTit" name="emailTit" disabled>
                        </div>
                        <div class="form-group">
                            <label for="opmTit">OPM: (Lotação)</label>
                            <input type="text" class="form-control" id="opmTit" name="opmTit" disabled>
                        </div>
                        <div class="form-group">
                                <label for="dtIncTit">Data de Inclusão:</label>
                                <input type="text" class="form-control" id="dtIncTit" name="dtIncTit" disabled>
                            </div>
                    </div>
                     </div>
                </span>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button  type="button" class="btn btn-primary"  onclick="concluirCadastro();">SALVAR</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">VOLTAR</button>

                </div>

            </div>
        </div>
    </div>

<?php
include_once "../html/footer.html";

