# CRM_MYQSL
# That is my first CRM (PHP + MYSQL). That doen't work as i wanted to, but it's ok for the first experience.
# If u want to try it:
# 1. Make new schema from CRMB.mwb model using your MySQLWorkbench;
# 2. Change Connector.php $host, $username and $password if u need;
# 3. Add some clients (*1*), worktime, services and tenants;
# 4. Add some records (use yyyy-mm-dd format);
# 5. Add user (login and password) (*2*);
# 6. Open signup_form.php in your browser (user --> login, password);
# *1* 

INSERT INTO `db`.`clients`
(`client_fullname`,
`client_phone`,
`client_vk`,
`client_instagram`,
`client_email`,
`client_desc`)
VALUES
('Steve',
'291111111',
'', '', '', '');

INSERT INTO `db`.`clients`
(`client_fullname`,
`client_phone`,
`client_vk`,
`client_instagram`,
`client_email`,
`client_desc`)
VALUES
('Bob',
'352222222',
'http://vk.com/somebobformysql',
'https://www.instagram.com/somebobformysql/',
'somebobformysql@mail.com' ,
'Bob likes speak about cars. Very funny. Likes dancing.');

INSERT INTO `db`.`clients`
(`client_fullname`,
`client_phone`,
`client_vk`,
`client_instagram`,
`client_email`,
`client_desc`)
VALUES
('Jack',
'173333333',
'', '', '', '');

INSERT INTO `db`.`clients`
(`client_fullname`,
`client_phone`,
`client_vk`,
`client_instagram`,
`client_email`,
`client_desc`)
VALUES
('Charly',
'914444444',
'', '', '', '');

INSERT INTO `db`.`clients`
(`client_fullname`,
`client_phone`,
`client_vk`,
`client_instagram`,
`client_email`,
`client_desc`)
VALUES
('Kro',
'645555555',
'', '', '', '');

# *2*

INSERT INTO `db`.`users`
(`login`,
`password`)
VALUES
('root',
 'root');
