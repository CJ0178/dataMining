<style>
    @keyframes float {
        0% {
          /* box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6); */
          transform: translatey(0px);
        }
        50% {
          /* box-shadow: 0 25px 15px 0px rgba(0,0,0,0.2); */
          transform: translatey(-20px);
        }
        100% {
          /* box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);  */
          transform: translatey(0px);
        }
    }
    .button-awal{
        display: flex;
        /* align-items: center; */
        justify-content: center;
        /* transform: translatey(0px); */
        animation: float 5s ease-in-out infinite;
        border-radius: 10px;
    }
</style>

<div class="header h-screen flex flex-col justify-center">
    <div class="container inline-flex items-center gap-12 justify-center">
        <div class="">
            <h1 class="text-5xl font-bold">Depression in Kenya 2015</h1>
            <p class="text-lg mt-16">Presented By:</p>

            <div class="flex gap-8 mt-4">
                <div class="text-center">
                    <img src="cecil.jpeg" class="w-48 rounded-full" alt="">
                    <p class="font-semibold text-lg text-[#5C9998] mt-4">Cecilia Audrey Herli <br> 2502040461</p>
                </div>
                <div class="text-center">
                    <img src="charlene.jpeg" class="w-48 rounded-full" alt="">
                    <p class="font-semibold text-lg text-[#5C9998] mt-4">Charlene Jovannie <br> 2502040480</p>
                </div>
                <div class="text-center">
                    <img src="ma.jpeg" class="w-48 rounded-full" alt="">
                    <p class="font-semibold text-lg text-[#5C9998] mt-4">Michelle Angela <br> 2502041275</p>
                </div>
            </div>
        </div>
        <img src="team.png" alt="" class="w-[40%]">
    </div>
    <a href="#dataset" class="button-awal">
        <button class="bg-[#5C9998] hover:bg-white hover:border hover:border-2 hover:border-[#5C9998] hover:text-[#5C9998] text-2xl text-white font-bold py-4 px-8 rounded">
            START NOW
          </button>
    </a>
</div>
