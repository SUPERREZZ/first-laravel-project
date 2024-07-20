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
                                <a href="{{ route('users.edit', ['user' => $user]) }}"
                                    class="btn btn-sm btn-success">Edit</a>
                                <form action="{{ route('users.destroy', ['user' => $user]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">user tidak ditemukan </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
