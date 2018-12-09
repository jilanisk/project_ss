<?php $pathPrefix = ''; ?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>Course Catogories</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <?php include 'imports_top.php'; ?>
    </head>
    <body class="catagories-page">
        <?php include 'header.php'; ?>
        <div class="body-inner">
            <div class="container">
                <nav class="breadcrumb-wapper">
                    <ul class="breadcrumb pull-right">
                        <li class="breadcrumb__item"><a class="breadcrumb__link" href="index.php">home</a></li>
                        <li class="breadcrumb__item active"><a class="breadcrumb__link active" href="#">Courses</a></li>
                    </ul>
                </nav>
                <div class="row">
                    <div class="col-lg-3 col-md-3 column-left">
                        <div class="column-left__item">
                            <h1 class="column-left__title">Courses</h1>
                            <div class="select list-selector"><a class="column-left__button-drop" href="#list-catagories" data-toggle="collapse" id="btn-list-catagories"><span class="column-left__button-drop__text" id="select-text">Categories</span><span class=" flaticon-arrows-2 column-left__icon"></span></a>
                                <div class="list-catagories list-catagories" id="list-catagories">
                                    <ul class="list-catagories__list">
                                        <li class="list-catagories__item"><a class="list-catagories__link active">all</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">Art and humanlities</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">business</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">computer science</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">data science</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">information technology</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">life sciences</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">math and logic</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">personal development</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">social science</a>
                                        </li>
                                        <li class="list-catagories__item"><a class="list-catagories__link ">language learing</a>
                                        </li>
                                    </ul><a class="column-left__link" href="#">see more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 column-right">
                        <div class="row courses__list ">
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/artificial-intelligence-training.jpg" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>ai-online-training">Artificial Intelligence  online training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/data-science-training.jpg" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>data-science-online-training">data-science-online-training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/machine-learning-training.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>machine-learning-online-training">machine learning  Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/DevOps-training.jpg" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>mulesoft-training">DevOps Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/mulesoft-training.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>mulesoft-training.php">mulesoft Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>hadoop-online-training.php">Hadoop Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>hadoop-testing-online-training.php">Hadoop Testing Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>bigdata-hadoop-administration-online-training.php">Big Data Hadoop Administration Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>blueprism-online-training.php">Blueprism  Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>cyber-security-online-training.php">Cyber Security Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>iot-online-training.php">IOT Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>ibm-aix-online-training.php">IBM  AIX Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>abinitio-online-training.php">Abinitio Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>microsoft-azure-online-training.php">Microsoft Azure Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>build-and-release-online-training.php">Build and Release Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>snaplogic-online-training.php">Snaplogic Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>java-online-training.php">Java Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>oracle-dba-online-training.php">Oracle Dba Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>oracle-apps-technical-training.php">Oracle Apps Technical Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/1.png" alt=""></div>
                                        <div class="courses__top__bundle">bundle</div>
                                        <div class="courses__top__bt-seller">best seller</div>
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class=" flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class=" flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>oracle-osb-online-training.php">Oracle Osb Online Training</a>
                                        <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="<?php echo $pathPrefix ?>assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">CH Sreeekanth</span></a>
                                            <div class="courses__col-right">
                                                <div class="rating-start" data-rating="5"></div>
                                            </div>
                                        </div>
                                        <div class="courses__content__info">
                                            <div class="courses__col-left">
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class=" flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                            </div>
                                            <div class="courses__col-right courses__content__price">$100</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <div class="positionfixed"></div>
    </body> 
</html>