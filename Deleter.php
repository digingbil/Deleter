<?php 
/**
 * @version     0.0.1
 * @package     Deleter.php
 * @copyright   Copyright (C) 2021 Zoran Tanevski. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Zoran Tanevski <zoran@tanevski.com> - http://tanevski.com
 */
$dir = __DIR__;
$dir_iterator = new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS);
$recursive_iteratorr = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::CHILD_FIRST);
foreach ( $recursive_iteratorr as $file ) {
	$file->isDir() ?  rmdir($file) : unlink($file);
}
return true;