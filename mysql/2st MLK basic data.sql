drop database if exists milkrun;
create database milkrun;
use milkrun;
create table awb_list(
awb_id int not null PRIMARY KEY AUTO_INCREMENT,
awbnr varchar(12),
prefix int,
serialnr int,
origin varchar(3), 
destination varchar(3),  
total_pcs int,
total_weight int,
awb_selection varchar(20) not null
);
insert into awb_list (awbnr, prefix, serialnr, origin, destination, total_pcs, total_weight, awb_selection) values ('123-45678901', '123', '45678901', 'LAX', 'AMS', '6', '1723', 'Selected');
insert into awb_list (awbnr, prefix, serialnr, origin, destination, total_pcs, total_weight, awb_selection) values ('075-45678266', '123', '45678901', 'DUB', 'AMS', '2', '65', 'Selected');
insert into awb_list (awbnr, prefix, serialnr, origin, destination, total_pcs, total_weight, awb_selection) values ('105-45678055', '123', '45678901', 'ORD', 'AMS', '8', '17', 'DeSelected');
insert into awb_list (awbnr, prefix, serialnr, origin, destination, total_pcs, total_weight, awb_selection) values ('126-45678900', '123', '45678901', 'ORD', 'AMS', '45', '121', 'DeSelected');
insert into awb_list (awbnr, prefix, serialnr, origin, destination, total_pcs, total_weight, awb_selection) values ('180-45678911', '123', '45678901', 'DOH', 'AMS', '32', '843', 'Selected');
insert into awb_list (awbnr, prefix, serialnr, origin, destination, total_pcs, total_weight, awb_selection) values ('235-45678922', '123', '45678901', 'ORD', 'AMS', '1', '562', 'DeSelected');
insert into awb_list (awbnr, prefix, serialnr, origin, destination, total_pcs, total_weight, awb_selection) values ('157-45678933', '123', '45678901', 'DOH', 'AMS', '1', '23', 'Selected');
insert into awb_list (awbnr, prefix, serialnr, origin, destination, total_pcs, total_weight, awb_selection) values ('999-45678944', '123', '45678901', 'ORD', 'AMS', '77', '2123', 'DeSelected');

create table drivers(
driver_id int not null PRIMARY KEY AUTO_INCREMENT,
acn_nr bigint,
driver_name varcharacter(10),
driver_inic varchar(1),
driver_surname varcharacter(20)
);
insert into drivers (acn_nr, driver_name, driver_inic, driver_surname) values ('123456789012', 'Franta', 'F', 'Dobrota');
insert into drivers (acn_nr, driver_name, driver_inic, driver_surname) values ('123456789013', 'Jezisek', 'J', 'Moravak');

create table trucks(
vehicle_id int not null PRIMARY KEY AUTO_INCREMENT,
trucker_nr varcharacter(10),
trailer_nr varchar(10),
is_trucker boolean
);
insert into trucks (trucker_nr, is_trucker) values ('05-cxp-7', 1);
insert into trucks (trailer_nr) values ('T-843-EM');
insert into trucks (trucker_nr, is_trucker) values ('YZC-8-CP', 1);
insert into trucks (trailer_nr) values ('EM-843-X');
insert into trucks (trucker_nr, is_trucker) values ('11-TMV-7', 1);
insert into trucks (trailer_nr) values ('LT-835-E');

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


