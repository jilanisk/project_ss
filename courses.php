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
                <nav class="breadcrumb-wapper text-right">
                    <ul class="breadcrumb">
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
                                        <div class="courses__top__wapper"> <a href="<?php echo $pathPrefix ?>ai-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/artificial-intelligence-training.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>ai-online-training">Artificial Intelligence  online training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>data-science-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/data-science-training.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>data-science-online-training">data-science-online-training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>machine-learning-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/machine-learning-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>machine-learning-online-training">machine learning  Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>mulesoft-training.php"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/mulesoft-training.png" alt=""></a> </div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>mulesoft-training.php">mulesoft Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>hadoop-online-training.php"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/hadoop-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>hadoop-online-training.php">Hadoop Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a  href="<?php echo $pathPrefix ?>hadoop-testing-online-training.php"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/hadoop-testing-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>hadoop-testing-online-training.php">Hadoop Testing Online Training</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a  href="<?php echo $pathPrefix ?>bigdata-hadoop-administration-online-training.php"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/bigdata-hadoop-administration-online-training.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>bigdata-hadoop-administration-online-training.php">Big Data Hadoop Administration Online Training</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>blueprism-online-training.php"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/blueprism-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>blueprism-online-training.php">Blueprism  Online Training</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a  href="<?php echo $pathPrefix ?>cyber-security-online-training.php"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/cyber-security-online-training.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>cyber-security-online-training.php">Cyber Security Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>iot-online-training.php"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/iot-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>iot-online-training.php">IOT Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>ibm-aix-online-training.php"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/ibm-aix-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>ibm-aix-online-training.php">IBM  AIX Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>abinitio-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/abinto.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>abinitio-online-training">Abinitio Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>microsoft-azure-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/microsoft-azure-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>microsoft-azure-online-training">Microsoft Azure Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>build-and-release-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/build-and-release-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>build-and-release-online-training">Build and Release Online Training</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>snaplogic-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/snaplogic-online-training.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>snaplogic-online-training">Snaplogic Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>java-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/java-online-training.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>java-online-training">Java Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>oracle-dba-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/oracle-dba-online-training.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>oracle-dba-online-training">Oracle Dba Online Training</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>oracle-apps-technical-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/oracle-apps-technical-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>oracle-apps-technical-training">Oracle Apps Technical Training</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>oracle-osb-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/oracle-access-management-admin-online-training.jpg" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>oracle-osb-online-training">oracle-access-management-admin-online-training</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>oracle-osb-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/oracle-osb-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>oracle-osb-online-training">Oracle Osb Online Training</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>cloud-computing-with-aws-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/cloud-computing-with-aws-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>cloud-computing-with-aws-online-training">Cloud Computing With ASWS online Training</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 courses__item">
                                <div class="courses__wapper">
                                    <div class="col-equal courses__top">
                                        <div class="courses__top__wapper"><a href="<?php echo $pathPrefix ?>digital-marketing-online-training"><img class="courses__top__image" src="<?php echo $pathPrefix ?>assets/img/course/digital-marketing-online-training.png" alt=""></a></div>
                                    </div>
                                    <div class="col-equal courses__content"><a class="courses__content__title" href="<?php echo $pathPrefix ?>digital-marketing-online-training">Digital Marketing Online Training</a>
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