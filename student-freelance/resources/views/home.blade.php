<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <section class="header">
        <div class="text-box">
            <div class="grid">
                <div style="display: flex; align-items: left; justify-content: center; flex-direction: column;">
                    <h1 style="text-align: left;">Welcome to Work Freelance </h1>
                    <p>
                        At Work Freelance, we're excited to bring together
                        exceptional freelancers and outstanding projects.
                        Whether you're a skilled professional looking for
                        opportunities or a business seeking top-notch talent,
                        you're in the right place.
                    </p>
                </div>
                <img style="width: 50vw;" src="{{ asset('images/kitten.png') }}">
            </div>
        </div>
    </section>

    <div class="headings">
        <h2>Look for Jobs</h2>

        <div class="grid">
            <article>
                <h3>Jobs in IT</h3>
                <footer>
                    Are you passionate about technology and innovation? Explore our curated listings for exciting opportunities in the vast landscape of Information Technology.
                </footer>
            </article>

            <article>
                <h3>Art</h3>
                <footer>
                    Passionate about creativity and artistic expression? Dive into the diverse realm of art-related careers that embrace imagination, innovation, and craftsmanship.
                </footer>
            </article>

            <article>
                <h3>Photography</h3>
                <footer>
                    Photography is an incredibly dynamic and expressive form of art and profession. It's a field that encapsulates a broad spectrum of styles, specialties, and opportunities for creative expression.
                </footer>
            </article>
        </div>
    </div>

    <section class="hire">
        <h1>Hire for work</h1>
        <article>
            <p>
                In the dynamic landscape of freelancing, our platform stands as a gateway to unparalleled hiring
                opportunities. Seamlessly connect with a diverse pool of skilled professionals,
                ranging from creative designers and developers to marketing experts. Effortlessly navigate through a
                streamlined hiring process – post your project, review detailed proposals,
                and choose the perfect freelancer tailored to your needs. Experience the flexibility of remote
                collaboration, ensuring your projects are executed with precision and creativity.
                Elevate your business
                with the expertise of freelancers who are committed to turning your ideas into impactful realities. Embrace
                the future of freelancing and embark on a journey of limitless possibilities.
            </p>
        </article>
    </section>
@endsection