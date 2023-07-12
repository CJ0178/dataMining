<script>

    anychart.onDocumentReady(function () {
        var data4 = [
        { x: "education_level", y: "Age", heat: -0.37 },
        { x: "education_level", y: "education_level", heat: 1 },
        { x: "Age", y: "education_level", heat: -0.37 },
        { x: "Age", y: "Age", heat: 1 },
    ];

    // create the chart and set the data
    chart4 = anychart.heatMap(data4);

    var customColorScale4 = anychart.scales.linearColor();
    customColorScale4.colors(["#96D0BD", "#2EA1A0"]);


    // set the color scale as the color scale of the chart
    chart4.colorScale(customColorScale4);

    // set the container id
    chart4.container("ageeduheatmap");

    chart4.labels().enabled(true)

    // initiate drawing the chart
    chart4.draw();

    chart4.labels()
    .fontColor("#000000") // Set the font color
    .fontSize(16) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart4.xAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(18) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart4.yAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(18) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold


    });
</script>

<style>
    #ageeduheatmap {
        width: 35%;
        height: 90%;
        margin: 0;
        padding: 0;
        justify-content: center;
    }
</style>

<div id="ageedu" class="pt-14">
    <p class="text-4xl font-bold text-center mb-8 text-[#2C7877]">
        Age & Education Level
    </p>
</div>

<div class="flex justify-center h-[450px] gap-48 items-center">
    <div id="ageeduheatmap" class=""></div>

    <div class="w-[45%] h-full flex items-center">
        <canvas id="chartjs_bar_ageedu" class="h-[450px]"></canvas>
    </div>
</div>

<div class=" mt-12 text-2xl px-24 mb-32 text-justify">
    <p class="text-center text-2xl">
        <span class="font-bold text-[#E96832]">Kaum muda</span> memiliki rata-rata education level yang lebih tinggi
    </p>
    <p class="mt-24">
        Pada tahun 2000, sebuah forum di Kenya bernama "Dakar World Education Forum" memiliki tujuan untuk
        <span class="font-bold">memberikan akses dan pendidikan dasar wajib, gratis, dan berkualitas baik untuk anak-anak</span>, terutama anak perempuan, anak-anak dalam keadaan sulit dan mereka yang berasal dari
        etnis minoritas dalam <span class="font-bold">15 tahun kedepan</span>. <br><br>
        “Laporan tersebut mencatat bahwa antara tahun 2000 dan 2012, jumlah anak putus sekolah turun hingga 42%.“ <a href="https://africasciencenews.org/2017/04/07/kenya-elderly-want-government-action-against-depression/" class="underline text-[#5C9998] hover:text-[#2C7877]">(John Kabutha Mugo et al., 2020)</a>
    </p>
    {{-- <a href="https://africasciencenews.org/2017/04/07/kenya-elderly-want-government-action-against-depression/" class="underline text-[#5C9998] hover:text-[#2C7877]">Open Link >></a> --}}
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script>
    var ctx_ageedu = document.getElementById("chartjs_bar_ageedu").getContext('2d');
    var myChart_ageedu = new Chart(ctx_ageedu, {
        type: 'bar',
        data: {
            labels: ["Teenagers (12-25)", "Adults (26-45)", "Elderly (>45)"],
            datasets: [{
                // label: 'Teenagers',
                data: [9.16, 9.23, 6.48],
                backgroundColor: ["#F8D9A0", "#F4C56C", "#C98A16"],
                // borderColor: "rgba(89, 105, 255)", "rgba(255, 64, 123)", "#25d5f2",
                borderWidth: 2
            }]
        },

        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Average Education Level by Age Group',
                    color: "#000000",
                    font: {
                        size: 24,
                    },
                },
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: (value) => value,
                    color: "#000000",
                    font: {
                        size: 20,
                    },
                    labels: {
                        title: {
                            font: {
                                // weight: 'bold',
                                size: 20
                            }
                        },
                    },
                },
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Age Groups',
                        font: {
                            size: 20,
                            weight: 'bold',
                        },
                    },
                    ticks: {
                        font: {
                            size: 18
                        },
                    },
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Average Eduucation Level',
                        font: {
                            size: 20,
                            weight: 'bold',
                        },
                    },
                    ticks: {
                        font: {
                            size: 18
                        },
                        // max: 10,
                        // min: 0,
                        // stepSize: 1,
                        // beginAtZero: true,
                        // padding: 30,
                        // callback: function(value, index, values) {
                        //     return value / 1000 + "k";
                        // }
                    },
                }
            },
        },
        plugins: [ChartDataLabels],
    });
</script>
