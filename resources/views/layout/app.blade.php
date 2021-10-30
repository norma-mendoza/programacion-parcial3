<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--DataTables.net --->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!---Button DataTables----->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
        .dt-button {
            padding: 0;
            border: none;
        }
        h1,h2{
            font-family: 'Poppins', sans-serif;
            font-weight: 600
        }
        h3,h4,h5{
            font-family: 'Poppins', sans-serif;
            font-weight: 500
        }
        a{
            font-family: 'Poppins', sans-serif;
            font-weight: 400
        }
        p,td,label{
            font-family: 'Poppins', sans-serif;
            font-weight: 200
        }
    </style>
</head>
<body>
    @include('partials.header')
    <div class="app">
        @include('partials.message')
        @yield('content')
    </div>
    @include('partials.footer')
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
                "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
            });
        } );

        $(document).ready(function() {
        $('#table_notas').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    //Con este boton generamos el pdf
                    extend: 'pdf',
                    footer: true,
                    title: 'Informe de notas',
                    filename: 'Export_File',

                    //Aquí es donde generas el botón personalizado
                    text: '<button class="btn btn-info btn-sm b-0">PDF <i class="far fa-file-pdf"></i></button>'
                },
                {
                    //este boton es para imprimir
                    extend: 'print',
                    footer: true,
                    title: 'Informe de notas',
                    filename: 'Export_File',

                    //Aquí es donde generas el botón personalizado
                    text: '<button class="btn btn-secondary btn-sm b-0">Imprimir <i class="fas fa-print"></i></button>'
                },
                
            ],
            "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
            }
        } );
    } );
    //table_notas-docente
    $(document).ready(function() {
        $('#table_notas-docente').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    //Botón para Excel
                    extend: 'excel',
                    footer: true,
                    title: 'Archivo Excel',
                    filename: 'Export_File',

                    //Aquí es donde generas el botón personalizado
                    text: '<button class="btn btn-success btn-sm b-0">Excel <i class="fas fa-file-excel"></i></button>'
                },
                {
                    //Botón para PDF
                    extend: 'pdf',
                    footer: true,
                    title: 'Informe de notas',
                    filename: 'Export_File',

                    //Aquí es donde generas el botón personalizado
                    text: '<button class="btn btn-danger btn-sm b-0">PDF <i class="far fa-file-pdf"></i></button>'
                },
                {
                    //Botón para imprimir
                    extend: 'print',
                    footer: true,
                    title: 'Informe de notas',
                    filename: 'Export_File',

                    //Aquí es donde generas el botón personalizado
                    text: '<button class="btn btn-secondary btn-sm b-0">Imprimir <i class="fas fa-print"></i></button>',
                    exportOptions: {
                        columns: [ 0,':visible' ]
                    }
                },
                'colvis'
            ],
            "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
            }
        } );
    } );
    //Table curso
    $(document).ready( function () {
        $('#table_curso').DataTable({
            "language": {
            "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
            },
            "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
        });
    } );
    //Table curso
    $(document).ready( function () {
        $('#table_usuario').DataTable({
            "language": {
            "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
            },
            "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
        });
    } );
    </script>
</body>
</html>