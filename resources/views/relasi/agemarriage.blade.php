<script>

    anychart.onDocumentReady(function () {
        var data5 = [
        { x: "Married", y: "Age", heat: -0.39 },
        { x: "Age", y: "Married", heat: -0.39 },
        { x: "Married", y: "Married", heat: 1 },
        { x: "Age", y: "Age", heat: 1 },
    ];

    // create the chart and set the data
    chart5 = anychart.heatMap(data5);

    var customColorScale5 = anychart.scales.linearColor();
    customColorScale5.colors(["#F4C56C", "#C98A16"]);


    // set the color scale as the color scale of the chart
    chart5.colorScale(customColorScale5);

    // set the container id
    chart5.container("agemarriedheatmap");

    chart5.labels().enabled(true)

    // initiate drawing the chart
    chart5.draw();

    });
</script>

<style>
    #agemarriedheatmap {
        width: 35%;
        height: 90%;
        margin: 0;
        padding: 0;
        justify-content: center;
    }
</style>

<div id="agemarriage" class="pt-6 pb-8">
    <p class="text-4xl font-bold text-center mb-8 text-[#2C7877]">
        Age & Marriage Status
    </p>
</div>

<div class="flex justify-center h-[450px] gap-12 px-12 items-center">
    <div id="agemarriedheatmap" class=""></div>

    <div class="overflow-hidden w-[95%] mx-auto" id="agemarried">
        <canvas class="p-10" id="chartLine2"></canvas>
    </div>
</div>

<div class="mt-12 text-xl px-24 mb-32 text-justify">
    <p class="text-center">
        <span class="font-bold text-[#E96832]">Rentang umur 15-30</span> memiliki rata-rata status perkawinan yang <span class="font-bold text-[#E96832]">tinggi</span> dibandingkan dengan rentang umur yang lebih tua.
    </p>
    <p class="mt-12">
        Ada beberapa faktor yang menyebabkan banyaknya pernikahan pada usia muda di Kenya: <a class="underline text-[#5C9998] hover:text-[#2C7877]" href="https://www.girlsnotbrides.org/learning-resources/child-marriage-atlas/regions-and-countries/kenya/">(Girls Not Brides)</a>
    </p>
    <ul class="list-disc pl-12">
        <li>Adanya <span class="font-bold">ketidaksetaraan gender</span> (perempuan dianggap lebih rendah daripada laki-laki).</li>
        <li>Pernikahan muda menjadi <span class="font-bold">solusi</span> untuk mengatasi kemiskinan.</li>
        <li><span class="font-bold">Menikahkan</span> anak perempuan yang dropout dari sekolah</li>
        <li>Tradisi <span class="font-bold">tidak etis</span> dimana menikahkan paksa anak perempuan dengan kerabat di usia muda (8-12 tahun)</li>
        <li>Hukum yang <span class="font-bold">tidak cukup kuat</span> dalam mengatur pernikahan anak</li>
        <li>Pernikahan muda sudah menjadi hal yang <span class="font-bold">normal</span> bagi masyarakat sosial di Kenya</li>
    </ul>
    {{-- <a href="https://www.girlsnotbrides.org/learning-resources/child-marriage-atlas/regions-and-countries/kenya/" class="underline text-[#5C9998] hover:text-[#2C7877]">Open Link >></a> --}}
</div>

<!-- Component -->


<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>

<!-- Chart line -->
<script>
    const labels2 = ["[15, 20]", "[20, 25]", "[25, 30]", "[30, 35]", "[35, 40]", "[40, 45]", "[45, 50]", "[50, 55]", "[55, 60]", "[60, 65]", "[65, 70]", "[70, 75]", "[75, 80]", "[80, 85]", "[85, 90]"];
    const data2 = {
        labels: labels2,
        datasets: [
            {
                // label: "Non-Married",
                backgroundColor: "#5C9998",
                borderColor: "#5C9998",
                data: [0.936, 0.920, 0.892, 0.778, 0.672, 0.632, 0.636, 0.610, 0.500, 0.525, 0.421, 0.286, 0.286, 0.000, 0.000],
            },
            // {
            //     label: "Married",
            //     backgroundColor: "#035afc",
            //     borderColor: "#035afc",
            //     data: [103, 287, 249, 158, 90, 60, 49, 36, 22, 21, 8, 4, 4, 0, 0],
            // },
        ],
    };

    const configLineChart2 = {
        type: "line",
        data: data2,
        options: {
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Age Groups',
                        font: {
                            size: 16, // Ukuran font pada sumbu x
                            weight: 'bold',
                        },
                    },
                    ticks: {
                        font: {
                            size: 16 // Ukuran font pada label sumbu x
                        },
                        color: "#000000",
                    },
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Average Married',
                        font: {
                            size: 16, // Ukuran font pada sumbu x
                            weight: 'bold',
                        },
                    },
                    ticks: {
                        font: {
                            size: 16 // Ukuran font pada label sumbu x
                        },
                        color: "#000000",
                    },
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Average Marriage by Age Group',
                    color: "#000000",
                    font: {
                        size: 18,
                    },
                },
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: (value) => value, // Menampilkan nilai data pada setiap titik
                    color: "#000000",
                    font: {
                        // weight: 'bold',
                        size: 14,
                    },
                },
                legend: {
                    display: false,
                },
            },
        },
    };
    Chart.register(ChartDataLabels);
    var chartLine2 = new Chart(
        document.getElementById("chartLine2"),
        configLineChart2
    );
</script>
