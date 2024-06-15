<?php

use App\Events\CommentIncrement;
use App\Events\TestEvent;
use App\Http\Controllers\API\Admin\PostController as PostAdmin;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\Public\CategoryController as CategoryPublic;
use App\Http\Controllers\API\Public\PostController as PostPublic;
use App\Http\Controllers\API\UserController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware('auth:sanctum')->group(function () {
    Route::post("/auth/logout", [AuthController::class, 'logout']);
    Route::post("/update/profile", [UserController::class, 'updateProfileImage']);


    Route::prefix('admin')->group(function () {
        Route::controller(PostAdmin::class)->prefix('posts')->group(function () {
            Route::get('/', 'index');
        });
    });
});
Route::post("/test/channel", function (Request $request) {
    // $post = Post::where("id", "2")->with('user')->first();
    // PostBroadCastEvent::dispatch($post);
    CommentIncrement::dispatch(2);
    // TestEvent::dispatch($request->all());
    return response()->json(["message" => "data sent successfully!"]);
});

Route::post("/auth/register", [AuthController::class, "register"]);
Route::post("/auth/login", [AuthController::class, "login"]);
Route::post("/auth/checkCredentials", [AuthController::class, "checkCredentias"]);
Broadcast::routes(['middleware' => ['auth:sanctum']]);

// Public Routes
Route::prefix('public')->group(function () {
    Route::controller(CategoryPublic::class)->prefix('categories')->group(function () {
        Route::get('/', 'index');
    });
    Route::controller(PostPublic::class)->prefix('posts')->group(function () {
        Route::get('/', 'index');
        Route::get('/show/{slug}', 'show');
    });
});
