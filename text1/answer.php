Q1=> SELECT NAME AS STAFF_NAME FROM staff;

Q2=>Select distance department_id
	FROM `staff`;

Q3 =>SELECT *FROM `staff` ORDER BY 		name ASC;

Q4 => SELECT * FROM staff
		ORDER BY name AND department_id DESC

Q5=>SELECT * FROM `staff` where NAME in (`Kay thwe`,`thae Su Wai `);

Q6=>SELECT * FROM `Staff` where DEPARTMENT LIKE `Admin%`;

Q7 =>SELECT * FROM `staff` WHERE name LIKE"a%";

Q8 => SELECT * FROM `staff` WHERE name LIKE"e%";

Q9=>SELECT * FROM Staff where SALARY between 100000 and 500000;

Q10=>SELECT * FROM `staff` WHERE joindate='2014-02-20'

Q11=>SELECT COUNT(*)FROM woker WHERE DEPARTMENT=`Admin`;

Q12=> SELEC staff.id as id,staff.name,staff.fathername,staff.salary,
		staff.joindate,departments.name as departname
		FROM departments INNER JOIN departments
		WHERE departments.name IN('Manager')

Q14=> SELECT slary AS"three max-salaries"FROM `staff`ORDER BY salary Desc lIMIT 3


Q15=>SELECT departments.id, departments.name,sum(staffs.salary)
FROM departments  inner join staffs on departments.id= staffs.deparment_id
GROUP BY departments.id,departments.name


Q16=>SELECT * FROM staffs INNER JOIN bonus ON staffs.id = bonus.staff_id WHERE bonus.bonusdate LIKE "2016-02%

Q17=>SELECT * FROM staffs INNER JOIN bonus ON staffs.id = bonus.staff_id WHERE bonus.bonusdate LIKE "2016%" AND staffs.name = "Aye Aye";