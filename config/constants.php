<?php
/**
 * Application Constants
 * Nomad Traveler Platform
 */

// Application
define('APP_NAME', 'Nomad Traveler');
define('APP_VERSION', '1.0.0');
define('APP_ENV', getenv('APP_ENV') ?: 'production');
define('APP_URL', getenv('APP_URL') ?: 'https://nomadtraveler.com');

// Paths
define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', BASE_PATH . '/public');
define('VIEWS_PATH', BASE_PATH . '/src/views');
define('ASSETS_PATH', '/assets');
define('UPLOADS_PATH', '/uploads');

// Color Palette
define('PRIMARY_COLOR', '#14B8A6');
define('SECONDARY_COLOR', '#0EA5E9');
define('ACCENT_COLOR', '#F97316');
define('DARK_COLOR', '#0F172A');
define('LIGHT_COLOR', '#F8FAFC');

// Limits
define('ITEMS_PER_PAGE', 12);
define('MAX_UPLOAD_SIZE', 5242880); // 5MB
define('ALLOWED_EXTENSIONS', ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx']);
