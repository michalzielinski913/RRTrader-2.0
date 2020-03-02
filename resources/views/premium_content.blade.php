
@extends('head')
@extends('menu')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                </br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						{{ $title}}
                        </div>
                        <div class="panel-body" id="tablica">
                            <div class="flot-chart">
							<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<div id="chartdiv"></div>

                         <!--        <div class="flot-chart-content" id="flot-line-chart"></div> -->
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sell offers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

											<th>Username</th>
											<th>Price</th>
											@if ($type == 'resource')
												<th>Quantity</th>
											@endif
											<th>Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($offer_sell as $sell)
                                        <tr>
                                            <td>{{ $sell['NickName']}}</td>
                                            <td>{{ $sell['Value']}}</td>
											@if ($type == 'resource')
												<td>Quantity</td>
											@endif
                                            <td><a href="https://rivalregions.com/#slide/profile/{{ $sell['RRId']}} "><button  type="button" class="btn btn-primary">PC</button></a> &nbsp <a href="https://m.rivalregions.com/#slide/profile/{{ $sell['RRId']}} "><button  type="button" class="btn btn-primary">Mobile</button></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Buy Offers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                     <thead>
                                        <tr>

                                            <th>Username</th>
											 <th>Price</th>
											@if ($type == 'resource')
												<th>Quantity</th>
											@endif
											 <th>Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($offer_buy as $buy)
                                        <tr>
                                            <td>{{ $buy['NickName']}}</td>
                                            <td>{{ $buy['Value']}}</td>
											@if ($type == 'resource')
												<td>Quantity</td>
											@endif
                                            <td><a href="https://rivalregions.com/#slide/profile/{{ $buy['RRId']}} "><button  type="button" class="btn btn-primary">PC</button></a> &nbsp <a href="https://m.rivalregions.com/#slide/profile/{{ $buy['RRId']}} "><button  type="button" class="btn btn-primary">Mobile</button></a></td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
	<style>
	#chartdiv {
  width: 100%;
  height: 100%;
}

	</style>
<script type="text/javascript">
  if (isMobile.apple.phone || isMobile.android.phone) {
var div = document.getElementById('chartdiv');

div.innerHTML += 'Graph is not avaiable in mobile version';	
document.getElementById("tablica").style.height = "50px"; 
	
  }
  else
	  
  {
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart
var chart = am4core.create("chartdiv", am4charts.XYChart);

var data = [];
var price1 = 1300, price2 = 1000;
for (var i = 0; i < 30; i++) {
  price1 += 1;
  data.push({ date1: new Date(2017, 0, i), price1: price1 });
  price2 -= 1;
  data.push({ date2: new Date(2017, 0, i), price2: price2 });
  price3= (price1+price2)/2;
  data.push({ date3: new Date(2017, 0, i), price3: price3 });
}

chart.data = data;

var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.grid.template.location = 0;
dateAxis.renderer.labels.template.fill = am4core.color("#ffffff");

var dateAxis2 = chart.xAxes.push(new am4charts.DateAxis());
dateAxis2.renderer.grid.template.location = 0;
dateAxis2.renderer.labels.template.fill = am4core.color("#000000");

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.tooltip.disabled = true;
valueAxis.renderer.labels.template.fill = am4core.color("#e59165");

valueAxis.renderer.minWidth = 60;

var valueAxis2 = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis2.tooltip.disabled = true;
valueAxis2.renderer.grid.template.strokeDasharray = "2,3";
valueAxis2.renderer.labels.template.fill = am4core.color("#000000");
valueAxis2.renderer.minWidth = 60;

var series = chart.series.push(new am4charts.LineSeries());
series.name = "Buy Price";
series.dataFields.dateX = "date1";
series.dataFields.valueY = "price1";
series.yAxis = valueAxis2;
series.tooltipText = "{valueY.value}";
series.fill = am4core.color("#e59165");
series.stroke = am4core.color("#e59165");
//series.strokeWidth = 3;

var series2 = chart.series.push(new am4charts.LineSeries());
series2.name = "Sell Price";
series2.dataFields.dateX = "date2";
series2.dataFields.valueY = "price2";
series2.yAxis = valueAxis2;
series2.xAxis = dateAxis2;
series2.tooltipText = "{valueY.value}";
series2.fill = am4core.color("#dfcc64");
series2.stroke = am4core.color("#dfcc64");
//series2.strokeWidth = 3;

chart.cursor = new am4charts.XYCursor();
chart.cursor.xAxis = dateAxis2;

var scrollbarX = new am4charts.XYChartScrollbar();
scrollbarX.series.push(series);
chart.scrollbarX = scrollbarX;

chart.legend = new am4charts.Legend();
chart.legend.parent = chart.plotContainer;
chart.legend.zIndex = 100;

valueAxis2.renderer.grid.template.strokeOpacity = 0.07;
dateAxis2.renderer.grid.template.strokeOpacity = 0.07;
dateAxis.renderer.grid.template.strokeOpacity = 0.07;
valueAxis.renderer.grid.template.strokeOpacity = 0.07;
  }
	</script>



@endsection('content')
