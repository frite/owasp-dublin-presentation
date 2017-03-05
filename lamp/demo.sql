CREATE TABLE IF NOT EXISTS `testdemo` (
id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  labels text NOT NULL,
  password text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO testdemo (labels, password) VALUES
('random.user', 'Salt'),
('super.admin', 'Pepper'),
('other.user', 'insert'),
('last.user', 'w00t');
