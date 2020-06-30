<!--
Copyright 2020
Author          : Muhammad Rifqi Ardhian
Project Name    : Sekawan
Description     : JSON Read
All Rights Reserved
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/site.css')}}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container pt-3">

            <div id="loader" class="center"></div>

            <h1 class="text-wrap pt-2 pb-4">JSON Table</h1>

            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-save-ticket" id="reload">REFRESH</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div style="overflow-x:auto">
                        <table class="tbl-user mt-5 mb-5" border="1">
                            <tr class="row-head-user text-center">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Salary</td>
                                <td>age</td>
                            </tr>
                            @foreach ($response as $employee)
                            <tr class="row-content-user text-center">
                                <td>{{$employee['id']}}</td>
                                <td>{{$employee['employee_name']}}</td>
                                <td>{{$employee['employee_salary']}}</td>
                                <td>{{$employee['employee_age']}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-12">
                    <button class="btn btn-save-ticket">SAVE</div>
                </div>
            </div>

            <p class="text-center mt-4 mb-5">Copyright &copy;2020 Created by Rifqi Ardhian. All Rights reserved<p>
        </div>
        <script src="{{ url('assets/dashboard/js/main.js') }}"/>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    </body>
</html>
