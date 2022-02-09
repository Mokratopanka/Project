drop database if exists milkrun;
create database milkrun;
use milkrun;
create table awb_list(
awb_id int not null PRIMARY KEY AUTO_INCREMENT,
awb_nr varchar(12),
prefix int,
serialnr int,
origin varchar(3), 
destination varchar(3),
awb_pcs int,
awb_weight int,
awb_total_pcs int,
awb_total_weight int,
awb_gha varchar(20),
awb_fwd varchar(20),
awb_select_state varchar(20),
awb_select_time datetime,
awb_select_method varchar(20),
awb_sected_by varchar(20),
awb_add_man datetime,
awb_edit_time datetime,
awb_edit_by varchar(20),
awb_trip_assigned varchar(20),
awb_trip_assign_by varchar(20),
awb_trip_stop_nr varchar(1),
awb_trip_arrived varchar(20),
awb_trip_unloaded time,
awb_received_by varchar(20),
awb_signature binary,
awb_pic_1 binary,
awb_pic_2 binary,
awb_pic_3 binary
);
insert into awb_list (awb_nr, prefix, serialnr, origin, destination, awb_pcs, awb_weight, awb_select_state, awb_fwd) values ('123-45678901', '123', '45678901', 'LAX', 'AMS', '6', '1723', 'Selected', 'DHL');
insert into awb_list (awb_nr, prefix, serialnr, origin, destination, awb_pcs, awb_weight, awb_select_state, awb_fwd) values ('075-45678266', '123', '45678901', 'DUB', 'AMS', '2', '65', 'Selected', 'Ceva');
insert into awb_list (awb_nr, prefix, serialnr, origin, destination, awb_pcs, awb_weight, awb_select_state, awb_fwd) values ('105-45678055', '123', '45678901', 'ORD', 'AMS', '8', '17', 'DeSelected', 'Bos');
insert into awb_list (awb_nr, prefix, serialnr, origin, destination, awb_pcs, awb_weight, awb_select_state, awb_fwd) values ('126-45678900', '123', '45678901', 'ORD', 'AMS', '45', '121', 'DeSelected', 'DHL');
insert into awb_list (awb_nr, prefix, serialnr, origin, destination, awb_pcs, awb_weight, awb_select_state, awb_fwd) values ('180-45678911', '123', '45678901', 'DOH', 'AMS', '32', '843', 'Selected', 'DHL');
insert into awb_list (awb_nr, prefix, serialnr, origin, destination, awb_pcs, awb_weight, awb_select_state, awb_fwd) values ('235-45678922', '123', '45678901', 'ORD', 'AMS', '1', '562', 'DeSelected', 'Rhenus');
insert into awb_list (awb_nr, prefix, serialnr, origin, destination, awb_pcs, awb_weight, awb_select_state, awb_fwd) values ('157-45678933', '123', '45678901', 'DOH', 'AMS', '1', '23', 'Selected', 'Rhenus');
insert into awb_list (awb_nr, prefix, serialnr, origin, destination, awb_pcs, awb_weight, awb_select_state, awb_fwd) values ('999-45678944', '123', '45678901', 'ORD', 'AMS', '77', '2123', 'DeSelected', 'Rhenus');

create table drivers(
driver_id int not null PRIMARY KEY AUTO_INCREMENT,
acn_nr bigint,
driver_name varcharacter(10),
driver_inic varchar(1),
driver_surname varcharacter(20),
driver_adr bool,
driver_adr_valid date
);
insert into drivers (acn_nr, driver_name, driver_inic, driver_surname) values ('123456789012', 'Franta', 'F', 'Dobrota');
insert into drivers (acn_nr, driver_name, driver_inic, driver_surname, driver_adr, driver_adr_valid) values ('123456789013', 'Jezisek', 'J', 'Moravak', 1, '2022-01-01');

create table trucks(
vehicle_id int not null PRIMARY KEY AUTO_INCREMENT,
trucker_nr varcharacter(10),
trailer_nr varchar(10),
is_trucker boolean,
first_name varchar(10),
sur_name varchar(20)
);
insert into trucks (trucker_nr, is_trucker) values ('05-cxp-7', 1);
insert into trucks (trailer_nr) values ('T-843-EM');
insert into trucks (trucker_nr, is_trucker) values ('YZC-8-CP', 1);
insert into trucks (trailer_nr) values ('EM-843-X');
insert into trucks (trucker_nr, is_trucker) values ('11-TMV-7', 1);
insert into trucks (trailer_nr) values ('LT-835-E');

create table trucks_01(
trucks_id_01 int not null PRIMARY KEY AUTO_INCREMENT,
trucker_nr_01 varcharacter(10),
trailer_nr_01 varchar(10),
first_name_01 varchar(10),
sur_name_01 varchar(20),
name_01 varchar(25),
ACN_nr int,
TruckReg varchar(15),
TrailerReg varchar(15)
);

create table forwarders(
fwd_id int primary key auto_increment,
fwd_fname varchar(80),
fwd_sname varchar(20),
fwd_haulier bool
);
insert into forwarders (fwd_fname, fwd_sname, fwd_haulier) values ('Bos Logistics EU B.V.', 'Bos', '1');
insert into forwarders (fwd_fname, fwd_sname, fwd_haulier) values ('DHL Global Forwarding B.V.', 'DHL', '0');
insert into forwarders (fwd_fname, fwd_sname, fwd_haulier) values ('Ceva Logistics B.V.', 'Ceva', '0');
insert into forwarders (fwd_fname, fwd_sname, fwd_haulier) values ('Nagel Transport BV', 'Nagel', '1');
insert into forwarders (fwd_fname, fwd_sname, fwd_haulier) values ('Nippon Express B.V.', 'Nippon', '0');
insert into forwarders (fwd_fname, fwd_sname, fwd_haulier) values ('Fast Freight Forwarding B.V.', 'FFF', '0');

create table gha(
gha_id int primary key auto_increment,
gha_fname varchar(80),
gha_sname varchar(20),
gha_is_active bool
);
insert into gha (gha_fname, gha_sname, gha_is_active) values ('Menzies Aviation', 'Menzies', '1');
insert into gha (gha_fname, gha_sname, gha_is_active) values ('Swissport Cargo T9', 'SW T9', '1');
insert into gha (gha_fname, gha_sname, gha_is_active) values ('Swissport Cargo T11', 'SW T9', '1');
insert into gha (gha_fname, gha_sname, gha_is_active) values ('DNATA Aviation', 'DNATA', '0');

create table users(
user_id int primary key auto_increment,
user_name varchar(20),
user_surname varchar(20),
<<<<<<< HEAD
user_pswd_hash varcharacter(20),
=======
user_pswd_hash varchar(20),
>>>>>>> 79336a7c9d5696a0c1a8b078da7f34ab010d4e3f
user_employer_id int,
user_employer_sname varchar(20),
user_admin bool,
user_admin_lvl int
);
insert into users (user_name, user_surname, user_employer_sname, user_admin, user_admin_lvl) values ('Miro','Borec','MiLu Software','1','5');
insert into users (user_name, user_surname, user_employer_sname, user_admin, user_admin_lvl) values ('Luky','Borec','MiLu Software','1','5');
insert into users (user_name, user_surname, user_employer_sname, user_admin, user_admin_lvl) values ('Guy','Tester','Swissport','0','2');
insert into users (user_name, user_surname, user_employer_sname, user_admin, user_admin_lvl) values ('Homer','Simpson','Menzies','0','4');

create table trips(
trip_id int primary key auto_increment,
trip_name varchar(20),
trip_date date,
trip_time time,
trip_created varchar(20),
trip_created_by varchar(20),
trip_last_mod_by varchar(20),
trip_status varchar(20),
trip_stops varchar(1),
trip_dep datetime,
trip_compl datetime
);