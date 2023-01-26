<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Jan 23</th>
                        <th scope="col">Feb 23</th>
                        <th scope="col">Mär 23</th>
                        <th scope="col">Apr 23</th>
                        <th scope="col">Mai 23</th>
                        <th scope="col">Jun 23</th>
                        <th scope="col">Jul 23</th>
                        <th scope="col">Aug 23</th>
                        <th scope="col">Sep 23</th>
                        <th scope="col">Okt 23</th>
                        <th scope="col">Nov 23</th>
                        <th scope="col">Dez 23</th>
                    </tr>
                    @foreach ($odo_reports as $user)
                    <tr>
                        <th scope="col">
                            {{$user[0]->user}}
                        </th>
                        @foreach ($user as $month)
                        <td>{{$month->odometer}}</td>
                        @endforeach

                    </tr>


                    @endforeach
                </table>
            </div>
        </div>
        <div class="row">
           <div class="col-12">
                Letztes Update: {{$last_updated}} GMT
           </div>

       </div>
    </div>


</body>

</html>
