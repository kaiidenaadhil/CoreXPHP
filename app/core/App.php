<?php
class App {
    public static string $ROOT_DIRECTORY;
    public static View $view;
    public static Logger $logger;
    public static Session $session;
    public static Cache $cache;

    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    protected array $globalMiddleware = [];

    public function __construct($rootPath) {
        self::$ROOT_DIRECTORY = $rootPath;

        // Initialize core components
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database();

        // Use dynamic path for the log file
        $logPath = self::$ROOT_DIRECTORY . '/app/logs/error.log';
        self::$view = new View(THEME);
        self::$logger = new Logger($logPath);
        self::$session = new Session();
        self::$cache = new Cache(3600);

        // Register global exception handler
        set_exception_handler([$this, 'handleException']);
    }

    public function use($middlewareClass) {
        $this->globalMiddleware[] = new $middlewareClass;
    }

    public function run() {
        foreach ($this->globalMiddleware as $middleware) {
            $middleware->handle($this->request, $this->response);
        }
        echo $this->router->resolve();
    }

    public function handleException($exception) {
        self::$logger->logError($exception);
        http_response_code(500);
        $this->renderErrorPage(500);
    }

    protected function renderErrorPage($errorCode) {
        $errorView = self::$ROOT_DIRECTORY . "/app/views/errors/{$errorCode}.php";
        if (file_exists($errorView)) {
            include $errorView;
        } else {
            echo "Error {$errorCode}";
        }
    }
}


// class App {
//     public static string $ROOT_DIRECTORY;
//     public static View $view;
//     public Router $router;
//     public Request $request;
//     public Response $response;
//     public Database $db;

//     public function __construct($rootPath)
//     {
//         self::$ROOT_DIRECTORY = $rootPath;
//         $this->request = new Request();
//         $this->response = new Response();
//         $this->router = new Router($this->request, $this->response);
//         $this->db = new Database();
//         self::$view = new View(THEME); // Instantiate View with the correct theme
//     }

//     public function run() {
//         echo $this->router->resolve();
//     }
// }
