create database project charset utf8;

use project;

create table pr_admin(
    id int primary key auto_increment,
    username varchar(20) not null unique comment '用户名:具有唯一性',
    password char(32) not null comment '密码:md5加密'
) charset utf8;

insert into pr_admin values(null,'admin',md5('admin'));


/* CREATE DATABASE project CHARSET utf8;

USE project;

CREATE TABLE pr_admin(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL UNIQUE COMMENT '用户名:具有唯一性',
    PASSWORD CHAR(32) NOT NULL COMMENT '密码:md5加密'
) CHARSET utf8;

INSERT INTO pr_admin VALUES(NULL,'admin',MD5('admin')); */




