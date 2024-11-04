<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng Thành Công</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4CAF50;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }

        /* Định dạng hình ảnh */
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Cảm ơn bạn đã đặt hàng,
            @if ($khachhang)
            {{ $khachhang->TenKhachHang }} <!-- Tên khách hàng cũ -->
            @elseif ($kh)
            {{ $kh->TenKhachHang }} <!-- Tên khách hàng mới -->
            @endif
            !
        </h1>
        <p>Đơn hàng của bạn đã được đặt thành công với mã đơn hàng: <strong>{{ $dh->MaDonHang }}</strong></p>
        <p>Ngày đặt hàng: <strong>{{ $dh->created_at->format('d/m/Y H:i:s') }}</strong></p>

        <h2>Thông tin đơn hàng:</h2>
        <table>
            <thead>
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Thành Tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dh->ChiTietDonHang as $item)
                <tr>
                    <td>{{ $item->sanpham->TenSanPham }}</td>
                    <td>{{ $item->SoLuong }}</td>
                    <td>{{ number_format($item->sanpham->Gia ) }} VNĐ</td>
                    <td>{{ number_format($dh->ThanhTien, 0, ',', '.') }} VNĐ</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p><strong>Tổng tiền phải thanh toán : {{ number_format($dh->ThanhTien, 0, ',', '.') }} VNĐ</strong></p>
        <div class="footer">
            <p>Cảm ơn bạn đã mua sắm tại cửa hàng của chúng tôi!</p>
        </div>
    </div>
</body>

</html>