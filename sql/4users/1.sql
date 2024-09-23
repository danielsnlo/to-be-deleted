USE sql_store;

SELECT * FROM mysql.user;

CREATE USER php_app@localhost identified by '1234';

-- DROP USER php_app@localhost;

GRANT ALL PRIVILEGES ON sql_store.* TO php_app@localhost;
FLUSH PRIVILEGES;

-- SELECT * FROM sql_hr.employees;