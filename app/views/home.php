<?php defined("SITE_URL") or die(); ?>
<div class="home-section-1">
    <div class="container h-100 py-5 py-m-0">
        <div class="row h-100 align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1><?php _e("homeSection1"); ?></h1>
                <p class="h4 font-weight-normal my-4 py-2"><?php _e("homeSection1Text"); ?></p>
                <a href="./create-quiz"><button class="btn btn-primary"><?php _e("startButton"); ?></button></a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img src="assets/img/friend.png" class="mw-100" style="height:450px" alt="<?php echo $Configs["title"]; ?>">
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-5">
    <div class="container my-2">
        <div class="row text-center">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-pencil-alt fa-3x"></i>
                        <h3 class="my-3"><?php _e("step1"); ?></h3>
                        <p class="mb-0"><?php _e("step1Text"); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card bg-primary h-100">
                    <div class="card-body">
                        <i class="fas fa-share-alt fa-3x text-white"></i>
                        <h3 class="my-3 text-white"><?php _e("step2"); ?></h3>
                        <p class="mb-0 text-white"><?php _e("step2Text"); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-retweet fa-3x"></i>
                        <h3 class="my-3"><?php _e("step3"); ?></h3>
                        <p class="mb-0"><?php _e("step3Text"); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5" style="background:#f9f9f9">
    <div class="container my-2">
    <div class="row">
        <div class="col-lg-6 text-center text-lg-left">
            <img src="assets/img/friend-2.png" class="mw-100" style="height:400px">
        </div>
        <div class="col-lg-6 pt-4 mt-lg-0">
            <h2><?php _e("homeSection2"); ?></h2>
            <p><?php _e("homeSection2Text"); ?></p>
            <ul class="px-lg-0">
                <li><?php _e("homeSection2.Step1"); ?></li>
                <li><?php _e("homeSection2.Step2"); ?></li>
                <li><?php _e("homeSection2.Step3"); ?></li>
            </ul>
        </div>
    </div>
    </div>
</div>