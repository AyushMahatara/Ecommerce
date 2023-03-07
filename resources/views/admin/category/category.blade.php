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

            <div class="main-panel">
                <div class="content-wrapper">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{ session()->get('message') }}

                    </div>


                    @endif
                    <div class="center">
                        <h1>Add Category</h1>

                        <form action="{{ url('/add_category') }}" method="POST">
                            @csrf
                            <input class="input_color" type="text" name="category" placeholder="write name of category">
                            <input type="submit" class="btn btn-primary" name="" id="" value="Add Category">
                        </form>
                    </div>

                    <table class="centertbl">
                        <tr>
                            <td>Name</td>
                            <td>action</td>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->category_name}}</td>
                            <td><a onclick="return confirm('R U sure Bro')"
                                    href="{{ url('delete_category', $data->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                            @endforeach
                    </table>

                </div>
            </div>


            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.layouts.script')
    <!-- End custom js for this page -->
</body>

</html>