<?php
/**
 * jobber job board platform
 *
 * @author     Filip C.T.E. <http://www.filipcte.ro> <me@filipcte.ro>
 * @license    You are free to edit and use this work, but it would be nice if you always referenced the original author ;)
 *             (see license.txt).
 */

	header('Content-Type: text/html; charset=UTF-8');
  	ini_set('display_errors', 'on');
	error_reporting(E_ALL ^ E_STRICT);

	date_default_timezone_set('Europe/Bucharest');

	define('JOBBERBASE_VERSION', '1.8');

	// MySQL + misc settings for local environment
	if ($_SERVER['SERVER_NAME'] == 'localhost')
	{
		define('DB_HOST', 'localhost');
		define('DB_PORT', 3306);
		define('DB_USER', 'root');
		define('DB_PASS', '');
		define('DB_NAME', 'jobberbase');
		define('DB_PREFIX', '');
		define('LOCATION', 'local');
		define('ENVIRONMENT', 'dev');
	}
	// MySQL + misc settings for production environment
	else
	{
		define('DB_HOST', 'localhost');
		define('DB_PORT', 3306);
		define('DB_USER', 'root');
		define('DB_PASS', '');
		define('DB_NAME', 'jobberbase');
		define('LOCATION', 'online');
		define('DB_PREFIX', '');
		define('ENVIRONMENT', 'prod');
	}

	define('APP_PATH',dirname(__FILE__).DIRECTORY_SEPARATOR);

  if(isset($_SERVER['SCRIPT_NAME']))
	{
		# on Windows _APP_MAIN_DIR becomes \ and abs url would look something like HTTP_HOST\/restOfUrl, so \ should be trimed too
		# @modified Chis Florinel <chis.florinel@candoo.ro>

		$app_main_dir = rtrim(dirname($_SERVER['SCRIPT_NAME']),'/\\');
		define('_APP_MAIN_DIR', $app_main_dir);
  }
	else
	{
		die('[config.php] Cannot determine APP_MAIN_DIR, please set manual and comment this line');
  }

  if(isset($_SERVER['HTTP_HOST']) && isset($_SERVER['SERVER_PORT']))
	{
  	if($_SERVER['SERVER_PORT'] == 80)
    {
      define ('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . _APP_MAIN_DIR . '/');
    }
    else
    {
      define ('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'] . _APP_MAIN_DIR . '/');
    }
  }
  else
  {
    die('[config.php] Cannot determine BASE_URL, please set manual and comment this line');
  }

	// Function and classes includes
	require_once '_includes/function.validate_email.php';
	require_once '_includes/function.redirect_to.php';
	require_once '_includes/function.printr.php';
	require_once '_includes/function.escape.php';
	require_once '_includes/functions.php';
	require_once '_includes/recaptchalib.php';
	require_once '_includes/class.phpmailer.php';
	require_once '_includes/class.Postman.php';
	require_once '_includes/class.Textile.php';
	require_once '_includes/class.Sanitizer.php';
	//require_once '_includes/class.Db.php';
	// comment the previous line and uncomment the next line if you get a Class 'mysqli' not found error
	require_once '_includes/class.Db.MySql.php';
	require_once '_includes/class.Job.php';
	require_once '_includes/class.Paginator.php';
	require_once '_includes/class.Feed.php';
	require_once '_includes/class.SpamReport.php';
	require_once '_includes/class.Api.php';
	require_once '_includes/class.JobApplication.php';
	require_once '_includes/class.SearchKeywords.php';
	require_once '_includes/class.JobberSettings.php';
	require_once '_includes/class.FormValidator.php';
	require_once '_includes/smarty/libs/Smarty.class.php';

	// Setup database connection
	try
	{
		$db = new Db(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
		$db->Execute('SET NAMES UTF8');
	}
	catch(ConnectException $exception)
	{
		if (ENVIRONMENT == 'dev')
		{
			echo "Database Connection Error:<br />";
			printr($exception->getMessage());
		}
	}

	// Load the Site-Specific Settings
	$jobber_settings = new JobberSettings();
	$settings = $jobber_settings->GetSettings();

	// Global settings definitions
	define('SITE_NAME', $settings['site_name']);
	define('THEME', $settings['theme']);
	define('NOTIFY_EMAIL', $settings['notify_email']);
	define('ADMIN_EMAIL', $settings['admin_email']);
	define('MAX_CV_SIZE', $settings['max_cv_size']);
	define('FILE_UPLOAD_DIR', $settings['file_upload_dir']);
	define('MINUTES_BETWEEN_APPLY_TO_JOBS_FROM_SAME_IP', $settings['apply_delay']);
	define('OLD_JOB_NOTIFY', $settings['old_job_notify']);
	define('ENABLE_NEW_JOBS', $settings['enable_new_jobs']);
	define('JOBS_PER_PAGE', $settings['jobs_per_page']);
	define('SIDEBAR_SHOW_WHAT', $settings['sidebar_show_what']);
	define('SIDEBAR_ONLY_CITIES_WITH_JOBS', $settings['sidebar_only_cities_with_jobs']);
	define('DATE_FORMAT', $settings['date_format']);
	define('DATE_TIME_FORMAT', $settings['date_time_format']);
	define('URL_JOB', $settings['url_job']);
	define('URL_JOBS', $settings['url_jobs']);
	define('URL_CITIES', $settings['url_cities']);
	define('URL_COMPANIES', $settings['url_companies']);
	define('URL_JOBS_IN_CITY', $settings['url_jobs_in_city']);
	define('URL_JOBS_AT_COMPANY', $settings['url_jobs_at_company']);
	define('SEARCH_METHOD', $settings['search_method']);
	define('SEARCH_RESULTS_PER_PAGE', $settings['jobs_per_search']);
	define('SEARCH_AMOUNT_PAGES', '8'); //Max. pages to display (must be an even number!)
	define('ENABLE_RECAPTCHA', $settings['enable_recaptcha']);
	define('CAPTCHA_PUBLIC_KEY', $settings['captcha_public_key']);
	define('CAPTCHA_PRIVATE_KEY', $settings['captcha_private_key']);

	// Setup Smarty
	$smarty = new Smarty();
	$smarty->template_dir = APP_PATH . '_templates/' . THEME . '/';
	$smarty->compile_dir = APP_PATH . '_templates/' . THEME . '/_cache/';

	// Create Textile object
	$textile = new Textile;

	// Split URL - get parameters
	$_app_info['params'] = array();

	// if your server is IIS, use these lines and comment lines 135-137:
	//$_url = $_SERVER["QUERY_STRING"];

	// if server is Apache:
	$newUrl = str_replace('/', '\/', _APP_MAIN_DIR);
    $pattern = '/'.$newUrl.'/';
    $_url = preg_replace($pattern, '', $_SERVER['REQUEST_URI'], 1);
	$_tmp = explode('?', $_url);
	$_url = $_tmp[0];

	if ($_url = explode('/', $_url))
	{
		foreach ($_url as $tag)
		{
			if ($tag)
			{
				$_app_info['params'][] = $tag;
			}
		}
	}
?>
