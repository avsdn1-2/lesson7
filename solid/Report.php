<?php

//Hint - use Single Responsibility Principle Violation
Interface OutputInterface
{
    public function formatJson();
}

class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return '2016-04-21';
    }

    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }

}

class OutputFormat implements OutputInterface
{
    private $output;
    public function __construct(array $output)
    {
        $this->output = $output;
    }
    public function formatJson()
    {
        return json_encode($this->output);
    }
}

//проверка
$report = new Report();
$outputFormat = new OutputFormat($report->getContents());
echo $outputFormat->formatJson();
