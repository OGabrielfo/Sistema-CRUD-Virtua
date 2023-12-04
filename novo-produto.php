<h1>Novo Produto</h1>
<div class="container bg-secondary rounded p-3">
    <form action="?page=actions" method="POST">
        <div class="row">
            <!-- Input do tipo hidden com o que será chamado ao enviar o formulário para que não apareça na url -->
            <input type="hidden" name="acao" value="cadastrar">
            <div class="mb-3 col">
                <label>Nome do Produto</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3 col-2">
                <label>Quantidade</label>
                <input type="number" name="quant" class="form-control" required>
            </div>
            <div class="mb-3 col-2">
                <label>Preço</label>
                <input type="number" format="currency" precision="2" step="0.01" name="preco" class="form-control" required>
            </div>
        </div>
        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descr" class="form-control" rows="3"  style="resize: none"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" style="padding: 5px 30px;">Salvar</button>
        </div>
    </form>
</div>