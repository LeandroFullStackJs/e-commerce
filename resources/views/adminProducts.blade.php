

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('front_assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('front_assets/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('front_assets/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('front_assets/css/custom.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<body>

 @include('layouts.header')
 
    <h1>Panel de administración de productos</h1>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver a principal</a>

    <table class="table table-stripped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Categoría</th>
                <th colspan="2">
                <a href="addProduct" class="btn btn-dark">
                    agregar
                </a>
                </th>
            </tr>
        </thead>
    <tbody>
        
        @foreach($Products as $Product)

            <tr>
                <td>{{ $Product->id }}</td>
                <td>{{ $Product->name }}</td>
                <td>${{ $Product->price }}</td>
                <td>{{ $Product->stock }}</td>
                <td>{{ $Product->description }}</td>
                <td><img class="img-fluid img-thumbnail main-image" src="product_img/{{$Product->image}}" alt=""></td>
                <td>{{ $Product->mark->name }}</td>
                <td>{{ $Product->category->name }}</td>
                <td><a href="editProduct/{{ $Product->id }}" class="btn btn-outline-secondary">modificar</a></td>
                <td><a href="deleteProduct/{{ $Product->id }}" class="btn btn-outline-secondary">eliminar</a></td>
            </tr>
        @endforeach



    </tbody>
    </table>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver a principal</a>

    @include('layouts.footer')

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="{{asset('front_assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('front_assets/js/popper.min.js')}}"></script>
<script src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('front_assets/js/jquery.superslides.min.js')}}"></script>
<script src="{{asset('front_assets/js/bootstrap-select.js')}}"></script>
<script src="{{asset('front_assets/js/inewsticker.js')}}"></script>
<script src="{{asset('front_assets/js/bootsnav.js.')}}"></script>
<script src="{{asset('front_assets/js/images-loded.min.js')}}"></script>
<script src="{{asset('front_assets/js/isotope.min.js')}}"></script>
<script src="{{asset('front_assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front_assets/js/baguetteBox.min.js')}}"></script>
<script src="{{asset('front_assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('front_assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('front_assets/js/custom.js')}}"></script>
</body>
</html>