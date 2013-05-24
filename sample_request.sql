 CREATE TABLE sample_request (
`_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_id` INT NOT NULL ,
`product` VARCHAR( 20 ) NOT NULL ,
`colour` VARCHAR( 20 ) NOT NULL ,
`finish` VARCHAR( 20 ) NOT NULL
) ENGINE = MYISAM


 ALTER TABLE `sample_request` CHANGE `user_id` `product_id` INT( 11 ) NOT NULL
 ALTER TABLE `sample_request` CHANGE `product_id` `project_id` INT( 11 ) NOT NULL 