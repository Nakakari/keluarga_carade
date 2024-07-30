@extends('layouts.main')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            <form class="w-full" id="form-add" action="/data_user" method="post" enctype="multipart/form-data">
                <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        <label for="name" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                            Nama Lengkap :
                        </label>
                        <input type="text" name="name" class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" id="name" placeholder="Nama Lengkap..." required>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        <label for="username" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                            Username :
                        </label>
                        <input type="text" name="username" class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" id="username" placeholder="Username..." required>
                    </div>
                </div>

                <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        <label for="email" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                            Email :
                        </label>
                        <input type="email" name="email" class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" id="email" placeholder="Email..." required>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        <label for="phone" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                            Nomor Telepom :
                        </label>
                        <input type="text" name="phone" class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" id="phone" placeholder="Nomor Telepon..." required>
                    </div>
                </div>

                <div class="sm:flex sm:justify-between sm:space-x-5 sm:w-full">
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        <label for="password" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                            Password :
                        </label>
                        <input type="password" name="password" class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" id="password" placeholder="Password..." required>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6 sm:w-full">
                        <label for="roles" class="block uppercase tracking-wide text-black text-xs font-bold mb-4">
                            Roles :
                        </label>
                        <select name="roles" class="appearance-none block w-full rounded py-3 px-4 leading-tight focus:outline-none bg-gray-300 focus:bg-white" id="roles" required>
                            <option value="">Pilih roles/level pengguna</option>
                            <option value="admin">admin</option>
                            <option value="surveyor">Surveyor</option>
                        </select>
                    </div>
                </div>

                <div class="flex gap-3 w-full justify-end">
                    <button type="submit" class="btn-add shadow-lg bg-green-600 hover:bg-green-500 active:bg-green-800 text-white font-bold py-2 px-4 rounded">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on("submit", "#form-add", function(e) {
            e.preventDefault();
            $.ajax({
                url: "/data_user",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    name: $('input[name="name"]').val(),
                    username: $('input[name="username"]').val(),
                    email: $('input[name="email"]').val(),
                    phone: $('input[name="phone"]').val(),
                    password: $('input[name="password"]').val(),
                    roles: $('#roles').find(':selected').val(),
                },
                dataType: "json",
                success: function(response) {
                    if (response.status === "success") {
                        Swal.fire({
                            icon: response.icon,
                            title: response.title,
                            text: response.message,
                            timer: 1000,
                            showConfirmButton: false,
                        });
                        setTimeout(function() {
                            window.location.href = "/data_user";
                        }, 1500);
                    } else {
                        Swal.fire({
                            icon: response.icon,
                            title: response.title,
                            text: response.message,
                            timer: 3000,
                            showConfirmButton: false,
                        });
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: xhr.responseJSON.message,
                    });
                }
            });
        });
    });
</script>
@endsection