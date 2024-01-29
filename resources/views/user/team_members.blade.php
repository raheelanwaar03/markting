<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Team Tree</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #0e6e15;
            color: white;
        }

        .top-bar {
            background-color: #75d87b;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container {
            margin-top: 20px;
        }

        .tree-container {
            background-color: #75d87b;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .user-node {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-name {
            font-size: 18px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <div class="top-bar">
        <i class="fas fa-arrow-left navigation-icon" onclick="goBack"></i>
        <h1>{{ env('APP_NAME') }}</h1>
    </div>

    <div class="container">
        <div class="tree-container">
            <div class="user-node">
                <h3 class="user-name">{{ auth()->user()->name }}</h3>
                <p>Email: {{ auth()->user()->email }}</p>
                @forelse ($users as $item)
                    <div class="user-node">
                        <h4 class="user-name">{{ $item->name }}</h4>
                        <p>Email: {{ $item->email }}</p>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <div class="bottom-navigation-bar" style="background-color:white;position:fixed;width:100%;bottom:2px;">
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


    <!-- Add Bootstrap JS and Popper.js scripts (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add Font Awesome JS script (optional but recommended) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <script>
        function goBack() {
            // Implement your navigation logic here
            // For demo purposes, it will simply navigate back in the browser history
            window.history.back();
        }
    </script>

</body>

</html>
