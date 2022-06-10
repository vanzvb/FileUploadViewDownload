<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    {{ $data->name }}
    {{ $data->description}}

    <iframe height="400" width="400" src="/assets/{{ $data->file }}"></iframe>
</body>
</html>