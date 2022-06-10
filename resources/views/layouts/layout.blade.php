<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
        <!-- CSS for filepond -->
        {{-- <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     --}}
</head>
<body>

    
    <div class="container">
        {{-- product.blade.php --}}
        @yield('layout') 
    </div>

    {{-- <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script>
        const inputElement = document.querySelector('input[id="file"]');
        const pond = FilePond.create( inputElement );
        FilePond.setOptions({
            server: {
                url: '/upload',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        });
    </script>
    @csrf
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}

</body>
</html>