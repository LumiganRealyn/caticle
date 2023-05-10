<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;


/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = $model->title;


\yii\web\YiiAsset::register($this);
?>

<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Caticle</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <!-- Customized Bootstrap Stylesheet -->
    <!--    <link href="/csss/bootstrap.min.css" rel="stylesheet">-->
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="/csss/style.css" rel="stylesheet">
</head>
<div class="article-view col-md-auto contents mt-10 ">


    <div class="img-fluid mt-5 col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="width: 60%">
        <p>
            <?php if (!Yii::$app->user->isGuest):?>
            <?= Html::a('Update', ['update', 'slug' => $model->slug], ['class' => 'btn btn-primary me-2']) ?>
            <?= Html::a('Delete', ['delete', 'slug' => $model->slug], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
            <?php endif; ?>
        </p>
    </div>



        <?php
        $str = $model->image;
        $new_string = str_replace("uploads/", "", $str);
        ?>

        <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s" style="margin-top: 65px">
            <?= Html::img('@web/uploads/'.$new_string, ['height' => '350px', 'width' => '500px', 'mt-5']) ?>
        </div>

        <div class="card-body mt-2 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p class="card-text text-uppercase text-color font-extra word-spacing">
                <small> By: <b><?php echo $model->createdBy->username ?></b></small>
            </p>

            <h1 class="card-title"><?= Html::encode($this->title) ?></h1>
                <p class="card-text"><?php echo $model->getEncodedBody(); ?></p>

            <div class="d-flex justify-content-between mt-5">
                <p class="card-text text-uppercase text-color font-extra word-spacing">
                    <small>Created: <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at)?></b><br>

                    </small>
                </p>
                <p class="card-text text-uppercase text-color font-extra word-spacing">
                    <small>Updated: <b><?= Yii::$app->formatter->asRelativeTime($model->updated_at)?></b><br>
                    </small>
                </p>


        </div>
        </div>
    </div>


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

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="/jss/main.js"></script>

</div>
</html>
