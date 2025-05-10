<?php 

include("connection.php");
$sql1 = "INSERT INTO birthtable (`fname`, `mname`, `lname`, `motherfname`, `mothermname`, `sex`, `birthdate`, `nationality`, `registrationdate`, `birthregion`, `birthzone`, `birthcity`, `birthworeda`, `birthkebele`, `kebeleofficerid`, `statename`, `countryname`, `socialsecurityno`, `statusformrg`, `birthstatus`) VALUES
('John', 'Michael', 'Doe', 'Mary', 'Elizabeth', 'Male', '1985-03-10', 'USA', '2024-01-03', 'West', 'Zone 1', 'Los Angeles', 'Woreda 5', 'Kebele 32', '1001', 'California', 'United States', '123-45-6789', 'Married', 'Live'),
('Emily', 'Grace', 'Smith', 'Jennifer', 'Ann', 'Female', '1990-08-22', 'Canada', '2024-01-03', 'East', 'Zone 3', 'Toronto', 'Woreda 12', 'Kebele 45', '1002', 'Ontario', 'Canada', '987-65-4321', 'Single', 'Live'),
('Ahmed', 'Ali', 'Hassan', 'Fatima', 'Nur', 'Male', '1982-05-05', 'Ethiopia', '2024-01-03', 'Oromia', 'Zone 4', 'Adama', 'Woreda 7', 'Kebele 18', '1003', 'Oromia', 'Ethiopia', '456-78-9012', 'Married', 'Live'),
('Maria', 'Isabel', 'Rodriguez', 'Sofia', 'Elena', 'Female', '1995-11-18', 'Mexico', '2024-01-03', 'Central', 'Zone 2', 'Mexico City', 'Woreda 3', 'Kebele 12', '1004', 'Mexico City', 'Mexico', '789-01-2345', 'Single', 'Live'),
('James', 'Robert', 'Wilson', 'Linda', 'Susan', 'Male', '1988-02-28', 'UK', '2024-01-03', 'South', 'Zone 5', 'London', 'Woreda 20', 'Kebele 8', '1005', 'England', 'United Kingdom', '234-56-7890', 'Married', 'Live'),
('Sarah', 'Jane', 'Brown', 'Elizabeth', 'Louise', 'Female', '1992-07-12', 'Australia', '2024-01-03', 'North', 'Zone 6', 'Sydney', 'Woreda 15', 'Kebele 22', '1006', 'New South Wales', 'Australia', '345-67-8901', 'Single', 'Live'),
('Michael', 'Quang', 'Nguyen', 'Thu', 'Thi', 'Male', '1987-12-05', 'Vietnam', '2024-01-03', 'South East', 'Zone 2', 'Ho Chi Minh City', 'Woreda 10', 'Kebele 37', '1007', 'Ho Chi Minh City', 'Vietnam', '012-34-5678', 'Married', 'Live'),
('Aisha', 'Zahra', 'Al-Farsi', 'Fatima', 'Said', 'Female', '1994-04-01', 'Oman', '2024-01-03', 'Middle East', 'Zone 3', 'Muscat', 'Woreda 8', 'Kebele 19', '1008', 'Muscat', 'Oman', '789-01-2345', 'Single', 'Live'),
('Daniel', 'Gonzalez', 'Garcia', 'Ana', 'Maria', 'Male', '1983-10-20', 'Spain', '2024-01-03', 'Southern Europe', 'Zone 1', 'Madrid', 'Woreda 14', 'Kebele 28', '1009', 'Madrid', 'Spain', '567-89-0123', 'Married', 'Live'),
('Chen', 'Wei', 'Li', 'Liu', 'Mei', 'Male', '1990-05-25', 'China', '2024-01-03', 'East Asia', 'Zone 4', 'Beijing', 'Woreda 4', 'Kebele 15', '1010', 'Beijing', 'China', '901-23-4567', 'Single', 'Live'),
('Sophie', 'Marie', 'Dubois', 'Isabelle', 'Claire', 'Female', '1986-02-18', 'France', '2024-01-03', 'Western Europe', 'Zone 2', 'Paris', 'Woreda 6', 'Kebele 23', '1011', 'Île-de-France', 'France', '234-56-7890', 'Married', 'Live'),
('Muhammad', 'Iqbal', 'Khan', 'Ayesha', 'Parveen', 'Male', '1998-09-05', 'Pakistan', '2024-01-03', 'South Asia', 'Zone 3', 'Karachi', 'Woreda 11', 'Kebele 31', '1012', 'Sindh', 'Pakistan', '678-90-1234', 'Single', 'Live'),
('Isabella', 'Rosa', 'Ricci', 'Elena', 'Giovanni', 'Female', '1985-07-30', 'Italy', '2024-01-03', 'Southern Europe', 'Zone 1', 'Rome', 'Woreda 9', 'Kebele 27', '1013', 'Lazio', 'Italy', '890-12-3456', 'Married', 'Live'),
('Ravi', 'Prakash', 'Patel', 'Anita', 'Kumari', 'Male', '1993-04-14', 'India', '2024-01-03', 'South Asia', 'Zone 5', 'Mumbai', 'Woreda 13', 'Kebele 26', '1014', 'Maharashtra', 'India', '012-34-5678', 'Single', 'Live'),
('Mia', 'Elisabeth', 'Andersson', 'Anna', 'Kristina', 'Female', '1987-03-08', 'Sweden', '2024-01-03', 'Northern Europe', 'Zone 2', 'Stockholm', 'Woreda 16', 'Kebele 29', '1015', 'Stockholm County', 'Sweden', '567-89-0123', 'Married', 'Live'),
('Javier', 'Alejandro', 'Moreno', 'Ana', 'Luisa', 'Male', '1990-12-23', 'Argentina', '2024-01-03', 'South America', 'Zone 4', 'Buenos Aires', 'Woreda 12', 'Kebele 35', '1016', 'Buenos Aires', 'Argentina', '901-23-4567', 'Single', 'Live');";




