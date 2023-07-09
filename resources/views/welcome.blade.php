<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <title>Data Mining Kelompok 10</title>
</head>
<body>
    <div class="flex">
        <div class="nav">
            @include('nav')
        </div>

        <div>
            @include('dataset')
            @include('hitmap')
            @include('relasi/edudepres')
            @include('relasi/marriagedepress')
            @include('relasi/ageedu')
            @include('relasi/agemarriage')
            @include('relasi/laborincoming')
        </div>
    </div>
</body>
</html>
