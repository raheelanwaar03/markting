<div class="bottom-navigation-bar" style="background-color: rgb(240, 240, 240);">
    <div class="tf-container">
        <ul class="tf-navigation-bar">
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Dashboard') }}">
                    <img src="{{ asset('assets/green_home.png') }}" style="color:white;height: 30px;width:30px"> Home
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.History') }}">
                    <img src="{{ asset('assets/green_history.png') }}" style="height: 30px;width:30px">
                    History
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Plan.Status') }}">
                    <img src="{{ asset('assets/green_trade.png') }}" style="color:white;height: 30px;width:30px">
                    Trade
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Team.View') }}">
                    <img src="{{ asset('assets/green_team.png') }}" style="color:white;height: 30px;width:30px">Team
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Profile') }}">
                    <img src="{{ asset('assets/green_profile.png') }}" style="color:white;height: 30px;width:30px">
                    Profile</a>
            </li>
        </ul>
    </div>
</div>
