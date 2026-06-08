CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE teams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    team_name VARCHAR(100) NOT NULL,
    budget BIGINT DEFAULT 10000000,
    reputation INT DEFAULT 10,
    factory_level INT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE drivers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT,
    name VARCHAR(100),
    skill INT DEFAULT 50,
    experience INT DEFAULT 50,
    salary BIGINT DEFAULT 100000,
    FOREIGN KEY (team_id) REFERENCES teams(id)
);

CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT,
    car_name VARCHAR(100),
    power_rating INT DEFAULT 50,
    reliability INT DEFAULT 50,
    condition_percent INT DEFAULT 100,
    FOREIGN KEY (team_id) REFERENCES teams(id)
);

CREATE TABLE races (
    id INT AUTO_INCREMENT PRIMARY KEY,
    race_name VARCHAR(100),
    country VARCHAR(100),
    race_order INT
);

CREATE TABLE standings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT,
    points INT DEFAULT 0,
    wins INT DEFAULT 0,
    FOREIGN KEY (team_id) REFERENCES teams(id)
);
