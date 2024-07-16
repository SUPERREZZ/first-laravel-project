<x-layout>
    <x-slot:title>User</x-slot:title>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex mb-2 justify-content-between">
            <form method="GET" class="d-flex gap-2">
                <input type="text" class="form-control" name="search" placeholder="Cari"
                    value="{{ request()->search }}">
                <button type="submit" class="btn btn-dark">Cari</button>
            </form>
            <a href="{{ route('users.create') }}" class="btn btn-dark">Tambah</a>
        </div>
        <div class="card overflow-hidden">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th scope="col">Nama Depan</th>
                        <th scope="col">Nama Belakang</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col" class=" text-end pe-5">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->nama_depan }}</td>
                            <td>{{ $user->nama_belakang }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->jabatan }}</td>
                            <td class="d-flex justify-content-end gap-2">
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                    class="btn btn-sm btn-success">Edit</a>
                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- Paginasi -->
        @if ($users->hasPages())
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-3">
                    {{-- Previous Page Link --}}
                    @if ($users->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">Previous</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $users->previousPageUrl() }}">Previous</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($users->links()->elements[0] as $page => $url)
                        @if ($page == $users->currentPage())
                            <li class="page-item active" aria-current="page"><span
                                    class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($users->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled"><span class="page-link">Next</span></li>
                    @endif
                </ul>
            </nav>
        @endif
    </div>
</x-layout>
