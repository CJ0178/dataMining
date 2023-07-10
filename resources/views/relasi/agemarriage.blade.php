<div>
    ini agemarriage <br>
</div>

{{-- <!-- Component -->
<div class="overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Count of Depressed Individuals by Age Range and Married Status</div>
    <canvas class="p-10" id="chartLine2"></canvas>
  </div>

  <!-- Required chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>

  <!-- Chart line -->
  <script>
    const labels2 = ["", "20", "" , "30", "", "40", "", "50", "", "60", "", "70", "","80", ""];
    const data2 = {
      labels: labels2,
      datasets: [
        {
          label: "Married",
          backgroundColor: "#035afc",
          borderColor: "#035afc",
          data: [8, 49, 32, 26, 17, 9, 9, 7, 4, 3, 2, 2, 0, 0, 0],
        },
        {
          label: "Non-Married",
          backgroundColor: "#e8970c",
          borderColor: "#e8970c",
          data: [2, 5, 3, 5, 8, 8, 6, 8, 3, 3, 5, 3, 3, 4, 1],
        },
      ],
    };

    // data2.datasets[0].data = [0, 10, 20, 30, 40, 50];

    const configLineChart2 = {
      type: "line",
      data: data2,
      options: {
        scales: {
            x: {
                display: true,
                title: {
                    display: true,
                    text: 'Age Range'
                }
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: 'Count of Depressed Individuals'
                }
            }
        }
        plugins: {
            datalabels: {
                formatter: (value, context) => {
                    let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                    let percentage = ((value * 100) / total).toFixed(1) + "%";
                    return percentage;
                },
                color: "#000000",
            },
        },
      },
    };

    var chartLine2 = new Chart(
      document.getElementById("chartLine2"),
      configLineChart2
    );
  </script> --}}

<!-- Component -->
<div class="overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Count of Depressed Individuals by Age Range and Married Status</div>
    <canvas class="p-10" id="chartLine2"></canvas>
</div>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>

<!-- Chart line -->
<script>
    const labels2 = ["", "20", "", "30", "", "40", "", "50", "", "60", "", "70", "", "80", ""];
    const data2 = {
        labels: labels2,
        datasets: [
            {
                label: "Married",
                backgroundColor: "#035afc",
                borderColor: "#035afc",
                data: [8, 49, 32, 26, 17, 9, 9, 7, 4, 3, 2, 2, 0, 0, 0],
            },
            {
                label: "Non-Married",
                backgroundColor: "#e8970c",
                borderColor: "#e8970c",
                data: [2, 5, 3, 5, 8, 8, 6, 8, 3, 3, 5, 3, 3, 4, 1],
            },
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
                        text: 'Age Range',
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
                        text: 'Count of Depressed Individuals',
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
                    labels: {
                        font: {
                            size: 16, // Ukuran font pada legend
                            weight: 'bold'
                        },
                    },
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
