@extends('master') @section('content')
<div class="col-l">
    <div class="link-du-doan">
        <a class="text-link-ads" href="http://cauvang6868.com" title="http://cauvang6868.com" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="http://cauvang6868.com" title="http://cauvang6868.com">
            </span>
            <b style="color:#3c8dbc">Lô cao cấp</b>
        </a>
        <a class="text-link-ads" href="http://xoso82.com" title="http://xoso82.com" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="http://xoso82.com" title="http://xoso82.com">
            </span>
            <b style="color:#3c8dbc">Soi cầu miền Bắc</b>
        </a>
        <!--<a class="text-link-ads" href="http://soicau98.top" title="soicau98.top" rel="nofollow" target="_blank"><span><img src="css/images/hot2.gif" alt="http://soicau98.top" title="http://soicau98.top"></span><b class="clnote">Độc thủ lô</b></a>-->
        <a class="text-link-ads" href="http://lodepphatloc.com" title="lodepphatloc.com" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="http://lodepphatloc.com" title="http://lodepphatloc.com">
            </span>
            <b class="clnote">Lô siêu chuẩn</b>
        </a>
        <a class="text-link-ads" href="http://cauvip777.net" title="cauvip777.net" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="cauvip777.net" title="cauvip777.net">
            </span>
            <b class="clnote">Cầu đẹp 2018</b>
        </a>
        <a class="text-link-ads" href="http://cauvang666.net" title="cauvang666.net" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="cauvang666.net" title="cauvang666.net">
            </span>
            <b class="clnote">Cầu chuẩn XSMB</b>
        </a>
        <a class="text-link-ads" href="http://102xoso.com" title="102xoso.com" rel="nofollow" target="_blank">
            <span>
                <img src="css/images/hot2.gif" alt="102xoso.com" title="102xoso.com">
            </span>
            <b class="clnote">Lô siêu Vip</b>
        </a>
    </div>
    <script></script>
    <div class="box mo-thuong-ngay">
        <h2 class="title-bor">
            <strong>Các tỉnh mở thưởng hôm nay</strong>
        </h2>
        <table class="colgiai" cellpadding="0" cellspacing="0" border="0" width="100%">
            <tbody>
                <tr>
                    <td>
                        <a href="/mien-nam/xsvl-ket-qua-xo-so-vinh-long-p21.html" title="XSVL">Vĩnh Long</a>
                    </td>
                    <td>
                        <a href="/mien-trung/xsgl-ket-qua-xo-so-gia-lai-p27.html" title="XSGL">Gia Lai</a>
                    </td>
                    <td>
                        <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac.html" title="XSMB">Miền Bắc</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/mien-nam/xsbd-ket-qua-xo-so-binh-duong-p5.html" title="XSBD">Bình Dương</a>
                    </td>
                    <td>
                        <a href="/mien-trung/xsnt-ket-qua-xo-so-ninh-thuan-p30.html" title="XSNT">Ninh Thuận</a>
                    </td>
                    <td>
                        <a href="/ket-qua-xo-so-dien-toan.html" title="Điện toán">Điện toán</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/mien-nam/xstv-ket-qua-xo-so-tra-vinh-p20.html" title="XSTV">Trà Vinh</a>
                    </td>
                    <td></td>
                    <td>
                        <a href="/kqxs-mega-645-ket-qua-xo-so-mega-6-45-vietlott-ngay-hom-nay.html" title="Mega 6/45">Mega 6/45</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <ul class="tab-panel">
        <li class="active">
            <a href="{{route('kqxsmb')}}">Miền bắc</a>
        </li>
        <li>
            <a href="kqxsmb/thu-2" title="Xsmb Thứ 2">Thứ 2</a>
        </li>
        <li>
            <a href="kqxsmb/thu-3" title="Xsmb Thứ 3">Thứ 3</a>
        </li>
        <li>
            <a href="kqxsmb/thu-4" title="Xsmb Thứ 4">Thứ 4</a>
        </li>
        <li>
            <a href="kqxsmb/thu-5" title="Xsmb Thứ 5">Thứ 5</a>
        </li>
        <li>
            <a href="kqxsmb/thu-6" title="Xsmb Thứ 6">Thứ 6</a>
        </li>
        <li>
            <a href="kqxsmb/thu-7" title="Xsmb Thứ 7">Thứ 7</a>
        </li>
        <li>
            <a href="kqxsmb/thu-1" title="Xsmb Chủ nhật">CN</a>
        </li>
    </ul>
    @for($i=0;$i<count($rmb);$i++)
    <div class="box">
        <h2 class="title-bor clearfix kq-title">
            <a class="title-a" href="{{route('kqxsmb')}}" title="XS MB">XS MB</a> »
            <a class="title-a" href="kqxsmb/thu-{{$thu}}" title="XSMB {{$thuchu}}">XSMB {{$thuchu}}</a> »
            <a class="title-a" href="/kqxsmb/ngay-{{$ngay[$i]}}" title="Xổ số miền Bắc ngày {{$ngay[$i]}}">Xổ số miền Bắc ngày {{$ngay[$i]}}</a> {{$thuchu}}</h2>
        <div id="load_kq_mb_0">
            <div id="kq" class="one-city">
                <table width="100%" cellspacing="0" cellpadding="0" border="0" data-title="" class="kqmb extendable">
                    <tbody>
                        <tr class="db">
                            <td class="txt-giai">Đặc biệt</td>
                            <td colspan="12" class="number">
                                <b>{!!$rmb[$i]['rs_0_0']!!}</b>
                            </td>
                        </tr>
                        <tr class="bg_f6">
                            <td class="txt-giai">Giải nhất</td>
                            <td colspan="12" class="number">
                                <b>{!!$rmb[$i]['rs_1_0']!!}</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="txt-giai">Giải nhì</td>
                            <td colspan="6" class="number">
                                <b>{!!$rmb[$i]['rs_2_0']!!}</b>
                            </td>
                            <td colspan="6" class="number">
                                <b class="">{!!$rmb[$i]['rs_2_1']!!}</b>
                            </td>
                        </tr>
                        <tr class="giai3 bg_ef">
                            <td class="txt-giai" rowspan="2">Giải ba</td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_3_0']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b class="">{!!$rmb[$i]['rs_3_1']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b class="">{!!$rmb[$i]['rs_3_2']!!}</b>
                            </td>
                        </tr>
                        <tr class="bg_ef">
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_3_3']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_3_4']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_3_5']!!}</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="txt-giai">Giải tư</td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_4_0']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_4_1']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_4_2']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_4_3']!!}</b>
                            </td>
                        </tr>
                        <tr class="giai5 bg_ef">
                            <td class="txt-giai" rowspan="2">Giải năm</td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_0']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_1']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_2']!!}</b>
                            </td>
                        </tr>
                        <tr class="bg_ef">
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_3']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_4']!!}</b>
                            </td>
                            <td class="number" colspan="4">
                                <b>{!!$rmb[$i]['rs_5_5']!!}</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="txt-giai">Giải sáu</td>
                            <td colspan="4" class="number">
                                <b>{!!$rmb[$i]['rs_6_0']!!}</b>
                            </td>
                            <td colspan="4" class="number">
                                <b>{!!$rmb[$i]['rs_6_1']!!}</b>
                            </td>
                            <td colspan="4" class="number">
                                <b>{!!$rmb[$i]['rs_6_2']!!}</b>
                            </td>
                        </tr>
                        <tr class="bg_ef">
                            <td class="txt-giai">Giải bảy</td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_7_0']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_7_1']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_7_2']!!}</b>
                            </td>
                            <td colspan="3" class="number">
                                <b>{!!$rmb[$i]['rs_7_3']!!}</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="buttons-wrapper"></div>
            <div class="txt-center">
                <!--<ins class="adsbygoogle dspblock hdc-csi_square" data-ad-client="ca-pub-3084353470359421" data-ad-slot="5842326193" data-ad-format="auto"></ins>-->
                <!--    <ins class="adsbygoogle dspblock hdc-csi_square" data-ad-client="ca-pub-8721835179689670" data-ad-slot="5705703893" data-ad-format="auto"></ins>-->
                <ins class="adsbygoogle dspblock hdc-csi_square" data-ad-client="ca-pub-6036579657774106" data-ad-slot="5498735679" data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="cp-sms">
                <p>
                    <span>Kết quả
                        <strong>xổ số Miền bắc</strong> sớm nhất:</span>
                    <strong class="clsms">XS MB</strong> gửi
                    <strong class="clsms">6022 (1000đ)</strong>
                </p>
                <!--<p><span>Lấy số đẹp <strong>xổ số Miền bắc</strong>, Soạn:</span> <strong class="clsms">OK MB</strong> gửi <strong class="clsms">8512 (5000đ)</strong></p>-->
            </div>
            <div id="dd" class="col-firstlast">
                <table class="firstlast-mb fl" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr class="header">
                            <th>Đầu</th>
                            <th>Đuôi</th>
                        </tr>
                        @for($k=0;$k<10;$k++)
                        <tr>
                            <td>
                                <b class="clnote">{{$k}}</b>
                            </td>
                            <td>
                                <?php 
                                $j=0;
                                for($u=0;$u<count($kqmb[$i]);$u++){
                                    if(substr($kqmb[$i][$u],0,1)==(string)$k){
                                        if($j==0){
                                            echo substr($kqmb[$i][$u],-1);
                                            $j=1;
                                        }else echo ', '.substr($kqmb[$i][$u],-1);
                                    }
                                }
                                ?>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
                <table cellspacing="0" cellpadding="0" border="0" class="firstlast-mb fr">
                    <tbody>
                        <tr class="header">
                            <th>Đầu</th>
                            <th>Đuôi</th>
                        </tr>
                        @for($k=0;$k
                        <10;$k++) <tr>
                            <td>
                                <?php $j=0; for($u=0;$u<count($kqmb[$i]);$u++){ if(substr($kqmb[$i][$u],-1)==(string)$k){if($j==0){echo substr($kqmb[$i][$u],0,1);$j=1;}else echo ', '.substr($kqmb[$i][$u],0,1);}}?>
                            </td>
                            <td>
                                <b class="clnote">{{$k}}</b>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
            <div class="conect_out">
                <span class="bg_brown">
                    <a rel="nofollow" class="ic ic-print" title="In vé dò" href="/in-ve-do.html">In vé dò</a>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="see-more">
            <ul class="list-unstyle list-html-link">
                <li>
                    <a href="/xo-so-truc-tiep/xsmb-mien-bac.html" title="XSMB trực tiếp">XSMB trực tiếp</a>
                </li>
                <li>
                    <a href="/kqxsmb-ket-qua-xo-so-mien-bac-hom-qua.html" title="XSMB hôm qua">XSMB hôm qua</a>
                </li>
                <li>
                    <a href="/thong-ke-lo-gan-xo-so-mien-bac-xsmb.html" title="Lô gan miền Bắc">Lô gan miền Bắc</a>
                </li>
                <li>
                    <a href="/du-doan-ket-qua-xo-so-mien-bac-xsmb-c228.html" title="Dự đoán XSMB">Dự đoán XSMB</a>
                </li>
            </ul>
        </div>
