<div>
    ini agemarriage <br>
</div>

<!-- Component -->
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
      },
    };

    var chartLine2 = new Chart(
      document.getElementById("chartLine2"),
      configLineChart2
    );
  </script>

  {{-- <!-- Component -->
<div class="overflow-hidden">
    <div class="py-3 px-5 bg-gray-50">Line chart</div>
    <canvas class="p-10" id="chartLine2"></canvas>
  </div>

  <!-- Required chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>

  <!-- Chart line -->
  <script>
    const data2 = {
      datasets: [
        {
          label: "My First dataset",
          backgroundColor: "hsl(252, 82.9%, 67.8%)",
          borderColor: "hsl(252, 82.9%, 67.8%)",
          data: [
            { x: 0, y: 8 },
            { x: 1, y: 49 },
            { x: 2, y: 32 },
            { x: 3, y: 26 },
            { x: 4, y: 17 },
            { x: 5, y: 9 },
            { x: 6, y: 9 },
            { x: 7, y: 7 },
            { x: 8, y: 4 },
            { x: 9, y: 3 },
            { x: 10, y: 2 },
            { x: 11, y: 2 },
            { x: 12, y: 0 },
            { x: 13, y: 0 },
            { x: 14, y: 0 },
          ],
        },
        {
          label: "nyoba",
          backgroundColor: "hsl(252, 82.9%, 67.8%)",
          borderColor: "hsl(252, 82.9%, 67.8%)",
          data: [
            { x: 0, y: 2 },
            { x: 1, y: 5 },
            { x: 2, y: 3 },
            { x: 3, y: 5 },
            { x: 4, y: 8 },
            { x: 5, y: 8 },
            { x: 6, y: 6 },
            { x: 7, y: 8 },
            { x: 8, y: 3 },
            { x: 9, y: 3 },
            { x: 10, y: 5 },
            { x: 11, y: 3 },
            { x: 12, y: 3 },
            { x: 13, y: 4 },
            { x: 14, y: 1 },
          ],
        },
      ],
    };

    const configLineChart2 = {
      type: "line",
      data: data2,
      options: {
        parsing: {
          xAxisKey: "x",
          yAxisKey: "y",
        },
      },
    };

    var chartLine2 = new Chart(
      document.getElementById("chartLine2"),
      configLineChart2
    );
  </script> --}}
