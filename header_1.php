<header class="header-content">
    <div class="header-top hidden-sm hidden-xs" id="header-top">
        <div class="container">
            <nav class="navbar navbar-inverse header-top__top">
                <div class="navbar-header"><a class="navbar-brand logo__link" href="<?php echo $pathPrefix ?>index.php"><img class="logo__image" src="<?php echo $pathPrefix ?>assets/img/logo/soclogo.png" alt="Logo sacrostectservices" style="width: 200px;"></a></div>
                <div class="nav navbar-nav navbar-right nav-right nav-right--login">
                    <div class="nav-right__notifications"><a class="nav-right__item" href="<?php echo $pathPrefix ?>index.php">Home</a></div>
                    <div class="nav-right__notifications"><a class="nav-right__item" href="<?php echo $pathPrefix ?>courses.php">Courses</a></div>
                    <div class="nav-right__notifications"><a class="nav-right__item" href="<?php echo $pathPrefix ?>instructor-details.php">Instructor</a></div>
                </div>
                <div class="nav navbar-nav navbar-right nav-right--notlogin">
                </div>
            </nav>
        </div>
    </div>
    <div class="bottom-header hidden-sm hidden-xs" id="scrollspy" data-spy="affix" data-offset-top="112">
        <div class="container">
            <div class="logo--menu"><a class="logo__link" href="<?php echo $pathPrefix ?>index.php"><img class="logo__image" src="<?php echo $pathPrefix ?>assets/img/logo/soclogo.png" alt="Logo sacrostectservices"></a></div>
            <nav class="menu-main">
                <ul class="nav navbar-nav menu-main__list ">
                    <li class="menu-main__item active"><a class="menu-main__link " href="<?php echo $pathPrefix ?>index.php" id="home">home</a>
                    </li>
                    <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>about.php">About </a></li>
                    <li class="menu-main__item "><a class="dropdown-toggle menu-main__link " href="<?php echo $pathPrefix ?>services.php">Services</a>
                        <div class="dropdown-catagories">
                            <ul class="dropdown-catagories__list ">
                                <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>infrastructure">Infrastructure</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                                <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>">Software Training</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                    <div class="cate-sub">
                                        <ul class="cate-sub__list">
                                            <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>">Classroom Training</a></li>
                                            <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>">Instructor Led Online Training (ILOT)</a></li>
                                            <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>">Self Paced Training</a></li>
                                            <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>">Webinars</a></li>
                                            <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>">Corporate Training</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>">Project Training</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                                <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>">Internship Program</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                                <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>">Web and Promo Services</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                                <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>">Digital Marketing</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>training.php">Training</a></li>
                    <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>ready-to-deploy.php">Ready To Deploy </a></li>
                    <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>careers.php">Careers</a></li>
                    <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>enroll.php">Enroll </a></li>
                    <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header__mobile hidden-lg hidden-md"> 
        <nav class="navbar" id="header-mobile" data-spy="affix" data-offset-top="75">
            <div class="container">
                <div class="categories--mobile pull-left"><a class="dropdown-toggle categories--mobile__buttonsm" id="menu-categories" data-toggle="collapse" data-target="#dropdown-categories"><i class="glyph-icon flaticon-signs-1 categories--mobile__icon"></i></a></div>
                <button class="navbar-toggle nav-icon pull-right collapsed visible-sm visible-xs" id="menu-hamberger" data-toggle="collapse" data-target="#menu-main"><span class="bar"></span></button>
                <div class="logo--mobile text-center"><a class="logo__link" href="/"><img class="logo__image" src="<?php echo $pathPrefix ?>assets/img/logo/soclogo.png" alt="Logo sacrostectservices"></a></div>
            </div>
            <div class="menu-mobile">
                <ul class="menu-mobile__list ">
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>index.php">home</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span></li>

                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>categories.php">course</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span> </li> 
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>about.php">About</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>contact.php">Contact</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span></li>
                </ul>
            </div>
            <div class="menu-mobile-dropdown menu-mobile--categories">
                <ul class="menu-mobile__list ">
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Business</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Finance</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Industry</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Management</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Media</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Sales</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Design</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Design Thinking</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fashion</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Development</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Databases</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Mobie Apps</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Heath &amp; Fitness</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Dance</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fitness</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">IT &amp; Software</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">AI &amp; Big Data</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Hardware</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Language</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Chinese</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">English</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">French</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Lifestyle</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Art &amp; Crafts</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Gaming</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Office Productivity</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Apple</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Google</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Oracle</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="button-default btn-ontop" id="on-top"><span class="glyph-icon flaticon-arrows-5"></span></div>
</header>
<div class="modal fade in signin-form" id="modal-signin" role="dialog">
            <div class="modal-dialog signin-form__dialog">
                <div class="signin-form__button-close hidden-lg hidden-md hidden-sm">
                    <button class="close signin-form__button-close__btn" type="button" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-content signin-form__content">
                    <div class="modal-body signin-form__body"> 
                        <div class="tab-content"> 
                            <div class="" id="sign-up">
                                <h3 class="signin-form__body__title">Enquire</h3> 
                                <form class="contactform__form">
                                    <div class="signin-form__form__inputs">
                                        <input class="input-item nameput" type="text" placeholder="Name">
                                        <input class="input-item emailput" type="email" placeholder="Email">
                                        <input class="input-item contactput" type="phone" placeholder="Phone Number">
                                    </div>
                                    <button class="btn-green list-link__btn">Request</button>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>