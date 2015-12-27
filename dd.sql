drop database nitk;
create database nitk;
use nitk;


create table organizer(
oid int primary key AUTO_INCREMENT,
username varchar(256),
password varchar(256),
name varchar(256),
emailid varchar(256),
contact_no int
);

create table participant(
	pid varchar (256) primary key ,
	name varchar(256),
	contact_no varchar(256),
  email varchar (256)

);

create table event(
eid int primary key AUTO_INCREMENT,
name varchar(256),
edate varchar(256) ,
etime varchar(256),
poster varchar(256),
video varchar(256),
description varchar(256),
oid int,
category varchar(256),
venue varchar(256),
# registration_start_date varchar (256),
# registration_end_date varchar (256),
# registration_start_time varchar (256),
# registration_end_time varchar (256),
# team_members int,
seats int,
prerequisites varchar (256),
foreign key(oid) references organizer(oid) 
 );

create table registers_for(
pid varchar (256),
eid int,
primary key(pid,eid),
foreign key(pid) references participant(pid),
foreign key(eid) references event(eid));



 insert into organizer(oid,username,password,name) values(1,'mhkgarg','test1','mahak');
 insert into organizer(oid,username,password,name) values(2,'mhkbht','test2','baheti');
 insert into organizer(oid,username,password,name) values(3,'jyo','test3','jyoti');
#
# insert into event(eid,name,oid,team_members,registration_end_date,registration_end_time) values(1,'spandan',1,3,"dec",'12');
#
# insert into participant values(1,'mahak',1);
# insert into participant values(2,'anuj',2);
# insert into participant values(3,'shubhangi',3);

insert into event values(1,'bharatdarshan','16/10/14','4 PM','p1.jpg',NULL,'It is an interbranch dance competition',1,'Cultural','SJA',400,'t1.pdf');
insert into event values(2,'carnatic violin concert','17/10/14','2 pm','p2.jpg',NULL,'It is musical concert',2,'cultural','SJA',500,'t2.pdf');
insert into event values(3,'limelight','18/10/14','5 pm','p3.jpg',NUll,'it is a 3d photography workshop',3,'Art','mb',100,'t3.pdf');
insert into event values(4,'ethical hacking','19/10/14','11 am','p4.jpg',NULL,'it is a type of hacking',1,'academics','mb',75,'t4.pdf');
insert into event values(5,'artistic forum','20/10/14','6 pm','p5.jpg',NULL,'it is a hindi essay competiton',3,'Art','mb',100,'t5.pdf');
insert into event values(6,'hindi event','12/10/14','7 am','p6.jpg',NULL,'it is a hindi essay competition',2,'literature','msh',80,'t6.pdf');



