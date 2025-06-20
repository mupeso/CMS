@extends('layout.main')

@section("title","admin dashboard")

@section('content')
<body class="bg-dark text-white">
    <div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">👑 admin dashboard</h3>
        </div>
        <div class="card-body">
            <p>مرحبًا، <strong>{{ auth()->user()->name }}</strong></p>

            <h5 class="mt-4">قائمة المستخدمين:</h5>
            <table class="table table-bordered table-striped mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email </th>
                        <th>role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span class="badge bg-{{ $user->role->name == 'admin' ? 'success' : 'secondary' }}">
                                {{ $user->role->name }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="btn btn-danger mt-3">
               logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection
