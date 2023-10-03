<?php
class Question {
    private $questionTxt;
    private $answerOptions;
    private $correctAnswer;

    public function __construct($questionTxt, $answerOptions, $correctAnswer) {
        $this->questionTxt = $questionTxt;
        $this->answerOptions = $answerOptions;
        $this->correctAnswer = $correctAnswer;
    }

    public function displayQuestion() {
        echo "Question: {$this->questionTxt}\n";
        echo "Choose the right answer: \n";

        foreach ($this->answerOptions as $key => $option) {
            echo "[$key] $option\n";
        }
    }

    public function checkAnswer($selectedOptions) {
        sort($selectedOptions);
        sort($this->correctAnswer);

        return $selectedOptions == $this->correctAnswer;
    }
}
?>

<?php
//$q1 = new Question("Which of these terms are 'access modifiers' in PHP?",
//  ["protected", "private", "public", "abstract"],
//   [0, 1, 2]);

//$q1->displayQuestion();
//$selectedOptions = [0, 1, 2];

//if ($q1->checkAnswer($selectedOptions)) {
//   echo "Right answer!\n";
//} else {
//   echo "Wrong answer. Right answers are: 0, 1, 2\n";
//}


$q1 = new Question("Which of these terms are 'access modifiers' in PHP?",
    ["protected", "private", "public", "abstract"],
    [0, 1, 2]);

$q1->displayQuestion();

echo "Enter your answer(s) separated by commas: ";
$selectedOptions = explode(',', readline());

if ($q1->checkAnswer($selectedOptions)) {
    echo "Right answer!\n";
} else {
    echo "Wrong answer. Right answers are: 0, 1, 2\n";
}

$q2 = new Question("What file extension does PHP have?",
    [".php", ".py", ".jsp", ".xml"],
    [0]);

$q2->displayQuestion();

echo "Enter your answer(s) separated by commas: ";
$selectedOptions = explode(',', readline());

if ($q2->checkAnswer($selectedOptions)) {
    echo "Right answer!\n";
} else {
    echo "Wrong answer. Right answer is: 0\n";
}



?>
