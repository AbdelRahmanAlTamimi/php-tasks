-- Join employees and departments to find the department name of each employee
SELECT 
    employees.employee_id,
    employees.first_name,
    employees.last_name,
    departments.department_name
FROM 
    employees
INNER JOIN 
    departments
ON 
    employees.department_id = departments.department_id;


-- Join employees and projects to find all employees and the projects they are working on.
SELECT 
    employees.employee_id,
    employees.first_name,
    employees.last_name,
    projects.project_name
FROM 
    employees
LEFT JOIN 
    projects
ON 
    employees.employee_id = projects.client_id;
-- Join departments and employees to find all departments and the employees in each department, including departments with no employees
SELECT 
    departments.department_id,
    departments.department_name,
    employees.employee_id,
    employees.first_name,
    employees.last_name
FROM 
    departments
RIGHT JOIN 
    employees
ON 
    departments.department_id = employees.department_id;

-- Join employees and projects to list all employees and their projects, including employees without projects and projects without employees.
SELECT 
    employees.employee_id,
    employees.first_name,
    employees.last_name,
    projects.project_name
FROM 
    employees
LEFT JOIN 
    projects
ON 
    employees.employee_id = projects.client_id

UNION

SELECT 
    employees.employee_id,
    employees.first_name,
    employees.last_name,
    projects.project_name
FROM 
    projects
LEFT JOIN 
    employees
ON 
    employees.employee_id = projects.client_id;

-- Join employees with itself to find the manager of each employee
SELECT 
    e.employee_id AS EmployeeID,
    e.first_name AS EmployeeFirstName,
    e.last_name AS EmployeeLastName,
    m.employee_id AS ManagerID,
    m.first_name AS ManagerFirstName,
    m.last_name AS ManagerLastName
FROM 
    employees e
LEFT JOIN 
    employees m
ON 
    e.manager_id = m.employee_id;

-- Perform a cross join on employees and departments to get a Cartesian product of the two tables
SELECT 
    employees.employee_id,
    employees.first_name,
    employees.last_name,
    departments.department_id,
    departments.department_name
FROM 
    employees
CROSS JOIN 
    departments;

-- Join employees and salaries to find the average salary of each department
SELECT 
    departments.department_name,
    AVG(salaries.amount) AS average_salary
FROM 
    employees
INNER JOIN 
    salaries
ON 
    employees.employee_id = salaries.employee_id
INNER JOIN 
    departments
ON 
    employees.department_id = departments.department_id
GROUP BY 
    departments.department_name;

-- Join employees and projects to find employees working on projects started after a specific date
SELECT 
    employees.employee_id,
    employees.first_name,
    employees.last_name,
    projects.project_name,
    projects.start_date
FROM 
    employees
INNER JOIN 
    projects
ON 
    employees.employee_id = projects.client_id
WHERE 
    projects.start_date > '2023-01-01';

-- Join orders and customers on customer ID to get order details along with customer information.
SELECT 
    orders.order_id,
    orders.order_date,
    customers.customer_id,
    customers.customer_name
FROM 
    orders
INNER JOIN 
    customers
ON 
    orders.customer_id = customers.customer_id;

-- Join employees and departments using the department ID.
SELECT 
    employees.employee_id,
    employees.first_name,
    employees.last_name,
    departments.department_name
FROM 
    employees
INNER JOIN 
    departments
USING (department_id);

-- Join orders and customers to find the total number of orders placed by each customer.
SELECT 
    customers.customer_id,
    customers.customer_name,
    COUNT(orders.order_id) AS total_orders
FROM 
    orders
INNER JOIN 
    customers
ON 
    orders.customer_id = customers.customer_id
GROUP BY 
    customers.customer_id,
    customers.customer_name;

-- Join orders and customers to find customers who have placed more than 5 orders.
SELECT 
    customers.customer_id,
    customers.customer_name,
    COUNT(orders.order_id) AS total_orders
FROM 
    orders
INNER JOIN 
    customers
ON 
    orders.customer_id = customers.customer_id
GROUP BY 
    customers.customer_id,
    customers.customer_name
HAVING 
    COUNT(orders.order_id) >= 1;

-- Join employees and departments and use a CASE statement to classify employees based on department.
SELECT 
    employees.employee_id,
    employees.first_name,
    employees.last_name,
    departments.department_name,
    CASE 
        WHEN departments.department_name = 'HR' THEN 'Human Resources'
        WHEN departments.department_name = 'Engineering' THEN 'Engineering Team'
        WHEN departments.department_name = 'Sales' THEN 'Sales Team'
        WHEN departments.department_name = 'Marketing' THEN 'Marketing Team'
        ELSE 'Other Department'
    END AS department_classification
FROM 
    employees
INNER JOIN 
    departments
ON 
    employees.department_id = departments.department_id;
