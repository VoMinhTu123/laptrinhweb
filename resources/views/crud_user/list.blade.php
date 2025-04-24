@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-center mb-4">Danh sách user</h2> <!-- Tiêu đề giống ảnh -->
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <table class="table table-bordered"> <!-- Thêm class Bootstrap để bảng đẹp hơn -->
                    <thead>
                        <tr>
                            <th>ID</th> <!-- Cột ID -->
                            <th>USERNAME</th> <!-- Cột Username -->
                            <th>Email</th> <!-- Cột Email -->
                            <th>Roles</th>
                            <th>Thao tác</th> <!-- Cột Thao tác -->
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td> <!-- Số thứ tự tự động -->
                                <td><br>{{ $user->name }}</td> <!-- Tên người dùng -->
                                <td><br>{{ $user->email }}</td> <!-- Email -->
                                <th>
                                    @foreach($user->roles as $role)
                                        <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                            {{ $role->name . '-' }}
                                        </a>
                                    @endforeach
                                </th>
                                <td>
                                    <!-- Các liên kết thao tác -->
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="text-primary">Edit</a> |
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="text-info">View</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="text-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $users->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </main>
@endsection