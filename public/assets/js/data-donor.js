function format ( d ) {
    return 'Full name: '+d.name+' '+d.email+'<br>'+
        'Salary: '+d.document+'<br>'+
        'The child row can contain any data you wish, including links, images, inner tables etc.';
}

$(document).ready(function() {
    var dt = $('#'+tableDonor.id).DataTable( {
        processing: true,
        serverSide: true,
        ajax: {
            url: tableDonor.url,
            type: "POST",
            dataType: "json",
            headers: {'X-CSRF-TOKEN': tableDonor.token}
        },
        columns: [
            { data: "name" },
            { data: "email" },
            { data: "document" },
            { data: "birth_date" },
            {
                "class": "details-control",
                "orderable": false,
                "data": null,
                "defaultContent": ""
            }

        ],
        order: [[1, 'asc']]
    } );

    // Array to track the ids of the details displayed rows
    var detailRows = [];

    $('#example tbody').on( 'click', 'tr td.details-control', function () {
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
