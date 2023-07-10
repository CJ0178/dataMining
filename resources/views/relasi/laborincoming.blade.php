<div id="laborincoming">
    ini laborincoming
</div>

<div class="flex items-center w-[100%] justify-center mx-auto" id="laborincoming">
<!-- pie chart 1 -->
<div class="mx-auto">
    <div class="text-center text-lg bg-gray-50 font-bold">Distribution of Labor Primary 1 by Income Sources</div>
    <canvas class="p-1 ml-40 mr-40 w-[25vw]" id="chartPie_labor1"></canvas>
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
          backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(75, 192, 192)"],
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
                    position: "top", // Atur posisi legend
                    align: "start", // Atur penempatan legend relatif terhadap posisinya (start, center, end)
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
<div class="mx-auto">
    <div class="font-bold text-lg bg-gray-50 text-center">Distribution of Labor Primary 0 by Income Sources</div>
    <canvas class="p-1 ml-40 mr-40 w-[25vw]" id="chartPie_labor2"></canvas>
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
          backgroundColor: ["rgb(54, 162, 235)", "#FF0000", "#228B22", "#FFA07A"],
          hoverOffset: 4,
        },
      ],
    };

    const configPie_labor2 = {
        type: "pie",
        data: dataPie_labor2,
        options: {
            plugins: {
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
                    position: "top", // Atur posisi legend
                    align: "start", // Atur penempatan legend relatif terhadap posisinya (start, center, end)
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
