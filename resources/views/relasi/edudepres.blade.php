<script>
    anychart.onDocumentReady(function () {
        var data2 = [
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
    chart2 = anychart.heatMap(data2);

    var customColorScale2 = anychart.scales.linearColor();
    customColorScale2.colors(["#C98A16", "#F8D9A0", "#96D0BD", "#5C9998", "#2C7877"]);


    // set the color scale as the color scale of the chart
    chart2.colorScale(customColorScale2);

    // set the container id
    chart2.container("eduheatmap");

    chart2.labels().enabled(true)

    // initiate drawing the chart
    chart2.draw();

    // Get the x-axis object
    var xAxis2 = chart2.xAxis();

    // Configure the rotation of the x-axis labels
    xAxis2.labels().rotation(330);

    chart2.labels()
    .fontColor("#000000") // Set the font color
    .fontSize(12) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart2.xAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(13) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart2.yAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(13) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold


    });
</script>

<style>
    #eduheatmap {
        width: 100%;
        height: 1.3%;
        margin: 0;
        padding: 0;
    }
</style>

<div id="navedudepres" class="mt-32 pt-6">
    <p class="text-3xl font-bold text-[#2C7877] mb-8 underline">
        Education Level & Depressed
    </p>
</div>

<div id="eduheatmap" class="">
</div>

<!-- 1 -->
<div class="overflow-hidden mt-4 mx-auto w-[70%]" id="edudepres">
    <div class="py-3 px-5 text-xl font-bold text-center">Average Degree of Depression by Education Level Groups</div>
    <canvas class="m-10 " id="chartLine"></canvas>
</div>

<div class=" mt-2 text-md px-24">

    <ul class="list-disc text-gray-500">
        <li>Education level 1-8 (primary education) Kenya Ceriticate of Primary Education (KCPE).</li>
        <li>Education level 9-12 (secondary education) Kenya Certificate of Secondary Education (KCSE).</li>
        <li>Education level 12-19 (university education) Bachelor (undergraduate).</li>
    </ul>
    <a href="https://www.knqa.go.ke/wp-content/uploads/2018/10/education-system-kenya.pdf" class="underline text-[#5C9998] hover:text-[#2C7877]">Open Link >></a>

    <p class="text-center text-lg mt-4">
        Berdasarkan grafik di atas, individu dengan <span class="font-bold">education level yang rendah</span> lebih berpotensi untuk menderita depresi. <br>
    </p>
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
                        size: 12,
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
