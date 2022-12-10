<?php
$jsonTestCases = file_get_contents('testcases.json');
$testCases = json_decode($jsonTestCases);
foreach($testCases as $caseName => $caseData) {
    echo "-----------------------------------<br />";
    echo $caseName . ' wordt getest<br />';
    echo 'expected output: <br />';
    echo str_replace("\n", '<br />', str_replace(' ', '&nbsp;', $caseData->expectedOutput)) . '<br /><br />';

    $input = explode("\n", $caseData->input);

    echo "-----------------------------------<br />";
    echo "actual output:<br />";

    extractOutputFromInput($input);
}

function extractOutputFromInput($lines)
{
    //todo: input is vervelend te converteren op de conventie manier, makkelijkere manier van inputconverting inbouwen/meerdere input velden toevoegen voor deze case
//    fscanf(STDIN, "%d", $n);
//    fscanf(STDIN, "%d", $m);
//    $inputSignals = [];
//    $texts = [];
//    $outPutTexts = [];
//    for ($i = 0; $i < $n; $i++)
//    {
//        fscanf(STDIN, "%s %s", $inputName, $inputSignal);
//        $inputSignals[$inputName] = str_split($inputSignal);
//        $texts[$inputName] = $inputName . ' ';
//    }
//    for ($i = 0; $i < $m; $i++)
//    {
//        fscanf(STDIN, "%s %s %s %s", $outputName, $type, $inputName1, $inputName2);
//        $outputTexts[$outputName] = $outputName . ' ';
//        foreach($inputSignals[$inputName1] as $index => $inputSignal) {
//            switch($type) {
//                case "AND":
//                    $outputTexts[$outputName] .= ($inputSignals[$inputName1][$index] == $inputSignals[$inputName2][$index] && $inputSignals[$inputName1][$index] == '-') ? '-' : '_';
//                    break;
//                case "NAND":
//                    $outputTexts[$outputName] .= ($inputSignals[$inputName1][$index] == $inputSignals[$inputName2][$index] && $inputSignals[$inputName1][$index] == '-') === false ? '-' : '_';
//                    break;
//                case "OR":
//                    $outputTexts[$outputName] .= ($inputSignals[$inputName1][$index] == '-' || $inputSignals[$inputName2][$index] == '-') ? '-' : '_';
//                    break;
//                case "NOR":
//                    $outputTexts[$outputName] .= ($inputSignals[$inputName1][$index] == '-' || $inputSignals[$inputName2][$index] == '-') === false ? '-' : '_';
//                    break;
//                case "XOR":
//                    $outputTexts[$outputName] .= ($inputSignals[$inputName1][$index] != $inputSignals[$inputName2][$index] && ($inputSignals[$inputName1][$index] == '-' || $inputSignals[$inputName2][$index] == '-')) ? '-' : '_';
//                    break;
//                case "NXOR":
//                    $outputTexts[$outputName] .= ($inputSignals[$inputName1][$index] != $inputSignals[$inputName2][$index] && ($inputSignals[$inputName1][$index] == '-' || $inputSignals[$inputName2][$index] == '-')) === false ? '-' : '_';
//                    break;
//            }
//        }
//
//    }
//    foreach($outputTexts as $text) {
//        echo("$text\n");
//    }
}
