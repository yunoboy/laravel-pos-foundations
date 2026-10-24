@extends('layouts.app')

@section('content')
    <p class="eyebrow">Accounts</p>
    <h1>Customer Accounts</h1>
    <p>These records are currently supplied by a static PHP array.</p>

    <table>
        <thead>
            <tr><th>Full Name</th><th>Email</th><th>Phone</th></tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['full_name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
