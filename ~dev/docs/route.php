<?php include_once"../components/docs-header.php"; ?>
<main class="content">
    <div class="breadcrumb">
        <a href="#">Docs</a> > <a href="#">Intro</a> > CoreXPHP Introduction
    </div>
    
    <h1>CoreXPHP - Introduction</h1>
    
    <p>
        <strong>CoreXPHP</strong> is a lightweight, flexible, and powerful PHP framework designed to simplify the development of web applications. 
        It follows the <strong>MVC (Model-View-Controller)</strong> architecture and offers a developer-friendly environment for building scalable applications.
    </p>
    
    <div class="code-container">
    <!-- Sticky Header with Code Type and Copy Button -->
    <div class="code-header">
      <div class="dot-container">
        <div class="dot"></div>
        <span>PHP</span>
      </div>
      <button class="copy-button" data-clipboard-target="#phpCode">Copy Code</button>
    </div>

    <!-- PHP Code Block with Highlighting -->
    <pre><code class="php" id="phpCode">
&lt;?php
// Basic route to a callback function
$app->router->get('/', function () {
    return 'Welcome to CoreXPHP!';
});

// Route to a controller method
$app->router->get('/home', [HomeController::class, 'index']);
// Route with a dynamic user ID
$app->router->get('/user/{id}', [UserController::class, 'show']);

// Nested dynamic parameters
$app->router->get('/post/{postId}/comment/{commentId}', [CommentController::class, 'show']);

// Matches /page/about, /page/contact, etc.
$app->router->get('/page/{slug}', [PageController::class, 'show']);

// Matches URLs like /profile/@john_doe
$app->router->get('/profile/@{username}', [ProfileController::class, 'show']);

// Matches URLs like /collections/~12345
$app->router->get('/collections/~{collectionId}', [CollectionController::class, 'show']);

// Apply authentication middleware to the dashboard route
$app->router->get('/dashboard', [DashboardController::class, 'index'], ['AuthMiddleware']);

// Resourceful Route
$app->router->resource('products', 'product', ProductController::class);


?&gt;
    </code></pre>
  </div>
    
    <div class="pagination">
            <a href="#" class="prev-page">Previous Page</a>
            <a href="#" class="next-page">Next Page</a>
        </div>
</main>



    

    <?php include_once"../components/docs-footer.php"; ?>