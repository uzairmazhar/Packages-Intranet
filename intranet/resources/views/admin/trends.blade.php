@extends('layouts.admin-layout')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
@section('body')
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Trends Graph</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard" style="height: 470px">
                                <div id="chartContainer"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Trend Records</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <table class="table table-striped table-bordered data-table">
                                    <thead>
                                    <tr>
                                        <td><strong>Date</strong></td>
                                        <td><strong>Unique Users</strong></td>
                                        <td><strong>Total Hits</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($trends as $trend)
                                        <tr class="data-row">
                                            <td class="date" data-date="{{date('d M, Y', strtotime($trend->date))}}">{{date('d M, Y', strtotime($trend->date))}}</td>
                                            <td class="unique_hits" data-unique-hits="{{$trend->unique_hits}}">{{$trend->unique_hits}}</td>
                                            <td class="hits" data-hits="{{$trend->hits}}">{{$trend->hits}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footer')
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/custom/canvas.js')}}"></script>
    <script>
        window.onload = function () {
            var datapointsPrimary = [];
            var datapointsSecondary = [];
            $('.data-row').each(function(){
                datapointsPrimary.push({
                    label: $(this).find('.date').data('date'),
                    y: $(this).find('.hits').data('hits')
                });
            });
            $('.data-row').each(function(){
                datapointsSecondary.push({
                    label: $(this).find('.date').data('date'),
                    y: $(this).find('.unique_hits').data('unique-hits')
                });
            });
            console.log(datapointsSecondary);
            var chart = new CanvasJS.Chart("chartContainer", {
                exportEnabled: true,
                animationEnabled: true,
                axisX: {
                    title: "Date",
                    labelAngle: -45
                },
                axisY: {
                    title: "Total Hits",
                    titleFontColor: "#4F81BC",
                    lineColor: "#4F81BC",
                    labelFontColor: "#4F81BC",
                    tickColor: "#4F81BC"
                },
                axisY2: {
                    title: "Unique Users",
                    titleFontColor: "#C0504E",
                    lineColor: "#C0504E",
                    labelFontColor: "#C0504E",
                    tickColor: "#C0504E"
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries
                },
                data: [{
                    type: "column",
                    name: "Total Hits",
                    showInLegend: true,
                    yValueFormatString: "#,##0.#",
                    dataPoints: datapointsPrimary
                },
                {
                    type: "column",
                    name: "Unique Users",
                    axisYType: "secondary",
                    showInLegend: true,
                    yValueFormatString: "#,##0.#",
                    dataPoints: datapointsSecondary
                }]
            });
            chart.render();

            function toggleDataSeries(e) {
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                e.chart.render();
            }

        }
    </script>
    <script>
        $('.canvasjs-chart-canvas').css('position', 'inherit');
    </script>
@endsection