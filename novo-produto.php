<h1>Novo Produto</h1>
<form action="?page=actions" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome do Produto</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Quantidade</label>
        <input type="number" name="quant" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Preço</label>
        <input type="number" format="currency" precision="2" step="0.01" name="preco" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Descrição</label>
        <input type="text" name="descr" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>