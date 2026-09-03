@extends('layouts.app')

@section('title', 'MREC - Contact')

@section('content')

<section class="page-hero">

    <div class="section-container">

        <span class="section-label">
            CONTACT
        </span>

        <h1>
            Let's Talk.
        </h1>

        <p>
            Have a project, idea, or collaboration
            in mind? Get in touch with us.
        </p>

    </div>

</section>


<section class="contact-section">

    <div class="section-container">

        <div class="contact-grid">


            <div class="contact-info">

                <span class="section-label">
                    CONTACT INFORMATION
                </span>

                <h2>
                    We'd love to
                    hear from you.
                </h2>

                <p>
                    Feel free to reach out to us
                    for collaboration, projects,
                    or any inquiries.
                </p>


                <div class="contact-item">

                    <strong>
                        Email
                    </strong>

                    <p>
                        info@mrec.com
                    </p>

                </div>


                <div class="contact-item">

                    <strong>
                        Phone
                    </strong>

                    <p>
                        +62 xxx xxxx xxxx
                    </p>

                </div>


                <div class="contact-item">

                    <strong>
                        Location
                    </strong>

                    <p>
                        Indonesia
                    </p>

                </div>

            </div>


            <div class="contact-form">

                <form>

                    <div class="form-group">

                        <label>
                            Name
                        </label>

                        <input
                            type="text"
                            placeholder="Your name"
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Email
                        </label>

                        <input
                            type="email"
                            placeholder="Your email"
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Message
                        </label>

                        <textarea
                            rows="6"
                            placeholder="Tell us about your project..."
                        ></textarea>

                    </div>


                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Send Message
                    </button>

                </form>

            </div>


        </div>

    </div>

</section>

@endsection