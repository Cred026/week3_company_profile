@extends('layouts.app')

@section('content')

<div class="contactContainer">

    <h1>Contact Us</h1>

    <p>
        We'd love to hear from you. Whether you have questions about our
        services, need technical assistance, or want to discuss a new
        project, our team is ready to help.
    </p>

    <div class="contactSection">

        <div class="contactForm">

            <h2>Send Us a Message</h2>

            <form>

                <label for="name">Full Name</label>
                <input type="text" id="name" placeholder="Enter your name">

                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email">

                <label for="subject">Subject</label>
                <input type="text" id="subject" placeholder="Enter a subject">

                <label for="message">Message</label>
                <textarea id="message" rows="6" placeholder="Enter your message"></textarea>

                <button type="submit">Send Message</button>

            </form>

        </div>

        <div class="contactInformation">

            <h2>Contact Information</h2>

            <p>
                <strong>Address:</strong><br>
                245 Innovation Avenue,<br>
                Batangas City, Batangas 4200,<br>
                Philippines
            </p>

            <p>
                <strong>Email:</strong><br>
                info@northwinddigital.com
            </p>

            <p>
                <strong>Phone:</strong><br>
                +63 917 456 7821
            </p>

            <h2>Follow Us</h2>

            <ul>

                <li>
                    <a href="#">Facebook</a>
                </li>

                <li>
                    <a href="#">Instagram</a>
                </li>

                <li>
                    <a href="#">LinkedIn</a>
                </li>

                <li>
                    <a href="#">X (Twitter)</a>
                </li>

            </ul>

        </div>

    </div>

</div>

@endsection
