ALTER DATABASE jjain2 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS portfolio;
DROP TABLE IF EXISTS coin;
DROP TABLE IF EXISTS `user`;

CREATE TABLE user (
	userId BINARY(16) NOT NULL,
	userName VARCHAR(32) NOT NULL,
	userEmail VARCHAR(128) NOT NULL,
	userSettings CHAR(128) NOT NULL,
	userSupport CHAR(128) NOT NULL,
	userInvite CHAR(128) NOT NULL,
	userSignOut CHAR(128) NOT NULL,
	UNIQUE(userEmail),
	UNIQUE(userInvite),
	PRIMARY KEY(userId)
);

CREATE TABLE coin (
	coinId BINARY(16) NOT NULL,
	coinMarketCap VARCHAR(100) NOT NULL,
	coinAllTimeHigh VARCHAR(100) NOT NULL,
	coinVolume VARCHAR(100) NOT NULL,
	coinSupply VARCHAR(100) NOT NULL,
	PRIMARY KEY(coinId)
);

CREATE TABLE portfolio (
	portfolioUserId BINARY(16),
	portfolioCoinId BINARY(16),
	portfolioListStyle VARCHAR(360),
	portfolioChartStyle VARCHAR(360),
	portfolioId BINARY(16),
	INDEX(portfolioUserId),
	INDEX(portfolioCoinId),
	FOREIGN KEY(portfolioUserId) REFERENCES user(userId),
	FOREIGN KEY(portfolioCoinId) REFERENCES coin(coinId),
	PRIMARY KEY(portfolioId)
)