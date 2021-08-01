<!DOCTYPE html>
<html lang="zxx">


<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!--====== Title ======-->
	<title> Oxygéne dz</title>

	<!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="img/png" />
	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<!--====== Flaticon css ======-->
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<!--====== Slick Css ======-->
	<link rel="stylesheet" href="assets/css/slick.min.css" />
	<!--====== Lity Css ======-->
	<link rel="stylesheet" href="assets/css/lity.min.css" />
	<!--====== Main css ======-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--====== Responsive css ======-->
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>

	<div class="container">
		<div class="row">
			<h1 style="margin-top: 25px;">Oxygéne Dz</h1>
			<table style="margin-top: 15px;" class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">wilaya</th>
      <th scope="col">detail</th>
      <th scope="col">phone</th>
      <th scope="col">statut</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($list as $done)

    <tr>
      <th scope="row">1</th>
      <td>{{ $done->name }}</td>
      <td>{{ $done->wilaya }}</td>
      <td>{{ $done->detail }}</td>
      <td>{{ $done->phone }}</td>
      @if( $done->statut == 0 )
      <td><a href="/activate/{{ $done->id }}" class="btn btn-danger">Désactiver</a></td>
      @else 
      <td><a href="/deactivate/{{ $done->id }}" class="btn btn-success">Activer</a></td>
      @endif

    </tr>

    @endforeach

   
  </tbody>
</table>
		</div>
	</div>