create database ticket_price;
use ticket_price;
create table ticket (
	name char(32) not null primary key,
	admission_ch int(10),
	admission_ad int(10),
	big3_ch int(10),
	big3_ad int(10),
	free_ch int(10),
	free_ad int(10),
	year_ch int(10),
	year_ad int(10)
);