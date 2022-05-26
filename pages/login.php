<?php

include 'app/aksilogin.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pentadio | Log in</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= $base_url ?>public/assets/dist/css/adminlte.min.css?v=3.2.0">

    <script nonce="e170f098-9bdb-48a7-b89a-c729feb21bdc">
        (function(w, d) {
            ! function(a, e, t, r, z) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                    deferred: []
                };
                var s = e.getElementsByTagName("title")[0];
                s && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.dataLayer = a.dataLayer || [], a.zaraz.track = (e, t) => {
                    for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                    a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                }, a.dataLayer.push({
                    "zaraz.start": (new Date).getTime()
                }), a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r);
                    z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);
    </script>
    <style>
        .btn-primer {
            color: #fff;
            background-color: #0b8f75;
            border-color: #0b8f75;
            box-shadow: none;
        }

        .btn-primer:hover {
            color: #fff;
            background-color: #185c4f;
            border-color: #185c4f;
            box-shadow: none;
            transition: 0.1;
        }

        .primer {
            color: #185c4f;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
        </div>
        <div class="row mb-2">
            <div class="login_logo">
                <div class="row text-center">

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <div class="col-12 text-center mb-5">
                    <img src="<?= $base_url ?>public/assets/image/logo/logo_bonbol.png" width="80" alt="">
                    <img src="<?= $base_url ?>public/assets/image/logo/logo_bpjs.png" width="120" alt="">
                </div>
                <div class="col-12 mb-4 text-center">
                    <h2 class="primer"><b>PROLANIS</b></h2>
                    Login Admin
                </div>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="login" class="btn btn-primer btn-block ">Log In</button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>


    <script src="<?= $base_url ?>public/assets/plugins/jquery/jquery.min.js"></script>

    <script src="<?= $base_url ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= $base_url ?>public/assets/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>