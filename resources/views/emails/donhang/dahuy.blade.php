<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng của bạn đã được hủy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: red;
            font-size: 24px;
            text-align: center;
        }
        p {
            font-size: 18px;
            line-height: 1.5;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
        }
        .status {
            font-weight: bold;
            font-size: 20px;
            color: #e74c3c; /* Màu đỏ cho trạng thái */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông báo trạng thái đơn hàng</h1>
        <p>Chào <strong>{{ $kh->TenKhachHang }}</strong>,</p>
        <h2>Đơn hàng của bạn đã được hủy</h2>

        <h2>Thông tin đơn hàng:</h2>
        <table>
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Gía</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dh->chiTietDonHang as $item)
                    <tr>
                        <td>{{ $item->sanpham->TenSanPham }}</td>
                        <td>{{ number_format($item ->sanpham-> Gia, 0, ',', '.') }} VNĐ</td>
                        <td>{{ $item->SoLuong }}</td>
                        <td>{{ number_format($item->ThanhTien, 0, ',', '.') }} VNĐ</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Theo dõi shop để nhận những voucher ưu đãi nhé!</h2>
        <p>Cảm ơn bạn đã mua hàng!</p>
    </div>
</body>
</html>
