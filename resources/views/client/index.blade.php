 <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Plan</th>
                    </tr>
                </thead>
            </table>
            </div>
        </div>
    </div>

</x-app-layout>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "ajax": '/client/ssp/',
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "email" },
            { "data": "type" }
        ],
        "columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ],
    } );
} );
</script>
