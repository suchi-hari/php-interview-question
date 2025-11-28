<?php

SELECT name, salary FROM employee WHERE salary = (SELECT MAX(salary) FROM employee WHERE salary < (SELECT MAX(salary) FROM employee)); 
    
    
// How would you find duplicate email records in the users' table?

SELECT u1.first_name, u1.last_name, u1.email FROM users as u1 
INNER JOIN (SELECT email FROM users GROUP BY email HAVING count(id) > 1) u2 ON u1.email = u2.email;