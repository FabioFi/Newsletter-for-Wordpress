<?php

// autoload_real_52.php generated by xrstf/composer-php52

class ComposerAutoloaderInit2f13324afdf607db5353843c6606de51_nl {
	private static $loader;

	public static function loadClassLoader($class) {
		if ('xrstf_Composer52_ClassLoader' === $class) {
			require dirname(__FILE__).'/ClassLoader52.php';
		}
	}

	/**
	 * @return xrstf_Composer52_ClassLoader
	 */
	public static function getLoader() {
		if (null !== self::$loader) {
			return self::$loader;
		}

		spl_autoload_register(array('ComposerAutoloaderInit2f13324afdf607db5353843c6606de51_nl', 'loadClassLoader'), true /*, true */);
		self::$loader = $loader = new xrstf_Composer52_ClassLoader();
		spl_autoload_unregister(array('ComposerAutoloaderInit2f13324afdf607db5353843c6606de51_nl', 'loadClassLoader'));

		$vendorDir = dirname(dirname(__FILE__));
		$baseDir   = dirname($vendorDir);
		$dir       = dirname(__FILE__);

		$map = require $dir.'/autoload_namespaces.php';
		foreach ($map as $namespace => $path) {
			$loader->add($namespace, $path);
		}

		$classMap = require $dir.'/autoload_classmap.php';
		if ($classMap) {
			$loader->addClassMap($classMap);
		}

		$loader->register(true);

		require $baseDir . '/includes/functions.php';
		require $baseDir . '/includes/deprecated-functions.php';
		require $baseDir . '/includes/forms/functions.php';
		require $baseDir . '/includes/forms/admin-functions.php';
		require $baseDir . '/includes/integrations/functions.php';
		require $baseDir . '/includes/default-actions.php';
		require $baseDir . '/includes/default-filters.php';

		return $loader;
	}
}
