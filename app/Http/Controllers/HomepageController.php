<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;


class HomepageController extends Controller
{
    public function index() {
        return view('homepage.index')->with('todo_arr',Account::all());
    }

    public function nuevo() {
        return view('homepage.nuevo');
    }

    public function guardado(Request $request) {

        $todo = new Account();
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/to-do-list');

    }

    public function borrar(Account $account, $id) {

        $row = account::destroy($id);
        return redirect('/to-do-list');
    }

    public function editar(Account $account, $id) {

        $todo = Account::find($id);
        return view('homepage.editado')->with('todo_arr', $todo);

    }

    public function actualizado(Request $request, Account $account, $id) {

        $todo = Account::find($id);
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/to-do-list');

    }
}
