<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

//$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin([
    'id' => 'signup-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'col-lg-10 col-form-label mr-lg-3'],
        'inputOptions' => ['class' => 'col-lg-10 form-control'],
        'errorOptions' => ['class' => 'col-lg-10 invalid-feedback'],
    ],
]); ?>

<!Doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">


    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Themify -->
    <link rel="stylesheet" href="/plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="/plugins/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="/plugins/slick-carousel/slick.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="/plugins/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugins/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/plugins/magnific-popup/magnific-popup.css">


    <!-- Favicon -->
    <link href="/imgg/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!--     Customized Bootstrap Stylesheet-->
    <link href="/csss/bootstrap.min.css" rel="stylesheet">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="/csss/style.css" rel="stylesheet">


    <title>SignUp</title>
</head>
<body>

<section class="vh-100" style="background-color: white;">
    <div class="container mt-3 py-2 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img class="image" src="/images/logo-cats.svg" alt="login form" style="width: 100%; height: 100%; border-radius: 1rem 0 0 1rem;">
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center py-">
                            <div class="card-body p-4 p-lg-5 text-black ">
                                <form>

                                    <h2 class="fw-normal mb-3" style="letter-spacing: 1px;">Sign In into your account</h2>

                                    <div class="form-outline">
                                        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'style' => 'font-size: 16px; height: 40px;'])->label('Username', ['class' => 'float-left mb-2']) ?>
                                    </div>

                                    <div class="form-outline">
                                        <?= $form->field($model, 'password')->passwordInput(['style' => 'font-size: 16px; height: 40px;'])->label('Password', ['class' => 'mb-2']) ?>
                                    </div>

                                    <div class="row mb-3">
                                        <!-- Checkbox -->
                                        <div class="form-check ">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked="" aria-describedby="registerCheckHelpText" autocompleted="" data-gtm-form-interact-field-id="0">
                                            <label class="form-check-label" for="registerCheck">
                                                I have read and agree to the terms
                                            </label>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2 col-6 mx-auto mb-4">
                                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                    </div>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/site/signup" style="color: #393f81;">Register here</a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php ActiveForm::end(); ?>
</div>
</div>
</section>


<!--footer start-->
<footer class="footer-section bg-grey wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn">

    </div>

    <div class=" ">
        <div class="row">
            <div class="col-lg-12 text-center">
                <ul class="list-inline footer-socials">
                    <li class="list-inline-item"><a href="https://web.facebook.com/Selena/?_rdc=1&_rdr"><i class="ti-facebook mr-2"></i>Facebook</a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/selenagomez"><i class="ti-twitter mr-2"></i>Twitter</a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/selena-gomez-a3b7781a2"><i class="ti-linkedin mr-2"></i>Linkedin</a></li>
                    <li class="list-inline-item"><a href="https://www.pinterest.ph/h__w/selena-gomez/"><i class="ti-pinterest mr-2"></i>Pinterest</a></li>
                    <li class="list-inline-item"><a href="https://github.com/Selena-Gomez"><i class="ti-github mr-2"></i>Github</a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/selenagomez/"><i class="ti-instagram mr-2"></i>Instragram</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-rss mr-2"></i>rss</a></li>
                </ul>
            </div>

            <div class="col-md-12 text-center">
                <p class="copyright">© Copyright 2023 - CATicle. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="/jss/main.js"></script>


</body>
</html>

