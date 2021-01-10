<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Tabela Piloto</title>
		<script type="text/javascript" src="{{ asset( 'js/jquery-3.4.1.min.js' ) }}"></script>
		<script type="text/javascript" src="{{ asset( 'js/semantic.min.js' ) }}"></script>
		<script type="text/javascript" src="{{ asset( 'js/jquery.dataTables.min.js' ) }}"></script>
		<link rel="stylesheet" type="text/css" href="{{ asset( 'css/jquery.dataTables.min.css' ) }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset( 'css/semantic.min.css' ) }}"/>
		<style>
			tfoot input {
				width: 100%;
				padding: 3px;
				box-sizing: border-box;
			}
		</style>
	</head>
	<body>
		<div class="pusher">
			<section class="ui container containerPrincipal segment" id="containerToInformations">
				@yield('content')
			</section>
		</div>
    </body>
</html>
