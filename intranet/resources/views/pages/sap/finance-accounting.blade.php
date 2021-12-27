@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <h1 class="font-weight-300 opacity-7 text-center margin-bottom-45px wow fadeInUp">Finance Accounting</h1>
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
                        <td>Change Parked Document</td>
                        <td><a href="{{asset('assets/SAP/financial-accounting/ChangeParkedDoc.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Line Item Clearing</td>
                        <td><a href="{{asset('assets/SAP/financial-accounting/LineItemClearing.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Park Incoming Invoice</td>
                        <td><a href="{{asset('assets/SAP/financial-accounting/ParkIncomingInv.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Post Incoming Invoice</td>
                        <td><a href="{{asset('assets/SAP/financial-accounting/PostofIncomingInvoice.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Vendor Balance Confirmation</td>
                        <td><a href="{{asset('assets/SAP/financial-accounting/VendorBalConfirmation.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Vendor Credit Memo Master</td>
                        <td><a href="{{asset('assets/SAP/financial-accounting/VendorCreditMemo.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Vendor Down Payment</td>
                        <td><a href="#" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Vendor Master</td>
                        <td><a href="{{asset('assets/SAP/financial-accounting/VendorMaster.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection