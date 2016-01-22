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
   $sql2 = mysql_query("Create Table Tests(
   							PatientNumber varchar(10) NOT NULL,
	   						Manipulation varchar(50),
							WipingScraping varchar(50),
							Biopsy varchar(50),
							ExfoliativeCytology varchar(50),
							PulpVitalometry varchar(50),
							ThermalTest varchar(50),
							SurgicalExamination varchar(50),
							Auscultation varchar(50),
							Olfactory varchar(50),
							Fever varchar(50),
							TissueType varchar(50),
							Microscopy varchar(50),
							Staining varchar(50),
							Culture varchar(50),
							Electronyography varchar(50),
							BiteForce varchar(50),
							JawTracking varchar(50),
							Saliva varchar(50),
							Trigeminal varchar(50),
							Microneurography varchar(50),
							EvokedPotentials varchar(50),
							AutonomicParameters varchar(50),
							ECG varchar(50),
							Epithelium varchar(50),
							LaminaPropria varchar(50),
							Submucosa varchar(50),
						    Mucoperiosteum varchar(50),
							Cribiform varchar(50),
							Interdental varchar(50),
							Follicular varchar(50),
							Cortical varchar(50),
							Crest varchar(50),
							VentralofTongue varchar(50),
							AlveolarMucosa varchar(50),
							BuccalMucosa varchar(50),
							LabialMucosa varchar(50),
							DorsumofTongue varchar(50),
							OralMucoperiosteum varchar(50),
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