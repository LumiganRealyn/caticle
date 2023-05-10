<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!--===============================================================================================-->
</head>
<body>


    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>


    <body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->





        <!-- Contact Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div>
                    <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="text-center mb-4">Our contact page provides you with a simple way to reach out to us for any inquiries, questions, or feedback you may have. We value your input and are committed to providing you with exceptional service. Don't hesitate to contact us!</p>

                        <form>
                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                    <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'ex. kath', 'template' => "{label}\n{input}\n{hint}\n{error}", 'style' => 'border: 1px solid '])->label('Your Name') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'example@gmail.com', 'labelOptions' => ['class' => 'form-floating'], 'template' => "{label}\n{input}\n{hint}\n{error}", 'style' => 'border: 1px solid '])->label('Your Email') ?>

                                </div>
                                <div class="col-12">

                                    <?= $form->field($model, 'subject')->textInput([ 'placeholder' => 'ex. problem', 'labelOptions' => ['class' => 'form-floating'], 'template' => "{label}\n{input}\n{hint}\n{error}", 'style' => 'border: 1px solid '])->label('Subject') ?>

                                </div>

                                <div class="col-12">
                                    <?= $form->field($model, 'body')->textarea([        'rows' => 6,        'placeholder' => 'Message',        'labelOptions' => ['class' => 'form-floating'],
                                        'template' => "{label}\n{input}\n{hint}\n{error}",
                                        'style' => 'border: 1px solid; transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out; '
                                    ])->label('Message') ?>
                                </div>



                                <div class="col-12">

                                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                                        'template' => '<div class="row d-flex"><div class="w-50">{image}</div><div class="w-50">{input}</div></div>','options' => ['style' => 'border: 1px solid '],]) ?>
                                </div>
                                <div class="col-12">

                                    <?=Html::submitButton('Send Message', ['class' => 'btn btn-primary w-100 py-3']) ?>

                                </div>

                            </div>
                        </form>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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
                    <p class="copyright">© Copyright 2023 - CATicle. All Rights Reserved. </p>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

</div>

<?php endif; ?>


<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/tilt/tilt.jquery.min.js"></script>



<!--===============================================================================================-->
<!--<script src="/js/js/main.js"></script>-->


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

