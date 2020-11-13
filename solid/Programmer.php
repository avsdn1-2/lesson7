<?php

//Hint - Interface Segregation Principle
interface CodeInterface
{
    public function code();
}
interface TestInterface
{
    public function test();
}
interface CheckInterface
{
    public function canCode();
}

class Programmer implements CodeInterface,TestInterface,CheckInterface
{
    public function canCode()
    {
        return true;
    }
    public function code()
    {
        return 'coding';
    }
    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements CodeInterface,TestInterface,CheckInterface
{
    public function canCode()
    {
        return false;
    }
    public function code()
    {
        throw new Exception('Opps! I can not code');
    }
    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(CodeInterface $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}
