<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    {{HTML::style("vendor/bootstrap/css/bootstrap.min.css")}}

    <!-- Theme CSS -->
    {{HTML::style("css/clean-blog.min.css")}}
    <!-- Custom Fonts -->
    {{HTML::style("vendor/font-awesome/css/font-awesome.min.css")}}
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- jQuery -->

{{HTML::script("vendor/jquery/jquery.min.js")}}

<!-- Bootstrap Core JavaScript -->
{{HTML::script("vendor/bootstrap/js/bootstrap.min.js")}}

<!-- Contact Form JavaScript-->
{{HTML::script("js/jqBootstrapValidation.js")}}
{{HTML::script("js/contact_me.js")}}

<!-- Theme JavaScript -->
{{HTML::script("js/clean-blog.min.js")}}