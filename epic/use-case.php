<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Use Case</title>
	</head>
	<body>
		<h1>Data Design Project</h1>
		<h2>User story: </h2>
		<p>
			John would like to quickly and conveniently purchase the most popular crypto currencies directly from his bank account.
		</p>
		<h2>Use Case: </h2>
		<p>
			<strong>Title: </strong>Buying bitcoin directly from his bank account.
		</p>
		<p>
			<strong>Description: </strong> John wants to buy bitcoin using funds in his bank account, and have them be stored in his vault on the site.
		</p>
		<p>
			<strong>User's Name and Their Role: </strong>John; Daytrader who loves purchasing coins at the dip.
		</p>
		<p>
			<strong>Usage preconditions: </strong>Must have bank account linked
		</p>
		<p>
			<strong>Usage postconditions: </strong>John will have bitcoin stored on the site's vault, that he can then send to a wallet or exchange.
		</p>
		<p><strong>Interaction Flow: </strong>
			<ul>
				<li>John types coinbase.com into his web browser.</li>
				<li>Server returns coinbase's login page.</li>
				<li>John enters his authentication information.</li>
				<li>Server authenticates, returns John's personal dashboard.</li>
				<li>John selects bitcoin.</li>
				<li>Server returns bitcoin page. John notices the price of the coin, and a chart showing the price over the past hour.</li>
				<li>John selects the buy button.</li>
				<li>Server opens bitcoin buy page. John notices his linked bank account is selected to withdraw funds from.</li>
				<li>John enters the dollar amount of bitcoin he wants and selects "buy."</li>
				<li>Server completes request and delivers bitcoin to John's vault.</li>
				<li>John contemplates his decision to buy in this market, forgetting entirely about his user experience.</li>
			</ul>
		<a href="index.php">Back to Index</a>
		--
		<a href="john.php">Persona</a>
		--
		<a href="conceptual-model.php">Conceptual Model</a>
	</body>
</html>