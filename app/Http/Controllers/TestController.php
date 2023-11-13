<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        echo 'Страница просмотра теста';
        //return view('test');
    }
    public function create()
    {
        echo 'Страница создания теста';
    }
    public function store(Request $request)
    {
        echo 'Скрипт создания теста';
    }
    public function show(string $id)
    {
        echo 'Страница просмотра элемента теста';
    }
    public function edit(string $id)
    {
        echo 'Страница изменения элемента теста';
    }
    public function update(Request $request, string $id)
    {
        echo 'Страница обновления теста';
    }
    public function destroy(string $id)
    {
        echo 'Страница удаления теста';
    }
}
