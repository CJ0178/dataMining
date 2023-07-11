<script>

    anychart.onDocumentReady(function () {
        var data6 = [
        { x: "incoming_salary", y: "labor_primary", heat: 0.9 },
        { x: "incoming_own_farm", y: "labor_primary", heat: -0.3 },
        { x: "incoming_business", y: "labor_primary", heat: -0.18 },
        { x: "incoming_no_business", y: "labor_primary", heat: -0.087 },
    ];

    // create the chart and set the data
    chart6 = anychart.heatMap(data6);

    var customColorScale6 = anychart.scales.linearColor();
    customColorScale6.colors(["#C98A16", "#F8D9A0", "#96D0BD", "#5C9998", "#2C7877"]);


    // set the color scale as the color scale of the chart
    chart6.colorScale(customColorScale6);

    // set the container id
    chart6.container("laborheatmap");

    chart6.labels().enabled(true)

    // initiate drawing the chart
    chart6.draw();

    chart6.labels()
    .fontColor("#000000") // Set the font color
    .fontSize(12) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart6.xAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(13) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart6.yAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(13) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    // Get the x-axis object
    // var xAxis6 = chart6.xAxis();

    // // Configure the rotation of the x-axis labels
    // xAxis6.labels().rotation(330);

    });
</script>

<style>
    #laborheatmap {
    width: 50%;
    height: 1%;
    margin: 0;
    padding: 0;
    }
</style>

<div id="laborincoming" class="pt-6">
    <p class="text-4xl font-bold text-center mb-8 text-[#2C7877]">
        Labor Primary & Income Sources
    </p>
</div>

<div class="flex justify-center">
    <div id="laborheatmap" class=""></div>
</div>

<div class="my-8 text-lg px-24">
    <p class="text-center">
        Individu yang menjadi tulang punggung kemungkinan besar bermata pencaharian sebagai <span class="font-bold">karyawan yang menerima gaji</span>.
    </p>
</div>

<div class="flex items-center justify-center gap-24 w-full mt-20">
    <!-- pie chart 1 -->
    <div class="w-[30%]">
        <div class="text-center text-lg bg-gray-50 font-bold">Distribution of Labor Primary 1 by Income Sources</div>
        <canvas class=" mt-8" id="chartPie_labor1"></canvas>
    </div>

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>

    <!-- Required chartjs-plugin-datalabels -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <!-- Chart pie -->
    <script>
        const dataPie_labor1 = {
            labels: ["incoming_no_business", "Multiple Sources", "incoming_salary"],
            datasets: [
                {
                    data: [18.3, 0.7, 81.0],
                    backgroundColor: ["#2C7877", "#5C9998", "rgb(75, 192, 192)"],
                    hoverOffset: 4,
                },
            ],
        };

        const configPie_labor1 = {
            type: "pie",
            data: dataPie_labor1,
            options: {
                plugins: {
                    maintainAspectRatio: false, // Menonaktifkan pengaturan aspek rasio default
                    aspectRatio: 10, // Mengatur aspek rasio sesuai kebutuhan Anda
                    datalabels: {
                        formatter: (value, context) => {
                            let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                            let percentage = ((value * 100) / total).toFixed(1) + "%";
                            return percentage;
                        },
                        color: "#000000",
                        font: {
                            size: 16,
                        },
                    },
                    legend: {
                        position: "bottom", // Atur posisi legend
                        align: "center", // Atur penempatan legend relatif terhadap posisinya (start, center, end)
                        labels: {
                            font: {
                                size: 14, // Ukuran font pada label sumbu x
                                weight: 'bold'
                            },
                            color: "#000000",
                        }
                    },
                    // datalabels: {
                    //     fontSize: 12, // Atur ukuran font di sini
                    //     // Konfigurasi datalabels lainnya
                    // },
                },
            },
        };
        Chart.register(ChartDataLabels);
        var chartPie_labor1 = new Chart("chartPie_labor1", configPie_labor1);
    </script>

    <!-- pie chart 2 -->
    <div class="w-[30%]">
        <div class="font-bold text-lg bg-gray-50 text-center">Distribution of Labor Primary 0 by Income Sources</div>
        <canvas class="mt-8" id="chartPie_labor2"></canvas>
    </div>

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>

    <!-- Required chartjs-plugin-datalabels -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <!-- Chart pie -->
    <script>
        const dataPie_labor2 = {
            labels: ["incoming_own_farm", "Multiple Sources", "incoming_no_business", "incoming_business"],
            datasets: [
            {
                data: [43.1, 0.4, 38.0, 18.5],
                backgroundColor: ["#C98A16", "#724C05", "#FFBB3E", "#F8D9A0", ],
                hoverOffset: 4,
            },
            ],
        };

        const configPie_labor2 = {
            type: "pie",
            data: dataPie_labor2,
            options: {
                plugins: {
                    // title: {
                    //     display: true,
                    //     text: 'Distribution of Labor Primary 0 by Income Sources',
                    //     color: "#000000",
                    //     font: {
                    //         size: 18,
                    //     },
                    // },
                    datalabels: {
                        formatter: (value, context) => {
                        let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                        let percentage = ((value * 100) / total).toFixed(1) + "%";
                        return percentage;
                        },
                        color: "#000000",
                        font: {
                            size: 16,
                        },
                    },
                    legend: {
                        position: "bottom", // Atur posisi legend
                        align: "center", // Atur penempatan legend relatif terhadap posisinya (start, center, end)
                        labels: {
                            font: {
                                size: 14, // Ukuran font pada label sumbu x
                                weight: 'bold'
                            },
                            color: "#000000",
                        }
                    },
                    // datalabels: {
                    //     fontSize: 100, // Atur ukuran font di sini
                    //     // Konfigurasi datalabels lainnya
                    // },
                },
            },
        };
        Chart.register(ChartDataLabels);
        var chartPie_labor2 = new Chart("chartPie_labor2", configPie_labor2);
    </script>

</div>

<div class=" mt-12 text-lg px-24 mb-32 text-justify">
    <p class="text-center">
        <span class="font-bold">Incoming salary</span> merupakan sumber mata pencaharian bagi individu yang merupakan tulang punggung keluarga. <br>
        Walaupun di pendesaan, <span class="font-bold">incoming_own_farm</span> bukan menjadi sumber penghasilan utama.
        {{-- Berdasarkan pie chart Labor Primary 1, <span class="font-bold">incoming salary</span> menjadi sumber mata pencaharian individu yang merupakan tulang punggung. <br>
        Sedangkan berdasarkan pie chart Labor Primary 0, <span class="font-bold">incoming own farm</span> bukan merupakan sumber penghasilan utama. --}}
    </p>
    <p class="mt-24">
        Di tahun 2015, banyak terjadi bencana banjir dan perubahan iklim yang menjadi faktor penyebab kegagalan panen bagi para petani di Kenya.
        <a href="https://meteo.go.ke/resources/downloads/extreme-weather-events-kenya-between-2011-and-2020" class="underline text-[#5C9998] hover:text-[#2C7877]">(Kenya Meteorogical Department, 2021)</a>
        Disamping itu, Kenya juga dterpa bencana kemarau yang mengakibatkan banyak masyarakat mengalami kerugian besar dalam bidang pertanian.
        <a href="https://www.frontiersin.org/articles/10.3389/fclim.2021.766583/full" class="underline text-[#5C9998] hover:text-[#2C7877]">(Libere Nkurunziza et al., 2022)</a>

    </p>
</div>
