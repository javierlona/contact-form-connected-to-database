CREATE DATABASE wd_form;

USE wd_form;

CREATE TABLE person (
  person_id int(11) NOT NULL AUTO_INCREMENT,
  submit_time_stamp datetime NOT NULL,
  person_name varchar(70) NOT NULL,
  person_email varchar(60) NOT NULL,
  person_phone varchar(15) NOT NULL,
    CONSTRAINT wd_form_person_id_pk PRIMARY KEY (person_id),
    CONSTRAINT wd_form_person_email_uk UNIQUE (person_email)
) CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER DATABASE wd_form CHARACTER SET utf8 COLLATE utf8_general_ci;

-- DROP DATABASE wd_form;
