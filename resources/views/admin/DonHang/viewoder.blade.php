@php
    $index = 1;

@endphp
<html>

<head>
    
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        table {
            margin-top: 15px;
            width: 100%;
        }

        body {
            width: 900px;
            margin: 0 auto;
        }

        tr {
            line-height: 27px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            font-size: 16px;
        }

        .ngay {
            font-style: italic;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .ban {
            font-style: italic;
            font-size: 20px;
            margin: 3px 0px;
        }

        .dam {
            font-weight: bold;
        }

        .le {
            margin-bottom: 4px;
            font-size: 20px;
        }

        .doi {
            width: 50%;
            float: left;
        }

        .ky {
            text-align: center;
            margin-top: 20px;
        }

        .ky1 {
            font-style: italic;
            text-align: center;
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <section style="text-align: center;">
        <h1 style="font-size: 40px">Phiếu Mua Hàng</h1>
        <div class="ban">(Bản thể hiện hóa đơn điện tử)</div>
        <div class="ngay">
            <p id="date"></p>
            <script>
                n = new Date();
                y = n.getFullYear();
                m = n.getMonth() + 1;
                d = n.getDate();
                document.getElementById("date").innerHTML = "Ngày " + d + " tháng " + m + " năm " + y;
            </script>
        </div>
    </section>

    <div class="le dam">Tên đơn vị bán hàng: Điện Máy Xanh </div>
    <!-- <div class="le">Mã số thuế: 3269289058</div> -->
    <div class="le">Địa chỉ: Khoái Châu, Dân Tiến, Hưng Yên</div>
    <div class="le doi">Điện thoại: 0901.567.443</div>
    <div class="le doi">Số tài khoản: 19036966878016</div>
    <div class="le dam">Thông tin giao hàng </div>
    <div class="le">Tên khách hàng: {{$dh -> khachhang -> TenKhachHang}}</div>
    <div class="le">Email: {{$dh -> khachhang -> Email}}</div>
    <div class="le">Điện thoại: {{$dh ->khachhang -> SoDienThoai}}</div>
    <div class="le">Địa chỉ: {{$dh -> khachhang -> DiaChi}}</div>
    <div class="le doi">Hình thức thanh toán: Tiền mặt / Chuyển khoản</div>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn Giá</th>
            <th>Thành tiền</th>
        </tr>
        @foreach($ctdh as $item)
            <tr>
                <td>{{$index++}}</td>
                <td>{{$item -> sanpham -> TenSanPham}}</td>
                <td>{{$item -> SoLuong}}</td>
                <td>{{number_format($item -> ThanhTien,3,",")}}đ</td>
                <td>{{number_format($item -> SoLuong * $item -> ThanhTien,3,",")}}đ</td>
            </tr>
        @endforeach
        
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td class="dam">Tổng</td>
            <td class="dam"><label id="tien">{{number_format($dh -> ThanhTien,3,",")}}đ</label></td>
        </tr>
    </table>
    <div class="doi dam ky">Người mua hàng</div>
    <div class="doi dam ky">Người bán hàng</div>
    <div class="doi ky1">(Ký, ghi rõ họ tên)</div>
    <div class="doi ky1">(Ký, ghi rõ họ tên)</div>

    
    
</body>


</html>