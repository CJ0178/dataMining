<div class="w-[95%] mx-auto" id="agedepres">
    <div class="card">
        <h5 class="card-header font-bold text-lg text-center">Average Depressed by Age Group</h5>
        <div class="card-body">
            <canvas id="chartjs_bar"></canvas>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script>
    var ctx = document.getElementById("chartjs_bar").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["[15, 20]", "[20, 25]", "[25, 30]", "[30, 35]", "[35, 40]", "[40, 45]", "[45, 50]", "[50, 55]", "[55, 60]", "[60-65]", "[65-70]", "[70-75]", "[75, 80]", "[80, 85]", "[85, 90]"],
            datasets: [{
                label: 'Almonds',
                data: [0.0909, 0.1731, 0.1254, 0.1527, 0.1866, 0.1789, 0.1948, 0.2542, 0.1591, 0.1500, 0.3684, 0.3571, 0.2143, 0.5714, 1.000],
                backgroundColor: "rgba(89, 105, 255,0.5)",
                borderColor: "rgba(89, 105, 255,0.7)",
                borderWidth: 2
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: (value) => value,
                    color: "#000000",
                    font: {
                        size: 14,
                    },
                    labels: {
                        title: {
                            font: {
                                // weight: 'bold',
                                size: 16
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
                            size: 16,
                            weight: 'bold',
                        },
                    },
                    ticks: {
                        font: {
                            size: 16
                        },
                    },
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Average Depressed',
                        font: {
                            size: 16,
                            weight: 'bold',
                        },
                    },
                    ticks: {
                        font: {
                            size: 16
                        },
                    },
                }
            },
        },
        plugins: [ChartDataLabels],
    });
</script>
