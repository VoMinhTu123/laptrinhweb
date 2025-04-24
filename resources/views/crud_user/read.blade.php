@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6"> <!-- Giới hạn chiều rộng form -->
                    <div class="card shadow-sm"> <!-- Thêm card để tạo viền và bóng -->
                        <div class="card-header text-center">
                            <h4>Màn hình Chi tiết</h4> <!-- Tiêu đề -->
                        </div>
                        <div class="card-body">
                            <!-- Form chỉnh sửa -->
                            <form action="#" method="POST">
                                @csrf
                                @method('PUT') <!-- Phương thức PUT cho cập nhật -->

                                <!-- Trường Username -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $messi->name }}" required>
                                </div>

                                <!-- Trường Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $messi->email }}" required>
                                </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection