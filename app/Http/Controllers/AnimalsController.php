<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public $animals = ['biawak', 'kijang', 'harimau', 'singa', 'elang'];

    public function index()
    {
        echo "Menampilkan data animals : <br>";

        foreach ($this->animals as $hewan) {

            echo $hewan . '<br>';
        };
    }
    public function getbyid($id)
    {
        echo "Menampilkan data animals dengan id : <br>";
        echo $this->animals[$id];
    }

    public function store(Request $request)
    {
        array_push($this->animals, $request->nama);
        echo "menambah hewan baru<br>";
        $this->index();
    }

    public function update(Request $request, $id)
    {
        $this->animals[$id] = $request->nama;
        echo "mengupdate data hewan $id <br>";
        $this->index();
    }

    public function destroy($id)
    {
        unset($this->animals[$id]);
        echo "menghapus data hewan id $id <br>";
        $this->index();
    }
}
