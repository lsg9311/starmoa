create table user_info
	(idx		int NOT NULL auto_increment,
	 id		varchar(20),
     nickname varchar(20),
	 pw		varchar(20),
	 primary key (idx),
     unique (id)
	);

create table star_info
	(idx		int NOT NULL auto_increment,
	 name		varchar(50),
     summary	varchar(200),
	 primary key (idx)
	);