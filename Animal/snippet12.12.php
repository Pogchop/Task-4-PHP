<?php
require 'snippet12.php';
$employee1 = new Employee();
echo 'Default <b>Name</b> is: ' . $employee1->get_name() . '<br>';
echo 'Default <b>Number</b> is: ' . $employee1->get_man_no() . '<br>';
echo 'Default <b>Position</b> is: ' . $employee1->get_position() . '<br>';
$employee1->set_name("Jull");
$employee1->set_man_no(01);
$employee1->set_position(01);
echo 'Name after change: ' . $employee1->get_name() . '<br>';
echo 'Number after change: ' . $employee1->get_man_no() . '<br>';
echo 'Position after change: ' . $employee1->get_position() . '<br>';
