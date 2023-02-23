/*https://www.hackerrank.com/challenges/occupations/problem?isFullScreen=true*/
SET @var1=0, @var2=0, @var3=0, @var4=0;
SELECT MIN(Doctor), MIN(Professor), MIN(Singer), MIN(Actor)
FROM(SELECT CASE WHEN Occupation="Doctor" THEN (@var1:=@var1+1) WHEN Occupation="Professor" THEN (@var2:=@var2+1) WHEN Occupation="Singer" THEN (@var3:=@var3+1) WHEN Occupation="Actor" THEN (@var4:=@var4+1) END AS RowNumber,
CASE WHEN Occupation="Doctor" THEN Name END AS Doctor,
CASE WHEN Occupation="Professor" THEN Name END AS Professor,
CASE WHEN Occupation="Singer" THEN Name END AS Singer,
CASE WHEN Occupation="Actor" THEN Name END AS Actor FROM OCCUPATIONS ORDER BY Name)
GROUP BY RowNumber;
