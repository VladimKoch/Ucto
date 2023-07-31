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
  id int NOT NULL ,
  time_date datetime NOT NULL,
  full_name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone_number varchar(255),
  annual_turnover decimal,
  property_cards int,
  employe int,
  documents int,
  legal_form varchar(255),
  scope_of_business varchar(255),
  interest varchar(255),
  tax_pay varchar(255),
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



