<h1>Editar Produto</h1>

<?php
    $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=actions" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="">Nome do Produto</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Quantidade</label>
        <input type="number" name="quant" value="<?php print $row->quantidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Preço</label>
        <input type="number" format="currency" precision="2" step="0.01" name="preco" value="<?php print $row->preco; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Descrição</label>
        <input type="text" name="descr" value="<?php print $row->descricao; ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>