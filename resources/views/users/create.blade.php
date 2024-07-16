<x-layout>
    <x-slot:title>Tambah User</x-slot:title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action={{ route('users.store') }} method="post">
                            @csrf
                            <x-text-input label="Nama Depan" name="firstName" placeholder="Masukkan Nama Depan"
                                value="{{ old('firstName') }}"></x-text-input>
                            <x-text-input label="Nama Belakang" name="lastName" placeholder="Masukkan Nama Belakang"
                                value="{{ old('lastName') }}"></x-text-input>
                            <x-text-input label="Jabatan" name="jabatan" placeholder="Masukkan Jabatan"
                                value="{{ old('jabatan') }}"></x-text-input>
                            <x-text-input label="email" name="email" placeholder="Masukkan email"
                                value="{{ old('email') }}"></x-text-input>
                            <x-text-input label="password" name="password" placeholder="Masukkan password"
                                value="{{ old('password') }}"></x-text-input>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.index') }}" class="btn btn-danger">Batal</a>
                                <button type="submit" class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
