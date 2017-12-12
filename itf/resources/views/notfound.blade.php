<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Game Search</title>

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Styles -->
    <style>
		.search-form .form-group {
		float: right !important;
		transition: all 0.35s, border-radius 0s;
		width: 32px;
		height: 32px;
		background-color: #fff;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
		border-radius: 25px;
		border: 1px solid #ccc;
		}
		.search-form .form-group input.form-control {
		padding-right: 20px;
		border: 0 none;
		background: transparent;
		box-shadow: none;
		display:block;
		}
		.search-form .form-group input.form-control::-webkit-input-placeholder {
		display: none;
		}
		.search-form .form-group input.form-control:-moz-placeholder {
		/* Firefox 18- */
		display: none;
		}
		.search-form .form-group input.form-control::-moz-placeholder {
		/* Firefox 19+ */
		display: none;
		}
		.search-form .form-group input.form-control:-ms-input-placeholder {
		display: none;
		}
		.search-form .form-group:hover,
		.search-form .form-group.hover {
		width: 100%;
		border-radius: 25px 25px 25px 25px;
		}
		.search-form .form-group span.form-control-feedback {
		position: absolute;
		top: -1px;
		right: -2px;
		z-index: 2;
		display: block;
		width: 34px;
		height: 34px;
		line-height: 34px;
		text-align: center;
		color: #424344;
		left: initial;
		font-size: 14px;
		}
		body{text-align: center}
    </style>
    </head>
    <body>
        @include('components.nav')

        <div class="container">
            <div class="title m-b-md">
                <img src="{{asset( 'img/pic/not-found.png' )}}" alt="" style="max-width:100%;height:auto;">
            <h3>NOT FOUND</h3>
            </div>
        </div>

        </div>
    </body>
</html>
