<x-layout>
    <x-slot:title>Category</x-slot:title>

    <div class="container">
        <div class="d-flex mb-2 justify-content-end">
            <a href="/category/create" class="btn btn-dark">Tambah</a>
        </div>

        <div class="card overflow-hidden">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Aktif</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status ? 'Aktif' : 'Tidak aktif' }}</td>

                            <td align="right">
                                <a href="{{ route('category.edit', ['category' => $category->id]) }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
