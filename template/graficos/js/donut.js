am4core.useTheme(am4themes_animated);

var data = [{
    "country": "Tiempo",
    "litres": 5730
}, {
    "country": "Trafico",
    "litres": 4053
}];


// cointainer to hold both charts
var container = am4core.create("donut", am4core.Container);
container.width = am4core.percent(100);
container.height = am4core.percent(100);
container.layout = "horizontal";

container.events.on("maxsizechanged", function () {
    chart1.zIndex = 0;        
})

var chart1 = container.createChild(am4charts.PieChart);
chart1.hiddenState.properties.opacity = 0; // this makes initial fade in effect

chart1.data = data;
chart1.radius = am4core.percent(70);
chart1.innerRadius = am4core.percent(40);
chart1.zIndex = 1;

var series1 = chart1.series.push(new am4charts.PieSeries());
series1.dataFields.value = "litres";
series1.dataFields.category = "country";
series1.colors.step = 2;

var sliceTemplate1 = series1.slices.template;
sliceTemplate1.cornerRadius = 5;
sliceTemplate1.draggable = false;
sliceTemplate1.inert = false;
sliceTemplate1.propertyFields.fill = "color";
sliceTemplate1.propertyFields.fillOpacity = "opacity";
sliceTemplate1.propertyFields.stroke = "color";
sliceTemplate1.propertyFields.strokeDasharray = "strokeDasharray";
sliceTemplate1.strokeWidth = 1;
sliceTemplate1.strokeOpacity = 1;

var zIndex = 5;

sliceTemplate1.events.on("down", function (event) {
    event.target.toFront();
    // also put chart to front
    var series = event.target.dataItem.component;
    series.chart.zIndex = zIndex++;
})

series1.labels.template.propertyFields.disabled = "disabled";
series1.ticks.template.propertyFields.disabled = "disabled";






function toggleDummySlice(series) {
    var show = true;
    for (var i = 1; i < series.dataItems.length; i++) {
        var dataItem = series.dataItems.getIndex(i);
        if (dataItem.slice.visible && !dataItem.slice.isHiding) {
            show = false;
        }
    }

    var dummySlice = series.dataItems.getIndex(0);
    if (show) {
        dummySlice.show();
    }
    else {
        dummySlice.hide();
    }
}

series2.events.on("datavalidated", function () {

    var dummyDataItem = series2.dataItems.getIndex(0);
    dummyDataItem.show(0);
    dummyDataItem.slice.draggable = false;
    dummyDataItem.slice.tooltipText = undefined;

    for (var i = 1; i < series2.dataItems.length; i++) {
        series2.dataItems.getIndex(i).hide(0);
    }
})

series1.events.on("datavalidated", function () {
    var dummyDataItem = series1.dataItems.getIndex(0);
    dummyDataItem.hide(0);
    dummyDataItem.slice.draggable = false;
    dummyDataItem.slice.tooltipText = undefined;
})
