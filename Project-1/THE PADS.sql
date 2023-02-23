/*https://www.hackerrank.com/challenges/the-pads/problem?isFullScreen=true*/
SELECT CONCAT(Name,CONCAT("(",CONCAT(SUBSTR(Occupation,1,1),")")))
FROM OCCUPATIONS
ORDER BY NAME ASC;

SELECT "There are a total of ", COUNT(Occupation), CONCAT(lower(Occupation),"s.")
FROM OCCUPATIONS
GROUP BY OCCUPATION
ORDER BY COUNT(Occupation), Occupation ASC
