drop schema if exists symfony2sandbox;
create schema symfony2sandbox default character set utf8 collate utf8_polish_ci;
grant all on symfony2sandbox.* to editor@localhost identified by 'secretPASSWORD';
flush privileges;