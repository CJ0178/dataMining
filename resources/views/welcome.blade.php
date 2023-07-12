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
    <style>
        body::-webkit-scrollbar{
            display: none;
        }
        #btn-back-to-top {
            position: fixed;
            /* display: none; */
        }

        html{
            scroll-behavior: smooth;
        }
    </style>



    <button type="button" onclick="scrollToSection(event, 'target-div')" data-mdb-ripple="true" data-mdb-ripple-color="light" class="z-20 inline-block p-3 bg-[#E96832] text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5" id="btn-back-to-top">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg>
    </button>

    <div class="flex">
        <div class="">
            @include('nav')
        </div>

        <div class="pl-72 w-full " data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
            @include('team')
            @include('dataset')
            <div class="my-48">
                <hr class="border-[#5C9998] border-2">
                <hr class="mt-1 border-[#5C9998] border-1">
            </div>
            @include('heatmap')
            <div id="depress" class="my-48">
                <hr class="border-[#5C9998] border-2">
                <hr class="mt-1 border-[#5C9998] border-1">
            </div>
            @include('relasi/depress')
            @include('relasi/agedepres')
            @include('relasi/edudepres')
            @include('relasi/marriagedepress')
            <div class="my-48">
                <hr class="border-[#5C9998] border-2">
                <hr class="mt-1 border-[#5C9998] border-1">
            </div>
            @include('relasi/ageedu')
            <div id="depress" class="my-48">
                <hr class="border-[#5C9998] border-2">
                <hr class="mt-1 border-[#5C9998] border-1">
            </div>
            @include('relasi/agemarriage')
            <div id="depress" class="my-48">
                <hr class="border-[#5C9998] border-2">
                <hr class="mt-1 border-[#5C9998] border-1">
            </div>
            @include('relasi/laborincoming')
            <div id="depress" class="my-48">
                <hr class="border-[#5C9998] border-2">
                <hr class="mt-1 border-[#5C9998] border-1">
            </div>
            @include('kesimpulan')
        </div>
    </div>
    <script type="text/javascript" src="dataMining/node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>

<script>
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    function scrollToSection(event, sectionId) {
    event.preventDefault(); // Menghentikan aksi default dari tautan

    const targetSection = document.getElementById(sectionId);
    if (targetSection) {
        const offsetTop = targetSection.offsetTop;
        window.scrollTo({
            top: offsetTop,
            behavior: "smooth" // Animasi scroll
        });
    }
}
</script>