$sql = "INSERT INTO deathtable (`deathid`, `fname`, `lname`, `sex`, `nationality`, `birthdate`, `birthregion`, `birthzone`, `birthcity`, `birthworeda`, `birthkebele`, `dateofdeath`, `workposition`, `deathregion`, `deathworeda`, `deathcity`, `deathkebele`, `deathreason`, `kebeleofficerid`) VALUE
(42, 'Abel', 'Tesfaye', 'Male', 'Ethiopia', '1992-09-28', 'Amhara', 'East', 'Addis Ababa', 'Woreda 12', 'Kebele 45', '2023-04-12', 'Engineer', 'Amhara', 'Woreda 8', 'Hawassa', 'Kebele 9', 'Accidental Fall', '5678'),
(43, 'Abeba', 'Tadesse', 'Female', 'Ethiopia', '1990-05-15', 'Oromia', 'West', 'Gondar', 'Woreda 5', 'Kebele 32', '2023-07-20', 'Doctor', 'SNNPR', 'Woreda 10', 'Bahir Dar', 'Kebele 15', 'Heart Failure', '4321'),
(44, 'Berhanu', 'Negash', 'Male', 'Ethiopia', '1985-12-10', 'SNNPR', 'South', 'Jimma', 'Woreda 7', 'Kebele 18', '2023-11-05', 'Teacher', 'Oromia', 'Woreda 15', 'Addis Ababa', 'Kebele 9', 'Respiratory Infection', '1234'),
(45, 'Birtukan', 'Girma', 'Female', 'Ethiopia', '1998-03-22', 'Amhara', 'North', 'Hawassa', 'Woreda 3', 'Kebele 12', '2023-01-30', 'Nurse', 'Tigray', 'Woreda 5', 'Bishoftu', 'Kebele 10', 'Traffic Accident', '8765'),
(46, 'Dawit', 'Mekonnen', 'Male', 'Ethiopia', '1982-07-03', 'SNNPR', 'East', 'Addis Ababa', 'Woreda 20', 'Kebele 8', '2023-09-18', 'IT Specialist', 'South', 'Woreda 18', 'Dire Dawa', 'Kebele 11', 'Stroke', '2345'),
(47, 'Etenesh', 'Alemu', 'Female', 'Ethiopia', '1990-01-12', 'Tigray', 'North', 'Mekele', 'Woreda 15', 'Kebele 22', '2023-02-25', 'Engineer', 'Afar', 'Woreda 7', 'Gondar', 'Kebele 14', 'Pneumonia', '6789'),
(48, 'Fikru', 'Kassa', 'Male', 'Ethiopia', '1987-08-08', 'Oromia', 'South', 'Dessie', 'Woreda 10', 'Kebele 37', '2023-06-10', 'Architect', 'Benishangul-Gumuz', 'Woreda 12', 'Bahir Dar', 'Kebele 2', 'Drowning', '5432'),
(49, 'Genet', 'Assefa', 'Female', 'Ethiopia', '1995-04-01', 'Amhara', 'East', 'Dire Dawa', 'Woreda 8', 'Kebele 19', '2023-03-15', 'Pharmacist', 'Harari', 'Woreda 5', 'Harar', 'Kebele 1', 'Drug Overdose', '7890'),
(50, 'Haile', 'Mulugeta', 'Male', 'Ethiopia', '1984-11-20', 'SNNPR', 'South', 'Arba Minch', 'Woreda 14', 'Kebele 28', '2023-10-02', 'Police Officer', 'Oromia', 'Woreda 8', 'Hosanna', 'Kebele 14', 'Gunshot Wound', '8765'),
(51, 'Helina', 'Teshome', 'Female', 'Ethiopia', '1993-06-25', 'Amhara', 'East', 'Hawassa', 'Woreda 4', 'Kebele 15', '2023-08-28', 'Software Engineer', 'Oromia', 'Woreda 9', 'Addis Ababa', 'Kebele 2', 'Car Accident', '4321'),
(52, 'Jemal', 'Mengistu', 'Male', 'Ethiopia', '1989-02-18', 'Oromia', 'Central', 'Addis Ababa', 'Woreda 6', 'Kebele 23', '2023-05-14', 'Chef', 'Amhara', 'Woreda 11', 'Adama', 'Kebele 12', 'Food Poisoning', '2345'),
(53, 'Kidist', 'Berhanu', 'Female', 'Ethiopia', '1981-10-05', 'SNNPR', 'North', 'Jinka', 'Woreda 11', 'Kebele 31', '2023-12-07', 'Businesswoman', 'Amhara', 'Woreda 14', 'Arba Minch', 'Kebele 7', 'Heart Attack', '6789'),
(54, 'Mekonnen', 'Haile', 'Male', 'Ethiopia', '1996-07-30', 'Tigray', 'West', 'Axum', 'Woreda 9', 'Kebele 27', '2023-09-03', 'Graphic Designer', 'Tigray', 'Woreda 6', 'Mekele', 'Kebele 6', 'Fall from Height', '5432'),
(55, 'Meseret', 'Abebe', 'Female', 'Ethiopia', '1986-04-14', 'Amhara', 'West', 'Bahir Dar', 'Woreda 13', 'Kebele 26', '2023-11-20', 'Doctor', 'Amhara', 'Woreda 10', 'Gondar', 'Kebele 9', 'COVID-19', '9876'),
(56, 'Nebiyu', 'Getachew', 'Male', 'Ethiopia', '1994-03-08', 'SNNPR', 'East', 'Hawassa', 'Woreda 16', 'Kebele 29', '2023-07-02', 'Translator', 'Afar', 'Woreda 7', 'Dilla', 'Kebele 2', 'Allergic Reaction', '3456')
";

if (mysql_query($sql, $con)) {
    echo "Database UPDATED Succesfully!";
} 
else {
    echo "Could not update database" . mysql_error($con);
}


mysql_close($con)
?>
