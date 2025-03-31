<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="timetable/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
    #imageDiv {
        width: 50px;
        height: 50px;
        border-radius: 25px;
        background-color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 10px 10px 20pxrgb(245, 238, 238);
    }

    #imageDiv img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile input {
        display: none;
    }
    </style>
</head>

<body>
    <div class="fault">
        <div class="fault_logo">
            <div class="fault_logo1"><img
                    src="https://img.freepik.com/free-vector/vector-education-logo_779267-2080.jpg"></div>
            <div class="fault_logo_text">Education<br>
                <p style="font-size: 10px;">Learning, growth,
                    knowledge,
                    skills.</p>
            </div>
        </div>

        <div class="fault_contain">
            <div class="fault_search1">
                <p>Dashboard</p>
            </div>
            <div class="search" style="padding-right:60px;">
                <input type="text" class="search-input" placeholder="search" >
                <button class="search-icon" style="right:70px;"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>

        <div class="fault_login">
            <?php
                    session_start();
                    if((isset($_SESSION['loggedin'])) && $_SESSION['loggedin'] == true && $_SESSION['useremail'])
                    {
                        echo'

                        <div class="profile" style="width:30%; margin-left:17px;">
                            <div id="imageDiv">
                            <img src="user.webp" alt="Default User Image" id="previewImage" style="height:60px; width:60px;"> 
                            </div>
                            <input type="file" id="fileInput" accept="image/*">
                        </div>
                        <div style="margin-left:0px"><p>Welcome <b>'.$_SESSION['useremail'].'</b> </p></div>
                        <div class="logout" style="width:122px; margin-right:15px; background-color:white;border:2px solid red;"><a href="http://localhost/unit1/Project/logout.php"  style="text-decoration:none; background-color:white;">Logout</a></div>';
                    }
                    else
                    {
                        echo '<div class="login" style="width:122px;background-color:#cdcaca; margin-right:20px;"><a href="http://localhost/unit1/Project/login.php" style="text-decoration:none; background-color:#cdcaca">Login</a></div>
                        <div class="signup" style="width:122px;background-color:#cdcaca"><a href="http://localhost/unit1/Project/signup.php"  style="text-decoration:none; background-color:#cdcaca">Sign-up</a></div>';
                    }
                ?>
        </div>
    </div>
    <div class="main">
        <div class="sidebar">

            <div class="function">
                <div class="common">
                    <i class="fa-sharp fa-solid fa-business-time"></i>
                    <a href>Dashboard</a>
                </div>
                <div class="common">
                    <i class="fa-sharp fa-solid fa-book"></i>
                    <a href>Course</a>
                </div>
                <div class="common">
                    <i class="fa-sharp fa-solid fa-business-time"></i>
                    <p class="routine"
                        style="text-decoration: none; font-size: 20px; color: black; font-weight: 500; background: none; cursor:pointer">
                        Time Table</p>
                </div>
                <div class="common">
                    <i class="fa-sharp fa-solid fa-file-lines"></i>
                    <a href="http://localhost/unit1/Project/Quiz.php">Exam</a>
                </div>
                <div class="common">
                    <i class="fa-solid fa-square-poll-vertical"></i>
                    <a href>Result</a>
                </div>
                <div class="common">
                    <i class="fa-solid fa-user"></i>
                    <a href>Student</a>
                </div>
                <div class="common">
                    <i class="fa-solid fa-message"></i>
                    <a href>Message</a>
                </div>
                <div class="common">
                    <i class="fa-solid fa-play"></i>
                    <a href="http://localhost/unit1/cwh/Lecture_32/">Add
                        Note</a>
                </div>
            </div>

            <div class="below">
                <div class="img_logo"> <img class="img_logo"
                        src="https://i.pinimg.com/474x/90/d3/0e/90d30e324cb60db9b07c5e08027ccc8b.jpg" alt></div>
                <button class="link">Get the link</button>
            </div>
        </div>
        <div class="part2">
            <div class="control">
                <div class="card3">
                    <div class="hexagon">
                        <i class="fa-sharp fa-solid fa-graduation-cap"></i>
                    </div>
                    <p class="title" style="background:none;">Total
                        Students</p>
                    <p class="count" style="background:none;">1220</p>
                </div>
                <div class="card3" style="background-color: rgb(192, 136, 136);">
                    <div class="hexagon" style="background-color: rgb(213, 74, 74);">
                        <i class="fa-sharp fa-solid fa-person-chalkboard"></i>
                    </div>
                    <p class="title" style="background:none;">Total
                        Students</p>
                    <p class="count" style="background:none;">1220</p>
                </div>
                <div class="card3" style="background-color: rgb(109, 169, 209);">
                    <div class="hexagon">
                        <i class="fa-sharp fa-solid fa-book"></i>
                    </div>
                    <p class="title" style="background:none;">Total
                        Courses</p>
                    <p class="count" style="background:none;">300</p>
                </div>
                <div class="card3" style="background-color: rgb(147, 157, 106);">
                    <div class="hexagon" style="background-color: rgb(203, 221, 65);">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <p class="title" style="background:none;">Faculty
                        Room</p>
                    <p class="count" style="background:none;">1220</p>
                </div>
            </div>
            <div class="graph"
                style="    display: flex; justify-content: space-evenly; padding-top: 20px; height: 290px;">
                <div class="chart"
                    style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 7px 25px rgba(0,0,0,0.08); width: 35%; max-width: 400px; display: flex; flex-direction: column; justify-content: center;">
                    <h2>Marks (Past 12 months)</h2>
                    <canvas id="myChart"
                        style="display: block;box-sizing: border-box; height: 200px; max-width: 300px;"></canvas>
                </div>
                <div class="chart"
                    style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 7px 25px rgba(0,0,0,0.08); width: 35%; max-width: 400px; display: flex; flex-direction: column; justify-content: center;">
                    <div style="display: flex; justify-content: center; flex-direction:column">
                        <h2>Marks (Past 12 months)</h2>
                        <canvas id="doughnutCanvas"
                            style="display: block; box-sizing: border-box; height: 200px; width: 200px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="part3">
            <div class="calender" style="margin:0px; padding:0px">
                <iframe
                    src="https://calendar.google.com/calendar/embed?src=301dc1e47ad77d4b000e389a3c934dd1b462ffa35be7c4dfddc56983f96d9d4c%40group.calendar.google.com&ctz=Asia%2FKolkata"
                    style="border: 0" width="300" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <p class="Notice_board">Suggetion</p>
            <div class="Notice_board1">
                <div class="n1">
                    <img
                        src="https://i.ytimg.com/vi/tVzUXW6siu0/hqdefault.jpg?sqp=-oaymwEmCKgBEF5IWvKriqkDGQgBFQAAiEIYAdgBAeIBCggYEAIYBjgBQAE=&rs=AOn4CLB6VzxANxt3dHm91HW9lLfDlxvmuA">
                    <div class="m1">
                        <a href="https://www.youtube.com/results?search_query=cwh+sigma+batch">Web
                            Dev Sigma</a>
                        <a href="https://www.youtube.com/results?search_query=cwh+sigma+batch">By-
                            codewithharry</a>
                    </div>
                </div>

                <div class="n1">
                    <img
                        src="https://i.ytimg.com/vi/0bHoB32fuj0/hqdefault.jpg?sqp=-oaymwEmCKgBEF5IWvKriqkDGQgBFQAAiEIYAdgBAeIBCggYEAIYBjgBQAE=&rs=AOn4CLAVoKegUccqztFRzv1Twe84uE9aJg">
                    <div class="m1">
                        <a href="https://www.youtube.com/watch?v=0bHoB32fuj0&list=PLgUwDviBIf0oF6QL8m22w1hIDC1vJ_BHz">DSA
                            - STRIVER's A2Z</a>
                        <a href="https://www.youtube.com/watch?v=0bHoB32fuj0&list=PLgUwDviBIf0oF6QL8m22w1hIDC1vJ_BHz">By-
                            TakeuForward</a>
                    </div>
                </div>

                <div class="n1">
                    <img
                        src="https://i.ytimg.com/vi/uB3i-qV6VdM/hqdefault.jpg?sqp=-oaymwEmCKgBEF5IWvKriqkDGQgBFQAAiEIYAdgBAeIBCggYEAIYBjgBQAE=&rs=AOn4CLA-Q0BnpRJoDcveM6PmTHCrKpgWyw">
                    <div class="m1">
                        <a href="https://www.youtube.com/watch?v=uB3i-qV6VdM&list=PLxCzCOWd7aiHGhOHV-nwb0HR5US5GFKFI">Artificial
                            Intelligence
                        </a>
                        <a href="https://www.youtube.com/watch?v=uB3i-qV6VdM&list=PLxCzCOWd7aiHGhOHV-nwb0HR5US5GFKFI">By-
                            Gate Smashers</a>
                    </div>
                </div>

                <div class="n1">
                    <img
                        src="https://i.ytimg.com/vi/LusTv0RlnSU/hqdefault.jpg?sqp=-oaymwEmCKgBEF5IWvKriqkDGQgBFQAAiEIYAdgBAeIBCggYEAIYBjgBQAE=&rs=AOn4CLCPUgZWn5nAJv2VMV6MdB2VAG8AAA">
                    <div class="m1">
                        <a href="https://www.youtube.com/watch?v=yRpLlJmRo2w&list=PLfqMhTWNBTe3LtFWcvwpqTkUSlB32kJop">Java
                            B to A
                        </a>
                        <a href="https://www.youtube.com/results?search_query=cwh+sigma+batch">By- Apna College</a>
                    </div>
                </div>
                <div class="n1">
                    <img
                        src="https://i.ytimg.com/vi/7wnove7K-ZQ/hqdefault.jpg?sqp=-oaymwEmCKgBEF5IWvKriqkDGQgBFQAAiEIYAdgBAeIBCggYEAIYBjgBQAE=&rs=AOn4CLB9yXNzeGwuJbKDH8vhgMnvUjyI9A">
                    <div class="m1">
                        <a href="https://www.youtube.com/watch?v=7wnove7K-ZQ&list=PLu0W_9lII9agwh1XjRt242xIpHhPT2llg">100
                            Days Python
                        </a>
                        <a href="https://www.youtube.com/results?search_query=cwh+sigma+batch">By- Codewithharry</a>
                    </div>
                </div>
                <div class="n1">
                    <img
                        src="https://i.ytimg.com/vi/ZftI2fEz0Fw/hqdefault.jpg?sqp=-oaymwEmCKgBEF5IWvKriqkDGQgBFQAAiEIYAdgBAeIBCggYEAIYBjgBQAE=&rs=AOn4CLB2_ErIXeH6YVuA-Vt8cPSXH9RopQ">
                    <div class="m1">
                        <a href="https://www.youtube.com/watch?v=ZftI2fEz0Fw&list=PLKnIA16_Rmvbr7zKYQuBfsVkjoLcJgxHH">Mechine
                            Learning
                        </a>
                        <a href="https://www.youtube.com/watch?v=ZftI2fEz0Fw&list=PLKnIA16_Rmvbr7zKYQuBfsVkjoLcJgxHH">By-
                            Campus X</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="timetable" style="display:none">
        <div class="nav">
            <div class="icon1" style="background-color:black">
                <i class="fa-solid fa-arrow-left" style="background-color:black; outline:none; border:none;"></i>
            </div>
            <div class="text1" style="background-color: black;">Time-Table</div>
        </div>
        <div class="Day">
            <button class="Sec" data-day="Monday">Monday</button>
            <button class="Sec" data-day="Tuesday">Tuesday</button>
            <button class="Sec" data-day="Wednesday">Wednesday</button>
            <button class="Sec" data-day="Thursday">Thursday</button>
            <button class="Sec" data-day="Friday">Friday</button>
        </div>

        <div class="insert">
            <div class="timetable-container" id="Monday"></div>
            <div class="timetable-container" id="Tuesday"></div>
            <div class="timetable-container" id="Wednesday"></div>
            <div class="timetable-container" id="Thursday"></div>
            <div class="timetable-container" id="Friday"></div>
        </div>
    </div>

    <script>
    const timetableData = {
        Monday: [{
                time: "09-10 AM",
                subject: "C: PEA305 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "10-11 AM",
                subject: "C: INT428 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "11-12 PM",
                subject: "C: CSE316 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "01-02 PM",
                subject: "C: INT220 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "02-03 PM",
                subject: "C: INT220 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "03-04 PM",
                subject: "C: CSE310 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "04-05 PM",
                subject: "C: CSE310 / R",
                room: "33-603 / S:K23BR"
            },
        ],
        Tuesday: [{
                time: "09-10 AM",
                subject: "C: PEA305 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "10-11 AM",
                subject: "C: INT428 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "11-12 AM",
                subject: "C: INT219 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "12-01 AM",
                subject: "C: INT219 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "01-02 AM",
                subject: "C: CSE310 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "03-04 PM",
                subject: "C: CSE325 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "04-05 PM",
                subject: "C: CSE325 / R",
                room: "33-603 / S:K23BR"
            },
        ],
        Wednesday: [{
                time: "09-10 AM",
                subject: "C: CSE310 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "10-11 AM",
                subject: "C: CSE310 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "11-12 AM",
                subject: "C: PEA305 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "12-01 AM",
                subject: "C: CSE316 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "01-02 AM",
                subject: "C: CSE428 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "03-04 PM",
                subject: "C: CSE316 / R",
                room: "33-603 / S:K23BR"
            },
        ],
        Thursday: [{
                time: "01-02 AM",
                subject: "C: CSE406 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "02-03 AM",
                subject: "C: INT220 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "03-04 PM",
                subject: "C: INT220 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "04-05 PM",
                subject: "C: CSE316 / R",
                room: "33-603 / S:K23BR"
            },
        ],
        Friday: [{
                time: "01-02 AM",
                subject: "C: CSE406 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "02-03 AM",
                subject: "C: INT219 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "03-04 PM",
                subject: "C: INT219 / R",
                room: "33-603 / S:K23BR"
            },
            {
                time: "04-05 PM",
                subject: "C: INT428 / R",
                room: "33-603 / S:K23BR"
            },
        ]
    };

    function preloadTimetable() {
        for (let day in timetableData) {
            let container = document.getElementById(day);
            let data = timetableData[day];

            data.forEach((entry) => {
                let card = document.createElement("div");
                card.classList.add("card");
                card.innerHTML = `
                            <div class="time">${entry.time}</div>
                            <div class="info">
                                <p>${entry.subject}</p>
                                <p>${entry.room}</p>
                            </div>
                        `;
                container.appendChild(card);
            });
        }

        document.getElementById("Monday").classList.add("active");
    }

    function switchTimetable(day) {
        document.querySelectorAll(".timetable-container").forEach(div => div.classList.remove("active"));
        document.getElementById(day).classList.add("active");
    }

    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".Sec").forEach(button => {
            button.addEventListener("click", () => {
                let day = button.getAttribute("data-day");
                switchTimetable(day);
            });
        });

        preloadTimetable();
    });
    let sec = document.querySelector(".icon1").firstElementChild;
    sec.addEventListener("click", () => {
        let a = document.querySelector(".timetable");
        a.style.left = "-80%";
    })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>

    <script>
    let add = document.querySelector(".routine");
    let timetable = document.querySelector(".timetable");
    add.addEventListener("click", () => {
        timetable.style.display = "block";
        timetable.style.left = "0%";
    })
    </script>

    <!-- // Image Upload ------------------------------ -->
    <script>
        const imageDiv = document.getElementById('imageDiv');
        const fileInput = document.getElementById('fileInput');
        const previewImage = document.getElementById('previewImage');

        imageDiv.addEventListener('click', () => {
            fileInput.click(); // Opens file picker when div is clicked
        });

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result; // Replace default image with uploaded image
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
