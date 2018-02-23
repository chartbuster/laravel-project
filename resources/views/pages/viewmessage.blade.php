@extends('layouts.default')

@section('content')

    <div class="card mt-5 pl-1 pr-3">
        <head>
            <meta charset="windows-1252">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                td:last-child {
                    color: #FFF;
                    cursor: pointer;
                    font-weight: bold;
                    margin: auto;
                }
            </style>
        </head>
        <body>

        <table id="table" border="1">
            <tr>
                <th>MESSAGE</th>
                <th>Delete</th>
            </tr>

            <tr>
                <td><a href="/card" class="card-link">Message 1</a></td>
                <td><button type="Remove" class="btn btn-primary mb-2">Remove</button></td>
            </tr>

            <tr>
                <td> <a href="/card" class="card-link">Message 2</a></td>
                <td><button type="Remove" class="btn btn-primary mb-2">Remove</button</td>
            </tr>

        </table>

        <script>

            var index, table = document.getElementById('table');
            for (var i = 1; i < table.rows.length; i++) {
                table.rows[i].cells[1].onclick = function () {
                    var c = confirm("Do you want to delete this message?");
                    if (c === true) {
                        index = this.parentElement.rowIndex;
                        table.deleteRow(index);
                    }

                    //console.log(index);
                };

            }

        </script>

        </body>
    </div>

@endsection
