/*
CREATE DATABASE football_tournament
*/

CREATE TABLE team(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name_team VARCHAR(64) NOT NULL
);

CREATE TABLE game_match(
    id INT PRIMARY KEY AUTO_INCREMENT,
    data_match DATE NOT NULL,
    team_1_id INT NOT NULL,
    team_2_id INT NOT NULL,
    gol_team_1 INT NOT NULL,
    gol_team_2 INT NOT NULL,
    
    CONSTRAINT fk_game_match_team_1_id 
        FOREIGN KEY (team_1_id)
        REFERENCES team(id)
        ON UPDATE CASCADE,
    
    CONSTRAINT fk_game_match_team_2_id
        FOREIGN KEY (team_2_id)
        REFERENCES team(id)
        ON UPDATE CASCADE
);

