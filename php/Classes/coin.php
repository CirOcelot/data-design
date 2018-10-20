<?php
/**
 *
 * @author Jack Jain <jjain1998@gmail.com>
 * @version 0.3.1
 * Namespace is used to prevent clashing class names in different .php files.
 **/
	namespace jjain2\DataDesign;

	require_once(dirname(__DIR__, 2) . "./autoload.php");

	class coin {
		/**
		 * id for the coin, primary key.
		 * @var Uuid $coinId
		 **/
		private $coinId;
		/**
		 * coin's price at given time
		 * @var string $coinMarketCap
		 **/
		public $coinMarketCap;
		/**
		 * this is the highest the coin has been
		 * @var string $coinAllTimeHigh
		 */
		public $coinAllTimeHigh;
		/**
		 * dollar value that has run through the coin in the past 24 hours
		 * @var string $coinVolume
		 */
		public $coinVolume;
		/*
		 * number of coins being bought and sold
		 * @var
		 */
		public $coinSupply;

		public function __construct($newCoinId, string $newCoinMarketCap, string $newCoinAllTimeHigh, string $newCoinVolume,
	 string $newCoinSupply) {
			$this -> setCoinId($newCoinId);
			$this -> setCoinMarketCap($newCoinMarketCap);
			$this -> setCoinAllTimeHigh($newCoinAllTimeHigh);
			$this -> setCoinVolume($newCoinVolume);
			$this -> setCoinSupply($newCoinSupply);
		}
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	public function getCoinId() : Uuid {
		return($this->coinId);
	}
	}
