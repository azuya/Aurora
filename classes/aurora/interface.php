<?php
/**
 * Manual ORM interface. Those methods are called
 * on database read and write. "Aurora_" classes should
 * implement this.
 *
 * @package Aurora
 * @author Samuel Demirdjian
 * @copyright (c) 2013, Samuel Demirdjian
 * @license http://license.enov.ws/mit MIT
 *
 */
interface Aurora_Interface
{
	public static function db_from_model($model);
	public static function db_to_model($model, array $row);
}