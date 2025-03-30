<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz Result</title>
    <link rel="stylesheet" href="Quiz.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@200;300;400;600;700;800;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="quiz">
        <div class="header_section">
            <h3>PHP Quiz Form with Calculated Grade</h3>
            <p>For each correct answer, you will get 20 points.</p>
        </div>
        <hr>

        <form action="" method='POST'>
            <div class="main">
                <div class="details">
                    <div class="name">
                        <div>
                            <p class="name1">Student Name</p>
                            <input type="text" name="First_name" required>
                            <p>First Name</p>
                        </div>

                        <div style="margin-left:10px">
                            <p class="name1"></p>
                            <input type="text" name="Last_name" required>
                            <p>Last Name</p>
                        </div>
                    </div>
                    <div class="email">
                        <p class="name1">Email</p>
                        <input type="email" name="email">
                        <p>Email name</p>
                    </div>
                </div>

                <div class="question">

                    <p class="question" style="text-align:left; padding-left:40px">1. What does PHP stand for?</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q1" value="1"> Personal Home Page</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q1" value="2"> PHP: Hypertext Preprocessor</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q1" value="3"> Private Hosting Protocol</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q1" value="4"> Programming HTML Pages</p>

                    <p class="question" style="text-align:left; padding-left:40px">2. Which symbol is used to denote variables in PHP?</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q2" value="1"> @</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q2" value="2"> %</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q2" value="3"> $</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q2" value="4"> &</p>

                    <p class="question" style="text-align:left; padding-left:40px">3. Which function is used to print output in PHP?</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q3" value="1"> echo</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q3" value="2"> print</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q3" value="3"> printf</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q3" value="4"> All of the above</p>

                    <p class="question" style="text-align:left;  padding-left:40px">4. What is the default file extension for PHP files?</p>
                    <p class="option" style="text-align:left;  padding-left:40px"><input type="radio" name="q4" value="1"> .html</p>
                    <p class="option" style="text-align:left;  padding-left:40px"><input type="radio" name="q4" value="2"> .php</p>
                    <p class="option" style="text-align:left;  padding-left:40px"><input type="radio" name="q4" value="3"> .css</p>
                    <p class="option" style="text-align:left;  padding-left:40px"><input type="radio" name="q4" value="4"> .xml</p>

                    <p class="question" style="text-align:left;  padding-left:40px">5. How do you start a PHP block of code?</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q5" value="1"> &lt;php&gt;</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q5" value="2"> &lt;?php ... ?&gt;</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q5" value="3"> &lt;script&gt;</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q5" value="4"> &lt;? ... ?&gt;</p>

                    <p class="question" style="text-align:left; padding-left:40px">6. Which of the following is NOT a valid PHP variable name?</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q6" value="1"> $var_name</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q6" value="2"> $1variable</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q6" value="3"> $_variable</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q6" value="4"> $variableName</p>

                    <p class="question" style="text-align:left; padding-left:40px">7. Which of the following is used to include a file in PHP?</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q7" value="1"> include</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q7" value="2"> require</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q7" value="3"> include_once</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q7" value="4"> All of the above</p>

                    <p class="question" style="text-align:left; padding-left:40px">8. Which function is used to get the length of a string in PHP?</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q8" value="1"> strlen()</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q8" value="2"> strlength()</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q8" value="3"> countlen()</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q8" value="4"> string_length()</p>

                    <p class="question" style="text-align:left; padding-left:40px">9. How do you define a constant in PHP?</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q9" value="1"> define("CONSTANT_NAME", "value");</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q9" value="2"> $CONSTANT_NAME = "value";</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q9" value="3"> constant("CONSTANT_NAME", "value");</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q9" value="4"> const CONSTANT_NAME = "value";</p>

                    <p class="question" style="text-align:left; padding-left:40px">10. What will echo 10 + "5 days"; output in PHP?</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q10" value="1"> 15</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q10" value="2"> 105 days</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q10" value="3"> Error</p>
                    <p class="option" style="text-align:left; padding-left:40px"><input type="radio" name="q10" value="4"> 10</p>
                </div>
            </div>
            <hr>
            <div class="submit">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>
    </div>

    <div class="result" style="width:400px height:400px">
        <div class="result-content"
            style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin-top: 18%;">
            <h2>Quiz Result</h2>
            <p><strong>Name:</strong> <span id="user-name"></span></p>
            <p><strong>Score:</strong> <span id="user-score"></span>/200</p>
            <button class="btn btn-success" onclick="tryAgain()">Try Again</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        let quizForm = document.querySelector("form");
        let quizContainer = document.querySelector(".quiz");
        let resultContainer = document.querySelector(".result");
        let userNameSpan = document.getElementById("user-name");
        let userScoreSpan = document.getElementById("user-score");

        resultContainer.style.display = "none";

        quizForm.addEventListener("submit", function(event) {
            event.preventDefault();

            let formData = new FormData(quizForm);
            let firstName = formData.get("First_name");
            let lastName = formData.get("Last_name");

            let answers = {
                "q1": "2",
                "q2": "3",
                "q3": "4",
                "q4": "2",
                "q5": "2",
                "q6": "2",
                "q7": "4",
                "q8": "1",
                "q9": "1",
                "q10": "1"
            };

            let score = 0;
            for (let key in answers) {
                if (formData.get(key) === answers[key]) {
                    score += 20;
                }
            }

            userNameSpan.textContent = `${firstName} ${lastName}`;
            userScoreSpan.textContent = score;

            quizContainer.style.display = "none";
            resultContainer.style.display = "block";
        });


        window.tryAgain = function() {
            resultContainer.style.display = "none";
            quizContainer.style.display = "block";
            quizForm.reset();
        };
    });
    </script>
</body>

</html>