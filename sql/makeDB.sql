create table user_info
	(idx		int NOT NULL auto_increment,
	 id		varchar(20),
   nickname varchar(20),
	 pw		varchar(20),
	 admin int(1) DEFAULT 0,
	 primary key (idx),
   unique (id)
	);

create table star_info
	(idx		int NOT NULL auto_increment,
	 name		varchar(50),
   summary	varchar(200),
	 primary key (idx)
	);

create table sns
	(star_idx int NOT NULL,
	 sns_type	varchar(50) NOT NULL ,
   addr	varchar(200),
	 primary key (star_idx,sns_type),
     foreign key(star_idx) references star_info(idx)
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
    foreign key(star_idx) references star_info(idx),
    foreign key(tag_idx) references tag(tag_idx)
);
