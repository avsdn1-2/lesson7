<?php

//Hint - Open Closed Principle
class AnotherProgrammer
{
    public function code()
    {
        return 'coding';
    }
}
class Tester
{
    public function test()
    {
        return 'testing';
    }
}
class Designer
{
    public function draw()
    {
        return 'drawing';
    }
}

class Copywriter
{
    public function copywrite()
    {
        return 'copywriting';
    }
}

/** Что если добавить еще класс Designer с методом draw() **/

class ProjectManagement
{
    public function process($member)
    {
        if ($member instanceof AnotherProgrammer) {
            echo $member->code().'<br>';
        } elseif ($member instanceof Tester) {
            echo $member->test().'<br>';
        }
        elseif ($member instanceof Designer) {
            echo $member->draw().'<br>';
        }
        elseif ($member instanceof Copywriter) {
            echo $member->copywrite().'<br>';
        }
        else {
            throw new Exception('Invalid input member');
        }
    }
}

$ProjectManagement = new ProjectManagement();
$ProjectManagement->process(new AnotherProgrammer());
$ProjectManagement->process(new Tester());
$ProjectManagement->process(new Designer());
$ProjectManagement->process(new Copywriter());
$ProjectManagement->process(new Player());

