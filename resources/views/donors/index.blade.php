<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Doadores</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>
<body>
    <table id="table-donors" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Idade</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Idade</th>
                <th></th>
            </tr>
        </tfoot>
    </table>


    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="assets/js/data-donor.js"></script>
    
    <script>
        var tableDonor = {!! json_encode([
            "id" => 'table-donors',
            "url" => route('donors.data'),
            "txtConfirm" => "Você confirma a exclusão do Doador ",
            "txtCancel" => "A Exclusão foi Cancelada!",
            "txtError" => "Houve um erro no servidor!",
            "txtSave" => "Salvar",
            "txtUpdate" => "Alterar",
            "token" => csrf_token()
        ]) !!};
    </script>
</body>
</html>