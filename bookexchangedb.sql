drop table if exists books;
drop table if exists users;

create table users (
    id      integer auto_increment primary key,
    name    varchar(255),
    email   varchar(255)
);

insert into users values (1, 'bob', 'bob@gmail.com');
insert into users values (2, 'mary', 'mary@gmail.com');

create table books (
    bookId      integer auto_increment primary key,
    name        varchar(100),
    email   	varchar(100),
    title   	varchar(100),
    description varchar(500),
    date    	datetime,
    picpath    	varchar(100),
    subject    	varchar(100),
    price 		double,
);

