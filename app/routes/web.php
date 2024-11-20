<?php

$app->router->get('/admin', [AuthController::class, 'dashboard']);
// Static Route: Maps directly to a callback function
$app->router->get('', function () {
    return 'Welcome to CodeXPHP World , a place where core php is used to create dynamic app';
});

// Static Route with Page Callback: Maps to a view  
$app->router->get('/about', 'about');

// Controller Method Route: Maps to a specific method in a controller class.
$app->router->get('/home', [HomeController::class, 'index']);

// Dynamic Parameter Route: Captures dynamic segments from the URL and passes them to the controller method.
$app->router->get('/user/{id}', [UserController::class, 'show']);

// Nested Parameters Route: Captures multiple dynamic segments from the URL.
$app->router->get('/post/{postId}/comment/{commentId}', [CommentController::class, 'show']);

// Resource Route: Maps to standard CRUD operations (index, create, update, delete) using a controller.
$app->router->resource('products', 'product', ProductController::class);

// Wildcard Route: Matches any path segment and captures it as a dynamic parameter.
$app->router->get('/page/{slug}', [PageController::class, 'show']);

// Static File Route: Serves static files directly from the filesystem.
$app->router->get('/assets/css/style.css', function () {
    return file_get_contents('path/to/style.css');
});

// At Symbol Route: Matches user profiles with dynamic username segments.
$app->router->get('/profile/@{username}', [ProfileController::class, 'show']);

// Tilde Symbol Route: Handles collections with dynamic collection IDs.
$app->router->get('/collections/~{collectionId}', [CollectionController::class, 'show']);

$app->router->resource('admin/paper', 'paper',PaperController::class);
