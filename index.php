<?php $pathPrefix = ''; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>sacrostectservices</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <?php include 'imports_top.php'; ?>
    </head>
    <body class="home">
        <?php include 'header.php'; ?>
        <div class="design-sprint">
            <div class="container design-sprint__list">
                <div class="row design-sprint__content">
                    <div class="col-lg-4 col-md-4 col-sm-4 design-sprint__item">
                        <h1 class="design-sprint__item__title">Sacrostect Services</h1>
                        <p class="design-sprint__item__content">Transfer your Business Be a Step Head</p><a class="btn button-default design-sprint__item__button" href="#">enroll now</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 design-sprint__item-image">
                        <div class="design-sprint__wapper"><img class="design-sprint__wapper__image" src="<?php echo $pathPrefix ?>assets/img/home/18.jpg" alt="Product management"></div>
                        <div class="design-sprint__contents"><a class="design-sprint__contents__title" href="#">Data Science</a><a class="design-sprint__contents__link" href="#">enroll now</a></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 design-sprint__item-image">
                        <div class="design-sprint__wapper"><img class="design-sprint__wapper__image" src="<?php echo $pathPrefix ?>assets/img/home/19.jpg" alt="Deep learning data analyst"></div>
                        <div class="design-sprint__contents"><a class="design-sprint__contents__title" href="#">Hadoop Adminstration</a><a class="design-sprint__contents__link" href="#">enroll now</a></div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'top-specializations.php'; ?> 
        <?php include 'top-rated.php'; ?>  
        <?php include 'bestfeatures.php'; ?>
        <?php include 'recentblog.php'; ?> 
        <!-- Counter start -->
        <div class="our-achievements">
            <div class="container">
                <div class="list-course__header">
                    <h2 class="list-course__header__title"> Our Achievements</h2>
                </div>
                <div class="row facts-wrapper wow fadeInLeft text-center">
                    <div class="facts one col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="flaticon-library"></i></span>
                        <div class="facts-num">
                            <span class="counter">15</span>+
                        </div>
                        <h3>Campuses</h3>
                    </div>
                    <div class="facts two col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="flaticon-profile-1"></i></span>
                        <div class="facts-num">
                            <span class="counter">500</span>+
                        </div>
                        <h3>Expert Instructors</h3>
                    </div>
                    <div class="facts three col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="flaticon-profile"></i></span>
                        <div class="facts-num">
                            <span class="counter">1,500</span>+
                        </div>
                        <h3>Alumni</h3>
                    </div>
                    <div class="facts four col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="flaticon-favorite-1"></i></span>
                        <div class="facts-num">
                            <span class="counter">50</span>+
                        </div>
                        <h3>Hiring Partners</h3>
                    </div>
                </div>
            </div>
            <!--/ Container end -->
        </div><!--/ Container end -->
        <div class="list-icons">
            <div class="container">
                <div class="list-course__header">
                    <h2 class="list-course__header__title"> Our Partners</h2>
                </div>
                <div class="row list-icons__list">
                    <div class="list-icons__item"><a class="list-icons__link" href="#"><img class="list-icons__image" src="<?php echo $pathPrefix ?>assets/img/home/01image.png" alt="home/01image.png"></a></div>
                    <div class="list-icons__item"><a class="list-icons__link" href="#"><img class="list-icons__image" src="<?php echo $pathPrefix ?>assets/img/home/02image.png" alt="home/02image.png"></a></div>
                    <div class="list-icons__item"><a class="list-icons__link" href="#"><img class="list-icons__image" src="<?php echo $pathPrefix ?>assets/img/home/03image.png" alt="home/03image.png"></a></div>
                    <div class="list-icons__item"><a class="list-icons__link" href="#"><img class="list-icons__image" src="<?php echo $pathPrefix ?>assets/img/home/01image.png" alt="home/01image.png"></a></div>
                    <div class="list-icons__item"><a class="list-icons__link" href="#"><img class="list-icons__image" src="<?php echo $pathPrefix ?>assets/img/home/02image.png" alt="home/02image.png"></a></div>
                    <div class="list-icons__item"><a class="list-icons__link" href="#"><img class="list-icons__image" src="<?php echo $pathPrefix ?>assets/img/home/03image.png" alt="home/03image.png"></a></div>
                    <div class="list-icons__item"><a class="list-icons__link" href="#"><img class="list-icons__image" src="<?php echo $pathPrefix ?>assets/img/home/01image.png" alt="home/01image.png"></a></div>
                </div>
            </div>
        </div>
        <?php include 'testimonials.php'; ?>
        <?php include 'footer.php'; ?>
        <div class="positionfixed"></div>
    </body> 
</html>