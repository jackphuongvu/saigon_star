@extends('layouts.master')
@section('content')
    <div class="clr"></div>
    <div class="full left subpage_content pgadmision">

        <div class="w_1280">

            <div class="w_1280_ad_top">
                <div class="full left bg_f6f6f6 box_faculty">

                    <div class="w_1280">

                        <div class="box_3_title"><h1>Performing Arts</h1></div>

                        <div class="clr"></div>

                        <div class="box_3_des"><p><img style="display: block; margin-left: auto; margin-right: auto;" src="images/Library-Media/Summer-Show-2018-p12.jpg" width="700" height="467"></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="clr"></div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="clr"></div>
    <div class="text_add"><h2>A True Second Home</h2></div>
    <div class="box_3_flower">
        <div class="full left flower-section">
            <div class="w_1280">
                <div class="cover">
                    <div class="col-md-3">
                        <div class="content">
                            <div class="incover">
                                <p class="number">30</p>
                                <br>sports teams
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="content">
                            <div class="incover">
                                <p class="number">89%</p>
                                <br>students participate in sports team
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="content">
                            <div class="incover">
                                <p class="number">100%</p>
                                <br>students participate in swimming programme
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="content">
                            <div class="incover">
                                <p class="number">100%</p>
                                <br>students participate in Inter-House Sports competitions
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="clr"></div>
    <div class="text_add"><h2>Gallery</h2></div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>

    <div class="full left bg_f6f6f6 box_activities">
        <div class="w_1280">
            <div class="gal" id="list_img">
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p02.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p02.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p04.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p04.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p02.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p02.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p04.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p04.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p02.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p02.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p04.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p04.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p02.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p02.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p04.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p04.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p02.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p02.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p04.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p04.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/Summer-Show-2018-p02.jpg"><img class="" src="images/Library-Media/Summer-Show-2018-p02.jpg"></a>

            </div>
        </div></div>

    <script type="text/javascript">
        $('.box_3_mobile').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            prevArrow: '<a class="slick-prev"></a>',
            nextArrow: '<a class="slick-next"></a>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true

                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endsection
