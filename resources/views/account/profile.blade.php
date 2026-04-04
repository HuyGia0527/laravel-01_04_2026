<x-account-layout>
    <x-slot name='title'>
        Account
    </x-slot>
    <div class="container mt-4">
        @if (session('status'))
        <div class="alert alert-success mt-2">
            {{ session('status') }}
        </div>
        @endif
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form method='post' action="{{route('account.update')}}" enctype="multipart/form-data">
                    <div class="text-center font-weight-bold text-primary mb-4">
                        CẬP NHẬT THÔNG TIN CÁ NHÂN
                    </div>


                    <div class="form-group">
                        <label>Tên</label>
                        <input type='text' class='form-control' name='name' value="{{$user->name}}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type='text' class='form-control' name='email' value="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type='text' class='form-control' name='phone' value="{{$user->phone}}">
                    </div>


                    <input type='hidden' value='{{$user->id}}' name='id'>


                    <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
                        <img src="{{ asset('storage/profile/'.$user->photo) }}" width="50px" class='mb-1' />
                    </div>

                    @csrf
                    <div class='text-center mt-4'>
                        <input type='submit' class='btn btn-primary px-5' value='Lưu'>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-account-layout>

