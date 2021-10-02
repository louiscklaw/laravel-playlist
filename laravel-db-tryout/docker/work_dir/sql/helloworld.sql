DROP TABLE helloworld;
CREATE TABLE helloworld (
  id INT AUTO_INCREMENT PRIMARY KEY,
  -- string
  phrase TEXT, s1 VARCHAR(30) NOT NULL, s2 VARCHAR(30) NOT NULL, c BINARY(3), d VARBINARY(30), tiny_summary TINYTEXT, summary TEXT,
  -- date and time data types
  sample_date DATE, sample_time TIME, sample_date_time DATETIME, sample_timestamp TIMESTAMP, sampe_year YEAR,
  -- spatial data types
  G GEOMETRY,
  -- json data types
  jdoc JSON
  );

INSERT INTO helloworld(
  phrase, s1,s2, c, d, tiny_summary, summary,
  sample_date, sample_time, sample_date_time, sample_timestamp, sampe_year,
  G,
  jdoc
  )
VALUES (
  -- string
  "Hello, World!","1","2", 'a','bcd', "tiny_summary", "summary ?",
  -- date and time data types
  '2021-10-06', '36:42:05', '2021-10-06 13:42:05', CURRENT_TIMESTAMP,'2021',
  -- spatial data types
  -- ST_GeomFromText('POINT(1 1)')
  ST_GeomFromText('LINESTRING(2 1, 6 6)'),

  -- json data types
  '{"key1": "value1", "key2": "value2"}'
  );

SELECT COUNT(*) FROM helloworld;


-- DROP TABLE table1;
-- CREATE TABLE table1 (
--   s1 VARCHAR(32765) NOT NULL,
--   s2 VARCHAR(32766) NOT NULL
--   );
-- INSERT INTO table1(s1, s2) VALUES('Yes', 'Yes2');

-- SELECT COUNT(*) FROM table1;
