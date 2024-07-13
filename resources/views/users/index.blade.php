<x-layout>
    <x-slot:title>User</x-slot:title>
    <div class="container">
        <div class="d-flex mb-2 justify-content-between">
            <input type="text" class="form-control w-25" placeholder="Cari">
            <a href="/users/create" class="btn btn-dark">Tambah</a>
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
                    <tr>
                        <td>Bayu</td>
                        <td>Setiawan</td>
                        <td>sC5kS@example.com</td>
                        <td>CTO</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-success">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Reza Ghiyats</td>
                        <td>Fikri</td>
                        <td>GhQpO@example.com</td>
                        <td>CEO</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-success">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Aldi</td>
                        <td>Prasetya</td>
                        <td>VjI4h@example.com</td>
                        <td>President</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-success">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ryan Dwi</td>
                        <td>Prasetya</td>
                        <td>GkTqI@example.com</td>
                        <td>COO</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-success">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
