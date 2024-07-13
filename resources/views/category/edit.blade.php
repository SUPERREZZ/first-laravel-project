<x-layout>
    <x-slot:title>Edit Category</x-slot:title>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Masukkan nama category" name="name" value="{{ $category->name }}">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="active"
                                    name="status" {{ $category->status ? 'checked' : '' }}>
                                <label class="form-check-label" for="active">Aktif</label>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-dark" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
