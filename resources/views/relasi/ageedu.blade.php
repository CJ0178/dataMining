<div id="ageedu">
    ini ageedu
</div>

<div class="w-[95%] mx-auto">
    <div class="card">
        <h5 class="card-header font-bold text-lg text-center">Average Education Level by Age Group</h5>
        <div class="card-body">
            <canvas id="chartjs_bar_ageedu"></canvas>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script>
    var ctx_ageedu = document.getElementById("chartjs_bar_ageedu").getContext('2d');
    var myChart_ageedu = new Chart(ctx_ageedu, {
        type: 'bar',
        data: {
            labels: ["Teenagers (12-25)", "Adults (26-45)", "Elderly (>46)"],
            datasets: [{
                label: 'Teenagers',
                data: [9.16, 9.23, 6.48],
                backgroundColor: ["rgba(89, 105, 255)", "rgba(255, 64, 123)", "#25d5f2"],
                // borderColor: "rgba(89, 105, 255)", "rgba(255, 64, 123)", "#25d5f2",
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
                        text: 'Average Eduucation Level',
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
