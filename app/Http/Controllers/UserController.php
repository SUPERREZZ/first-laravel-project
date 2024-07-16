<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->search) {
            $query->where('nama_depan', 'like', "%{$request->search}%");
        }
        $query->orderByRaw("FIELD(jabatan, 'Eksekutif', 'Manajemen','Supervisi','Staff')");

        $users = $query->paginate(5);

        return view('users.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'jabatan' => 'required',
            'email' => 'email',
            'password' => 'required',
        ]);
        $user = new User();
        $user->nama_depan = $request->firstName;
        $user->nama_belakang = $request->lastName;
        $user->jabatan = $request->jabatan;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()
            ->route('users.index')
            ->with('success', 'user berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'jabatan' => 'required',
            'email' => 'email',
            'password' => 'required'
        ]);
        $user->nama_depan = $request->firstName;
        $user->nama_belakang = $request->lastName;
        $user->jabatan = $request->jabatan;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()
            ->route('users.index')
            ->with('success', 'user berhasil diupdate');
        ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()
            ->route('users.index')
            ->with('success', 'user berhasil dihapus');
    }
}