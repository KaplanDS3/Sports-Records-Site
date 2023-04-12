CREATE TABLE `sports` (
                          `ID` INT(10) UNSIGNED NOT NULL,
                          `Sport` VARCHAR(50) NOT NULL,
                          `Sport_Type` VARCHAR(50) NOT NULL DEFAULT 'Track',
                          `Event` VARCHAR(50) NOT NULL,
                          `Holder` VARCHAR(120) NOT NULL,
                          `Record` VARCHAR(50) NOT NULL,
                          `Year` VARCHAR(4) NOT NULL,
                          PRIMARY KEY (`ID`)
)
    COLLATE='latin1_swedish_ci'
    ENGINE=MyISAM
;

INSERT INTO sports (ID, Sport, Sport_Type, Event, Holder, Record, Year) VALUES
                                                                            (1,'Sprint','Boys','100m','John Smith','10.52 sec','2021'),
                                                                            (2,'Sprint','Girls','100m','Emily Johnson','12.05 sec','2021'),
                                                                            (3,'Sprint','Boys','200m','Michael Lee','21.89 sec','2021'),
                                                                            (4,'Sprint','Girls','200m','Olivia Chen','25.34 sec','2021'),
                                                                            (5,'Sprint','Boys','400m','David Kim','48.72 sec','2021'),
                                                                            (6,'Sprint','Girls','400m','Sophia Lee','56.91 sec','2021'),
                                                                            (7,'Mid-Distance','Boys','800m','Adam Lee','1:58.12 min','2021'),
                                                                            (8,'Mid-Distance','Girls','800m','Sarah Kim','2:12.45 min','2021'),
                                                                            (9,'Hurdles','Boys','110m hurdles','Ethan Park','14.56 sec','2021'),
                                                                            (10,'Hurdles','Girls','100m hurdles','Ashley Kim','15.98 sec','2021'),
                                                                            (11,'Hurdles','Boys','300m hurdles','Andrew Kim','39.72 sec','2021'),
                                                                            (12,'Hurdles','Girls','400m hurdles','Chloe Lee','1:04.23 min','2021'),
                                                                            (13,'Relay','Boys','4x100m relay','Team A','42.10 sec','2021'),
                                                                            (14,'Relay','Girls','4x100m relay','Team B','48.75 sec','2021'),
                                                                            (15,'Relay','Boys','4x400m relay','Team C','3:18.45 min','2021'),
                                                                            (16,'Relay','Girls','4x400m relay','Team D','3:56.89 min','2021'),
                                                                            (17,'Jumping','Boys','Long jump','Kevin Lee','6.80 m','2021'),
                                                                            (18,'Jumping','Girls','Long jump','Anna Kim','5.90 m','2021'),
                                                                            (19,'Jumping','Boys','Triple jump','Ryan Lee','14.20 m','2021'),
                                                                            (20,'Jumping','Girls','Triple jump','Hannah Park','11.90 m','2021'),
                                                                            (21,'Jumping','Boys','High jump','Steven Kim','1.92 m','2021'),
                                                                            (22,'Jumping','Girls','High jump','Grace Lee','1.65 m','2021'),
                                                                            (23,'Throwing','Boys','Shot put','Jacob Kim','15.25 m','2021'),
                                                                            (24,'Throwing','Girls','Shot put','Sarah Lee','12.90 m','2021'),
                                                                            (25,'Throwing','Boys','Javelin throw','Tyler Kim','58.75 m','2021'),
                                                                            (26,'Throwing','Girls','Javelin throw','Emma Kim','42.80 m','2021');

