<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.luavietours.com/assets/img/common/icon/favicon.ico" type="image/vnd.microsoft.icon">
    <title>Lửa Việt HAU</title>
    <!-- Include Stylesheet -->
    @include ('frontend.components.styles')
    <!-- End Include Stylesheet -->
</head>

<body>
    <!-- Include Header -->
    @include('frontend.components.header')
    <!-- End Include Header -->
    <main>
        @yield ('content')
    </main>
    <!-- Include Footer -->
    @include ('frontend.components.footer')
    <!-- End Include Footer -->

    <!-- Include Javascript -->
    @include ('frontend.components.javascript')
    <!-- End Include Javascript -->
</body>

</html>