<script>

    anychart.onDocumentReady(function () {
        var data3 = [
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
    chart3 = anychart.heatMap(data3);

    var colorScale1 = anychart.scales.ordinalColor();
    colorScale1.ranges([
        // set color for all points with the heat parameter less than 1200000
        {less: 0.09, color: "#F4C56C"},
        // set color for all points with the heat parameter more than 1200000 but less than 3000000
        {from: 0.09, to: 0.11, color: "#2EA1A0"},
        // set color for all points with the heat parameter more than 3000000
        {greater: 0.11, color: "#F4C56C"}
    ]);


    // set the color scale as the color scale of the chart
    chart3.colorScale(colorScale1);

    // set the container id
    chart3.container("agedepres1");

    chart3.labels().enabled(true)

    // initiate drawing the chart
    chart3.draw();

    // Get the x-axis object
    var xAxis3 = chart3.xAxis();

    // Configure the rotation of the x-axis labels
    xAxis3.labels().rotation(330);

    chart3.labels()
    .fontColor("#000000") // Set the font color
    .fontSize(12) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart3.xAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(13) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold

    chart3.yAxis().labels()
    .fontColor("#000000") // Set the font color
    .fontSize(13) // Set the font size
    .fontWeight("bold"); // Set the font weight to bold


    });
</script>

<style>
    #agedepres1 {
    width: 100%;
    height: 1.3%;
    margin: 0;
    padding: 0;
    }
</style>


<div id="age" class="pt-6">
    <p class="text-3xl font-bold text-[#2C7877] mb-8 underline">
        Age & Depressed
    </p>
</div>

<div id="agedepres1" class="">
</div>

<div class="w-[75%] mx-auto mt-10">
    <div class="card">
        <h5 class="card-header font-bold text-2xl text-center">Average Depressed by Age Group</h5>
        <div class="card-body px-32">
            <canvas id="chartjs_bar"></canvas>
        </div>
    </div>
</div>

<div class="mt-6 text-xl px-24">
    <p class="text-center text-2xl">
        Rentang umur yang paling berpotensi menderita depresi adalah <span class="font-bold text-[#E96832]">kaum lansia</span>  (80-90).
    </p>
    <p class="mt-8 text-2xl">
        Kaum lansia di Kenya kebanyakan ditelantarkan oleh anggota keluarganya, yang menyebabkan mereka kesulitan untuk menghidupi dirinya sendiri dikarenakan
        penghasilan yang kurang memadai untuk merawat kesehatan mental mereka. <a href="https://africasciencenews.org/2017/04/07/kenya-elderly-want-government-action-against-depression/" class="underline text-[#5C9998] hover:text-[#2C7877]">(Africa Science News, 2016)</a>
    </p>
    {{-- <a href="https://africasciencenews.org/2017/04/07/kenya-elderly-want-government-action-against-depression/" class="underline text-[#5C9998] hover:text-[#2C7877]">Open Link >></a> --}}
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
                label: 'Depressed',
                data: [0.0909, 0.1731, 0.1254, 0.1527, 0.1866, 0.1789, 0.1948, 0.2542, 0.1591, 0.1500, 0.3684, 0.3571, 0.2143, 0.5714, 1.000],
                backgroundColor: "#5C9998 ",
                borderColor: "#2C7877",
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
