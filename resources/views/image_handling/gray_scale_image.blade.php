<html lang="en">
<head>
  <title>Laravel - Crop and upload an image with jQuery Croppie plugin using Ajax </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div class="container" style="margin: 50px;">

<h1>Laravel5 Grayscale Image Uploading </h1>


@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif


@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
    <strong>{{ $message }}</strong>
</div>


<div class="row">
	<div class="col-md-4">
		<strong>Grayscale Image:</strong>
		<br/>
		<img src="{{ asset('uploads/'.Session::get('image_name')) }}" width="500px" />
	</div>
</div>
@endif


{!! Form::open(array('route' => 'gray.scale.image','enctype' => 'multipart/form-data')) !!}
	<div class="row">
		<div class="col-md-4">
			<strong>Give a Title:</strong>
			{!! Form::text('title', null,array('class' => 'form-control','placeholder'=>'Give a title')) !!}
		</div>


		<div class="col-md-12">
			<strong>Upload Image:</strong>
			{!! Form::file('imagefile', array('class' => 'image')) !!}
		</div>


		<div class="col-md-12">
			<br/>
			<button type="submit" class="btn btn-success">Upload</button>
		</div>


	</div>
{!! Form::close() !!}


</div>


</body>
</html>