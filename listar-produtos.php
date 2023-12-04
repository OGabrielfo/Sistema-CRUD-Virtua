<h1 class="mt-3 align-middle text-center">Listar Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<div class='p-1 rounded border border-info bg-info'><table class='m-0 table table-md table-hover table-striped table-info'>";

        print "<tr>";
        print "<th class='align-middle'>#</th>";
        print "<th class='align-middle'>Nome</th>";
        print "<th class='align-middle'>Qtd.</th>";
        print "<th class='align-middle'>Preço</th>";
        print "<th class='align-middle'>Descrição</th>";
        print "<th class='align-middle'>Data do cadastro</th>";
        print "<th class='align-middle'>Ações</th>";
        print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td class='align-middle'>". $row->id. "</td>";
            print "<td class='align-middle'>". $row->nome. "</td>";
            print "<td class='align-middle'>". $row->quantidade. "</td>";
            print "<td class='align-middle'>R$ ". $row->preco. "</td>";
            print "<td class='align-middle'>". $row->descricao. "</td>";
            print "<td class='align-middle'>". $row->data_cadastro. " - " . $row->hora_cadastro. "</td>";
            print "<td class='align-middle'>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success' style='padding: 3px 5px;' title='editar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                        </svg>
                    </button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=actions&acao=excluir&id=".$row->id."';} else {false;}\" class='btn btn-danger' style='padding: 3px 5px;' title='excluir'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                        <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                        </svg>
                    </button>
                    </td>";
            print "</tr>";
        }
        print "</table></div>";
    } else {
        print "<p class='alert alert-danger'>Você ainda não tem nenhum cadastro!</p>";
        print "<button onclick=\" location.href='?page=novo' \"  class=\"btn btn-primary\">Cadastrar</button>";
    }
?>