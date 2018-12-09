<header class="header-content">
    <div class="header-top hidden-sm hidden-xs"  id="scrollspy" data-spy="affix" data-offset-top="112">
        <div class="container">
            <nav class="navbar navbar-inverse header-top__top menu-main">
                <div class="navbar-header"><a class="navbar-brand logo__link" href="<?php echo $pathPrefix ?>index"><img class="logo__image" src="<?php echo $pathPrefix ?>assets/img/logo/soclogo.png" alt="Logo sacrostectservices"></a></div>
                <div class="nav navbar-nav navbar-right nav-right nav-right--login">
                    <ul class="nav navbar-nav menu-main__list ">
                        <li class="menu-main__item active"><a class="menu-main__link " href="<?php echo $pathPrefix ?>index" id="home">home</a>
                        </li>
                        <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>about">About </a></li>
                        <li class="menu-main__item "><a class="dropdown-toggle menu-main__link " href="<?php echo $pathPrefix ?>services">Services</a>
                            <div class="dropdown-catagories">
                                <ul class="dropdown-catagories__list ">
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>infrastructure">Infrastructure</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>">Software Training</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                                        <div class="cate-sub">
                                            <ul class="cate-sub__list">
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>classroom-training">Classroom Training</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>instructor-led-online-training">Instructor Led Online Training (ILOT)</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>self-placed-training">Self Paced Training</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>webinar">Webinars</a></li>
                                                <li class="cate-sub__item"><a class="cate-sub__link" href="<?php echo $pathPrefix ?>">Corporate Training</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>">Project Training</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>">Internship Program</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>web-and-promo-services">Web and Promo Services</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                                    <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="<?php echo $pathPrefix ?>digital-marketing">Digital Marketing</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>courses">Courses</a></li>
                        <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>">Ready To Deploy </a></li>
                        <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>careers">Careers</a></li>
                        <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>">Enroll </a></li>
                        <li class="menu-main__item "><a class="menu-main__link " href="<?php echo $pathPrefix ?>contact">Contact</a></li>
                    </ul>
                </div>
                <div class="nav navbar-nav navbar-right nav-right--notlogin">
                </div>
            </nav>
        </div>
    </div>

    <div class="header__mobile hidden-lg hidden-md"> 
        <nav class="navbar" id="header-mobile" data-spy="affix" data-offset-top="75">
            <div class="container">
                <button class="navbar-toggle nav-icon pull-right collapsed visible-sm visible-xs" id="menu-hamberger" data-toggle="collapse" data-target="#menu-main"><span class="bar"></span></button>
                <div class="logo--mobile"><a class="logo__link" href="/"><img class="logo__image" src="<?php echo $pathPrefix ?>assets/img/logo/soclogo.png" alt="Logo sacrostectservices"></a></div>
            </div>
            <div class="menu-mobile">
                <ul class="menu-mobile__list ">
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>index">home</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>about">About</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>services">services</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span> </li> 
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>courses">courses</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>ready-to-deploy">Ready To Deploy</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>careers">careers</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>enroll">Enroll</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="<?php echo $pathPrefix ?>contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="button-default btn-ontop" id="on-top"><span class="glyph-icon flaticon-arrows-5"></span></div>
</header>
<div class="modal fade signin-form" id="modal-enroll" role="dialog">
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
                                <input class="input-item courseput hidden" type="text" value="">
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