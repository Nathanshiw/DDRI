<?php
$sqlconn = mysql_connect("test.ddri.ca", "ddrica_2016", "6.d0UCcx6N4=");
 if (mysqli_connect_errno())
   {
		echo "Failed to connect to the SQL Server: " . mysqli_connect_error();   
   }
   else
   {
	   echo "<p>Connection to SQL Database is SUCCESSFUL</p>\n";
   }
      mysql_select_db('ddrica_testdb');
   $sql2 = mysql_query("Create Table PatientInformation(
	   						PatientNumber varchar(10) NOT NULL,
							City varchar(50),
							ProvinceState varchar(50),
							Country varchar(50),
							Date varchar(50),
							Gender varchar(50),
							Age varchar(50),
							Ethinicity varchar(50),
							Temperature varchar(50),
							Fever varchar(50),
							Exanthema varchar(50),
							Duration varchar(50),
							Frequency varchar(50),
							ResolvingHealing varchar(50),
							Preceding varchar(50),
							PostEruption varchar(50),
							PostInfection varchar(50),
							PostTreatment varchar(50),
							Slow varchar(50),
							Subsequent varchar(50),
							ReliefWith varchar(50),
							NoChange varchar(50),
							ChangeDeveloped varchar(50),
							DentalHistory varchar(50),
							MedicalHistory varchar(50),
							Medications varchar(50),
							Weight varchar(50),
							Stress varchar(50),
							Habits varchar(50),
							Hospitalization varchar(50),
							PhysicalTherapy varchar(50),
							Counseling varchar(50),
							Remission varchar(50),
							Dental varchar(50),
							SystemicDisorders varchar(50),
							Asymptomatic varchar(50),
							Dysesthesia varchar(50),
							Paralysis varchar(50),
							Pressure varchar(50),
							Itchy varchar(50),
							Pain varchar(50),
							Taste varchar(50),
							Hearing varchar(50),
							Balance varchar(50),
							Vision varchar(50),
							Malaise varchar(50),
							Speech varchar(50),
							Respiration varchar(50),
							Opening varchar(50),
							Closing varchar(50),
							Swallowing varchar(50),
							Xerostomia varchar(50),
							CleansingAbility varchar(50),
							primary key (PatientNumber))", $sqlconn);
							

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loader</title>
</head>

<body>
</body>
</html>