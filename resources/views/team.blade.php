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

<div class="header  my-64">
    <div class="container inline-flex items-center justify-center">
        <div>
            <h1 class="text-5xl text-center mr-5 font-bold">Depression In Kenya 2015</h1>
            <p class="text-lg mt-5">Presented By: <br>
                - Cecilia Audrey Herli <br>
                - Charlene Jovannie <br>
                - Michelle Angela
            </p>
        </div>
        <img src="image-removebg-preview (6).png" alt="" class="tester">
    </div>
    <div class="button-awal">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            START NOW
          </button>
    </div>
</div>
