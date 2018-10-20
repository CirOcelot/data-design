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
			try {
				$this->setCoinId($newCoinId);
				$this->setCoinMarketCap($newCoinMarketCap);
				$this->setCoinAllTimeHigh($newCoinAllTimeHigh);
				$this->setCoinVolume($newCoinVolume);
				$this->setCoinSupply($newCoinSupply);
			} catch(\InvalidArgumentException|\RangeException|\Exception|\TypeError $exception) {
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exception->getMessage(), 0, $exception));
			}
		}
	public function getCoinId() : Uuid {
		return($this->coinId);
	}
	public function setCoinId($newCoinId) : void {
			try{
				$uuid = self::validateUuid($newCoinId);
			} catch(\InvalidArgumentException|\RangeException|\Exception|\TypeError $exception) {
			}
			$this->coinId=$uuid;
	}

		/**
		 * @return string
		 */
		public function getCoinMarketCap(): string {
			return $this->coinMarketCap;
		}

		/**
		 * @param string $newCoinMarketCap
		 */
		public function setCoinMarketCap(string $newCoinMarketCap): void {
			$newCoinMarketCap = trim($newCoinMarketCap);
			$newCoinMarketCap = filter_var($newCoinMarketCap, FILTER_SANITIZE_STRING,
				FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newCoinMarketCap) === true) {
				throw (new \InvalidArgumentException("Market cap is empty"));
			}
			if(stlen($newCoinMarketCap) >= 9) {
				throw (new \RangeException("Content too large"));
			}
			$this->coinMarketCap = $newCoinMarketCap;
	}
	}
