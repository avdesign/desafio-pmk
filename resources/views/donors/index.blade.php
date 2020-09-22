<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Doadores</title>
    
     <!--STYLES VENDOR -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/datatables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/datatables/css/responsive.bootstrap4.min.css')}}">
    <style type="text/css" class="init">
	
        td.details-control {
            background: url('{{asset("vendor/datatables/media/images/details_open.png")}}') no-repeat center center;
            cursor: pointer;
        }
        tr.details td.details-control {
            background: url('{{asset("vendor/datatables/media/images/details_close.png")}}') no-repeat center center;
        }

        .btns-actions {
            position: relative;
        }

        .btn-delete {
            position: relative;
            padding-left: 10px;
        }
        
    </style>

   
</head>
<body>



    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 text-left">
              <div class="panel panel-default">                 
                  <div class="panel-body">
                      <div class="table-responsive">
                        <table id="table-donors" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>  
                                        <button onclick="addDonor()" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#donorModal">Adicionar Doador</button>
                                    </th>                              
                                    <th>Email</th>
                                    <th>CPF</th>
                                    <th>Idade</th>
                                    <th></th>
                                    <th>Ações</th>
                                </tr>
                            </thead>                    
                        </table>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-sm-1"></div>
            
        </div>
    </div>
    <!--MODAL -->
    @include('donors._partials.form')



    <!--SCRIPTS VENDOR -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/responsive.bootstrap4.min.js')}}"></script>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- SCRIPTS PAGE 
    <script type="text/javascript" src="assets/js/data-donor.js"></script> -->
<!--VARIABLES PAGE-->
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
<script>
    function format ( d ) {
        return 'Nome: '+d.name+'<br>'+
            'Email: '+d.email+'<br>'+
            'CPF: '+d.document+'<br>'+
            'Criar um painel para obter todos as doações e dados do doador';
    }
 
    $(document).ready(function() {
        var dt = $('#'+tableDonor.id).DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": tableDonor.url,
                "type": "POST",
                "dataType": "json",
                "headers": {'X-CSRF-TOKEN': tableDonor.token}
            },
            "columns": [
                { "data": "name" },
                { "data": "email" },
                { "data": "document" },
                { "data": "birth_date" },
                { "data": null,"class": "details-control","orderable":false,"defaultContent": ""},
                { "data": "actions","orderable":false }
            ],
            "order": [[0, 'asc']]
        } );
    
        // Array to track the ids of the details displayed rows
        var detailRows = [];
    
        $('#'+tableDonor.id+' tbody').on( 'click', 'tr td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );
    
            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();
    
                // Remove from the 'open' array
                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );
                row.child( format( row.data() ) ).show();
    
                // Add to the 'open' array
                if ( idx === -1 ) {
                    detailRows.push( tr.attr('id') );
                }
            }
        } );
    
        // On each draw, loop over the `detailRows` array and show any child rows
        dt.on( 'draw', function () {
            $.each( detailRows, function ( i, id ) {
                $('#'+id+' td.details-control').trigger( 'click' );
            } );
        } );
    } );
</script>

<script>   
    function addDonor(){
        $('#donorModal').modal('show')
    }
</script>
    
    
</body>
</html>