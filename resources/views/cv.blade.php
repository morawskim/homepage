<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Marcin Morawski - Programista PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h2,h3 {
            border-bottom: 1px solid #ccc;
            padding-bottom: .25rem;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142207583-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-142207583-1');
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            {!! $content !!}
        </div>
    </div>
    <footer class="text-center">&copy; Marcin Morawski {{ date('Y') }}</footer>
</div>
</body>
</html>
