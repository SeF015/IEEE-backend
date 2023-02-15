/*https://www.hackerrank.com/challenges/what-type-of-triangle/problem?isFullScreen=true*/
select
case
when ((a+b<=c) or (a+c<=b) or (b+c<=a)) then 'Not A Triangle'
when ((a=b) and (b=c)) then 'Equilateral'
when (((a=b) and (a<>c)) or ((a=c) and (a<>b)) or ((c=b) and (a<>c))) then 'Isosceles'
when ((a<>b) and (a<>c) and (b<>c)) then 'Scalene'
end
from Triangles;
