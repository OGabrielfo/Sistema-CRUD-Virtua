<h1>Editar Produto</h1>

<?php
    // Comando SQL que será executado com id do produto a ser editado
    $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST["id"];

    // Conexão com o banco de dados com execução do comando SQL
    $res = $conn->query($sql);
    
    // Retorno visual com as informações do item a ser editado
    $row = $res->fetch_object();
?>
<div class="container bg-secondary rounded p-3">
    <form action="?page=actions" method="POST">
        <div class="row">
            <!-- Input do tipo hidden com o que será chamado ao enviar o formulário para que não apareça na url -->
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php print $row->id; ?>">
            <div class="mb-3 col">
                <label for="">Nome do Produto</label>
                <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" required>
            </div>
            <div class="mb-3 col-2">
                <label for="">Quantidade</label>
                <input type="number" name="quant" value="<?php print $row->quantidade; ?>" class="form-control" required>
            </div>
            <div class="mb-3 col-2">
                <label for="">Preço</label>
                <input type="number" format="currency" precision="2" step="0.01" name="preco" value="<?php print $row->preco; ?>" class="form-control" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="">Descrição</label>
            <textarea name="descr" rows="3" style="resize: none" class="form-control"><?php print $row->descricao; ?></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" style="padding: 5px 30px;">Salvar</button>
        </div>
    </form>
</div>