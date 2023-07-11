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
    chart2.container("agedepres");

    chart2.labels().enabled(true)

    // initiate drawing the chart
    chart2.draw();

    });
</script>

<style>
    #agedepres {
    width: 100%;
    height: 1%;
    margin: 0;
    padding: 0;
    }
</style>

{{-- <div class="py-32 pb-64"> --}}
    <div class="pt-32">
        <p class="text-4xl font-bold text-center mb-8 text-[#2C7877]">
            Influential Attribute for "Depressed"
        </p>
    </div>

    <div id="agedepres" class="">
    </div>

    <div class="text-center mt-12 text-lg pb-72">
        <p>Dari korelasi pada atribut "Depressed", korelasi yang terbesar (mendekati angka 1) adalah korelasi dengan atribut "<span class="font-bold">Age</span>". <br>
        Korelasi yang terkecil (menjauhi angka 0 secara negatif) adalah korelasi dengan atribut "<span class="font-bold">Education_level</span>" dan "<span class="font-bold">Married</span>"</p>
    </div>
{{-- </div> --}}