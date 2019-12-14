<?php require_once "template/header.php" ?>

<div class="container">
    <section class="mt-5">
        <h2>Dados dos cartórios</h2>
        <hr>
        <div class="row container">
            <div class="col">
                <button type="button" class="btn btn-secondary btn-check" 
                        style="margin-bottom:5px;margin-left:-14px;">Checar XML</button>

                <button class="btn btn-info" class="btn btn-secondary btn-insert"
                        data-toggle="modal" data-target="#modalCartorio"
                        style="margin-bottom:5px;">Inserir cartório</button>
            </div>

            <div class="col col-lg-4">
                <form method="GET" action"/">
                    <div class="form-row align-items-center">
                        <div class="">
                            <input type="text" value="<?=(!empty($_GET['filtro']) ? $_GET['filtro'] : '')?>" name="filtro" class="form-control mb-2" id="inlineFormInput" placeholder="Filtre pelo nome do cartório">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <table class="table table-sm table-hover" id="tabela">
            <thead>
                <tr class="table-primary">
                <th scope="col">Nome</th>
                <th scope="col">Razão</th>
                <th scope="col">Documento</th>
                <th scope="col">Cep</th>
                <th scope="col">Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">UF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Tabelião</th>
                <th scope="col">Ativo</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($cartorios as $dados): ?>
                <tr>
                    <td><?= $dados['nome'] ?></td>
                    <td><?= $dados['razao'] ?></td>
                    <td><?= $dados['documento'] ?></td>
                    <td><?= $dados['cep'] ?></td>
                    <td><?= $dados['endereco'] ?></td>
                    <td><?= $dados['bairro'] ?></td>
                    <td><?= $dados['cidade'] ?></td>
                    <td><?= $dados['uf'] ?></td>
                    <td><?= $dados['telefone'] ?></td>
                    <td><?= $dados['email'] ?></td>
                    <td><?= $dados['tabeliao'] ?></td>
                    <td><?= $dados['ativo'] ?></td>
                    <td>
                        <button type="button" class="btn btn-success atualizar-contatos"
                                data-id="<?= $dados['id'] ?>"
                                data-nome="<?= $dados['nome'] ?>"
                                data-razao="<?= $dados['razao'] ?>"
                                data-documento="<?= $dados['documento'] ?>"
                                data-cep="<?= $dados['cep'] ?>"
                                data-endereco="<?= $dados['endereco'] ?>"
                                data-bairro="<?= $dados['bairro'] ?>"
                                data-cidade="<?= $dados['cidade'] ?>"
                                data-uf="<?= $dados['uf'] ?>"
                                data-email="<?= $dados['email'] ?>"
                                data-tel="<?= $dados['telefone'] ?>"
                                data-tabeliao="<?= $dados['tabeliao'] ?>"
                                data-status="<?= $dados['ativo'] ?>"
                                data-toggle="modal" data-target="#modalContatos">Editar Contatos</button>

                        <button type="button" 
                                data-id="<?= $dados['id'] ?>"
                                class="btn btn-danger deletar-cartorio mt-2">Deletar Cartório</button>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </section>

    <!-- Modal contatos -->
    <div class="modal fade" id="modalContatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contatos do Cartório</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput2">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Informe o nome">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Razão Social</label>
                <input type="text" class="form-control" id="razao" placeholder="Informe a razão social">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Documento</label>
                <input type="text" class="form-control" id="docs" placeholder="Informe o numero do documento">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="Informe o cep">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Endereço</label>
                <input type="text" class="form-control" id="endereco" placeholder="Informe o endereço">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Bairro</label>
                <input type="text" class="form-control" id="bairro" placeholder="Informe o bairro">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Cidade</label>
                <input type="text" class="form-control" id="cidade" placeholder="Informe a cidade">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">UF</label>
                <input type="text" class="form-control" id="uf" placeholder="Informe a UF do estado">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Informe um e-mail">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Telefone</label>
                <input type="text" class="form-control" id="telefone" placeholder="Informe um telefone">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Tabelião</label>
                <input type="text" class="form-control" id="tabeliao" placeholder="Informe o nome do tabelião">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Ativo</label>
                <select id="ativo-status" class="form-control">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-modal-contatos" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary salvarContatos">Atualizar</button>
        </div>
        </div>
    </div>
    </div>
    <!-- FIM contatos -->

    <!-- Modal cartorios -->
    <div class="modal fade" id="modalCartorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro de Cartório</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
                    <label for="formGroupExampleInput2">Nome</label>
                    <input type="text" class="form-control" id="nomeCartorio" placeholder="Informe o nome">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Razão Social</label>
                    <input type="text" class="form-control" id="razaoCartorio" placeholder="Informe a razão social">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Documento</label>
                    <input type="text" class="form-control" id="docsCartorio" placeholder="Informe o numero do documento">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">CEP</label>
                    <input type="text" class="form-control" id="cepCartorio" placeholder="Informe o cep">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Endereço</label>
                    <input type="text" class="form-control" id="enderecoCartorio" placeholder="Informe o endereço">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Bairro</label>
                    <input type="text" class="form-control" id="bairroCartorio" placeholder="Informe o bairro">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Cidade</label>
                    <input type="text" class="form-control" id="cidadeCartorio" placeholder="Informe a cidade">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">UF</label>
                    <input type="text" class="form-control" id="ufCartorio" placeholder="Informe a UF do estado">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">E-mail</label>
                    <input type="email" class="form-control" id="emailCartorio" placeholder="Informe um e-mail">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Telefone</label>
                    <input type="text" class="form-control" id="telefoneCartorio" placeholder="Informe um telefone">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tabelião</label>
                    <input type="text" class="form-control" id="tabeliaoCartorio" placeholder="Informe o nome do tabelião">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Ativo</label>
                    <select id="status" class="form-control">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-modal-cartorio" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary salvarCartorio">Salvar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Fim cartorios -->
</div>
<?php require_once "template/footer.php" ?>