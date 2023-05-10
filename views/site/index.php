<?php
use yii\helpers\Html;
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

<body>



<div class="container ">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="row">
                <?php
                if (!Yii::$app->user->isGuest){
                    if (($total_records > 0)){
                        foreach ($data as $row):
                            $str = $row->image;
                            $new_string = str_replace("uploads/", "", $str);
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class=" wow zoomIn" data-wow-delay="0.1s">
                                <article id="article" class="post-grid  mb-5 service-item rounded">

                                    <div class="post-thumb d-block d-none d-md-block ">

                                        <div class="category-item">
                                            <div class="category-img">
                                                <?= Html::img('@web/uploads/'.$new_string, ['alt'=>'Your image', 'class'=>'img-fluid w-100 rounded-top'])?><br>

                                                <!--                                            <div class="label-date col-md-auto contents bg-light bg-gradient shadow p-3 mb-5 rounded" style="width:100px">-->
                                             </div>
                                            <div class="content text-center">
                                                <a href="#" class="text-color text-uppercase font-sm letter-spacing font-extra"><?php echo $row->createdBy->username ?></a>
                                                <h4><a href="<?php echo \yii\helpers\Url::to(['/article/view', 'slug' => $row->slug]) ?>"><?= ucfirst($row->title)?></a></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-content-grid m-50">

                                         <p><?= \yii\helpers\StringHelper::truncateWords($row->body, 43)?></p>
                                        <div id="date" class="d-flex justify-content-between mt-5">
                                            <span class="cat-name text-color font-extra word-spacing " style="font-size:11px">Created <?= Yii::$app->formatter->asRelativeTime($row->created_at)?></span><br>

                                            <span class="cat-name text-color font-extra word-spacing mb-5 " style="font-size:11px">Updated <?= Yii::$app->formatter->asRelativeTime($row->updated_at)?></span><br>
                                        </div>
                                    </div>


                                            <a id="btn-article" class="btn bueno-btn btn-secondary d-flex justify-content-center" style="background-color:#0A8EDB" href="<?php echo \yii\helpers\Url::to(['/article/view', 'slug' => $row->slug]) ?>">Read More</a>


                                </article>
                                </div>
                            </div>
                        <?php endforeach;}else{
                        ?><p>Your article will appear here.</p>


                        <?php
                    }
                }else{

                    foreach ($datas as $rows):
                        $str = $rows->image;
                        $new_string = str_replace("uploads/", "", $str);
                        ?>


                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class=" wow zoomIn" data-wow-delay="0.1s">
                                <article id="article" class="post-grid  mb-5 service-item rounded">

                                    <div class="post-thumb d-block d-none d-md-block ">

                                        <div class="category-item">
                                            <div class="category-img">
                                                <?= Html::img('@web/uploads/'.$new_string, ['alt'=>'Your image', 'class'=>'img-fluid w-100'])?><br>

                                                <!--                                            <div class="label-date col-md-auto contents bg-light bg-gradient shadow p-3 mb-5 rounded" style="width:100px">-->
                                            </div>
                                            <div class="content text-center">
                                                <a href="#" class="text-color text-uppercase font-sm letter-spacing font-extra"><?php echo $rows->createdBy->username ?></a>
                                                <h4><a href="<?php echo \yii\helpers\Url::to(['/article/view', 'slug' => $rows->slug]) ?>"><?= ucfirst($rows->title)?></a></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-content-grid m-50">

                                        <p><?= \yii\helpers\StringHelper::truncateWords($rows->body, 43)?></p>
                                        <div id="date" class="d-flex justify-content-between mt-5">
                                            <span class="cat-name text-color font-extra word-spacing " style="font-size:11px">Created <?= Yii::$app->formatter->asRelativeTime($rows->created_at)?></span><br>

                                            <span class="cat-name text-color font-extra word-spacing mb-5 " style="font-size:11px">Updated <?= Yii::$app->formatter->asRelativeTime($rows->updated_at)?></span><br>
                                        </div>
                                    </div>


                                    <a id="btn-article" class="btn bueno-btn btn-secondary d-flex justify-content-center" style="background-color:#0A8EDB" href="<?php echo \yii\helpers\Url::to(['/article/view', 'slug' => $rows->slug]) ?>">Read More &raquo;</a>


                                </article>
                            </div>
                        </div>
                    <?php endforeach;
                }?>
            </div>
        </div>

    </div>
</div>
</section>

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


</body>

</html>