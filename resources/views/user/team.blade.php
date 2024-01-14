<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>

    <div class="container">
        <div class="first-div">
            <h4 id="team-text">Team</h4>
            <div class="container second-div">
                <div class="text-divs div-one">
                    <span>{{ total_team() }}</span> <br>
                    <span>Total People</span>
                </div>
                <div class="text-divs div-two">
                    <span style="margin-left:30px;">{{ Total_Team_Investment() }}</span> <br>
                    <span>Total Invest</span>
                </div>
                <div class="text-divs div-three">
                    <span style="margin-left:10px;">{{ pending_income() }}</span> <br>
                    <span>Upliners Investment</span>
                </div>
            </div>

            <div class="container third-div">
                <div id="link-div">
                    <span class="text-info"></span><input type="text" class="form-control"
                        value="{{ Auth::user()->user_code }}" id="input"> <br> <br>
                    <span class="text-white"><input type="text" class="form-control"
                            value="{{ route('register', ['referral' => Auth::user()->user_code]) }}"
                            id="myInput"></span>
                </div>
                <div id="div-copy" onclick="copyInputValue()">Copy</div>
                <div id="div-copy" onclick="copy()">Copy</div>
            </div>
            <div class="fourth-div">
                <h5>My Team Information</h5>
                <div class="container">
                    <div class="card shadow mb-2 bg-white rounded">
                        <div id="card-div">
                            <div id="level-team">
                                <span style="font-weight: bold; font-size: 13px;">{{ auth()->user()->level }}
                                    Team</span> <br>
                                <span class="text-info">{{ total_team() }} <br> Total People</span>
                            </div>
                            <div id="commision-div">
                                <span class="com-text">Commision 7.1% +5%-</span>
                                <i class="fa-solid fa-greater-than gt-icon"></i>
                                <br>
                                <span class="text-com-right">{{ earned_income() }} pkr</span> <br>
                                <span class="text-com-right"> Commision</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied");
        }
    </script>

    <script>
        function copyInputValue() {
            // Get the input element
            var inputElement = document.getElementById("input");

            // Select the text in the input element
            inputElement.select();
            inputElement.setSelectionRange(0, 99999); // For mobile devices

            // Copy the selected text to the clipboard
            document.execCommand("copy");

            // Deselect the text (optional)
            window.getSelection().removeAllRanges();

            // Notify the user that the text has been copied (optional)
            alert("Copied");
        }
    </script>
</footer>

</html>
