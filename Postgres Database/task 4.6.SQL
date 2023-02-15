/*https://www.hackerrank.com/challenges/weather-observation-station-11/problem?isFullScreen=true*/
SELECT DISTINCT CITY
FROM STATION
WHERE  LEFT(LOWER(CITY),1) NOT IN('a','e','i','o','u')
OR  RIGHT(CITY,1) NOT IN('a','e','i','o','u');
