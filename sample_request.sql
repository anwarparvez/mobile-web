 CREATE TABLE `buyn_test`.`sample_request` (
`_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_id` INT NOT NULL ,
`product` VARCHAR( 20 ) NOT NULL ,
`colour` VARCHAR( 20 ) NOT NULL ,
`finish` VARCHAR( 20 ) NOT NULL
) ENGINE = MYISAM 