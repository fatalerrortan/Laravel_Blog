<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Domanda Demo">
    <link rel="icon" type="image/png" href="{{asset('domandas/img/link_log.png')}}">
    <title>Domanda Test</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <h1>Domanda Test Accounts</h1>
            <h3>https://www.xulin-tan.de/domanda</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Account</th>
                    <th>Password</th>
                    <th>Sector</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>test@domanda.com</td>
                    <td>test</td>
                    <td>Dashboard</td>
                </tr>
                <tr>
                    <td>test2@domanda.com</td>
                    <td>test</td>
                    <td>Dashboard</td>
                </tr>
                <tr>
                    <td>boss@domanda.com</td>
                    <td>test</td>
                    <td>Admin Center</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <img class="img-responsive"src="{{asset('domandas/img/future.png')}}" alt="">
        </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            var sound_3 = new Audio('{{asset('domandas/sound/domanda.mp3')}}');
            sound_3.play();
        });
    </script>
</body>
</html>


