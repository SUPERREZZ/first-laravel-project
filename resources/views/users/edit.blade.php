<x-layout>
    <x-slot:title>Edit User</x-slot:title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name-first" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" id="name-first" placeholder="Masukkan nama depan">
                        </div>
                        <div class="mb-3">
                            <label for="name-last" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" id="name-last"
                                placeholder="Masukkan nama belakang">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" placeholder="Masukkan jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
