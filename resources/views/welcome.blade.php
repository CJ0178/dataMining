<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <title>Data Mining Kelompok 10</title>
</head>
<body>
    <div class="flex">
        <div class="">
            @include('nav')
        </div>

        <div class="pl-[225px] w-full ">
            @include('dataset')
            @include('heatmap')
            @include('relasi/agedepres')
            @include('relasi/edudepres')
            @include('relasi/marriagedepress')
            @include('relasi/ageedu')
            @include('relasi/agemarriage')
            @include('relasi/laborincoming')
        </div>
    </div>
    <script type="text/javascript" src="dataMining/node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>
