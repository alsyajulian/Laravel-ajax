<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">

        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item active">MAIN MENU</li>
                <a href="{{ route('dashboard.index') }}" class="list-group-item">Dashboard</a>
                <li class="list-group-item">Profile</li>
                <a href="{{ route('dashboard.logout') }}" class="list-group-item">Logout</a>
            </ul>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5>DASHBOARD</h5>
                    <hr>
                    Selamat Datang, {{ Auth::user()->name }}
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>