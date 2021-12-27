@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <h1 class="font-weight-300 opacity-7 text-center margin-bottom-45px wow fadeInUp">Controlling</h1>
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
                        <td>Allocation Cycles</td>
                        <td><a href="{{asset('assets/SAP/controlling/Allocation_Cycle.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Closing Packaing</td>
                        <td><a href="{{asset('assets/SAP/controlling/ClosingPackaging.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cost Center Master Data</td>
                        <td><a href="{{asset('assets/SAP/controlling/CstCntMasterData.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Cost Release Tissue DIV</td>
                        <td><a href="{{asset('assets/SAP/controlling/CstReleaseTissue.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cst Est Release with ZPCH</td>
                        <td><a href="{{asset('assets/SAP/controlling/CstEstReleasewithZPCH.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Profit Center Allocation</td>
                        <td><a href="{{asset('assets/SAP/controlling/ProfitCenterAllocation.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection