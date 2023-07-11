<script>
    anychart.onDocumentReady(function () {
        var data4 = [
        { x: "Ville_id", y: "depressed", heat: 0.028 },
        { x: "sex", y: "depressed", heat: 0.0057 },
        { x: "Age", y: "depressed", heat: 0.1 },
        { x: "Married", y: "depressed", heat: -0.064 },
        { x: "Number_children", y: "depressed", heat: 0.0034 },
        { x: "education_level", y: "depressed", heat: -0.097 },
        { x: "total_members", y: "depressed", heat: 0.033 },
        { x: "gained_asset", y: "depressed", heat: -0.0051 },
        { x: "durable_asset", y: "depressed", heat: 0.038 },
        { x: "save_asset", y: "depressed", heat: 0.011 },
        { x: "living_expenses", y: "depressed", heat: -0.024 },
        { x: "other_expenses", y: "depressed", heat: 0.011 },
        { x: "incoming_salary", y: "depressed", heat: -0.0018 },
        { x: "incoming_own_farm", y: "depressed", heat: 0.01 },
        { x: "incoming_business", y: "depressed", heat: -0.029 },
        { x: "incoming_no_business", y: "depressed", heat: -0.026 },
        { x: "incoming_agricultural", y: "depressed", heat: -0.019 },
        { x: "farm_expenses", y: "depressed", heat: -0.0051 },
        { x: "labor_primary", y: "depressed", heat: -0.01 },
        { x: "lasting_investment", y: "depressed", heat: 0.0045 },
        { x: "no_lasting_investmen", y: "depressed", heat: 0.052 },
        { x: "depressed", y: "depressed", heat: 1 },
    ];

    // create the chart and set the data
    chart4 = anychart.heatMap(data4);

    var colorScale3 = anychart.scales.ordinalColor();
    colorScale3.ranges([
        // set color for all points with the heat parameter less than 1200000
        {less: -0.065, color: "#F4C56C"},
        // set color for all points with the heat parameter more than 1200000 but less than 3000000
        {from: -0.065, to: -0.063, color: "#2EA1A0"},
        // set color for all points with the heat parameter more than 3000000
        {greater: -0.063, color: "#F4C56C"}
    ]);


    // set the color scale as the color scale of the chart
    chart4.colorScale(colorScale3);

    // set the container id
    chart4.container("marriageheatmap");

    chart4.labels().enabled(true)

    // initiate drawing the chart
    chart4.draw();

    chart4.labels()
    .fontColor("#000000") // Set the font color
    .fontSize(12) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart4.xAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(13) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart4.yAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(13) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    // Get the x-axis object
    var xAxis4 = chart4.xAxis();

    // Configure the rotation of the x-axis labels
    xAxis4.labels().rotation(330);

    });
</script>

<style>
    #marriageheatmap {
        width: 100%;
        height: 1.3%;
        margin: 0;
        padding: 0;
    }
</style>

<div id="marriagedepress" class="mt-32 pt-6">
    <p class="text-3xl font-bold text-[#2C7877] mb-8 underline">
        Marriage Status & Depressed
    </p>
</div>

<div id="marriageheatmap" class="">
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card">
        <div class="overflow-hidden mx-auto w-[90%]">
            <div class="py-4 bg-gray-50 text-lg font-bold text-center">Average Degree of Depression by Marital Status</div>
        </div>
        <div class="card-body px-80">
            <canvas id="chartjs_bar1"></canvas>
        </div>
    </div>
</div>

<div class=" mt-6 text-xl px-24">
    <p class="text-center">
        Status <span class="font-bold text-[#E96832]">"Non-Married"</span> lebih berpotensi mengalami depresi dibandingkan dengan status "Married". <br>
        Status "Non-Married" meliputi individu yang belum menikah sama sekali dan yang pernah menikah dan kemudian bercerai.
    </p>
    <p class="mt-8">
        Ada sebuah studi menunjukkan bahwa individu yang bercerai/janda lebih mungkin untuk mengalami depresi, dibandingkan dengan mereka yang menikah/belum menikah.
        <a href="https://www.sciencedirect.com/science/article/pii/S0165032722001288" class="underline text-[#5C9998] hover:text-[#2C7877]">(Liang Pan et al., 2021)</a>
    </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
<script>

    var ctx1 = document.getElementById("chartjs_bar1").getContext('2d');
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Married", "Non-Married"],
            datasets: [{
                label: 'Average Degree of Depression',
                data: [0.1540, 0.2107],
                backgroundColor: "#5C9998 ",
                borderColor: "#2C7877",
                borderWidth: 2
            }]
        },

        options: {
            // plugins: {
            //     datalabels: {
            //         anchor: 'end',
            //         align: 'top',
            //         formatter: (value) => value,
            //         color: "#000000",
            //         font: {
            //             size: 14,
            //         },
            //     },
            //     legend: {
            //         display: false,
            //     },
            // },
            // scales: {
            //     yAxes: [{

            //     }]
            // },

            // legend: {
            //     display: true,
            //     position: 'bottom',

            //     labels: {
            //         fontColor: '#71748d',
            //         fontFamily: 'Circular Std Book',
            //         fontSize: 14,
            //     }
            // },

            // scales: {
            //     xAxes: [{
            //         ticks: {
            //             fontSize: 14,
            //             fontFamily: 'Circular Std Book',
            //             fontColor: '#71748d',
            //             text: 'Education Level Groups',
            //         }
            //     }],
            //     yAxes: [{
            //         ticks: {
            //             fontSize: 14,
            //             fontFamily: 'Circular Std Book',
            //             fontColor: '#71748d',
            //         }
            //     }]
            // }
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
                        text: 'Marital Status',
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
    });

