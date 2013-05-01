<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\helpers;

use yii\base\Object;

/**
 * JsonExpression marks a string as a JavaScript expression.
 * When using [[Json::encode()]] to encode a value, JsonExpression objects
 * will be specially handled and encoded as a JavaScript expression instead of a string.
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class JsonExpression extends Object
{
	/**
	 * @var string the JavaScript expression represented by this object
	 */
	public $expression;

	/**
	 * Constructor.
	 * @param string $expression the JavaScript expression represented by this object
	 * @param array $config additional configurations for this object
	 */
	public function __construct($expression, $config = array())
	{
		$this->expression = $expression;
		parent::__construct($config);
	}

	/**
	 * The PHP magic function converting an object into a string.
	 * @return string the JavaScript expression.
	 */
	public function __toString()
	{
		return $this->expression;
	}
}