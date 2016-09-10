<?php

/**
 * BCIT student record:
 *   surname
 *   first name
 *   emails
 *   grades
 *
 * @author Jeremy Yang
 */
class Student {
    /**
     * Student class default constructor
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Student class emails mutator
     * @param type $which email category
     * @param type $address student's email address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Student class grades mutator
     * @param type $grade student's grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculate student's average grade
     * @return type student average grade
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * Student class toString method that displays the student record.
     * @return type formatted student record
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= '   ' . $which . ": ". $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
