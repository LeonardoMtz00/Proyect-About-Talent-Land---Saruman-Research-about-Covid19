use ictrp;

CREATE TABLE Trials (
    TrialID VARCHAR(255) NULL,
    Last_Refreshed_on VARCHAR(255) NULL,
    Public_title VARCHAR(255) NULL,
    Scientific_title VARCHAR(255) NULL,
    Acronym VARCHAR(255) NULL,
    Primary_sponsor VARCHAR(255) NULL,
    Date_registration VARCHAR(255) NULL,
    Date_registration3 VARCHAR(255) NULL,
    Export_date VARCHAR(255) NULL,
    Source_Register VARCHAR(255) NULL,
    web_address VARCHAR(255) NULL,
    Recruitment_Status VARCHAR(255) NULL,
    other_records VARCHAR(255) NULL,
    Inclusion_agemin VARCHAR(255) NULL,
    Inclusion_agemax VARCHAR(255) NULL,
    Inclusion_gender VARCHAR(255) NULL,
    Date_enrollement VARCHAR(255) NULL,
    Target_size VARCHAR(255) NULL,
    Study_type VARCHAR(255) NULL,
    Study_design VARCHAR(255) NULL,
    Phase VARCHAR(255) NULL,
    Countries VARCHAR(255) NULL,
    Contact_Firstname VARCHAR(255) NULL,
    Contact_Lastname VARCHAR(255) NULL,
    Contact_Address VARCHAR(255) NULL,
    Contact_Email VARCHAR(255) NULL,
    Contact_Tel VARCHAR(255) NULL,
    Contact_Affiliation VARCHAR(255) NULL,
    Inclusion_Criteria VARCHAR(255) NULL,
    Exclusion_Criteria VARCHAR(255) NULL,
    Condition VARCHAR(255) NULL,
    Intervention VARCHAR(255) NULL,
    Primary_outcome VARCHAR(255) NULL,
    results_date_posted VARCHAR(255) NULL,
    results_date_completed VARCHAR(255) NULL,
    results_url_link VARCHAR(255) NULL,
    Retrospective_flag VARCHAR(255) NULL,
    Bridging_flag_truefalse VARCHAR(255) NULL,
    Bridged_type VARCHAR(255) NULL,
    results_yes_no VARCHAR(255) NULL
);

CREATE TABLE Trials (
    TrialID VARCHAR(255) NULL,
    Last_Refreshed_on VARCHAR(255) NULL,
    Public_title VARCHAR(255) NULL,
    Scientific_title VARCHAR(255) NULL,
    Acronym VARCHAR(255) NULL,
    Primary_sponsor VARCHAR(255) NULL,
    Date_registration VARCHAR(255) NULL,
    Date_registration3 VARCHAR(255) NULL,
    Export_date VARCHAR(255) NULL,
    Source_Register VARCHAR(255) NULL,
    web_address VARCHAR(255) NULL,
    Recruitment_Status VARCHAR(255) NULL,
    other_records VARCHAR(255) NULL,
    Inclusion_agemin VARCHAR(255) NULL,
    Inclusion_agemax VARCHAR(255) NULL,
    Inclusion_gender VARCHAR(255) NULL,
    Date_enrollement VARCHAR(255) NULL,
    Target_size VARCHAR(255) NULL,
    Study_type VARCHAR(255) NULL,
    Study_design VARCHAR(255) NULL,
    Phase_t VARCHAR(255) NULL,
    Countries VARCHAR(255) NULL,
    Contact_Firstname VARCHAR(255) NULL,
    Contact_Lastname VARCHAR(255) NULL,
    Contact_Address VARCHAR(255) NULL,
    Contact_Email VARCHAR(255) NULL,
    Contact_Tel VARCHAR(255) NULL,
    Contact_Affiliation VARCHAR(255) NULL,
    Inclusion_Criteria VARCHAR(255) NULL,
    Exclusion_Criteria VARCHAR(255) NULL,
    Condition_t VARCHAR(255) NULL,
    Intervention VARCHAR(255) NULL,
    Primary_outcome VARCHAR(255) NULL,
    results_date_posted VARCHAR(255) NULL,
    results_date_completed VARCHAR(255) NULL,
    results_url_link VARCHAR(255) NULL,
    Retrospective_flag VARCHAR(255) NULL,
    Bridging_flag_truefalse VARCHAR(255) NULL,
    Bridged_type VARCHAR(255) NULL,
    results_yes_no VARCHAR(255) NULL
);

