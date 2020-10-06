CREATE DATABASE 21server;
CREATE USER 'qcraghas'@'localhost' IDENTIFIED BY '21school';
GRANT ALL PRIVILEGES ON 21server.* TO 'qcraghas'@'localhost';
FLUSH PRIVILEGES;
