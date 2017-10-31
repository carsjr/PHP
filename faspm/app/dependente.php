<?php
/**
 * Created by PhpStorm.
 * User: carsj
 * Date: 28/10/2017
 * Time: 13:16
 */

include_once "../html/header.html";
include_once "../inc/menu.php";
include_once "../inc/DAO.php";

?>
    <body class="body" id="body" xmlns:align="http://www.w3.org/1999/xhtml">

    <br>
    <h1 align="center"> Cadastro de Contribuintes </h1>
    <p>
    <h3 align="center"> Informações do dependente</h3>

    <div class="row">

    </div>
    <!-- INICIO FORMULÁRIO TITULAR-->
    <form id="form" action="../app/action.php" method="post">
        <div id="div_dependente" name="div_dependente" style="display: block;">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <br>
                    <span class="modal-content">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="buscaSql">Localizar Titular (Nome ou Rg):</label>
                                <input type="text" class="form-control" id="buscaSql" name="buscaSql" required="">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="tipoBuscaSql">Tipo de Busca:</label>
                                <select class="form-control" id="tipoBuscaSql" name="tipoBuscaSql" required="">
                                    <option selected="true" value="rgTit">RG</option>
                                    <option value="fullNameTit">Nome</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <br>
                            <button  type="button" class="btn btn-default" onClick="mostraFormDependente();"> BUSCAR</button>
                        </div>
                    </div>
                        </span>
                    <br>
                    <div id="divFormDependente" name="divFormDependente" class="hidden";>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <?php echo $result;



                                            ?>
                                            <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Rg</th>
                                                <th>Email</th>
                                                <th>Dependentes</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>John grande grande</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary">Adicionar</button>
                                                    <button type="button" class="btn btn-outline-warning">Remover</button>
                                                    <button type="button" class="btn btn-outline-danger">Alterar</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>John grande grande</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary">Adicionar</button>
                                                    <button type="button" class="btn btn-outline-warning">Remover</button>
                                                    <button type="button" class="btn btn-outline-danger">Alterar</button>
                                                </td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="confirmaForm();">SALVAR</button>
                    <button  type="reset" class="btn btn-outline-primary">LIMPAR</button>
                    <div class="col-sm-3"></div>
                </div>
            </div>
            </div>
    </form>
    </body>

<?php
include_once "../html/footer.html";
