<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            table , th , td{
                border: 1px solid black;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div style="height: 100vh; margin: 3rem; display: grid; place-items: center">
                <table>
                    <tbody>
                        <tr>
                            <th>Avatar</th>
                            <th>Name</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td><img src="{{$user->avatar_url}}" alt="user avatar" width="100" height="100"></td>
                            <td><p>{{$user->login}}</p></td>
                            <td><button class="btn btn-primary" onclick="redirect('{{$user->login}}')">ver mas informacion</button></td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
                
                <!-- Modal -->
                <div class="modal fade" id="userDetailsModal" tabindex="-1" aria-labelledby="userDetailsModalLavel" aria-hidden="true">
                    <div class="modal-dialog" style="display:flex;justify-content:center;align-items:center">
                        <div class="modal-content" style="width: fit-content;">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="userDetailsModalLavel">User details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                            <div id="userDetailsModalBody" class="modal-body text-center">
                                <div class="container-fluid">
                                    Add rows here
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!---End Of Modal-->
        </div>

        <script>
            function redirect(login){
                const body = {username: login}
                $.ajax({
                    method: 'POST' ,
                    url: '/userDetails' ,
                    headers: '' 
                })
                
                //$("#userDetailsModal").modal({show: true});
            }
            
        </script>

    </body>
</html>
