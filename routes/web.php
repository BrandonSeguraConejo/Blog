<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\post;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/create',[PostController::class, 'create']);
Route::get('/posts/{post}',[PostController::class, 'show']);


Route::get('/prueba/',function(){
    $post = new Post;

    // CREAR NUEVO POST
    $post->title ='Titulo de prueba 2';
    $post->content ='Contenido de prueba 2';
    $post->categoria ='Categoria de prueba 2';
    
    $post->save();


    //BUSCAR POST
    $post = post::find(1);

    //ACTUALIZAR POST
    $post = post::where('title', 'Titulo de prueba 1')
                ->first();

    $post->categoria='Desarrollo web';
    $post->save();


    //BUSCAR 
    $post = post::where('id','>', '1')
                ->select('id','title','categoria')
                ->take(2)
                ->get();
    
    return $post;
});