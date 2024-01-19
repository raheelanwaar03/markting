<div class="bottom-navigation-bar">
    <div class="tf-container">
        <ul class="tf-navigation-bar">
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Dashboard') }}" style="color: black;">
                    <img src="{{ asset('assets/green_home.png') }}" style="height: 30px;width:30px"> Home
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.History') }}" style="color: black;">
                    <img src="{{ asset('assets/green_history.png') }}" style="height: 30px;width:30px">
                    History
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Plan.Status') }}" style="color: black;">
                    <img src="{{ asset('assets/green_trade.png') }}" style="height: 30px;width:30px">
                    Trade
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Team.View') }}" style="color: black;">
                    <img src="{{ asset('assets/green_team.png') }}" style="height: 30px;width:30px">Team
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Profile') }}" style="color: black;">
                    <img src="{{ asset('assets/green_profile.png') }}" style="height: 30px;width:30px">
                    Profile</a>
            </li>
        </ul>
    </div>
</div>
