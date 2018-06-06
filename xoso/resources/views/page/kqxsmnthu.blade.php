@extends('master') @section('content')
<div class="col-l">
    <div class="link-du-doan"></div>
    <script></script>
    <div class="box mo-thuong-ngay">
        <h2 class="title-bor">
            <strong>Các tỉnh mở thưởng hôm nay</strong>
        </h2>
        <table class="colgiai" cellpadding="0" cellspacing="0" border="0" width="100%">
            <tbody>
                <tr>
                    <td>
                        <a href="/mien-nam/xshcm-ket-qua-xo-so-thanh-pho-ho-chi-minh-p14.html" title="XSHCM">TP Hồ Chí Minh</a>
                    </td>
                    <td>
                        <a href="/mien-trung/xstth-ket-qua-xo-so-thua-thien-hue-p36.html" title="XSTTH">Thừa Thiên Huế</a>
                    </td>
                    <td>
                        <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac.html" title="XSMB">Miền Bắc</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/mien-nam/xsdt-ket-qua-xo-so-dong-thap-p12.html" title="XSDT">Đồng Tháp</a>
                    </td>
                    <td>
                        <a href="/mien-trung/xspy-ket-qua-xo-so-phu-yen-p31.html" title="XSPY">Phú Yên</a>
                    </td>
                    <td>
                        <a href="/ket-qua-xo-so-dien-toan.html" title="Điện toán">Điện toán</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/mien-nam/xscm-ket-qua-xo-so-ca-mau-p8.html" title="XSCM">Cà Mau</a>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <ul class="tab-panel">
        <li class="active">
            <a href="/kqxsmn-ket-qua-xo-so-mien-nam.html">Miền nam</a>
        </li>
        <li class="active">
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-2.html" title="Xsmn Thứ 2">Thứ 2</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-3.html" title="Xsmn Thứ 3">Thứ 3</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-4.html" title="Xsmn Thứ 4">Thứ 4</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-5.html" title="Xsmn Thứ 5">Thứ 5</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-6.html" title="Xsmn Thứ 6">Thứ 6</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-7.html" title="Xsmn Thứ 7">Thứ 7</a>
        </li>
        <li>
            <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-chu-nhat.html" title="Xsmn Chủ nhật">CN</a>
        </li>
    </ul>
    @for($i=0;$i<count($rmn);$i++)
    <div class="box">
        <h2 class="title-bor clearfix kq-title">
            <a class="title-a" href="/kqxsmn-ket-qua-xo-so-mien-nam.html" title="XSMN">XSMN</a> »
            <a class="title-a" href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-2.html" title="XSMN {{$thuchu}}">XSMN {{$thuchu}}</a> »
            <a class="title-a" href="/kqxsmn-ket-qua-xo-so-mien-nam-ngay-12-03-2018.html" title="XSMN {{$ngay[$i]}}">XSMN {{$ngay[$i]}}</a> - Xổ số miền Nam</h2>
        <div id="load_kq_mn_0">
            <div id="kq" class="three-city">
                <table class="colthreecity colgiai extendable" data-title="" width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr class="gr-yellow">
                            <th class="first"></th>
                            @foreach($city as $cty)
                            <th>
                                <a href="/mien-nam/xshcm-ket-qua-xo-so-thanh-pho-ho-chi-minh-p14.html" title="XSHCM">
                                    <b class="underline">{{$cty->name}}</b>
                                </a>
                                <br/>
                                <span class="s12">Mã: HCM</span>
                            </th>
                            @endforeach
                        </tr>
                        <tr class="g8">
                            <td>G8</td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                                <div>{!!$rmn[$i][$j]['rs_8_0']!!}</div>
                            </td>
                            @endfor
                        </tr>
                        <tr>
                            <td>G7</td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                                <div>{!!$rmn[$i][$j]['rs_7_0']!!}</div>
                            </td>
                            @endfor
                        </tr>
                        <tr>
                            <td>G6</td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                                <div>{!!$rmn[$i][$j]['rs_6_0']!!}</div>
                                <div>{!!$rmn[$i][$j]['rs_6_1']!!}</div>
                                <div>{!!$rmn[$i][$j]['rs_6_2']!!}</div>
                            </td>
                            @endfor
                        </tr>
                        <tr>
                            <td>G5</td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                                <div>{!!$rmn[$i][$j]['rs_5_0']!!}</div>
                            </td>
                            @endfor
                        </tr>
                        <tr>
                            <td>G4</td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                                <div>{!!$rmn[$i][$j]['rs_4_0']!!}</div>
                                <div>{!!$rmn[$i][$j]['rs_4_1']!!}</div>
                                <div>{!!$rmn[$i][$j]['rs_4_2']!!}</div>
                                <div>{!!$rmn[$i][$j]['rs_4_3']!!}</div>
                                <div>{!!$rmn[$i][$j]['rs_4_4']!!}</div>
                                <div>{!!$rmn[$i][$j]['rs_4_5']!!}</div>
                                <div>{!!$rmn[$i][$j]['rs_4_6']!!}</div>
                            </td>
                            @endfor
                        </tr>
                        <tr>
                            <td>G3</td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                                <div>{!!$rmn[$i][$j]['rs_3_0']!!}</div>
                                <div>{!!$rmn[$i][$j]['rs_3_1']!!}</div>
                            </td>
                            @endfor
                        </tr>
                        <tr>
                            <td>G2</td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                                <div>{!!$rmn[$i][$j]['rs_2_0']!!}</div>
                            </td>
                            @endfor
                        </tr>
                        <tr>
                            <td>G1</td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                                <div>{!!$rmn[$i][$j]['rs_1_0']!!}</div>
                            </td>
                            @endfor
                        </tr>
                        <tr class="gdb">
                            <td>ĐB</td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                                <div>{!!$rmn[$i][$j]['rs_0_0']!!}</div>
                            </td>
                            @endfor
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
                        <strong>xổ số TP Hồ Chí Minh</strong> sớm nhất:</span>
                    <strong class="clsms">XS HCM</strong> gửi
                    <strong class="clsms">6022 (1000đ)</strong>
                </p>
                <!--<p><span>Lấy số đẹp <strong>xổ số TP Hồ Chí Minh</strong>, Soạn:</span> <strong class="clsms">OK HCM</strong> gửi <strong class="clsms">8512 (5000đ)</strong></p>-->
            </div>
            <div id="dd" class="col-firstlast colthreecity colgiai">
                <table class="firstlast-mn" border="0" width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr class="header">
                            <th width="10%" class="first">Đầu</th>
                            @for($j=0;$j<count($city);$j++)
                            <th>{{$city[$j]->name}}</th>
                            @endfor
                        </tr>
                        @for($k=0;$k<10;$k++)
                        <tr>
                            <td>
                                <b class="clnote">{{$k}}</b>
                            </td>
                            @for($j=0;$j<count($city);$j++)
                            <td>
                            <?php
                                $m=0;
                                for($u=0;$u<count($kqmn[$i][$j]);$u++){
                                    if(substr($kqmn[$i][$j][$u],0,1)==(string)$k){
                                        if($m==0){
                                            echo substr($kqmn[$i][$j][$u],-1);
                                            $m=1;
                                        }else echo ', '.substr($kqmn[$i][$j][$u],-1);
                                    }
                                }
                            ?>
                            </td>
                            @endfor
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <div class="see-more">
            <ul class="list-unstyle list-html-link">
                <li>
                    <a href="/xo-so-truc-tiep/xsmn-mien-nam.html" title="XSMN trực tiếp">XSMN trực tiếp</a>
                </li>
                <li>
                    <a href="/kqxsmn-ket-qua-xo-so-mien-nam-hom-qua.html" title="XSMN hôm qua">XSMN hôm qua</a>
                </li>
                <li>
                    <a href="/thong-ke-lo-gan.html" title="Thống kê lô gan xổ số">Thống kê lô gan xổ số</a>
                </li>
                <li>
                    <a href="/du-doan-ket-qua-xo-so-mien-nam-xsmn-c226.html" title="Dự đoán XSMN">Dự đoán XSMN</a>
                </li>
            </ul>
        </div>
    </div>
    @endfor
    <div class="txt-center">
        <!--    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-client="ca-pub-3084353470359421" data-ad-slot="2809412592"></ins>-->
        <ins class="adsbygoogle dspblock hdc-csi_square" data-ad-client="ca-pub-8721835179689670" data-ad-slot="5705703893"></ins>
        <!--<ins class="adsbygoogle dspblock hdc-csi_square" data-ad-client="ca-pub-3084353470359421" data-ad-slot="3051288199"></ins>-->
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <div class="box box-html">
        <p style="text-align:justify">&nbsp;</p>
        <p>
            <span style="color:rgb(0, 0, 255)">
                <strong>
                    <a href="/kqxsmn-sxmn-ket-qua-xo-so-mien-nam-thu-2.html" title="XSMN thu 2">XSMN thu&nbsp;2</a>,</strong>
            </span>&nbsp;Kết quả xổ số miền Nam minh ngọc thứ 2&nbsp;trực tiếp h&agrave;ng tuần được mở thưởng trực tiếp v&agrave;o
            l&uacute;c 16h15p tại trường quay xổ số c&aacute;c tỉnh miền Nam.</p>
        <p>Xem xổ số 3 đ&agrave;i h&ocirc;m nay&nbsp;được mở thưởng gồm 3 tỉnh.</p>
        <p>+ Xổ số kiến thiết miền Nam tỉnh C&agrave; Mau XSCM</p>
        <p>+ Xổ số miền Nam tỉnh đ&agrave;i Đồng Th&aacute;p XSDT</p>
        <p>+ Xổ số đ&agrave;i th&agrave;nh phố Hồ Ch&iacute; Minh (XS HCM)</p>
        <p>Xổ số miền Nam đ&agrave;i ch&iacute;nh (đ&agrave;i ch&aacute;nh) thứ 2 gồm c&oacute;: TPHCM, đ&agrave;i phụ thứ 2
            gồm c&oacute;: Đồng Th&aacute;p, C&agrave; Mau</p>
        <p>v&agrave; tường thuật từ trường quay nhanh nhất v&agrave; ch&iacute;nh x&aacute;c nhất. Để coi KQMN thứ 2 tuần rồi,
            tuần n&agrave;y, tuần trước. Bạn c&oacute; thể soạn tin nhắn</p>
        <p style="text-align:center">
            <strong>
                <span style="color:rgb(255, 0, 0)">KQ SXMN thứ 2, XSMN t2, SXMN th 2, SXMNt2, XSMNt2</span>
            </strong>
        </p>
        <p>Đ&oacute;n xem XSKT Miền Nam thứ hai &ndash; XS miền Nam thứ 2&nbsp;h&agrave;ng tuần cập nhật thường xuy&ecirc;n
            v&agrave; li&ecirc;n tục, truy cập ngay để theo&nbsp;d&otilde;i c&ugrave;ng ch&uacute;ng t&ocirc;i v&agrave;o
            l&uacute;c 16h15p</p>
        <p>
            <strong>Truy cập ngay v&agrave;o link dưới đ&acirc;y để c&oacute; ngay bộ số đẹp tham khảo cho XSMN h&ocirc;m nay v&agrave;
                ng&agrave;y mai:</strong>
        </p>
        <p style="text-align:center">
            <span style="font-size:18px">
                <a href="/du-doan-ket-qua-xo-so-mien-nam-xsmn-c226.html" title="Soi cầu dự đoán XSMN">
                    <span style="color:#0000FF">
                        <strong>Soi cầu dự đo&aacute;n XSMN</strong>
                    </span>
                </a>
            </span>
        </p>
    </div>
    <script></script>
</div>
@endsection