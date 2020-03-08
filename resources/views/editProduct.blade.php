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
<br><br>
    <h1>Formulario de modificación de una marca</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        Nombre:
        <input value="{{old('name', $Product->name)}}" class="form-control" type="text" name="name" class="form-control" require>
        {{-- <div class='invalid-feedback' style='display: block'></div> --}}
        <br>


        Precio:
        <input value="{{old('price', $Product->price)}}" type="text" name="price" class="form-control" require>
        <br>



        Stock:
        <input value="{{old('stock', $Product->stock)}}" type="number" name="stock" class="form-control" require>
        <br>



        Descripción:
        <input value="{{old('description', $Product->description)}}" type="textarea" name="description" class="form-control" require>
        <br>



        Imagen:
        <input class="from-control" type="file" name="image" require>
        <br> <br>


        
        Categoría:
        <select name="category_id" class="form-control">
            <option value="">Seleccione una categoría</option>
            @foreach ($Categories as $Category)

                @if(is_null(old('category_id')))

                    @if($Product->category_id == $Category->id)
                        <option value="{{$Category->id}}" selected>{{$Category->name}}</option>
                    @else
                        <option value="{{$Category->id}}">{{$Category->name}}</option>  
                    @endif

                @else

                    @if(old('category_id') == $Category->id)
                        <option value="{{$Category->id}}" selected>{{$Category->name}}</option>
                    @else
                        <option value="{{$Category->id}}">{{$Category->name}}</option>  
                    @endif

                @endif
            @endforeach
        </select>
        <br>

        Marca:
        <select name="mark_id" class="form-control">
            <option value="">Seleccione una marca</option>
            @foreach ($Marks as $Mark)

                @if(is_null(old('mark_id')))

                    @if($Product->mark_id == $Mark->id)
                        <option value="{{$Mark->id}}" selected>{{$Mark->name}}</option>
                    @else
                        <option value="{{$Mark->id}}">{{$Mark->name}}</option>  
                    @endif

                @else

                    @if(old('mark_id') == $Mark->id)
                        <option value="{{$Mark->id}}" selected>{{$Mark->name}}</option>
                    @else
                        <option value="{{$Mark->id}}">{{$Mark->name}}</option>  
                    @endif
                    
                @endif
            @endforeach
        </select>
        <br>






        <input class="btn btn-success" type="submit" value="Agregar">
        <input class="btn btn-danger" type="button" value="Volver" onclick="location.href='/adminProducts';">
        <br> <br>
    </form>

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