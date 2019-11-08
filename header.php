<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <?php if (isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout/">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/update/">Update Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/all/">All Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/delete/">Delete Account</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login/">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register/">Register</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>

</header>
