drop schema if exists student;
CREATE SCHEMA `student`;
use student;

create table student.accounts(
	UID int not null primary key auto_increment,
    #name varchar(50) null, (need?)
    username varchar(50) null,
    password varchar(50) null

);



insert into student.accounts (username, password)
values
("jhu17", "jinsong1281567"),
("jweng07", "jonathan1285684"),
("dchandpa", "dhara1289397"),
("jwang132", "jian1294972");


Select * from student.accounts;