</div>
@endfor
<div class="txt-center">
    <!--    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-client="ca-pub-3084353470359421" data-ad-slot="2809412592"></ins>-->
    <ins class="adsbygoogle dspblock hdc-csi_square " data-ad-client="ca-pub-3084353470359421" data-ad-slot="3051288199"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>

<div class="box box-html">
    <p>
        <strong>
            <span style="color:#ff0000">
                <a href="http://xoso.me/kqxsmb-xstd-xshn-sxmb-ket-qua-xo-so-mien-bac-thu-5.html" title="XSMB thứ 5">
                    <span style="color:#ff0000">XSMB {{$thuchu}}</span>
                </a>
            </span>&nbsp;</strong>hàng tuần
        <strong>&nbsp;</strong>hay còn gọi là kết quả xổ số Hà Nội - Xổ số thủ đô&nbsp;(
        <strong>XSHN-XSTD-Xổ số đài Bắc t5</strong>)&nbsp;mở thưởng vào lúc 18h14 các ngày&nbsp;{{$thuchu}}&nbsp;hàng tuần và được&nbsp;cập
        nhật trực tiếp từ Hội đồng Xổ số kiến thiết Miền Bắc nên kết quả được cung cấp sớm và nhanh nhất.</p>
    <p>Xoso.me cập nhật thông tin về kết quả xổ số miền bắc&nbsp;{{$thuchu}} - xổ số Thủ Đô Hà Nội&nbsp;{{$thuchu}} hàng tuần (tuần này,
        tuần rồi, tuần trước) trong tất cả&nbsp;tháng trong năm một cách nhanh chóng và chính xác tuyệt đối đến người chơi,
        để theo dõi hàng&nbsp;ngày, đón xem tại&nbsp;
        <a href="http://xoso.me/kqxsmb-xstd-ket-qua-xo-so-mien-bac.html" title="XSMB">
            <span style="color:rgb(0, 0, 255)">
                <strong>XSMB</strong>
            </span>
        </a>&nbsp;ngay hôm nay.</p>
    <p>
        <strong>Công ty xổ số kiến thiết Thủ đô</strong>
    </p>
    <p>Địa chỉ: 53E - Hàng Bài - Hoàn Kiếm - Hà Nội.</p>
    <p>Điện thoại: 084.43.9433636 - Fax: 84.43.9438874 Hotline: 84.43.9439928, 84.43.9433123</p>
    <p>Để soạn tin nhắn lấy kết quả xổ số miền Bắc thứ 5 mới nhất soạn:
        <span style="font-size:16px">
            <strong>
                <span style="color:#FF0000">XSHN, XSTD, XSMB t5, KQMB thứ 5, XSMB t5, XSMBt5, XSMBth5, XSMBthunam, XSMBthu5</span>
            </strong>
        </span>&nbsp;</p>
    <p>&nbsp;</p>
</div>
</div>
@endsection