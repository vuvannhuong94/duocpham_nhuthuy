<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <script type="text/javascript" src="assets/javascripts/lib/jquery-2.2.1.min.js"></script>
        <script type="text/javascript" src="assets/javascripts/lib/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/stylesheets/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">




          <?= $this->Html->css('bootstrap.min.css') ?>


        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

        <!-- FlexSlider -->


        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>

        <script>
            jQuery(document).ready(function ($) {

                var jssor_1_SlideshowTransitions = [
                    {$Duration: 1200, x: -0.3, $During: {$Left: [0.3, 0.7]}, $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear}, $Opacity: 2},
                    {$Duration: 1200, x: 0.3, $SlideOut: true, $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear}, $Opacity: 2}
                ];

                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideshowOptions: {
                        $Class: $JssorSlideshowRunner$,
                        $Transitions: jssor_1_SlideshowTransitions,
                        $TransitionsOrder: 1
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    },
                    $ThumbnailNavigatorOptions: {
                        $Class: $JssorThumbnailNavigator$,
                        $Cols: 1,
                        $Align: 0,
                        $NoDrag: true
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1140);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>
        <style>

            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url('img/a17.png') no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }

            /* jssor slider thumbnail navigator skin 09 css */

            .jssort09-600-45 .p {
                position: absolute;
                top: 0;
                left: 0;
                width: 600px;
                height: 45px;
            }

            .jssort09-600-45 .t {
                font-family: verdana;
                font-weight: normal;
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                color:#fff;
                line-height: 45px;
                font-size: 20px;
                padding-left: 10px;
            }

        </style>


    </head>

    <body>
        <div class="container">
            <!-- Header -->
            <div class="header">
                <div class="row">
                    <div class="col-md-2">
                        <img class="padding-left-20" src="assets\images\icon_logo.png"/>
                    </div>
                    <div class="col-md-5 margin-top-20">
                        <span class="color-035cae font-size-30">DƯỢC PHẨM NHƯ THỦY</span><br>
                        <span class="color-9cacba padding-left-170">Dược phẩm của mọi gia đình</span>
                    </div>
                    <div class="col-md-5 padding-left-100">
                        <img class="padding-left-20" src="assets\images\icon_logo2.png"/>
                    </div>
                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height:200px; overflow: hidden; visibility: hidden;">
                        <!-- Loading Screen -->
                        
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1250px; height: 200px; overflow: hidden;">
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="assets\images\icon_logo3.png" />
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="assets\images\icon_logo3_1.jpg" />
                                
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="assets\images\icon_logo3_2.jpg" />
                            </div>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:600px;height:45px;">
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=40.0); opacity:0.4;"></div>
                            <!-- Thumbnail Item Skin Begin -->
                            <div data-u="slides" style="cursor: default;">
                                <div data-u="prototype" class="p">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- Bullet Navigator -->
                        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
                            <div data-u="prototype" style="width:12px;height:12px;"></div>
                        </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
                        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
                    </div>


                </div>

                <div class="panel panel-default width-1125">
                    <div class="panel-heading height-70 " style="background-color: #03a9f4;">
                        <nav class="navbar row">
                            <div class="container-fluid">
                                <ul class="nav navbar-nav ">
                                    <li><a class="color-white margin-left-30" href="#">Trang chủ</a></li>
                                    <li><a class="color-white margin-left-30" href="#">Giới thiệu</a></li>
                                    <li><a class="color-white margin-left-30" href="#">Tin tức</a></li>
                                    <li><a class="color-white margin-left-30" href="#">Sản phẩm</a></li>
                                    <li><a class="color-white margin-left-30" href="#">Thông tin sức khỏe</a></li>
                                    <li><a class="color-white margin-left-30" href="#">Tư vấn</a></li>
                                    <li><a class="color-white margin-left-30" href="#">Hệ thống phân phối</a></li>
                                    <li><a class="color-white margin-left-30" href="#">Liên hệ</a></li><br>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="panel-body height-60 backgroup-color-d6e9fa width-1125">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="assets\images\icon_giohang.png"/><label class="color-blue">Giỏ hàng</label>
                            </div>
                            <div class="col-md-4">
                                <label>Liên kết</label>
                                <select class="selectpicker height-30 width-80">
                                    <option>-----</option>
                                    <option value="http://google.com.vn">http://google.com.vn</option>
                                    <option value="http://dantri.com.vn">http://dantri.com.vn</option>
                                    <option value="http://dantri.com.vn">http://24h.com.vn</option>
                                </select>
                            </div>
                            <div class="col-md-6 padding-left-100">
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <label>Tìm kiếm </label>
                                        <input type="text" class="form-control height-30 " placeholder="Tìm kiếm">
                                    </div>
                                    <button type="submit" class="btn btn-danger height-30">tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->


            <div class="content row">

                                 <?= $this->fetch('content') ?>

            </div>








            <div class="footer">
            </div>
            <div class="panel panel-default">
                <div class="panel-body backgroup-color-d6e9fa">


                    <h3>Công Ty Dược Phẩm Như Thủy</h3>
                    <p>Địa chỉ:Số 4 ngõ 111,Nguyễn Phong Sắc,Cầu Giấy,Hà Nội</p>
                    <p>DT:04 .38888888    Fax:04.38888888</p>

                </div>
                <div class="panel-footer" style="background-color: #03a9f4;">
                    <nav class="navbar  ">
                        <ul class="nav navbar-nav">
                            <li><a class="color-white margin-left-15" href="#">Power by HiWorld</a></li>
                            <li><a class="color-white margin-left-15" href="#">Trang chủ</a></li>
                            <li><a class="color-white margin-left-15" href="#">Giới thiệu</a></li>
                            <li><a class="color-white margin-left-15" href="#">Tin tức</a></li>
                            <li><a class="color-white margin-left-15" href="#">Sản phẩm</a></li>
                            <li><a class="color-white margin-left-15" href="#">Thông tin sức khỏe</a></li>
                            <li><a class="color-white margin-left-15" href="#">Tư vấn</a></li>
                            <li><a class="color-white margin-left-15" href="#">Hệ thống phân phối</a></li>
                            <li><a class="color-white margin-left-15" href="#">Liên hệ</a></li>
                        </ul>
                    </nav>


                </div>
            </div>





        </div>


    </body>
</html>

