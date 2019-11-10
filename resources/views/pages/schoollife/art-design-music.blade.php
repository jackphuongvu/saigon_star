@extends('layouts.master')
@section('content')
    <div class="full left bg_f6f6f6 box_activities">
        <div class="w_1280">
            <div class="gal" id="list_img">
                <a data-fancybox="gallery" href="images/Library-Media/music.jpg"><img class="" src="images/Library-Media/music.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/sunbears.jpg"><img class="" src="images/Library-Media/sunbears.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/nature_loving.jpg"><img class="" src="images/Library-Media/nature_loving.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/swimming.jpg"><img class="" src="images/Library-Media/swimming.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/music.jpg"><img class="" src="images/Library-Media/music.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/sunbears.jpg"><img class="" src="images/Library-Media/sunbears.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/music.jpg"><img class="" src="images/Library-Media/music.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/sunbears.jpg"><img class="" src="images/Library-Media/sunbears.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/sunbears.jpg"><img class="" src="images/Library-Media/sunbears.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/music.jpg"><img class="" src="images/Library-Media/music.jpg"></a>
                <a data-fancybox="gallery" href="images/Library-Media/sunbears.jpg"><img class="" src="images/Library-Media/sunbears.jpg"></a>

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
