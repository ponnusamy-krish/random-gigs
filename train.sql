create table users
(
    id    int auto_increment
        primary key,
    name  varchar(255) not null,
    email varchar(255) not null,
    constraint users_email_uindex
        unique (email)
)

insert into users values(1, 'test', 'test')
insert into users values(2, 'test2', 'test2')
insert into users values(3, 'test3', 'test3')
insert into users values (4, 'test4', 'test4')