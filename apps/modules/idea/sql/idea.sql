create table idea(
    id integer not null primary key,
    title varchar(255),
    description varchar(255),
    rating float,
    votes int,
    ratingcount int,
    author varchar(255)
);