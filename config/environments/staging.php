<?php
/** Staging */
ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
/** Disable all file modifications including updates and update notifications */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISALLOW_FILE_MODS', false);

/** Plugins */
define('S3_UPLOADS_USE_LOCAL', true);