</script>

{{-- <!-- pie chart 1 -->
<div class="overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Percentage of Married and Non-Married Individuals (Depressed)</div>
    <canvas class="p-1 ml-40 mr-40" id="chartPie"></canvas>
</div>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>

<!-- Required chartjs-plugin-datalabels -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<!-- Chart pie -->
<script>
    Chart.register(ChartDataLabels);
    const dataPie = {
      labels: ["Married", "Non-Married"],
      datasets: [
        {
          data: [71.5, 28.5],
          backgroundColor: [
            "rgb(133, 105, 241)",
            "rgb(164, 101, 241)",
          ],
          hoverOffset: 4,
        },
      ],
    };

    const configPie = {
      type: "pie",
      data: dataPie,
      options: {
        plugins: {
          tooltip: true,
          legend: true,
          datalabels: {
            formatter: (value, context) => {
              let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
              let percentage = ((value * 100) / total).toFixed(1) + "%";
              return percentage;
            },
            color: "#FFFFFF",
            font: {
              weight: "bold",
            },
          },
        },
      },
    };
    var chartPie = new Chart("chartPie", configPie);
  </script>

<!-- pie chart 2 -->
<div class="overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Percentage of Married and Non-Married Individuals (Non-Depressed)</div>
    <canvas class="p-1 ml-40 mr-40" id="chartPie2"></canvas>
  </div>

  <!-- Chart pie -->
  <script>
    const dataPie2 = {
      labels: ["Married", "Non-Married"],
      datasets: [
        {
          data: [78.6, 21.4],
          backgroundColor: [
            "rgb(133, 105, 241)",
            "rgb(164, 101, 241)",
          ],
          hoverOffset: 4,
        },
      ],
    };

    const configPie2 = {
      type: "pie",
      data: dataPie2,
      options: {
        plugins: {
          tooltip: true,
          legend: true,
          datalabels: {
            formatter: (value, context) => {
              let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
              let percentage = ((value * 100) / total).toFixed(1) + "%";
              return percentage;
            },
            color: "#FFFFFF",
            font: {
              weight: "bold",
            },
          },
        },
      },
    };

    var chartPie2 = new Chart("chartPie2", configPie2);
</script>

<!-- pie chart 3 -->
<div class="overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Distribution of Depressed and Non-Depressed Class (Married Individuals)</div>
    <canvas class="p-1 ml-40 mr-40" id="chartPie3"></canvas>
  </div>

  <!-- Chart pie -->
  <script>
    const dataPie3 = {
      labels: ["Depressed", "Non-Depressed"],
      datasets: [
        {
          data: [15.4, 84.6],
          backgroundColor: [
            "#d10a3c",
            "#117d37",
          ],
          hoverOffset: 4,
        },
      ],
    };

    const configPie3 = {
      type: "pie",
      data: dataPie3,
      options: {
        plugins: {
          tooltip: true,
          legend: true,
          datalabels: {
            formatter: (value, context) => {
              let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
              let percentage = ((value * 100) / total).toFixed(1) + "%";
              return percentage;
            },
            color: "#FFFFFF",
            font: {
              weight: "bold",
            },
          },
        },
      },
    };

    var chartPie2 = new Chart("chartPie3", configPie3);
</script>

<!-- pie chart 4 -->
<div class="overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Distribution of Depressed and Non-Depressed Class (Non-Married Individuals)</div>
    <canvas class="p-1 ml-40 mr-40" id="chartPie4"></canvas>
  </div>

  <!-- Chart pie -->
  <script>
    const dataPie4 = {
        labels: ["Depressed", "Non-Depressed"],
      datasets: [
        {
          data: [21.1, 78.9],
          backgroundColor: [
            "#d10a3c",
            "#117d37",
          ],
          hoverOffset: 4,
        },
      ],
    };

    const configPie4 = {
      type: "pie",
      data: dataPie4,
      options: {
        plugins: {
          tooltip: true,
          legend: true,
          datalabels: {
            formatter: (value, context) => {
              let total = context.dataset.data.reduce((acc, val) => acc + val, 0);
              let percentage = ((value * 100) / total).toFixed(1) + "%";
              return percentage;
            },
            color: "#FFFFFF",
            font: {
              weight: "bold",
            },
          },
        },
      },
    };

    var chartPie4 = new Chart("chartPie4", configPie4);
</script> --}}
