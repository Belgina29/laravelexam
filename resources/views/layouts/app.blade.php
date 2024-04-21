
<!DOCTYPE HTML>
<html lang="fr">

<head>
    <title>@yield('title') - ChefEnsemble</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Stylesheets -->
    <link href="/frontend/css/font-awesome.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet" type="text/css" />
    <!--// Stylesheets -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!--//fonts-->
</head>

<body>
    <h1>ChefEnsemble </h1>
    <h1>@yield('title')</h1>

    <div class="clear-loading spinner">
        <span></span>
    </div>
    <div class="w3ls-login box box--big"></div>

    @yield('content')

    <!-- //form ends here -->
    <!--copyright-->
    <div class="copy-wthree">
        <p>© 2018 Spin Login Form . All Rights Reserved | Design by
            <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
        </p>
    </div>
    <!--//copyright-->
</body>
</html>
