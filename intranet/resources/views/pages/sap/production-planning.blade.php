@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <h1 class="font-weight-300 opacity-7 text-center margin-bottom-45px wow fadeInUp">Production Planning</h1>
            <div class="row">
                <table>
                    <thead>
                    <tr>
                        <th>Sr. #</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cost Collector</td>
                        <td><a href="{{asset('assets/SAP/production-planning/CostCollectorRun.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cost Collector Run</td>
                        <td><a href="{{asset('assets/SAP/production-planning/CostCollectorRun.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Create BOM</td>
                        <td><a href="{{asset('assets/SAP/production-planning/CreateBOM.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Create Production Order</td>
                        <td><a href="{{asset('assets/SAP/production-planning/CreateProductionOrder.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Create Purchase Order</td>
                        <td><a href="{{asset('assets/SAP/production-planning/CostCollectorRun.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Goods Issue to Order</td>
                        <td><a href="{{asset('assets/SAP/production-planning/CostCollectorRun.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Goods Receipt for Order</td>
                        <td><a href="{{asset('assets/SAP/production-planning/GoodsReceiptforOrder.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Internal Sales Order</td>
                        <td><a href="{{asset('assets/SAP/production-planning/InternalSalesOrder.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Production Order Confirmation</td>
                        <td><a href="{{asset('assets/SAP/production-planning/ProductionOrderConfirmation.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Purchase Requisition</td>
                        <td><a href="{{asset('assets/SAP/production-planning/PurchaseRequisition.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Rate Routing</td>
                        <td><a href="{{asset('assets/SAP/production-planning/RateRouting.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Routing</td>
                        <td><a href="{{asset('assets/SAP/production-planning/Routing.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Transfer Posting Mvt Type 351</td>
                        <td><a href="{{asset('assets/SAP/production-planning/TransferPostingMvtType351.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection