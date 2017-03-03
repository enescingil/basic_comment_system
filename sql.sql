create TABLE comment(
    cid int(11) not null PRIMARY KEY AUTO_INCREMENT,
    uid varchar(128) not null,
    date datetime not null,
    message TEXT not null
    );