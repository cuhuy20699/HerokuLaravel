@extends('client.layoutHomepage.master')
@section('title', 'Dashboard Admin')
<style>
    .gallery-wrap .img-big-wrap img {
        height: 450px;
        width: auto;
        display: inline-block;
        cursor: zoom-in;
    }

    .gallery-wrap .img-small-wrap .item-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        margin: 7px 2px;
        display: inline-block;
        overflow: hidden;
    }

    .gallery-wrap .img-small-wrap {
        text-align: center;
    }

    .gallery-wrap .img-small-wrap img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 4px;
        cursor: zoom-in;
    }
</style>


@section('content')

    <div class="container">

        <hr>


        <div class="card">
            <div class="row">
                <aside class="col-sm-5 border-right">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <div><a href="#"><img
                                            src="https://www.didongviet.vn/pub/media/catalog/product//o/p/oppo-f7-chinh-hang-cty-didongviet.jpg"
                                            height="450" width="450"></a></div>
                        </div> <!-- slider-product.// -->
                    </article> <!-- gallery-wrap .end// -->
                </aside>
                <aside class="col-sm-7">
                    <article class="card-body p-5">
                        <h3 class=" mb-3" class="text-info" style="font-family: Arial">Oppo F7 (CTY) </h3>

                        <p class="price-detail-wrap">
                        {{--<span class="price h3 text-info">--}}
                        {{--<span class="text-success">VND</span> <span class="text-success"> 7.990.000</span>--}}
                        {{--</span>--}}
                        <div class="text-success" style="font-family: Arial">
                            <h3>7.990.000 đ</h3>
                        </div>
                        </p> <!-- price-detail-wrap .// -->
                        <dl class="item-property">
                            <dt class="text-info"> Description</dt>
                            <dd><p style="font-family: Arial">Oppo F7 (CTY) là hàng chính hãng, máy mới 100%. Máy không
                                    chỉ đẹp về ngoại hình mà còn sở hữu cấu hình ổn định, mượt mà. Máy cho trải nghiệm
                                    đáng tiền với chất lượng luôn được đảm bảo nên khách hàng có thể hoàn toàn an tâm sử
                                    dụng </p></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt class="text-info" style="font-family: Arial">Category</dt>
                            <dd>SMARTPHONE</dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt class="text-info" style="font-family: Arial">Color</dt>
                            <dd>Black and white</dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt class="text-info" style="font-family: Arial">Delivery</dt>
                            <dd>Russia, USA, and Europe</dd>
                        </dl>  <!-- item-property-hor .// -->

                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="param param-inline">
                                    <dt>Quantity:</dt>
                                    <dd>
                                        <select class="form-control form-control-sm" style="width:70px;">
                                            <option> 1</option>
                                            <option> 2</option>
                                            <option> 3</option>
                                        </select>
                                    </dd>
                                </dl>  <!-- item-property .// -->
                            </div> <!-- col.// -->
                            <div class="col-sm-7" style="font-family: Arial">

                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                        <hr>
                        <a href="#" class="btn btn-lg btn-success"> Buy now </a>
                        <a href="#" class="btn btn-lg btn-success"> <i class="fas fa-shopping-cart"></i> Add to cart
                        </a>
                    </article> <!-- card-body.// -->
                </aside> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- card.// -->


    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 " style="font-family: Arial">
                <hr>
                <h3>Thông số kĩ thuật </h3>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h5><strong>Màn hình </strong></h5>
                    </div>
                    <div class="col-sm-9">
                        <ul style="list-style-type : none ;padding-left: 300px">
                            <li>
                                <h5>
                                    <small> Công nghệ màn hình: LTPS IPS LCD
                                    </small>
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <small>Độ phân giải: 1080 x 2280 pixels
                                    </small>
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <small>Màn hình rộng: 6.23 inches
                                    </small>
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <small>Mặt kính cảm ứng: Corning Gorilla Glass 5

                                    </small>
                                </h5>
                            </li>
                        </ul>
                    </div>

                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h5><strong>Camera sau
                            </strong></h5>
                    </div>
                    <div class="col-sm-9">
                        <ul style="list-style-type : none ;padding-left: 300px">
                            <li>
                                <h5>
                                    <small> Độ phân giải: 16 MP, f/1.8, phase detection autofocus, LED flash

                                    </small>
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <small>Quay phim: 1080p@30fps
                                    </small>
                                </h5>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h5><strong>Camera trước
                            </strong></h5>
                    </div>
                    <div class="col-sm-9">
                        <ul style="list-style-type : none ;padding-left: 300px">
                            <li>
                                <h5>
                                    <small>Độ phân giải: 25 MP, f/2.0
                                    </small>
                                </h5>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h5><strong>Hệ điều hành - CPU
                            </strong></h5>
                    </div>
                    <div class="col-sm-9">
                        <ul style="list-style-type : none ;padding-left: 300px">
                            <li>
                                <h5>
                                    <small> Hệ điều hành: Android 8.0 (Oreo)


                                    </small>
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <small>Chipset (hãng SX CPU): Mediatek Helio P60

                                    </small>
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <small>Tốc độ CPU: Octa-core (4x2.0 GHz Cortex-A73 & 4x2.0 GHz Cortex-A53)


                                    </small>
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <small>Chip đồ họa (GPU): Mali-G72 MP3


                                    </small>
                                </h5>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h5><strong>Camera sau
                            </strong></h5>
                    </div>
                    <div class="col-sm-9">
                        <ul style="list-style-type : none ;padding-left: 300px">
                            <li>
                                <h5>
                                    <small> Độ phân giải: 16 MP, f/1.8, phase detection autofocus, LED flash

                                    </small>
                                </h5>
                            </li>
                            <li>
                                <h5>
                                    <small>Quay phim: 1080p@30fps
                                    </small>
                                </h5>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class="col-sm-2">
            </div>

            <div class="container"  style="font-family: Arial">
                <hr>
                <div class="form-group col-md-8 ">
                    <h3 >Hỏi đáp & tư vấn
                    </h3>
                    <textarea class="form-control input-sm " type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                    <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                </div>
                <div class="form-group col-md-2">
                    <button class="form-control input-sm btn btn-success disabled" id="btnSubmit" name="btnSubmit" type="button" style="height:35px"> Send</button>

                </div>



        </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#characterLeft').text('140 characters left');
            $('#message').keyup(function () {
                var max = 140;
                var len = $(this).val().length;
                if (len >= max) {
                    $('#characterLeft').text('You have reached the limit');
                    $('#characterLeft').addClass('red');
                    $('#btnSubmit').addClass('disabled');
                }
                else {
                    var ch = max - len;
                    $('#characterLeft').text(ch + ' characters left');
                    $('#btnSubmit').removeClass('disabled');
                    $('#characterLeft').removeClass('red');
                }
            });
        });
    </script>

@endsection