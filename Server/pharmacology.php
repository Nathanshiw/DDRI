<?php
$sqlconn = mysql_connect("127.0.0.1", "root", "");
 if (mysqli_connect_errno())
   {
		echo "Failed to connect to the SQL Server: " . mysqli_connect_error();   
   }
   else
   {
	   echo "<p>Connection to SQL Database is SUCCESSFUL</p>\n";
   }
   mysql_select_db('ddri');
   $sql2 = mysql_query("Create Table Pharmacology(
	   						PatientNumber varchar(10) NOT NULL,
							Name varchar(50),
							DrugClass varchar(50),
							Action varchar(50),
							Uses varchar(50),
							Dosage varchar(50),
							Routes varchar(50),
							SideEffects varchar(50),
							Precautions varchar(50),
							Contraindications varchar(50),
							Pharmacokinetics varchar(50),
							DrugInteractions varchar(50),
							NeededConsultations varchar(50),
							PatientInstructions varchar(50),
							Name1 varchar(50),
							Contraindications1 varchar(50),
							DrugInteractions1 varchar(50),
							Dosage1 varchar(50),
							Preparation1 varchar(50),
							Directions1 varchar(150),
							Name2 varchar(50),
							Contraindications2 varchar(50),
							DrugInteractions2 varchar(50),
							Dosage2 varchar(50),
							Preparation2 varchar(50),
							Directions2 varchar(150),
							Comments varchar(150),
							primary key (PatientNumber))", $sqlconn);
							

?>