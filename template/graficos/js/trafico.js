am4core.useTheme(am4themes_animated);

var chart = am4core.create("traficochart", am4charts.RadarChart);


chart.data = [
  {
    category: "12",
    value1: 8,
    value2: 2,
    value3: 4,
		value4: 3,
		value5: 3,
		value6: 3,
		value7: 3,
		value8: 3,
		value9: 3,
		value10: 3,
		value11: 3,
		value12: 3
  },
  {
    category: "1",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
  },
  {
    category: "2",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
  },
  {
    category: "3",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
  },
  {
    category: "4",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
  },
  {
    category: "5",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
  },
  {
    category: "6",
    value1: 9,
    value2: 14,
    value3: 6,
    value4: 2
  },
  {
    category: "7",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
	},
	{
    category: "8",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
	},
	{
    category: "9",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
	},
	{
    category: "10",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
	},
	{
    category: "11",
    value1: 11,
    value2: 4,
    value3: 2,
		value4: 4,
		value5: 8,
		value6: 11,
		value7: 6,
		value8: 7,
		value9: 1,
		value10: 3,
		value11: 15,
		value12: 9
  }
];


var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";
categoryAxis.renderer.labels.template.location = 0.5;
categoryAxis.renderer.tooltipLocation = 0.5;
categoryAxis.renderer.grid.template.strokeOpacity = 0.1;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.tooltip.disabled = true;
valueAxis.renderer.grid.template.strokeOpacity = 0.05;
valueAxis.min = 0;

var series1 = chart.series.push(new am4charts.RadarColumnSeries());
series1.columns.template.width = am4core.percent(80);
series1.columns.template.tooltipText = "{name}: {valueY.value}";
series1.name = "Enero";
series1.dataFields.categoryX = "category";
series1.dataFields.valueY = "value2";
series1.stacked = true;
series1.cursorHoverEnabled = false;

var series2 = chart.series.push(new am4charts.RadarColumnSeries());
series2.columns.template.width = am4core.percent(80);
series2.columns.template.tooltipText = "{name}: {valueY.value}";
series2.name = "Febrero";
series2.dataFields.categoryX = "category";
series2.dataFields.valueY = "value2";
series2.stacked = true;
series2.cursorHoverEnabled = false;

var series3 = chart.series.push(new am4charts.RadarColumnSeries());
series3.columns.template.width = am4core.percent(80);
series3.columns.template.tooltipText = "{name}: {valueY.value}";
series3.name = "Marzo";
series3.dataFields.categoryX = "category";
series3.dataFields.valueY = "value3";
series3.stacked = true;
series3.cursorHoverEnabled = false;

var series4 = chart.series.push(new am4charts.RadarColumnSeries());
series4.columns.template.width = am4core.percent(80);
series4.columns.template.tooltipText = "{name}: {valueY.value}";
series4.name = "Abril";
series4.dataFields.categoryX = "category";
series4.dataFields.valueY = "value4";
series4.stacked = true;
series4.cursorHoverEnabled = false;

var series5 = chart.series.push(new am4charts.RadarColumnSeries());
series5.columns.template.width = am4core.percent(80);
series5.columns.template.tooltipText = "{name}: {valueY.value}";
series5.name = "Mayo";
series5.dataFields.categoryX = "category";
series5.dataFields.valueY = "value5";
series5.stacked = true;
series5.cursorHoverEnabled = false;

var series6 = chart.series.push(new am4charts.RadarColumnSeries());
series6.columns.template.width = am4core.percent(80);
series6.columns.template.tooltipText = "{name}: {valueY.value}";
series6.name = "Junio";
series6.dataFields.categoryX = "category";
series6.dataFields.valueY = "value6";
series6.stacked = true;
series6.cursorHoverEnabled = false;

var series7 = chart.series.push(new am4charts.RadarColumnSeries());
series7.columns.template.width = am4core.percent(80);
series7.columns.template.tooltipText = "{name}: {valueY.value}";
series7.name = "Julio";
series7.dataFields.categoryX = "category";
series7.dataFields.valueY = "value7";
series7.stacked = true;
series7.cursorHoverEnabled = false;

var series8 = chart.series.push(new am4charts.RadarColumnSeries());
series8.columns.template.width = am4core.percent(80);
series8.columns.template.tooltipText = "{name}: {valueY.value}";
series8.name = "Agosto";
series8.dataFields.categoryX = "category";
series8.dataFields.valueY = "value8";
series8.stacked = true;
series8.cursorHoverEnabled = false;

var series9 = chart.series.push(new am4charts.RadarColumnSeries());
series9.columns.template.width = am4core.percent(80);
series9.columns.template.tooltipText = "{name}: {valueY.value}";
series9.name = "Septiembre";
series9.dataFields.categoryX = "category";
series9.dataFields.valueY = "value9";
series9.stacked = true;
series9.cursorHoverEnabled = false;

var series10 = chart.series.push(new am4charts.RadarColumnSeries());
series10.columns.template.width = am4core.percent(80);
series10.columns.template.tooltipText = "{name}: {valueY.value}";
series10.name = "Octubre";
series10.dataFields.categoryX = "category";
series10.dataFields.valueY = "value10";
series10.stacked = true;
series10.cursorHoverEnabled = false;

var series11 = chart.series.push(new am4charts.RadarColumnSeries());
series11.columns.template.width = am4core.percent(80);
series11.columns.template.tooltipText = "{name}: {valueY.value}";
series11.name = "Noviembre";
series11.dataFields.categoryX = "category";
series11.dataFields.valueY = "value11";
series11.stacked = true;
series11.cursorHoverEnabled = false;

var series12 = chart.series.push(new am4charts.RadarColumnSeries());
series12.columns.template.width = am4core.percent(80);
series11.columns.template.tooltipText = "{name}: {valueY.value}";
series12.name = "Diciembre";
series12.dataFields.categoryX = "category";
series12.dataFields.valueY = "value12";
series12.stacked = true;
series12.cursorHoverEnabled = false;

// put it behind axes
chart.seriesContainer.zIndex = -1;

chart.scrollbarX = new am4core.Scrollbar();
chart.scrollbarY = new am4core.Scrollbar();

// add cursor
chart.cursor = new am4charts.RadarCursor();
chart.cursor.xAxis = categoryAxis;
chart.cursor.fullWidthLineX = true;
chart.cursor.lineX.strokeOpacity = 0;
chart.cursor.lineX.fillOpacity = 0.1;
chart.cursor.lineX.fill = am4core.color("#000000");

// add legend
chart.legend = new am4charts.Legend();
