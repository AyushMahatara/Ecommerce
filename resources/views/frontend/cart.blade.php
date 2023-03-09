<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('frontend.header')
        <!-- end header section -->
    </div>
    <!-- why section -->
    <table>
        <tr>
            <td class="th_deg">Title</td>
            <td class="th_deg">Description</td>
            <td class="th_deg">Price</td>
            <td class="th_deg">Quantity</td>
            <td class="th_deg">Catagory</td>
            <td class="th_deg">Image</td>
        </tr>
        <?php $tp = 0; ?>

        @foreach ($cart as $cart)

        <tr>
            <td>{{ $cart->product_title }}</td>
            <td>{{ $cart->description }}</td>
            <td>{{ $cart->price }}</td>
            <td>{{ $cart->quantity }}</td>
            <td>{{ $cart->category }}</td>

            {{-- <td><img src="/product/{{ $cart->image }}" alt=""></td> --}}
            <td>
                <a class="btn btn-danger" href="{{ url('remove_cart',$cart->id) }}">Delete</a>
            </td>
        </tr>
        <?php $tp+= $cart->price ?>
        @endforeach
    </table>
    <div>
        <h1>Total Price: {{ $tp }}</h1>
    </div>

    <div>
        <h1>Proceed to payment</h1>
        <a href="{{ url('cash_pay') }}">Pay on Delivery</a>
        <a href="{{ url('online_pay') }}">Online Payment</a>
    </div>
    <!-- footer start -->
    @include('frontend.footer')
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>