<x-layout>
    <x-slot:title>Categories</x-slot:title>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex mb-2 justify-content-between">
            <form class="d-flex gap-2" method="get">
                <input type="text" class="form-control w-auto" placeholder="Cari category" name="search"
                    value="{{ request()->search }}">
                <button type="submit" class="btn btn-dark">Cari</button>
            </form>
            <a href="{{ route('categories.index') }}" class="btn btn-dark">Tambah</a>
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
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                @if ($category->active)
                                    <span class="badge text-bg-primary">Aktif</span>
                                @else
                                    <span class="badge text-bg-danger">Tidak Aktif</span>
                                @endif
                            </td>
                            <td class="d-flex justify-content-end gap-2">
                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Belum ada category</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Paginasi -->
        @if ($categories->hasPages())
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-3">
                    {{-- Previous Page Link --}}
                    @if ($categories->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">Previous</span></li>
                    @else
                        <li class="page-item"><a class="page-link"
                                href="{{ $categories->previousPageUrl() }}">Previous</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($categories->links()->elements[0] as $page => $url)
                        @if ($page == $categories->currentPage())
                            <li class="page-item active" aria-current="page"><span
                                    class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($categories->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $categories->nextPageUrl() }}">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled"><span class="page-link">Next</span></li>
                    @endif
                </ul>
            </nav>
        @endif
    </div>
</x-layout>
