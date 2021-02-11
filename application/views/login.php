<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DWMS | FORKLIFT</title>

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold">DIGITAL WAREHOUSE MANAGEMENT SYSTEM</h2>
                <h2 class="font-bold">FORKLIFT</h2>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <h3>PT.KALBE MORINAGA INDONESIA</h3>
                    <h2>Silahkan Login</h2>
                    <form action="<?= site_url('auth/process') ?>" method="post">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary block full-width m-b">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                PT.Kalbe Morinaga Indonesia
            </div>
            <div class="col-md-6 text-right">
                <small>© 2021</small>
            </div>
        </div>
    </div>

</body>

</html>