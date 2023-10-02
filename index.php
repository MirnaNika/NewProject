<?php
class Questions {
    private $questionTxt;
    private $answerOptions;
    private $correctAnswer;

public function __construct ($questionTxt, $answerOption, $correctAnswer) {
    $this-> $questionTxt = $questionTxt;
    $this-> $answerOption = $answerOption;
    $this-> $correctAnswer = $correctAnswer;

}
public function displayQuestion() {
    echo "Questions: {$this->questionText}\n";
    echo "Choose the right answer: \n";

    foreach ($this->answerOptions as $key => $option) {
        echo "[$key] $option\n";
} 
}
public function checkAnswer($selectedOptions) {
    sort($selectedOptions);
    sort($this->correctAnswer);

    return $selectedOptions === $this->correctAnswer;
}
}





















?>
