<?php

class Student {

    private ?int $id;
    private ?int $grade_id;
    private ?string $email;
    private ?string $fullname;
    private $birthdate;
    private ?string $gender;

    public function __construct($i, $gi, $e, $f, $b, $g) {
        $this->id = $i;
        $this->grade_id = $gi;
        $this->email = $e;
        $this->fullname = $f;
        $this->birthdate = $b;
        $this->gender = $g;

    }
}
?>