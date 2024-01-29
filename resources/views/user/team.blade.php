<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            overflow-y: auto;
            /* Enable vertical scrolling for the entire body */
        }

        header {
            background-color: #fff;
            color: #0e6e15;
            padding: 10px;
            text-align: center;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
            background-color: #0e6e15;
            color: #fff;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .userid-section {
            text-align: center;
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            word-wrap: break-word;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .copy-icon {
            cursor: pointer;
            color: #0e6e15;
        }

        .copy-tooltip {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            background-color: #0e6e15;
            color: #fff;
            border-radius: 5px;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease-in-out;
        }

        .team-section {
            background-color: #fff;
            text-align: center;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .team-icons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #0e6e15;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Team</h1>
    </header>

    <section class="card-container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="card">
                        <h2>Total Team</h2>
                        <p>({{ total_team() }})</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h2>Team Deposit</h2>
                        <p>({{ Total_Team_Investment() }})</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="card">
                        <h2>My Investment</h2>
                        <p>({{ my_investment() }})</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h2>Upliners Deposit</h2>
                        <p>({{ upliner_deposit() }})</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="userid-section">
        <h2>User ID: <span id="userId">{{ auth()->user()->user_code }}</span></h2>
        <p>Your Referral Link:
        <p class="flip-card-back" id="referralLink" style="font-weight: bold;">
            {{ route('register', ['referral' => Auth::user()->user_code]) }}</p> <span class="copy-icon"
            onclick="copyToClipboard('referralLink')">📋</span></p>
        <div class="copy-tooltip" id="copyTooltip">Copied!</div>
    </section>

    <div style="margin-bottom: 150px">
        <div>
            <h2 class="text-center">Team Information <a href="{{ route('User.All.Team.Members') }}"
                    class="btn btn-sm btn-success">Team</a> </h2>
        </div>
        <section class="team-section mb-5">
            <div id="card-div">
                <div id="level-team">
                    <span style="font-weight: bold; font-size: 13px;color:#40cc45;">Level 1 Team</span> <br>
                    <span class="com-text bold" style="font-weight: bold; font-size:13px;">{{ total_team() }} <br>
                        Total People</span>
                </div>
                <div id="commision-div">
                    <span class="com-text" style="font-weight: bold; font-size:13px;">Commision 7.1% + 5%-</span>
                    <i class="fa-solid fa-greater-than gt-icon"></i>
                    <br>
                    <span class="com-text" style="font-weight: bold; font-size:13px;">{{ earned_income() }} pkr</span>
                    <br>
                    <span class="com-text" style="font-weight: bold; font-size:13px;">Earning</span>
                </div>
            </div>
        </section>
        <section class="team-section mb-5">
            <div id="card-div">
                <div id="level-team">
                    <span style="font-weight: bold; font-size: 13px;color:#40cc45;">Level 2 Team</span> <br>
                    <span class="com-text bold" style="font-weight: bold; font-size:13px;">0<br>
                        Total People</span>
                </div>
                <div id="commision-div">
                    <span class="com-text" style="font-weight: bold; font-size:13px;">Commision 4.1% + 2.5%-</span>
                    <i class="fa-solid fa-greater-than gt-icon"></i>
                    <br>
                    <span class="com-text" style="font-weight: bold; font-size:13px;">{{ earned_income() }} pkr</span>
                    <br>
                    <span class="com-text" style="font-weight: bold; font-size:13px;">Earning</span>
                </div>
            </div>
        </section>
        <section class="team-section mb-5">
            <div id="card-div">
                <div id="level-team">
                    <span style="font-weight: bold; font-size: 13px;color:#40cc45;">Level 3 Team</span> <br>
                    <span class="com-text bold" style="font-weight: bold; font-size:13px;">0 <br>
                        Total People</span>
                </div>
                <div id="commision-div">
                    <span class="com-text" style="font-weight: bold; font-size:13px;">Commision 2% + 1.1%-</span>
                    <i class="fa-solid fa-greater-than gt-icon"></i>
                    <br>
                    <span class="com-text" style="font-weight: bold; font-size:13px;">{{ earned_income() }} pkr</span>
                    <br>
                    <span class="com-text" style="font-weight: bold; font-size:13px;">Earning</span>
                </div>
            </div>
        </section>
    </div>
    <div class="bottom-navigation-bar" style="position: fixed;width:100%;bottom:2px;">
        <div class="tf-container">
            <ul class="tf-navigation-bar d-flex justify-content-around align-items-center mt-3"
                style="list-style-type:none">
                <li>
                    <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light text-decoration-none"
                        style="text-decoration:none;" href="{{ route('User.Dashboard') }}">
                        <img src="{{ asset('assets/green_home.png') }}" style="color:#0e6e15;height: 30px;width:30px">
                        <span style="color: #0e6e15">Home</span>
                    </a>
                </li>
                <li>
                    <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light text-decoration-none"
                        href="{{ route('User.History') }}">
                        <img src="{{ asset('assets/green_history.png') }}"
                            style="color:#0e6e15;height: 30px;width:30px">
                        <span style="color:#0e6e15">History</span>
                    </a>
                </li>
                <li>
                    <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light text-decoration-none"
                        href="{{ route('User.Plan.Status') }}">
                        <img src="{{ asset('assets/green_trade.png') }}" style="color:#0e6e15;height: 30px;width:30px">
                        <span style="color:#0e6e15;">Trade</span>
                    </a>
                </li>
                <li>
                    <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light text-decoration-none"
                        href="{{ route('User.Team.View') }}">
                        <img src="{{ asset('assets/green_team.png') }}" style="color:#0e6e15;height: 30px;width:30px">
                        <span style="color: #0e6e15;">Team</span>
                    </a>
                </li>
                <li>
                    <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light text-decoration-none"
                        href="{{ route('User.Profile') }}">
                        <img src="{{ asset('assets/green_profile.png') }}"
                            style="color:#0e6e15;height: 30px;width:30px">
                        <span style="color: #0e6e15;">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.textContent;

            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);

            textarea.select();
            document.execCommand('copy');

            document.body.removeChild(textarea);

            const copyTooltip = document.getElementById('copyTooltip');
            copyTooltip.style.opacity = '1';
            setTimeout(() => {
                copyTooltip.style.opacity = '0';
            }, 1500);
        }
    </script>

</body>

</html>
