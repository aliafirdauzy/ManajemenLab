<?php


namespace Fuel\Core;



class Database_Expression
{

	// Raw expression string
	protected $_value;

	/**
	 * Sets the expression string.
	 *
	 *     $expression = new Database_Expression('COUNT(users.id)');
	 *
	 * @return  void
	 */
	public function __construct($value)
	{
		// Set the expression string
		$this->_value = $value;
	}

	/**
	 * Get the expression value as a string.
	 *
	 *     $sql = $expression->value();
	 *
	 * @return  string
	 */
	public function value()
	{
		return (string) $this->_value;
	}

	/**
	 * Return the value of the expression as a string.
	 *
	 *     echo $expression;
	 *
	 * @return  string
	 * @uses    Database_Expression::value
	 */
	public function __toString()
	{
		return $this->value();
	}

}
