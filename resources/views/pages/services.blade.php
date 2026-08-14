@extends('layouts.app')

@section('content')

<div class="services">
    <h1 class="servicesText">Services</h1>

    <div class="servicesContainer">
        <div class="servicesCard">
            <div>
                <img src="{{ asset('logos/webdev_logo.png') }}" alt="webdev">
                <h1>Web Development</h1>
            </div>
            <p>We create responsive and professional websites that help businesses establish a strong online presence
                and provide a better experience for their customers.</p>
        </div>

        <div class="servicesCard">
            <div>
                <img src="{{ asset('logos/mobile_dev_logo.png') }}" alt="webdev">
                <h1>Mobile Development</h1>
            </div>
            <p>We develop mobile applications that allow users to access services, information, and business solutions
                directly from their smartphones and tablets.</p>
        </div>

        <div class="servicesCard">
            <div>
                <img src="{{ asset('logos/software_dev_logo.png') }}" alt="webdev">
                <h1>Software Development</h1>
            </div>
            <p>We build custom software solutions designed to improve productivity, automate processes, and meet the
                specific needs of each organization.</p>
        </div>

        <div class="servicesCard">
            <div>
                <img src="{{ asset('logos/UIUX_logo.png') }}" alt="webdev">
                <h1>UI/UX Design</h1>
            </div>
            <p>We design intuitive and visually appealing interfaces that make digital products easier to use and more
                enjoyable for users.</p>
        </div>

        <div class="servicesCard">
            <div>
                <img src="{{ asset('logos/cloud_solutions_logo.png') }}" alt="webdev">
                <h1>Cloud Solutions</h1>
            </div>
            <p>We provide cloud-based services that improve data storage, collaboration, security, and system
                accessibility across multiple devices.</p>

        </div>

        <div class="servicesCard">
            <div>
                <img src="{{ asset('logos/scripting_logo.png') }}" alt="webdev">
                <h1>Scripting</h1>
            </div>
            <p>We develop scripts that automate repetitive tasks, streamline workflows, and increase the efficiency of
                software systems and business operations.</p>
        </div>
    </div>

</div>

@endsection
