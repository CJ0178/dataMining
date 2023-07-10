<div>
    ini edudepress
</div>

<!-- 1 -->
<div class="overflow-hidden mx-auto w-[90%]">
    <div class="py-3 px-5 bg-gray-50 text-lg font-bold text-center">Average Degree of Depression by Education Level Groups</div>
    <canvas class="p-10" id="chartLine"></canvas>
</div>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>

<!-- Required chartjs-plugin-datalabels -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<!-- Chart line -->
<script>
    const labels = ['','1-8', '9-12', '13-19',''];
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Average",
                backgroundColor: "#035afc",
                borderColor: "#035afc",
                data: [,0.19951338, 0.13990268, 0.14736842,],
            },
        ],
    };

    const configLineChart = {
        type: "line",
        data,
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
                        text: 'Education Level Groups',
                        font: {
                            size: 16,
                            weight: 'bold',
                        },
                    },
                    ticks: {
                        font: {
                            size: 16,
                        },
                    },
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Average Degree of Depression',
                        font: {
                            size: 16,
                            weight: 'bold',
                        },
                    },
                    ticks: {
                        font: {
                            size: 16,
                        },
                    },
                },
            },
        },
        plugins: [ChartDataLabels],
    };

    var chartLine = new Chart(
        document.getElementById("chartLine"),
        configLineChart
    );
</script>


{{-- <!-- 2 -->
<div class="overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Count of Education Levels with Depressed Value 1</div>
    <canvas class="p-10" id="chartLine_agedepress2"></canvas>
  </div>

  <!-- Chart line -->
  <script>
    const labels_line2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11, 12 , 13, 14, 16, 17, 18];
    const data_line2 = {
      labels: labels_line2,
      datasets: [
        {
          label: "My First dataset",
          backgroundColor: "#d10a3c",
          borderColor: "#d10a3c",
          data: [24,1,3,7,11,13,19,28,38,60,4,13,3,9,3,1,1],
        },
        // {
        //   label: "nyoba",
        // //   backgroundColor: "hsl(252, 82.9%, 67.8%)",
        //   borderColor: "hsl(252, 82.9%, 67.8%)",
        // //   data: [0, 10, 5, 2, 20, 30, 45],
        // data: [1, 11, 9, 12, 29, 33, 3],
        // },
      ],
    };

    const configLineChart_line2 = {
      type: "line",
      data: data_line2,
      options: {
        plugins:{
            legend: {
                display: false
            }
        },
        scales: {
            x: {
                display: true,
                title: {
                    display: true,
                    text: 'Education Levels'
                }
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: 'Count'
                }
            }
        }
      },
    };

    var chartLine_line2 = new Chart(
      document.getElementById("chartLine_agedepress2"),
      configLineChart_line2
    );
  </script>

<!-- 3 -->
<div class="overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Count of Depressed vs Non-Depressed Individuals by Education Level</div>
    <canvas class="p-10" id="chartLine_agedepress3"></canvas>
  </div>

  <!-- Chart line -->
  <script>
    const labels_line3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11, 12 , 13, 14, 16, 17, 18, 19];
    const data_line3 = {
      labels: labels_line3,
      datasets: [
        {
            label: "My First dataset",
            backgroundColor: "#d10a3c",
            borderColor: "#d10a3c",
            data: [24,1,3,7,11,13,19,28,38,60,4,13,3,9,3,1,1],
        },
        {
          label: "nyoba",
          backgroundColor: "#035afc",
          borderColor: "#035afc",
        //   data: [0, 10, 5, 2, 20, 30, 45],
          data: [57, 2,	13,	25,	23,	49,	74,	143, 255, 365, 40, 47, 15, 59, 3, 2, 1, 1]
        },
      ],
    };

    const configLineChart_line3 = {
      type: "line",
      data: data_line3,
      options: {
        plugins:{
            legend: {
                display: false
            }
        },
        scales: {
            x: {
                display: true,
                title: {
                    display: true,
                    text: 'Education Levels'
                }
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: 'Count'
                }
            }
        }
      },
    };

    var chartLine_line3 = new Chart(
      document.getElementById("chartLine_agedepress3"),
      configLineChart_line3
    );
  </script> --}}
