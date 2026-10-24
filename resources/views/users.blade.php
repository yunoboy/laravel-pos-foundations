@extends('layouts.app')

@section('content')
    <p class="eyebrow">Accounts</p>
    <h1>User Accounts</h1>
    <p>These records are currently supplied by a static PHP array.</p>

    <table>
        <thead>
            <tr><th>Username</th><th>Full Name</th><th>Role</th></tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['full_name'] }}</td>
                    <td><span class="badge">{{ $user['role'] }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
