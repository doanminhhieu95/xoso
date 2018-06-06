@extends('master') @section('content')
<div class="col-l">
    <div class="box">
        <h3 class="title-bor">
            <strong>Ý kiến - phản ánh</strong>
        </h3>
        <div class="box box-html">
            <div class=" pad10 mag10 box-note">
                Mọi ý kiến đóng góp về hệ thống Xoso.me hay các yêu cầu bổ sung tính năng mới xin vui lòng comment tại đây. BQT rất mong
                nhận được nhiều ý kiến đóng góp, phản hồi từ các bạn để hệ thống ngày càng được cải thiện tốt hơn.
            </div>
        </div>
        <div class="fb-comments" data-href="http://thegioikimcuong.online" data-width="557" data-numposts="5"></div>
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </div>
</div>
@endsection