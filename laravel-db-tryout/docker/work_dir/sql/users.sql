DROP TABLE users;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30),
  active TINYINT
  );

INSERT INTO users( username, active  )
VALUES ( 'hello_user', 1 );

SELECT COUNT(*) FROM users;

-- DROP TABLE table1;
-- CREATE TABLE table1 (
--   s1 VARCHAR(32765) NOT NULL,
--   s2 VARCHAR(32766) NOT NULL
--   );
-- INSERT INTO table1(s1, s2) VALUES('Yes', 'Yes2');

-- SELECT COUNT(*) FROM table1;
