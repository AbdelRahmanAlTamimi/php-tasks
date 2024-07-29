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

$classroom = new Classroom();


$classroom->addStudent(new Student("Alice", 20, "S001"));
$classroom->addStudent(new Student("Bob", 22, "S002"));
$classroom->addStudent(new Student("Charlie", 21, "S003"));
$classroom->addStudent(new Student("David", 23, "S004"));
$classroom->addStudent(new Student("Eve", 20, "S005"));
$classroom->addStudent(new Student("Frank", 22, "S006"));


echo "<br>Listing all students:<br>";
$classroom->listStudents();


$classroom->removeStudent("S003");


echo "<br>Listing all students after removal:<br>";
$classroom->listStudents();
