CREATE table mail(
    id INT(11) not null auto_increment, 
    marresi varchar(30) not null, 
    derguesi varchar(30), 
    subjekti int(30), 
    mesazhi text, 
    data_dergimit TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    primary key (id));