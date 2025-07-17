<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\Admin\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        //
        if (request()->ajax()) {
            $query = User::query();
            return DataTables()->of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('Adminuser.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('Adminuser.destroy', $item->id) . '"method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.admin.user.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        //
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);
        return redirect()->route('Adminuser.index');
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
    public function edit(string $id)
    {
        //
        // findorfail memanggil jika datanya ada
        $item = User::findOrFail($id);
        return view('pages.admin.user.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        //
        $data = $request->all();
        $item = User::findOrFail($id);
        // jika ada password
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            // jika tidak ada password
            unset($data['password']);
        }

        $item->update($data);
        return redirect()->route('Adminuser.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('Adminuser.index');
    }
}
