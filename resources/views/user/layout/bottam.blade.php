<div class="bottom-navigation-bar" style="background-color: rgb(69, 3, 235)">
    <div class="tf-container">
        <ul class="tf-navigation-bar">
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Dashboard') }}"><i class="icon-home"></i> Home</a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.History') }}">
                    <i class="icon-history" style="font-size:20px;"></i>History
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Plan.Status') }}">
                    <i class="icon-scan-qr-code"></i>
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Team.View') }}">
                    <i class="icon-user" style="font-size: 20px"></i>Team
                </a>
            </li>
            <li>
                <a class="fw_4 d-flex justify-content-center align-items-center flex-column text-light"
                    href="{{ route('User.Profile') }}">
                    <i class="icon-user-outline"></i> Profile</a>
            </li>
        </ul>
    </div>
</div>
