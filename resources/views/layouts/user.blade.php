
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Dealbook-Mua sách trực tuyến giá rẻ nhất</title>
    <meta name="description"
        content="Mua sách online hay, giá tốt nhất, combo sách hot bán chạy, giảm giá cực khủng cùng với những ưu đãi như miễn phí giao hàng, quà tặng miễn phí, đổi trả nhanh chóng. Đa dạng sản phẩm, đáp ứng mọi nhu cầu.">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://dealbook.xyz/">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <style>img[alt="www.000webhost.com"]{display: none;}</style>
</head>

<body>
    @include('user.partials.navbar')
    @include('user.partials.sidebar')
    @yield('content')

    <!-- footer  -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h3 class="header text-uppercase font-weight-bold">Về DealBook</h3>
                        <a href="#">Giới thiệu về DealBook</a>
                        <a href="#">Tuyển dụng</a>
                        <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                            data-width="300px" data-layout="button" data-action="like" data-size="small"
                            data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h3 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h3>
                        <a href="#">Hướng dẫn đặt hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h3 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h3>
                        <img src="images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h3 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h3>
                        <img src="images/visa-payment.jpg" alt="visa-payment">
                        <img src="images/master-card-payment.jpg" alt="master-card-payment">
                        <img src="images/jcb-payment.jpg" alt="jcb-payment">
                        <img src="images/atm-payment.jpg" alt="atm-payment">
                        <img src="images/cod-payment.jpg" alt="cod-payment">
                        <img src="images/payoo-payment.jpg" alt="payoo-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

</body>

</html>