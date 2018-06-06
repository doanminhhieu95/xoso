@extends('master') @section('content')
<div class="col-l">

    <div class="box-dream box">
        <h2 class="title-bor mag0">
            <strong>Giải mã giấc mơ - giải mộng chiêm bao</strong>
        </h2>
        <div class="search-dream bg_f9">
            <div class="box-search clearfix">
                <form id="w0" action="{{route('somo')}}" method="post">
                    {{csrf_field()}}
                    <ul class="form-input-data list-unstyle search-mo center">
                        <div class="bor-1 fl">
                            <input name="tukhoa" type="search" value="<?php
                            if(isset($tukhoa)) echo $tukhoa;
                            ?>">
                        </div>
                        <button class="fl" type="submit">
                            <strong>Tìm kiếm</strong>
                        </button>

                    </ul>
                </form>
            </div>
            <div class="cl9 mag-l5">Tìm với từ bắt đầu:</div>
            <ul class="list-charter txt-center">
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ a" href="/so-mo-so-de/bat-dau-bang-a">
                        <strong>A</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ b" href="/so-mo-so-de/bat-dau-bang-b">
                        <strong>B</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ c" href="/so-mo-so-de/bat-dau-bang-c">
                        <strong>C</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ d" href="/so-mo-so-de/bat-dau-bang-d">
                        <strong>D</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ e" href="/so-mo-so-de/bat-dau-bang-e">
                        <strong>E</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ f" href="/so-mo-so-de/bat-dau-bang-f">
                        <strong>F</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ g" href="/so-mo-so-de/bat-dau-bang-g">
                        <strong>G</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ h" href="/so-mo-so-de/bat-dau-bang-h">
                        <strong>H</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ i" href="/so-mo-so-de/bat-dau-bang-i">
                        <strong>I</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ j" href="/so-mo-so-de/bat-dau-bang-j">
                        <strong>J</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ k" href="/so-mo-so-de/bat-dau-bang-k">
                        <strong>K</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ l" href="/so-mo-so-de/bat-dau-bang-l">
                        <strong>L</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ m" href="/so-mo-so-de/bat-dau-bang-m">
                        <strong>M</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ n" href="/so-mo-so-de/bat-dau-bang-n">
                        <strong>N</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ o" href="/so-mo-so-de/bat-dau-bang-o">
                        <strong>O</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ p" href="/so-mo-so-de/bat-dau-bang-p">
                        <strong>P</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ q" href="/so-mo-so-de/bat-dau-bang-q">
                        <strong>Q</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ r" href="/so-mo-so-de/bat-dau-bang-r">
                        <strong>R</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ s" href="/so-mo-so-de/bat-dau-bang-s">
                        <strong>S</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ t" href="/so-mo-so-de/bat-dau-bang-t">
                        <strong>T</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ u" href="/so-mo-so-de/bat-dau-bang-u">
                        <strong>U</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ v" href="/so-mo-so-de/bat-dau-bang-v">
                        <strong>V</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ w" href="/so-mo-so-de/bat-dau-bang-w">
                        <strong>W</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ x" href="/so-mo-so-de/bat-dau-bang-x">
                        <strong>X</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ y" href="/so-mo-so-de/bat-dau-bang-y">
                        <strong>Y</strong>
                    </a>
                </li>
                <li class="in-block ">
                    <a title="Sổ mơ bắt đầu với từ z" href="/so-mo-so-de/bat-dau-bang-z">
                        <strong>Z</strong>
                    </a>
                </li>
            </ul>
            @if(count($somos)==0)
            <center>Không tồn tại con số như giấc mơ bạn tìm :)</center>
            @else
            <div class="table-dream">
                <ul class="gr-yellow txt-center">
                    <li class="first percent-20">
                        <strong>STT</strong>
                    </li>
                    <li>
                        <h2>
                            <strong>Chiêm bao thấy</strong>
                        </h2>
                    </li>
                    <li>
                        <h2>
                            <strong>Con số giải mã</strong>
                        </h2>
                    </li>
                </ul>
                <ul class="list-dream">
                    <?php $i=1?>
                    @foreach($somos as $somo)
                    <li>
                        <label class="percent-20 in-block">
                            <strong>{{$i}}</strong>
                        </label>
                        <div class="in-block text-dream">
                            <a href="/so-mo/{{$somo->name}}-{{$somo->id}}" title="{{$somo->name}}">
                                <strong class="clred">{{$somo->name}}</strong>
                            </a>
                        </div>
                        <div class="in-block num-dream">
                            <strong class="cl-green">{{$somo->number}}</strong>
                        </div>
                    </li>
                    <?php $i++?>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="paging txt-right pad10-5">

            <a class="active" title="Trang 1" href="/so-mo-so-de-lo-de-mien-bac-so-mo-so-de-giai-mong/1">1</a>
            <a class="" title="Trang 2" href="/so-mo-so-de-lo-de-mien-bac-so-mo-so-de-giai-mong/2">2</a>


        </div>

        <div class="txt-center">
            <!-- /117390890/xsme-dreambook -->
            <div id='div-gpt-ad-1508821038536-0'>
                <script>
                    googletag.cmd.push(function () {
                        googletag.display('div-gpt-ad-1508821038536-0');
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box-nd">
            <div class="pad10">
                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">Sổ mơ&nbsp;giải m&atilde; giấc mơ XSMB, giải mộng chi&ecirc;m bao tổng hợp với hơn 2000 giấc mơ c&ugrave;ng
                        với giải m&atilde; những cặp số gi&uacute;p dự đo&aacute;n kết quả xổ số&nbsp;ch&iacute;nh x&aacute;c
                        nhất.</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">
                        <span style="color:#0000ff; font-size:large">
                            <span style="color:#0000ff">
                                <strong>
                                    <a href="/so-mo-so-de" title="Sổ mơ">Sổ mơ</a>&nbsp;</strong>
                            </span>
                        </span>giải m&atilde; những b&iacute; ấn của những giấc mơ từ đ&oacute; t&igrave;m ra &yacute; nghĩa v&agrave;
                        cho người đọc những lời khuy&ecirc;n hữu &iacute;ch nhất.</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">Với tổng hợp hơn 2000 giấc mơ thường thấy nhất hiện nay gi&uacute;p giải đ&aacute;p thắc mắc cho 2000
                        c&acirc;u hỏi về &yacute; nghĩa ngủ mơ c&oacute; điềm b&aacute;o g&igrave;? Ngủ mơ đ&aacute;nh số
                        đề&nbsp;g&igrave; của c&aacute;c d&acirc;n chơi chuy&ecirc;n nghiệp.
                    </span>
                </p>

                <p style="text-align:justify">
                    <strong>
                        <span style="font-family:times new roman,times; font-size:medium">Để c&oacute; thể tra cứu nội dung giấc mơ của m&igrave;nh một c&aacute;ch nhanh ch&oacute;ng, bạn
                            h&atilde;y l&agrave;m theo những bước sau đ&acirc;y:</span>
                    </strong>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">- Nhập nội dung giấc mơ v&agrave;o mục t&igrave;m kiếm, click v&agrave;o
                        <span style="color:#ff0000">
                            <strong>T&Igrave;M KIẾM</strong>
                        </span>, lưu &yacute; nội dung cần được r&uacute;t gọn ngắn nhất gi&uacute;p cho t&igrave;m kiếm dễ d&agrave;ng
                        hơn.</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">VD: Bạn ngủ mơ thấy người y&ecirc;u b&ecirc;n nhau th&igrave; chỉ cần đ&aacute;nh
                        <strong>
                            <span style="color:#ff0000">NGƯỜI Y&Ecirc;U</span>
                        </strong> l&agrave; được.</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">- Sau khi hiện danh s&aacute;ch nội dung li&ecirc;n quan, chọn mục gần với nội dung giấc mơ nhất.</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">VD: Nhập &ldquo;NGƯỜI Y&Ecirc;U&rdquo; sẽ hiện ra</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">1. Y&ecirc;u đương&nbsp; 24, 87, 86</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">2 . y&ecirc;u&nbsp; 75, 70</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">&hellip;.</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">Bạn c&oacute; thể chọn mục 1 hoặc 2 t&ugrave;y theo &yacute; nghĩa m&igrave;nh nhận định.</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">- Xem
                        <span style="font-size:22px">
                            <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac" title="kết quả xổ số miền bắc">
                                <span style="color:#0000FF">
                                    <strong>kết quả xổ số miền bắc</strong>
                                </span>
                            </a>
                        </span>.</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">Tr&ecirc;n đ&acirc;y l&agrave; bảng số mơ liệt k&ecirc; c&aacute;c cặp giấc mơ v&agrave; con số tương
                        ứng. Bạn c&oacute; thể xem chi tiết &yacute; nghĩa bằng c&aacute;ch click từng giấc mơ.</span>
                </p>

                <p style="text-align:justify">
                    <span style="font-family:times new roman,times; font-size:medium">Sổ mơ to&agrave;n tập 2000 giấc mơ thần b&iacute; giải mộng giấc mơ chơi xổ số miền bắc XSMB to&agrave;n
                        tập. Sổ mơ giải đ&aacute;p &yacute; nghĩa b&iacute; ẩn v&agrave; điềm b&aacute;o những giấc mơ, giấc
                        mộng chi&ecirc;m bao để đưa con số đẹp miền Bắc ng&agrave;y h&ocirc;m nay.</span>
                </p>

                <p style="text-align:justify">
                    <em>
                        <span style="color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif; font-size:14px">* Lưu &yacute;: Chỉ d&ugrave;ng c&aacute;c bộ số dự đo&aacute;n để chơi xổ số, l&ocirc; t&ocirc;
                            do nh&agrave; nước ph&aacute;t h&agrave;nh, kh&ocirc;ng chơi l&ocirc; đề v&igrave; đ&oacute;
                            l&agrave; h&agrave;nh vi tr&aacute;i ph&aacute;p luật</span>
                    </em>
                </p>

                <p style="text-align:justify">
                    <span style="color:#ff0000">
                        <strong>
                            <span style="font-family:times new roman,times; font-size:medium">Cuối c&ugrave;ng bạn c&oacute; thể tham khảo th&ecirc;m để lựa chọn cặp số đẹp nhất may mắn trong
                                ng&agrave;y bằng c&aacute;ch tham khảo dự đo&aacute;n tại đ&acirc;y:</span>
                        </strong>
                    </span>
                </p>

                <p style="text-align: center;">
                    <strong>
                        <a href="/du-doan-ket-qua-xo-so-kqxs-c229" title="Dự đoán KQXS">
                            <span style="color:#FF0000">Dự đo&aacute;n KQXS</span>
                        </a>
                    </strong>
                </p>
            </div>
        </div>
    </div>

    <div class="box box-news">
        <h3 class="title-bor">
            <strong>Tiện ích</strong>
        </h3>
        <ul>
            <li>
                <span class="ic"></span>
                <a href="/kqxsmb-ket-qua-xo-so-mien-bac-hom-qua" title="Kết quả xổ số miền Bắc hôm qua">Kết quả xổ số miền Bắc hôm qua</a>
            </li>
            <li>
                <span class="ic"></span>
                <a href="/kqxsmb-xstd-ket-qua-xo-so-mien-bac" title="XSMB hôm nay">XSMB hôm nay</a>
            </li>

            <li>
                <span class="ic"></span>
                <a href="/thong-ke-lo-gan" title="Thống kê lô gan">Thống kê lô gan</a>
            </li>
            <li>
                <span class="ic"></span>
                <a href="/du-doan-ket-qua-xo-so-mien-bac-xsmb-c228" title="Dự đoán XSMB">Dự đoán XSMB</a>
            </li>


        </ul>
    </div>

</div>
@endsection