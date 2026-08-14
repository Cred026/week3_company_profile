@extends('layouts.app')

@section('content')

<div class="aboutBody">


    <h1 class="aboutUsText">About Us</h1>

    <div class="companyHistory">
        <h1>Company History</h1>
        <p>
            Northwind Digital Solutions was established in 2020 by a small group of software developers and technology
            enthusiasts who shared a common vision of helping businesses adapt to an increasingly digital world.
            Recognizing
            the
            growing demand for accessible and reliable technology services, the founders set out to create a company
            that
            prioritized innovation, collaboration, and customer satisfaction.

            What began as a small web development team quickly expanded into a full-service technology company offering
            website
            development, custom software solutions, system integration, and technical support. Through dedication and a
            commitment to quality, Northwind Digital Solutions developed long-term partnerships with startups,
            educational
            institutions, and small and medium-sized enterprises.

            Today, the company continues to grow by embracing new technologies and investing in research, professional
            development, and customer relationships. Northwind Digital Solutions remains committed to helping
            organizations
            achieve their goals through practical and innovative digital solutions.
        </p>
    </div>

    <div class="companyMission">
        <h1>Our Mission</h1>
        <p>
            To provide innovative, reliable, and accessible technology solutions that empower businesses and
            organizations
            to
            improve efficiency, strengthen their digital presence, and achieve sustainable growth.
        </p>
    </div>

    <div class="companyVision">
        <h1>Our Vission</h1>
        <p>
            To become a trusted leader in digital transformation by delivering technology-driven solutions that create
            meaningful and lasting value for businesses throughout Southeast Asia.
        </p>
    </div>

    <div class="coreValues">
        <h1 class="coreValuesText">Core Value</h1>
        <div class="coreValuesInfo">
            <h1>Innovation</h1>
            <p>
                We continuously explore new technologies and creative approaches to develop solutions that meet the
                evolving
                needs
                of our clients.
            </p>

            <h1>Integrity</h1>
            <p>
                We conduct our business with honesty, transparency, and professionalism in every project and
                partnership.
            </p>

            <h1>Collaboration</h1>
            <p>
                We believe that successful projects are built through teamwork, open communication, and strong
                relationships.
            </p>

            <h1>Excellence</h1>
            <p>
                We are committed to maintaining the highest standards of quality in our products, services, and customer
                support.
            </p>

            <h1>Customer Commitment</h1>
            <p>
                We place our clients at the center of everything we do and strive to exceed their expectations through
                dependable
                and personalized solutions.
            </p>

        </div>
    </div>

    <div>
        <h1>Meet Our Team</h1>

        <div class="team-container">

            <div class="team-member">
                <img src="{{ asset('team_member/ethan_carter.jpg') }}" alt="Ethan Carter">

                <div>
                    <h2>Ethan Carter</h2>
                    <p>Chief Executive Officer</p>
                </div>
            </div>

            <div class="team-member">
                <img src="{{ asset('team_member/sophia_martinez.jpg') }}" alt="Sophia Martinez">

                <div>
                    <h2>Sophia Martinez</h2>
                    <p>Lead Software Engineer</p>
                </div>
            </div>

            <div class="team-member">
                <img src="{{ asset('team_member/daniel_kim.jpg') }}" alt="Daniel Kim">
                <div>
                    <h2>Daniel Kim</h2>
                    <p>User Experience and Design Specialist</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
