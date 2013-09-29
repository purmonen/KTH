drop table if exists blog_post;

create table blog_post (
    id serial,
    title varchar(100),
    content text,
    time timestamp default current_timestamp
);