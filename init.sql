drop table if exists blog_post;

create table blog_post (
    id serial,
    title varchar(100),
    content text,
    time timestamp default current_timestamp
);

insert into blog_post (title, content) values ('Hello', 'World'); 
insert into blog_post (title, content) values ('Hello', 'yo');