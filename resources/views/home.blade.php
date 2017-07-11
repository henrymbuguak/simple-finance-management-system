@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <p class="text-right"><a href="{{ route('finance.report') }}">Export Pdf</a></p></div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Id Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($financeUserDetails as $detail)
                            <tr>
                                <td>{{ $detail->first_name }}</td>
                                <td>{{ $detail->last_name }}</td>
                                <td>{{ $detail->email }}</td>
                                <td>{{ $detail->phone_number }}</td>
                                <td>{{ $detail->id_number }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
