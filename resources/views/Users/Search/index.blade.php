@extends('layouts.user')
@section('content')

<!-- khoi sach moi  -->
<section class="_1khoi sachmoi bg-white">
    <div class="container">
        <div class="noidung" style="width:100%;">
            <div class="row">
                <!--header-->
                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                    <h1 class="header text-uppercase" style="font-weight: 400;">NỘI DUNG TÌM KIẾM</h1>
                </div>
            </div>
            <div class="search row" style="padding-bottom: 2rem;">
                <!-- 1 san pham -->
                @if ($danhsach_sach->count() == 0)
                <h1 class="header text-uppercase" style="font-weight: 800; color:red">{{ $thongbao }}</h1>
                @else
                @foreach($danhsach_sach as $content )
                <div class="card">
                    <a href="Lap-trinh-ke-hoach-kinh-doanh-hieu-qua.html" class="motsanpham"
                        style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                        title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                        <img class="card-img-top anh" src="images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg"
                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">{{ $content->Ten }}</h3>
                            <small class="tacgia text-muted">{{ $content->TacGia }}</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">{{ $content->Giaban }}</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>


                @endforeach
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
