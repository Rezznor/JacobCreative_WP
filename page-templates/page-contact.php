<?php
/* Template Name: Contact Page */
?>
<?php
if (isset($_POST['submitted'])) {
    if (trim($_POST['contactName']) === '') {
        $nameError = 'Please enter your name.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    if (trim($_POST['email']) === '') {
        $emailError = 'Please enter your email address.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'You entered an invalid email address.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

    if (trim($_POST['comments']) === '') {
        $commentError = 'Please enter a message.';
        $hasError = true;
    } else {
        if (function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }

    if (!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '')) {
            $emailTo = get_option('admin_email');
        }
        $subject = '[PHP Snippets] From ' . $name;
        $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
        $headers = 'From: ' . $name . '<' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
}
?>

<?php get_header(); ?>

<div class='flex w-full bg-gray-100 pt-44 pb-28'>
    <div class='container'>
        <div class='text-center w-1/2 m-auto'>
            <h3 class='font-jcHeading font-medium text-base mt-4 mb-8 text-jcblue'>Fill out the form and we'll be in touch!</h3>
            <h2 class='font-jcHeading font-bold text-3xl w-4/5 mx-auto'>How can we help you?</h2>
        </div>

        <form action="<?php the_permalink(); ?>" method="post" id="jc_contactFormWP">

            <div class='grid grid-cols-2 gap-4 w-3/5 mx-auto my-10'>

                <div class='flex flex-col space-y-4'>
                    <input class='w-full h-12 p-4 text-sm placeholder-gray-600 border-gray-400' type='text' placeholder='Your name' name='name' required />
                    <input class='w-full h-12 p-4 text-sm placeholder-gray-600 border-gray-400' type='email' placeholder='Your email address' name='email' required />
                    <input class='w-full h-12 p-4 text-sm placeholder-gray-600 border-gray-400' type='tel' placeholder='Your phone number (optional)' name='phone' pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
                </div>
                <div class='flex'>
                    <textarea class='w-full p-4 text-sm placeholder-gray-600 border-gray-400' placeholder='Your message' type='text' required></textarea>
                </div>
                <button class='col-start-2 place-self-end w-40 h-10 bg-jcbluedark text-white text-center hover:bg-jcblue' type='submit'>Send Message</button>

            </div>
            <input type="hidden" name="submitted" id="submitted" value="true" />
        </form>

    </div>
</div>

<div class='flex w-full bg-gray-100 h-full'>
    <div id='mapbox-container'></div>
</div>

<div class='flex w-full py-20 bg-gray-50'>

    <div class='container'>

        <div class='flex justify-between'>

            <div class=''>
                <h2 class='font-jcHeading font-medium text-2xl text-gray-900 mb-4'>Ready to jump start your business?</h2>
                <a href='/contact' class='text-jcblue text-sm font-jcHeading font-medium uppercase border-b-2 border-jcblue hover:border-gray-900'>Lets Get Started</a>

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
