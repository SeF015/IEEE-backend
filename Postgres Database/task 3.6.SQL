/*https://www.hackerrank.com/challenges/more-than-75-marks/problem?isFullScreen=*/
SELECT name
FROM students
WHERE marks > 75
ORDER BY SUBSTR(name, LENGTH(name)-2, 3), id;
