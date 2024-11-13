-- Create Database
CREATE DATABASE football_club;
USE football_club;

-- 1. Teams Table
CREATE TABLE Teams (
    team_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    coach VARCHAR(100),
    stadium VARCHAR(100),
    founded_year INT,
    logo_url VARCHAR(255)
);

-- 2. Players Table
CREATE TABLE Players (
    player_id INT PRIMARY KEY AUTO_INCREMENT,
    team_id INT,
    name VARCHAR(100) NOT NULL,
    position VARCHAR(50),
    nationality VARCHAR(100),
    date_of_birth DATE,
    height DECIMAL(3, 2),
    weight DECIMAL(4, 1),
    profile_image_url VARCHAR(255),
    FOREIGN KEY (team_id) REFERENCES Teams(team_id) ON DELETE SET NULL
);

-- 3. Matches Table
CREATE TABLE Matches (
    match_id INT PRIMARY KEY AUTO_INCREMENT,
    home_team_id INT,
    away_team_id INT,
    match_date DATETIME,
    venue VARCHAR(100),
    home_team_score INT DEFAULT 0,
    away_team_score INT DEFAULT 0,
    FOREIGN KEY (home_team_id) REFERENCES Teams(team_id) ON DELETE SET NULL,
    FOREIGN KEY (away_team_id) REFERENCES Teams(team_id) ON DELETE SET NULL
);

-- 4. Fans Table
CREATE TABLE Fans (
    fan_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    favorite_team_id INT,
    registration_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (favorite_team_id) REFERENCES Teams(team_id) ON DELETE SET NULL
);

-- 5. News Table
CREATE TABLE News (
    news_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    content TEXT,
    author VARCHAR(100),
    publish_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    image_url VARCHAR(255)
);

-- 6. Events Table
CREATE TABLE Events (
    event_id INT PRIMARY KEY AUTO_INCREMENT,
    event_name VARCHAR(100),
    event_date DATETIME,
    location VARCHAR(100),
    description TEXT
);

-- 7. Users Table
CREATE TABLE Users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE,
    role ENUM('admin', 'user') DEFAULT 'user',
    registration_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- 8. Player Stats Table
CREATE TABLE PlayerStats (
    stat_id INT PRIMARY KEY AUTO_INCREMENT,
    player_id INT,
    season VARCHAR(10),
    goals INT DEFAULT 0,
    assists INT DEFAULT 0,
    appearances INT DEFAULT 0,
    yellow_cards INT DEFAULT 0,
    red_cards INT DEFAULT 0,
    FOREIGN KEY (player_id) REFERENCES Players(player_id) ON DELETE CASCADE
);
