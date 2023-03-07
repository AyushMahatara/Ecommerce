<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    @include('admin.layouts.css')
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
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

        label {
            display: inline-block;
            width: 200px;

        }

        .div_design {
            padding: 15px;
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
                    <!-- main-panel ends -->
                    <div class="center">
                        <h1>Product</h1>
                        <form action="">
                            <div class="div_design">
                                <label for="">Product Title :</label>
                                <input class="input_color" type="text" name="title" placeholder="write a title"
                                    required>
                            </div>

                            <div class="div_design">
                                <label for="">Product Description :</label>
                                <input class="input_color" type="text" name="description" placeholder="write a title"
                                    required>
                            </div>

                            <div class="div_design">
                                <label for="">Product Price :</label>
                                <input class="input_color" type="number" name="price" placeholder="write a title"
                                    required>
                            </div>

                            <div class="div_design">
                                <label for="">Product quantity :</label>
                                <input class="input_color" type="number" name="quantity" min="0"
                                    placeholder="write a title" required>
                            </div>



                            <div class="div_design">
                                <label for="">Discount Price :</label>
                                <input class="input_color" type="text" name="dis_price" placeholder="write a title">
                            </div>

                            <div class="div_design">
                                <label for="">Product Categoty :</label>
                                <select class="input_color" name="category" id="" required>
                                    <option value="" selected>Add a cat</option>
                                    <option value="">Shirt</option>
                                </select>
                            </div>
                            <div class="div_design">
                                <label for="">Product Image :</label>
                                <input class="input_color" type="file" name="image" placeholder="write a title"
                                    required>
                            </div>
                            <div class="div_design">
                                <input type="submit" value="Add Product" class="btn btn-primary">
                            </div>
                        </form>
                    </div>

                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.layouts.script')
            <!-- End custom js for this page -->
</body>

</html>