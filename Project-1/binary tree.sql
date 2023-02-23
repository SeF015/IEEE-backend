/* https://www.hackerrank.com/challenges/binary-search-tree-1/problem?isFullScreen=true */

select N,
if(P is null, 'Root', if((select count(*) from BST where P = B.N)> 0, 'Inner', 'Leaf')) 
from BST as B
order by N;
