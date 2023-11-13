<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        echo 'Страница просмотра элемента теста';
    }
    public function create()
    {
        echo 'Страница создания элемента теста';
    }
    public function store(Request $request)
    {
        echo 'Метод создания элемента теста';
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        echo 'Страница изменения элемента теста';
    }
    public function update(Request $request, string $id)
    {
        echo 'Метод изменения элемента теста';
    }
    public function destroy(string $id)
    {
        echo 'Метод удаления элемента теста';
    }
}
