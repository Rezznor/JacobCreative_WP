<?php
/* Template Name: About Page */
get_header();
?>

<div class='flex w-full bg-white py-20'>

    <div class='container'>

        <div class='grid grid-cols-3'>
            <div class='flex w-full justify-center'>
                <img src='https://res.cloudinary.com/jacob-creative/image/upload/v1639861302/medium_josh_about_3e823a6e00.jpg' alt='Picture of Jacob Creative CEO' class='my-auto' />
            </div>
            <div class='w-full my-4 mx-8 col-span-2'>
                <h3 class='mb-2 text-gray-800 font-jcHeading font-medium'>A quick introduction</h3>
                <p class='text-gray-500 text-base font-jcSubHeading'>Jacob Creative is a web development and design business in Southern Ontario that provides a wide range of web development services. Jacob Creative was founded after identifying a crucial need in the industry &#8211; a personal connection. Your business deserves to be more than a number on your developer's to-do list, and we're committed to putting businesses online through direct contact with our developer, where all information is clearly stated &#8211; no more signing contracts where you're unsure what you're paying for! </p>
                <p class='text-gray-500 text-base font-jcSubHeading'>By delivering the online presence you've imagined, Jacob Creative is determined to make each company feel like a top priority.</p>

                <h3 class='mt-12 mb-2 text-gray-800 font-jcHeading font-medium'>Get to know the Developer</h3>
                <p class='text-gray-500 text-base font-jcSubHeading'>Josh Jacob earned an Honours degree in Computer Science with a minor in Mathematics from Wilfrid Laurier University in 2020. Josh has been creating websites for over ten years and has worked on a variety of brands and industries, including Chevrolet, Buick, GMC, Cadillac, MasterCard, Real Estate, small businesses, and personal branding sites. Josh is passionate about staying up to date on the latest technology and strives to use the best and most appropriate tools for the job. Josh is an avid sports fan, enjoys gaming, and is currently working on a fantasy novel. He has three cats and has been with his wife, Megan, for 12 years.</p>

                <h3 class='font-jcHeading font-medium text-xl text-center mt-16 mb-12 text-jcblue'>Let's find the best options for your business, together!</h3>

                <h3 class='mt-12 mb-2 text-gray-800 font-jcHeading font-medium'>Note from Josh</h3>
                <p class='text-gray-500 text-base italic font-jcSubHeading'>I'm excited to be moving full-time with my business and am actively looking to work with new and established businesses. I want to take the guess work out of getting your business online or increasing your online presence. I will work to ensure you understand each step of the process with clear and consistent communication as well as the most up to date tech.</p>
                <p class='text-gray-500 text-base italic font-jcSubHeading'>With so much being virtual these days, I look forward to meeting you virtually!</p>
                <p class='text-gray-500 text-base italic font-jcSubHeading'>I hope we can work together soon, <br /> Josh</p>

            </div>
        </div>

    </div>

</div>

<div class='flex w-full py-20 bg-gray-50'>

    <div class='container'>

        <div class='flex justify-between'>

            <div class=''>
                <h2 class='font-jcHeading font-medium text-2xl text-gray-900 mb-4'>Ready to jump start your business?</h2>
                <Link href='/contact'>
                <a class='text-jcblue text-sm font-jcHeading font-medium uppercase border-b-2 border-jcblue hover:border-gray-900'>Lets Get Started</a>
                </Link>
            </div>
            <div class='grid content-between'>
                <h4 class='font-jcHeading text-sm text-jctextlight'>Join us on social media</h4>
                <ul class='flex flex-row list-none'>
                    <li class='mx-4 md:ml-8 hover:text-jcblue'>
                        <a href='https://www.facebook.com/JacobCreativeCA'><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class='mx-4 md:ml-4 hover:text-jcblue'>
                        <a href='https://twitter.com/JacobCreativeCA'><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class='mx-4 md:ml-4 hover:text-jcblue'>
                        <a href='https://www.instagram.com/jacobcreativeca/'><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>

        </div>

    </div>

</div>

<?php
get_footer();
