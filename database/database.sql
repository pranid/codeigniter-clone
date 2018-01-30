create database ams_teamwork;

use ams_teamwork;

create table ams_project (
	project_id int not null primary key auto_increment,
    project_name varchar(200),
    company_id int,
    start_date date,
    estim_end_date date,
    status char(1),
    log_time timestamp not null default CURRENT_TIMESTAMP
);

create table ams_company (
	company_id int not null primary key auto_increment,
    company_name varchar(200),
    address varchar(300),
    contact_no_1 char(10),
    contact_no_2 char(10),
    company_logo varchar(300),
    company_email varchar(100),
    company_website varchar(100)
);

create table ams_task (
	task_id int not null primary key auto_increment,
    task_name varchar(200),
    description varchar(500),
    task_owner int,
    responsible int,
    due_date date,
    task_status int,
    project_id int,
    log_time timestamp not null default CURRENT_TIMESTAMP
);

create table ams_member (
	member_id int not null primary key auto_increment,
    user_id int,
    first_name varchar(100),
    last_name varchar(100),
    gender varchar(6),
    designation int,
    skills text,
    email varchar(250),
    contact_no varchar(10),
    company_id int,
    profile_pic varchar(200)
);

create table ams_role (
	role_id int not null primary key auto_increment,
    role varchar(200)
);

create table ams_designation (
	designation_id int not null primary key auto_increment,
    designation varchar(200)
);

create table ams_skill(
	skill varchar(200) not null primary key
);

create table ams_project_member_role (
	pmrole_id int not null primary key auto_increment,
    project_id int,
    role_id int,
    member_id int,
    status char(1)
);


create table ams_user(
	user_id int not null primary key auto_increment,
    full_name varchar(200),
    user_email varchar(200),
    user_password varchar(50),
    user_group int,
    log_time timestamp not null default CURRENT_TIMESTAMP
);