CREATE TABLE `trials` (
  `TrialID` varchar(255) DEFAULT NULL,
  `Last_Refreshed_on` varchar(255) DEFAULT NULL,
  `Public_title` varchar(255) DEFAULT NULL,
  `Scientific_title` varchar(255) DEFAULT NULL,
  `Acronym` varchar(255) DEFAULT NULL,
  `Primary_sponsor` varchar(255) DEFAULT NULL,
  `Date_registration` varchar(255) DEFAULT NULL,
  `Date_registration3` varchar(255) DEFAULT NULL,
  `Export_date` varchar(255) DEFAULT NULL,
  `Source_Register` varchar(255) DEFAULT NULL,
  `web_address` varchar(255) DEFAULT NULL,
  `Recruitment_Status` varchar(255) DEFAULT NULL,
  `other_records` varchar(255) DEFAULT NULL,
  `Inclusion_agemin` varchar(255) DEFAULT NULL,
  `Inclusion_agemax` varchar(255) DEFAULT NULL,
  `Inclusion_gender` varchar(255) DEFAULT NULL,
  `Date_enrollement` varchar(255) DEFAULT NULL,
  `Target_size` varchar(255) DEFAULT NULL,
  `Study_type` varchar(255) DEFAULT NULL,
  `Study_design` varchar(255) DEFAULT NULL,
  `Phase` varchar(255) DEFAULT NULL,
  `Countries` varchar(255) DEFAULT NULL,
  `Contact_Firstname` varchar(255) DEFAULT NULL,
  `Contact_Lastname` varchar(255) DEFAULT NULL,
  `Contact_Address` varchar(255) DEFAULT NULL,
  `Contact_Email` varchar(255) DEFAULT NULL,
  `Contact_Tel` varchar(255) DEFAULT NULL,
  `Contact_Affiliation` varchar(255) DEFAULT NULL,
  `Inclusion_Criteria` varchar(255) DEFAULT NULL,
  `Exclusion_Criteria` varchar(255) DEFAULT NULL,
  `Condition` varchar(255) DEFAULT NULL,
  `Intervention` varchar(255) DEFAULT NULL,
  `Primary_outcome` varchar(255) DEFAULT NULL,
  `results_date_posted` varchar(255) DEFAULT NULL,
  `results_date_completed` varchar(255) DEFAULT NULL,
  `results_url_link` varchar(255) DEFAULT NULL,
  `Retrospective_flag` varchar(255) DEFAULT NULL,
  `Bridging_flag_truefalse` varchar(255) DEFAULT NULL,
  `Bridged_type` varchar(255) DEFAULT NULL,
  `results_yes_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOAD DATA INFILE 'D:/axelv/Downloads/COVID19-web.csv' INTO TABLE trials IGNORE 1 ROWS;

LOAD DATA INFILE 'D:/axelv/Downloads/COVID19-web.csv' INTO TABLE trials FIELDS TERMINATED BY ',' ENCLOSED BY '"' IGNORE 1 ROWS;
LOAD DATA INFILE 'D:/axelv/Downloads/COVID19-web.csv' INTO TABLE ictrp.trials FIELDS TERMINATED BY ',' ENCLOSED BY '"' IGNORE 1 ROWS;

LOAD XML INFILE 'D:/axelv/Downloads/COVID19-web.xml' INTO TABLE trials ROWS IDENTIFIED BY '<Trial>';
LOAD XML INFILE 'D:/axelv/Downloads/COVID19-web.xml' INTO TABLE ictrp.trials ROWS IDENTIFIED BY '<Trial>';


/* proceso para cargar archivo xml en shell de Xampp --
mysql -u root -p
use 'database';
set global local_infile = 1;

mysql --local_infile=1 -u root -p 
use 'database';
LOAD XML INFILE 'D:\\axelv\\Downloads\\COVID19-web.xml' INTO TABLE trials ROWS IDENTIFIED BY '<Trial>';
*/
