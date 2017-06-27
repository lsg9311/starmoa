create table user_info
	(user_idx		int NOT NULL auto_increment,
	 id		varchar(20) unique,
   nickname varchar(20) unique,
	 pw		varchar(20),
	 admin int(1) DEFAULT 0,
	 primary key (user_idx)
	);

create table star_info
	(star_idx		int NOT NULL auto_increment,
	 name		varchar(50),
   summary	varchar(200),
	 primary key (star_idx)
	);

create table sns
	(star_idx int NOT NULL,
	 sns_type	varchar(50) NOT NULL ,
   addr	varchar(200),
	 primary key (star_idx,sns_type),
     foreign key(star_idx) references star_info(star_idx)
	);

create table tag
	(tag_idx		int NOT NULL auto_increment,
	 tag_name		varchar(50) unique,
   summary	varchar(200),
	 primary key (tag_idx)
	);

create table star_has_tag
(
	star_idx int,
    tag_idx int,
    primary key(star_idx,tag_idx),
    foreign key(star_idx) references star_info(star_idx),
    foreign key(tag_idx) references tag(tag_idx)
);

create table user_like_tag
(
	user_idx int,
    tag_idx int,
    primary key(user_idx,tag_idx),
    foreign key(user_idx) references user_info(user_idx),
    foreign key(tag_idx) references tag(tag_idx)
);
create table user_pick
(
	user_idx int,
    star_idx int,
    primary key(user_idx,star_idx),
    foreign key(user_idx) references user_info(user_idx),
    foreign key(star_idx) references star_info(star_idx)
);

create table reply(
	reply_idx int NOT NULL auto_increment,
	user_idx int,
    star_idx int,
    content varchar(500),
    primary key(reply_idx),
    foreign key(user_idx) references user_info(user_idx),
    foreign key(star_idx) references star_info(star_idx)
);