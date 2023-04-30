CREATE TABLE users(
    user_id INT  NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    email    VARCHAR(100) NOT NULL,
    userpassword LONGTEXT NOT NULL,
    PRIMARY KEY (user_id)
);