<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <section class="header">
        <a href="freelance.html" class="worklogo"><img src="images/work2.png" alt=""></a>
        <div class="text-box">
            <h1>Welcome to Work Freelance </h1>
            <p>At Work Freelance, we're excited to bring
                together exceptional freelancers and outstanding projects. Whether you're a skilled <br>professional
                looking
                for opportunities or a business seeking top-notch talent, you're in the right place.</p>
        </div>
    </section>

    <div class="headings">
        <h2>Look for Jobs</h2>

        <div class="grid">
            <article>
                <h3>Jobs in IT</h3>
                <footer>Make sure to replace 0.3s with the desired duration for the transition
                    effect to occur smoothly. If this doesn't solve the issue, there might be other factors affecting
                    the behavior,
                    and additional details about your HTML and CSS structure would be helpful for further </footer>
            </article>

            <article>
                <h3>Art</h3>
                <footer>Make sure to replace 0.3s with the desired duration for the transition
                    effect to occur smoothly. If this doesn't solve the issue, there might be other factors affecting
                    the behavior,
                    and additional details about your HTML and CSS structure would be helpful for further </footer>
            </article>

            <article>
                <h3>Photography</h3>
                <footer>Make sure to replace 0.3s with the desired duration for the transition
                    effect to occur smoothly. If this doesn't solve the issue, there might be other factors affecting
                    the behavior,
                    and additional details about your HTML and CSS structure would be helpful for further </footer>
            </article>
        </div>
    </div>

    <section class="hire">
        <h1>Hire for work</h1>
        <img src="{{ asset('images/kitten.png') }}">
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