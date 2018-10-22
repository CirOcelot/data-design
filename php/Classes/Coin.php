<?php
/**
 *
 * @author Jack Jain <jjain1998@gmail.com>
 * @version 0.3.1
 * Namespace is used to prevent clashing class names in different .php files.
 **/
	namespace jjain2\DataDesign;
	require_once("../Classes/autoload.php");
	require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");
	use Ramsey\Uuid\Uuid;
	class Coin {
		use ValidateUuid;
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
				$uuid = self::ValidateUuid($newCoinId);
			} catch(\InvalidArgumentException|\RangeException|\Exception|\TypeError $exception) {
			}
			$this->coinId = $uuid;
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
			if(strlen($newCoinMarketCap) >= 9) {
				throw (new \RangeException("Content too large"));
			}
			$this->coinMarketCap = $newCoinMarketCap;
	}

		/**
		 * @return string
		 */
		public function getCoinAllTimeHigh(): string {
			return $this->coinAllTimeHigh;
		}

		/**
		 * @param string $newCoinAllTimeHigh
		 */
		public function setCoinAllTimeHigh(string $newCoinAllTimeHigh): void {
			$newCoinAllTimeHigh = trim($newCoinAllTimeHigh);
			$newCoinAllTimeHigh = filter_var($newCoinAllTimeHigh,
				FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newCoinAllTimeHigh)=== true) {
				throw (new \InvalidArgumentException("All time high is empty"));
			}
			if(strlen($newCoinAllTimeHigh) >=10){
				throw (new \RangeException("Content too large"));
			}
			$this->coinAllTimeHigh=$newCoinAllTimeHigh;
		}

		/**
		 * @return string
		 */
		public function getCoinVolume(): string {
			return $this->coinVolume;
		}


		/**
		 * @param string $newCoinVolume
		 */
		public function setCoinVolume (string $newCoinVolume): void {
			$newCoinVolume = trim($newCoinVolume);
			$newCoinVolume = filter_var($newCoinVolume,
				FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newCoinVolume) === true) {
				throw (new \InvalidArgumentException("Volume is empty"));
			}
			if(strlen($newCoinVolume) >=10){
				throw (new \RangeException("Content too large"));
			}
			$this->coinAllTimeHigh=$newCoinVolume;
		}

		/**
		 * @return mixed
		 */
		public function getCoinSupply() {
			return $this->coinSupply;
		}

		/**
		 * @param string $newCoinSupply
		 */
		public function setCoinSupply(string $newCoinSupply): void {
			$newCoinSupply = trim($newCoinSupply);
			$newCoinSupply = filter_var($newCoinSupply,
				FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newCoinSupply)=== true) {
				throw (new \InvalidArgumentException("Supply is empty"));
			}
			if(strlen($newCoinSupply) >=10){
				throw (new \RangeException("Content too large"));
			}
			$this->coinAllTimeHigh=$newCoinSupply;
		}

		public function insert(\PDO $pdo) : void {
			$query = "INSERT INTO coin(coinId, coinMarketCap, coinAllTimeHigh, coinVolume, coinSupply) VALUES (:coinId, :coinMarketCap, :coinAllTimeHigh, :coinVolume, :coinSupply)";
			$statement = $pdo->prepare($query);
			$parameters = ["coinId" => $this->coinId->getBytes(), "coinMarketCap" => $this->coinMarketCap, "coinAllTimeHigh" => $this->coinAllTimeHigh, "coinVolume" => $this->coinVolume, "coinSupply" => $this->coinSupply];

		}

	}
