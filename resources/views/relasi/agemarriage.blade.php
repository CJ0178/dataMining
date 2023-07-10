<div id="agemarriage">
    ini agemarriage <br>
</div>

<!-- Component -->
<div class="overflow-hidden w-[95%] mx-auto" id="agemarried">
    <div class="py-3 px-5 bg-gray-50 text-center text-lg font-bold">Average Married by Age Group</div>
    <canvas class="p-10" id="chartLine2"></canvas>
</div>

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
                backgroundColor: "#e8970c",
                borderColor: "#e8970c",
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
                    },
                }
            },
            plugins: {
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
                    // labels: {
                    //     font: {
                    //         size: 16, // Ukuran font pada legend
                    //         weight: 'bold'
                    //     },
                    // },
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
