@extends('layouts.app')

@section('content')

<div class="contactContainer">

    <h1 id="contactUs">Contact Us</h1>

    <div class="contactSection">

        <div class="contactForm">

            <h2 id="sendUsAMsg">Send Us a Message</h2>

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

            <div class="information">

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
            </div>

            <div class="hyperlink">

                <h2>Follow Us</h2>

                <ul class="lists">
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

</div>

@endsection
