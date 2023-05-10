<?php
/**
 * @var $model \app\models\Article
 */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Caticle</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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

    <!-- manin stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="/csss/style.css" rel="stylesheet">
</head>

<body>




<div class="service-item rounded h-100">
    <div class="d-flex justify-content-between">
        <div class="service-icon">
            <i class="fa fa-cat fa-2x"></i>
        </div>
        <a class="service-btn" href="<?= Url::to(['/article/view', 'slug' => $model->slug]) ?>">
            <i class="fa fa-link fa-2x"></i>
        </a>
    </div>

    <div class="p-5">

        <a href="<?= Url::to(['/article/view', 'slug' => $model->slug]) ?>" style="text-decoration:none;">
            <h2 class="mb-3"><?= Html::encode($model->title) ?></h2>
        </a>

        <?= Html::decode($model->body) ?> <br><br>
        <small>Created At: <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></b><br>
            Updated At: <b><?php echo Yii::$app->formatter->asRelativeTime($model->updated_at) ?></b><br>
            By: <b><?php echo $model->createdBy->username ?></b>
        </small>
    </div>
</div>



<!-- Service End -->


</body>
</html>


