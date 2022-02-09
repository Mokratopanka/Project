drop database if exists milkrun;
create database milkrun;
use milkrun;
create table awb_list(
awb_id int auto_increment,	
awbnr varchar(12),
prefix int,
serialnr int,
origin varchar(3), 
destination varchar(3),
total_pcs int,
total_weight int,
awb_selection varchar(20) not null,
primary key (awb_id)
);
insert into awb_list values (1, "123-45678901", 123, 45678901, "LAX", "AMS", 6, 1723, "Selected");
create table drivers(
driver_id int auto_increment,
acn_nr bigint,
driver_name varcharacter(10),
driver_inic varchar(1),
driver_surname varcharacter(20),
primary key (driver_id)
);
insert into drivers values (1, 123456789012, "Franta", "F", "Dobrota");