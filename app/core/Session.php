<?php

class Session {
    protected $timeout;

    /**
     * Session constructor.
     *
     * @param int $timeout - Session timeout in seconds.
     */
    public function __construct($timeout = 1800) {
        session_start();
        $this->timeout = $timeout;

        // Check if the session has expired
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $this->timeout)) {
            $this->destroy(); // Destroy session if it's expired
        }

        $_SESSION['LAST_ACTIVITY'] = time(); // Update last activity timestamp
    }

    /**
     * Set a session variable.
     *
     * @param string $key - The key for the session variable.
     * @param mixed $value - The value to store.
     */
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * Get a session variable.
     *
     * @param string $key - The key for the session variable.
     * @return mixed|null - The stored value or null if not set.
     */
    public function get($key) {
        return $_SESSION[$key] ?? null;
    }

    /**
     * Remove a session variable.
     *
     * @param string $key - The key for the session variable to remove.
     */
    public function remove($key) {
        unset($_SESSION[$key]);
    }

    /**
     * Regenerate the session ID.
     */
    public function regenerate() {
        session_regenerate_id(true); // Regenerate session ID to prevent fixation
    }

    /**
     * Destroy the session.
     */
    public function destroy() {
        $_SESSION = [];
        if (session_id()) {
            session_unset();
            session_destroy();
        }
    }
}
