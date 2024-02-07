CREATE DATABASE MSUCTO;

DROP TABLE IF EXISTS Users;
CREATE TABLE Users(
  Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Username varchar(100) NOT NULL,
  Email varchar(255) NOT NULL,
  Password varchar(255) NOT NULL,
  CreatedOn datetime, NOT NULL,
  isAdmin bit NOT NULL
);
DROP TABLE IF EXISTS Responses;
CREATE TABLE Responses(
  id int NOT NULL AUTO_INCREMENT,
  time_date datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  full_name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone_number varchar(255) NOT NULL,
  annual_turnover decimal NOT NULL,
  property_cards int NOT NULL,
  employe int NOT NULL,
  documents int NOT NULL,
  legal_form varchar(255) NOT NULL,
  scope_of_business varchar(255) NOT NULL,
  interest varchar(255) NOT NULL,
  tax_pay varchar(255) NOT NULL,
  inf varchar(1000)
  
  


);
DROP TABLE IF EXISTS Comments;
CREATE TABLE Comments(
  IdComment int,
  userId int,
   date_comment datetime,
  comment_text varchar(1000),
   CONSTRAINT `fk_comment_user`
    FOREIGN KEY (userId) REFERENCES Users(Id)
    ON DELETE CASCADE
    ON UPDATE CASCADE

);



