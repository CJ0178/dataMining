<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Bar Charts</h5>
        <div class="card-body">
            <canvas id="chartjs_bar"></canvas>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
<script>

    var ctx = document.getElementById("chartjs_bar").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["M", "T", "W", "R", "F", "S", "S"],
            datasets: [{
                label: 'Almonds',
                data: [12, 19, 3, 17, 28, 24, 7],
               backgroundColor: "rgba(89, 105, 255,0.5)",
                        borderColor: "rgba(89, 105, 255,0.7)",
                borderWidth: 2
            }, {
                label: 'Cashew',
                data: [30, 29, 5, 5, 20, 3, 10],
               backgroundColor: "rgba(255, 64, 123,0.5)",
                        borderColor: "rgba(255, 64, 123,0.7)",
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{

                }]
            },
                 legend: {
            display: true,
            position: 'bottom',

            labels: {
                fontColor: '#71748d',
                fontFamily: 'Circular Std Book',
                fontSize: 14,
            }
        },

        scales: {
            xAxes: [{
                ticks: {
                    fontSize: 14,
                    fontFamily: 'Circular Std Book',
                    fontColor: '#71748d',
                }
            }],
            yAxes: [{
                ticks: {
                    fontSize: 14,
                    fontFamily: 'Circular Std Book',
                    fontColor: '#71748d',
                }
            }]
        }
    }


    });

</script>


{{-- <style>
    .group:hover .group-hover\:block {
	    display: block;
    }
</style>

<div class="flex flex-col items-center w-full max-w-screen-md p-6 pb-6 mt-10 bg-white sm:p-8">
    <h2 class="text-xl font-bold">Age - Depressed</h2>
    <span class="text-sm font-semibold text-gray-500">2015</span>
    <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$37,500</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-8 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-6 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-16 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Jan</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$45,000</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-10 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-6 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-20 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Feb</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-10 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-20 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Mar</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$50,000</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-10 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-6 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-24 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Apr</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-10 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-20 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">May</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-24 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Jun</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$60,000</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-16 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-20 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Jul</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-10 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-24 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Aug</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-10 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-32 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Sep</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-12 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow bg-indigo-400 h-28"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Oct</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-8 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-40 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Nov</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$75,000</span>
            <div class="flex items-end w-full">
                <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                <div class="relative flex justify-center flex-grow h-40 bg-indigo-400"></div>
            </div>
            <span class="absolute bottom-0 text-xs font-bold">Dec</span>
        </div>
    </div>
    <div class="flex w-full mt-3">
        <div class="flex items-center ml-auto">
            <span class="block w-4 h-4 bg-indigo-400"></span>
            <span class="ml-1 text-xs font-medium">Existing</span>
        </div>
        <div class="flex items-center ml-4">
            <span class="block w-4  h-4 bg-indigo-300"></span>
            <span class="ml-1 text-xs font-medium">Upgrades</span>
        </div>
        <div class="flex items-center ml-4">
            <span class="block w-4  h-4 bg-indigo-200"></span>
            <span class="ml-1 text-xs font-medium">New</span>
        </div>
    </div>
</div> --}}

{{-- <div class="mx-auto w-3/5 overflow-hidden">
    <canvas
      data-te-chart="bar"
      data-te-dataset-label="Traffic"
      data-te-labels="['Monday', 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' , 'Saturday' , 'Sunday ']"
      data-te-dataset-data="[2112, 2343, 2545, 3423, 2365, 1985, 987]">
    </canvas>
</div>

<script>
    // Initialization for ES Users
    import {
      Chart,
      initTE,
    } from "tw-elements";

    initTE({ Chart });
</script> --}}
