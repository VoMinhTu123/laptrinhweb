@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Hiển thị thông tin vai trò -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Thông tin vai trò</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên vai trò</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="container mt-4">
    <h3 class="text-center">Danh sách người dùng thuộc vai trò: <strong>{{ $role->name }}</strong></h3>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Hiển thị danh sách người dùng -->
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Danh sách người dùng</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Tên người dùng</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($role->users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
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
