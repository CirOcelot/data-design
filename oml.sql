INSERT INTO user(userId, userName, userEmail, userSettings, userSupport, userInvite, userSignOut)
VALUES (unhex("4098fd60b3014e5a8c9a4c69e330773f"), "userName","userEmail", "user Settings page", "user support page",
"user invite page","user sign out");

INSERT INTO coin(coinId, coinMarketCap, coinAllTimeHigh, coinVolume, coinSupply)
VALUES (unhex("17c9816f9be94cb3ba01cc5f0413ae57"),"market cap","all time high",
"volume","supply");

INSERT INTO portfolio(portfolioUserId, portfolioCoinId, portfolioListStyle, portfolioChartStyle, portfolioId)
VALUES (unhex("4098fd60b3014e5a8c9a4c69e330773f"), unhex("17c9816f9be94cb3ba01cc5f0413ae57"),"List", "Chart",unhex("0876f936163f469abe5bd8c14a8aa0a1"));

UPDATE user SET userName = "jjain2" WHERE userId = unhex("4098fd60b3014e5a8c9a4c69e330773f");

DELETE FROM portfolio WHERE portfolioId = unhex("0876f936163f469abe5bd8c14a8aa0a1");

SELECT portfolioId, portfolioUserId, portfolioCoinId, portfolioListStyle, portfolioChartStyle FROM portfolio WHERE portfolioId = unhex("0876f936163f469abe5bd8c14a8aa0a1");

SELECT portfolio.portfolioId, portfolio.portfolioUserId, portfolio.portfolioCoinId, coin.coinId FROM portfolio INNER JOIN coin ON portfolio.portfolioCoinId = coin.coinId WHERE portfolioId = unhex("0876f936163f469abe5bd8c14a8aa0a1");