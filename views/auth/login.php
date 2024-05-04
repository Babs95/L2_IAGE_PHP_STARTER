<?php
require('../../actions/auth/loginAction.php');
$login = true;
include '../../header.php';
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background: #ececec;
    }

    /*------------ Login container ------------*/
    .box-area {
        width: 930px;
    }

    /*------------ Right box ------------*/
    .right-box {
        padding: 40px 30px 40px 40px;
    }

    /*------------ Custom Placeholder ------------*/
    ::placeholder {
        font-size: 16px;
    }

    .rounded-4 {
        border-radius: 20px;
    }

    .rounded-5 {
        border-radius: 30px;
    }

    /*------------ For small screens------------*/
    @media only screen and (max-width: 768px) {
        .box-area {
            margin: 0 10px;
        }

        .left-box {
            height: 100px;
            overflow: hidden;
        }

        .right-box {
            padding: 20px;
        }
    }
</style>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <!--------------------------- Left Box ----------------------------->
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
            <div class="featured-image mb-3">
                <!-- <img src="./assets/login.png" class="img-fluid" style="width: 250px;"> -->
                <lottie-player autoplay controls loop mode="normal" src="https://assets3.lottiefiles.com/packages/lf20_UJNc2t.json" style="width: 320px">
                </lottie-player>
                <dotlottie-player src="https://lottie.host/ab5abf1f-87fb-4add-8f21-23f467540f17/gVXlxLezXn.lottie" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                <iframe src="https://lottie.host/embed/d6b5150a-7ce7-46fc-91bc-b3f739c026c1/G8lc34Kd1Y.json"></iframe>
            </div>

            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">TITLE</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Slogan</small>
        </div>
        <!-------------------- ------ Right Box ---------------------------->

        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2>Dalal Ak Diam!</h2>
                    <p>Nakala Guedjia Guisse</p>
                </div>
                <?php
                if (isset($errorMessage)) {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $errorMessage ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                }
                ?>
                <form method="POST">
                    <div class="input-group mb-3">
                        <input name="email" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email">
                    </div>
                    <div class="input-group mb-1">
                        <input name="password" type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Mot de passe">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">

                        </div>
                        <div class="forgot">
                            <small><a href="#">Mot de passe oublié?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" name="send" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>