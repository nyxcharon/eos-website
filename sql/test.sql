CREATE TABLE test_user 

(

	userid		int			NOT NULL	AUTO_INCREMENT,

	username	varchar(30)		NOT NULL,

	email					varchar(50)	NOT NULL	UNIQUE,

	regdate							date,

	reglink								varchar(50)				UNIQUE,

	registered							boolean						NOT NULL,

									

									CONSTRAINT	test_user_userid_pk		PRIMARY KEY (userid)

);



CREATE TABLE test_key

(

	key		varchar(20)	NOT NULL,

	userid				int,

	

	CONSTRAINT	test_key_key_pk	PRIMARY KEY (key),

	CONSTRAINT	test_key_userid_fk	FOREIGN Key (userid)	REFERENCES test_user (userid)

);



CREATE TABLE test_address

(

	logid		int			NOT NULL	AUTO_INCREMENT,

	userid					int			NOT NULL,

	ip								    varchar(15)	NOT NULL,

	date								    		date		NOT NULL,

	

	CONSTRAINT	test_ip_logid_pk			PRIMARY KEY (logid),

	CONSTRAINT	test_ip_userid_fk				FOREIGN KEY (userid)	REFERENCES test_user (userid)

);

