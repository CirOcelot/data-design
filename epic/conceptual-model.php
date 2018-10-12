<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Conceptual Model</title>
		<link rel="icon" href="./stargate-icon.ico">
	</head>
	<body>
		<h1>Data Design Project</h1>
		<h2>Conceptual Model</h2>
		<h3>Entities and Attributes: </h3>
		<h4>User: </h4>
		<ul>
			<li>userName</li>
			<li>userEmail</li>
			<li>userSettings</li>
			<li>userSupport</li>
			<li>userInvite</li>
			<li>userSignOut</li>
			<li>userId (primary key)</li>
		</ul>
		<h4>Coin: </h4>
		<ul>
			<li>coinId (primary key)</li>
			<li>coinMarketCap</li>
			<li>coinVolume</li>
			<li>coinSupply</li>
			<li>coinAllTimeHigh</li>
		</ul>
		<h4>Your Portfolio:</h4>
		<ul>
			<li>portfolioUserId (foreign key)</li>
			<li>portfolioId (primary key)</li>
			<li>portfolioCoinId (foreign key)</li>
			<li>portfolioListStyle</li>
			<li>portfolioChartStyle</li>
		</ul>
		<h3>ERD: </h3>
		<img src="./data-design-erd.png" alt="Coinbase's ERD">
		<p>
		<h3>Relations</h3>
		<p>One portfolio can have many Coins (1 to m)</p>
		<p>Many users can buy many coins. (m to n)</p>
		<a href="index.php">Back to Index</a>
		--
		<a href="use-case.php">Use Case</a>
	</body>
</html>