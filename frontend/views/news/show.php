<?php

/* @var $this yii\web\View */


/**
 * @var $post Post
 * @var $related_posts []Post
 */

$this->title = $post->title;
?>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-12 row">
            <div class="col-12 col-lg-2">
                <div class="podrobnee-title">
                    <div class="div d-flex">
                        <img class="mr-2" src="/images/to-left.svg" alt="to left"><?=("Новости")?>
                    </div>
                    <div class="pod-data">
                        <div><?= $post->getPrettyDate() ?></div>
                        <div class="count d-flex"><img class="mr-2" src="/images/eye.svg" alt="eye"><?=$post->viewed?></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-10 row">
                <div class="podrobnee-theme">
                    <?=$post->title?>
                </div>
                <div class="row">
                    <div class="podrobnee-about col-12 col-lg-9">
                        <?= $post->title ?>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="social-pod">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?=\Yii::$app->urlManager->createAbsoluteUrl(\Yii::$app->request->url)?>&picture=http%3A%2F%2Fwww.applezein.net%2Fwordpress%2Fwp-content%2Fuploads%2F2015%2F03%2Ffacebook-logo.jpg&title=<?=$this->title?>" target="_blank">
                                <img src="/images/facebook -pod.svg" alt="facebook">
                            </a>
                            <a href="https://telegram.me/share/url?url=<?=\Yii::$app->urlManager->createAbsoluteUrl(\Yii::$app->request->url)?>&text=<?=$this->title?>" target="_blank">
                                <img src="/images/telegram-pod.svg" alt="telegram">
                            </a>
                            <a href="#">
                                <img src="/images/instagram-pod.svg" alt="instagram">
                            </a>
                            <a href="#">
                                <img src="/images/twitter-pod.svg" alt="twitter">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 pod-img">
                        <img src="<?=$post->poster->photo?>" alt="<?=$post->poster->photo?>">
                    </div>
                    <div class="col-12 pod-card-text">
                        <?= $post->description ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
