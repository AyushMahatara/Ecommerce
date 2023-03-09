<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.layouts.css')
    <Style>
        .center {
            text-align: center;
            padding-top: 40px;
        }

        .input_color {
            color: black;
        }

        .centertbl {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
        }

        .div_design {
            padding: 15px;
        }

        .th_deg {
            padding: 30px;
        }
    </Style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.layouts.navigation')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{ session()->get('message') }}
                    </div>

                    @endif
                    <div class="center">Product Details</div>

                    <form action="" method="get">
                        <table class="centertbl">
                            <tr>
                                <td class="th_deg">Title</td>
                                <td class="th_deg">Description</td>
                                <td class="th_deg">Price</td>
                                <td class="th_deg">Quantity</td>
                                <td class="th_deg">Discount</td>
                                <td class="th_deg">Catagory</td>
                                <td class="th_deg">Image</td>
                                <td class="th_deg">Action</td>
                            </tr>
                            @foreach ($products as $product)


                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->discount_price }}</td>
                                <td>{{ $product->category }}</td>
                                <td><img src="/product/{{$product->image }}" alt="" width="200px" height="100px"></td>
                                <td><a onclick="return confirm('U Sure')"
                                        href="{{ url('delete_product', $product->id) }}"
                                        class="btn btn-success">Delete</a>
                                </td>
                                <td><a href="{{ url('edit_product', $product->id) }}" class="btn btn-danger">Edit</a>
                                </td>


                            </tr>
                            @endforeach
                        </table>
                    </form>

                </div>
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.layouts.script')
            <!-- End custom js for this page -->
</body>

</html>