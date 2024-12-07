@extends('frontend.main')
@section('content')
<section id="component-tour-search-slider">
    <!-- Slider -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="object-fit: cover" src="{{asset('frontend/assets/imgs/bao_tang.jpg')}}" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img style="object-fit: cover" src="{{asset('frontend/assets/imgs/americas.jpg')}}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img style="object-fit: cover" src="{{asset('frontend/assets/imgs/japan.jpg')}}" class="d-block w-100" alt="Image 3">
            </div>
        </div>
    </div>

    <!-- Thanh Tìm Kiếm -->
    <form action="{{ route("searchTour") }}" method="get">
        <div class="search-box">
            <div class="input-group">
                <input style="width: 87%;" type="text" name="query" placeholder="Nhập nơi muốn đến" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                </div>
            </div>
        </div>
    </form>
</section>
<section id="special-offer" class="component-top-tour">
    <div class="container">
        <h2>Ưu đãi đặc biệt</h2>
        <div class="owl-carousel owl-theme owl-carousel-one">
            @foreach ($endows as $endow)
            <div class="item">
                <a href="/endow_detail/{{$endow->id}}"><img style="height: 255px;" src="{{ asset($endow->endow_anh_bia) }}" alt=""></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section id="component-prominent-tour">
    <div class="component-prominent-tour_content container">
        <h2 class="component-prominent-tour_content-header">
            tour nổi bật
        </h2>
        <div class="component-card-list-prominent-tour">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-12 col-md-4">
                    <a href="/tour_detail/{{$product->id}}" class="prominent-tour-card_link">
                        <div class="prominent-tour-card">
                            <div class="component-card-tour_img">
                                <div class="card-tour-img">
                                    <img src="{{asset($product->tour_anh_bia)}}" class="card-img-top tour-card-img" alt="...">
                                </div>
                                <div class="prominent-tour-card_standard">
                                    <i class="bi bi-star"></i>
                                    <span>Tiêu chuẩn</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="time-limit">{{$product->tour_thoi_luong}}</span>
                                <h5 class="card-title">{{$product->tour_ten}}</h5>
                                <div class="prominent-tour-card_id">
                                    <p class="prominent-tour-card_id-tittle"><i class="bi bi-ticket-perforated"></i> Phương Tiện: </p>
                                    <p class="prominent-tour-card_id-txt">{{$product->tour_phuong_tien}}</p>
                                </div>
                                <div class="prominent-tour-card_start">
                                    <p class="prominent-tour-card_start-tittle"><i class="bi bi-geo-alt"></i> Nơi Khởi Hành: </p>
                                    <p class="prominent-tour-card_start-txt">{{$product->tour_dia_diem}}</p>
                                </div>
                                <div class="prominent-tour-card_price">
                                    <p>{{number_format($product->tour_gia_ban_giam_gia)}}</p>
                                    <p class="prominent-tour-card_price-VND">VNĐ/người</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section id="component-favourist-tour" class="component-top-tour">
    <div class="component-favourist-tour-content container">
        <h2>Điểm Đến Yêu Thích</h2>
        <div class="component-card-list-favourist-tour">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="favourist-tour-item">
                        <div class="favourist-tour-item-overlay">
                            <img src="{{ asset('frontend/assets/imgs/americas.jpg') }}" class="favourist-img" alt="...">
                            <div class="favourist-name-left">
                                <i class="bi bi-airplane-engines"></i>
                                <span>Châu Mỹ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="favourist-tour-item">
                                <div class="favourist-tour-item-overlay">
                                    <img src="{{ asset('frontend/assets/imgs/austrailia.webp') }}" class="favourist-img" alt="...">
                                    <div class="favourist-name-right">
                                        <i class="bi bi-airplane-engines"></i>
                                        <span>Châu Úc</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="favourist-tour-item">
                                <div class="favourist-tour-item-overlay">
                                    <img src="{{ asset('frontend/assets/imgs/europe.jpg') }}" class="favourist-img" alt="...">
                                    <div class="favourist-name-right">
                                        <i class="bi bi-airplane-engines"></i>
                                        <span>Châu Âu</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="favourist-tour-item ">
                                <div class="favourist-tour-item-overlay">
                                    <img src="{{ asset('frontend/assets/imgs/japan3.jpg') }}" class="favourist-img" alt="...">
                                    <div class="favourist-name-right-bottom">
                                        <i class="bi bi-airplane-engines"></i>
                                        <span>Nhật Bản</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="new-event" class="component-top-tour">
    <div class="container">
        <h2>Tin tức và sự kiện</h2>
        <div class="owl-carousel owl-theme owl-carousel-two">
            @foreach ($new_events as $new_event)
            <div class="item">
                <div class="item-img">
                    <a href="/new_event_detail/{{$new_event->id}}"><img style="height: 194.11px;" src="{{ asset($new_event->new_event_anh_bia) }}" alt=""></a>
                </div>
                <div class="item-content">
                    <p class="item__date">{{$new_event->updated_at}}</p>
                    <h3 class="item__title">{!!$new_event->new_event_ten!!}</h3>
                    <p class="item__des">{{$new_event->new_event_tieu_de}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection