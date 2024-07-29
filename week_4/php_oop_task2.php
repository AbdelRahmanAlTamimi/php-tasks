<?php

class Student
{
    private $studentName;
    private $studentAge;
    private $studentID;

    public function __construct($studentName, $studentAge, $studentID)
    {

        $this->studentName = $studentName;
        $this->studentAge = $studentAge;
        $this->studentID = $studentID;
    }

    public function __destruct()
    {
        echo "<br>the student was killed ^<>^<br>";
    }

    public function getStudentDetails()
    {
        $stuDetails =
            "student name: " . $this->studentName . "<br>" .
            "student age: " . $this->studentAge . "<br>" .
            "studentID: " . $this->studentID . "<br>";
        return $stuDetails;
    }

    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;
    }

    public function getStudentName()
    {
        return $this->studentName;
    }
    public function setStudentAge($studentAge)
    {
        $this->studentAge = $studentAge;
    }

    public function getStudentAge()
    {
        return $this->studentAge;
    }
    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }

    public function getStudentID()
    {
        return $this->studentID;
    }
}

class Classroom
{
    private $students = [];

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function removeStudent($studentID)
    {
        foreach ($this->students as $index => $student) {
            if ($student->getStudentID() === $studentID) {
                unset($this->students[$index]);
                break;
            }
        }
    }

    public function listStudents()
    {
        foreach ($this->students as $student) {
            echo "<br>" .  $student->getStudentDetails();
        }
    }
}

$student1 = new Student("Alice", 20, "S001");
$student2 = new Student("Bob", 22, "S002");
$student3 = new Student("Charlie", 21, "S003");
$student4 = new Student("David", 23, "S004");
$student5 = new Student("Eve", 20, "S005");
$student6 = new Student("Frank", 22, "S006");


$classroom = new Classroom();


$classroom->addStudent($student1);
$classroom->addStudent($student2);
$classroom->addStudent($student3);
$classroom->addStudent($student4);
$classroom->addStudent($student5);
$classroom->addStudent($student6);


echo "<br>Listing all students:<br>";
$classroom->listStudents();


$classroom->removeStudent("S003");


echo "<br>Listing all students after removal:<br>";
$classroom->listStudents();
