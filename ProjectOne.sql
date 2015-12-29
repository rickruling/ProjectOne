create database projectone;

create table project_one.questions(
q_id int,
content text ,
option_a varchar(1),
option_b varchar(1),
option_c varchar(1),
option_d varchar(1),
answer varchar(1),
hint text,
CONSTRAINT pk_qid_questions PRIMARY KEY (q_id));

insert into project_one.questions values(1,'question one content?','a','b','c','d','c',null);
insert into project_one.questions values(2,'question two content?','a','b','c','d','b',null);
insert into project_one.questions values(3,'question three content?','a','b','c','d','a',null);
insert into project_one.questions values(4,'question four content?','a','b','c','d','d',null);
insert into project_one.questions values(5,'question five content?','a','b','c','d','a',null);

select content,option_a,option_b,option_c,option_d from project_one.questions;