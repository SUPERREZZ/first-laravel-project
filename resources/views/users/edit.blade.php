<x-layout>
    <x-slot:title>Edit User</x-slot:title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
                            @csrf
                            @method('put')
                            <x-text-input label="Nama Depan" name="firstName" placeholder="Masukkan Nama Depan"
                                value="{{ old('firstName', $user->nama_depan) }}"></x-text-input>
                            <x-text-input label="Nama Belakang" name="lastName" placeholder="Masukkan Nama Belakang"
                                value="{{ old('lastName', $user->nama_belakang) }}"></x-text-input>
                            <x-text-input label="Jabatan" name="jabatan" placeholder="Masukkan Jabatan"
                                value="{{ old('jabatan', $user->jabatan) }}"></x-text-input>
                            <x-text-input label="email" name="email" placeholder="Masukkan email"
                                value="{{ old('email', $user->email) }}"></x-text-input>
                            <x-text-input label="password" name="password" placeholder="Masukkan password"
                                value="{{ old('password', $user->password) }}"></x-text-input>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.index') }}" class="btn btn-danger">Batal</a>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
