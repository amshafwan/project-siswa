<!DOCTYPE html>
<html>
<head>
    <title>siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @include('layouts.app.header')
    <div class="container">
    @yield('content')

    
    
    @include('layouts.app.footer')
    </div>

</body>
</html>
