<?php


namespace Fuel\Core;

class Database_Result_Cached extends \Database_Result
{

	public function __construct(array $result, $sql, $as_object = null)
	{
		parent::__construct($result, $sql, $as_object);

		// Find the number of rows in the result
		$this->_total_rows = count($result);
	}

	public function __destruct()
	{
		// Cached results do not use resources
	}

	public function cached()
	{
		return $this;
	}

	public function seek($offset)
	{
		if ( ! $this->offsetExists($offset))
		{
			return false;
		}

		$this->_current_row = $offset;
		return true;
	}

	public function current()
	{
		return $this->valid() ? $this->_result[$this->_current_row] : null;
	}

}
