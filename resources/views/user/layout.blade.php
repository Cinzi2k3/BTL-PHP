!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="/asset/CSS/main.css">
    <link rel="stylesheet" href="/asset/CSS/base.css">
    <link rel="stylesheet" href="/asset/CSS/giohang.css">
    <link rel="stylesheet" href="/asset/CSS/reponsive.css">
    <link rel="stylesheet" href="/asset/CSS/checkout.css">
    <link rel="stylesheet" href="/asset/CSS/chitietsp.css">
    <link rel="stylesheet" href="/asset/CSS/login.css">
    <link rel="stylesheet" href="/asset/CSS/categori.css">

    
    <link rel="stylesheet" href="/asset/font/fontawesome-free-6.0.0-web/css/all.min.css">
    <title>Điện máy xanh</title>
</head>
<body>
    <div class="App">
        @include ('/user/header')
        
        @yield ('/user/content')    
        
        @include ('/user/footer')
      
    
    </div>    
    


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>