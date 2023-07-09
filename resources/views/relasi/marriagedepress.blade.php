<div>
    ini marriagedepress
</div>

<!-- pie chart 1 -->
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
</script>
