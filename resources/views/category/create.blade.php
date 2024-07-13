<x-layout>
    <x-slot:title>Tambah Category</x-slot:title>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Masukkan nama category">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="status" type="checkbox" role="switch"
                                    id="active" checked>
                                <label class="form-check-label" for="active">Aktif</label>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
