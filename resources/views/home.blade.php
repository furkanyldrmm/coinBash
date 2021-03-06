@extends('fronts.master')

@section('content')





        <link rel="shortcut icon" href="https://surgenex.com/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://surgenex.com/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://surgenex.com/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://surgenex.com/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="https://surgenex.com/images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" sizes="57x57" href="https://surgenex.com/images/ico/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="https://surgenex.com/images/ico/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://surgenex.com/images/ico/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://surgenex.com/images/ico/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://surgenex.com/images/ico/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://surgenex.com/images/ico/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://surgenex.com/images/ico/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://surgenex.com/images/ico/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://surgenex.com/images/ico/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="https://surgenex.com/images/ico/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://surgenex.com/images/ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://surgenex.com/images/ico/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://surgenex.com/images/ico/favicon-16x16.png">
        <link rel="manifest" href="https://surgenex.com/images/ico/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="https:surgenex.com/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

    <body id="home" class="homepage">
    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row" style="padding:40px">
                <div class="col-sm-9">
                    <h2>Buy & sell Crypto in minutes</h2>
                    <p><h4>Join now and see how good you are in the bitcoin exchange</h4></p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="https://surgenex.com/images/brochure/Patient%20Brochure.pdf" download="" alt="Download Surgenex Brochure Now">Register Now!</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->
    <div style="width: 100%;height: calc(610px - 32px);background: transparent;padding: 0 !important;"><iframe id="tradingview_d9c26" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_d9c26&amp;symbol=BTCUSD&amp;interval=D&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=light&amp;style=1&amp;timezone=Etc%2FUTC&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=inspirationfeed.com&amp;utm_medium=widget_new&amp;utm_campaign=chart&amp;utm_term=BTCUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe></div>


    <section id="aboutus">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">what is coinBash</h2>
                <p class="text-center wow fadeInDown">Test yourself without any expense!</p>
            </div>
            <div class="row">


                <div class="col-sm-10 wow fadeInLeft">
                    <p>Coinbash gives every user $ 1000 and with this money, users can invest in any coin.users can see themselves in the top-rank list according to the amount in their wallet. They can compete with other users.</p>
                    <p>Should not be forgotten! No deposits are made in addition to .coinBash. and the funds in the wallet cannot be withdrawn. coinBash is a test exchange</p>
                </div>


            </div>
        </div>

    </section>

    <div class="testimonial-container">
        <p class="testimonial">
            “Bitcoin is a remarkable cryptographic achievement and the ability to create something that is not duplicable in the digital world has enormous value.”
        </p>
        <div class="user">
            <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Eric_E_Schmidt%2C_2005_%28looking_left%29.jpg/800px-Eric_E_Schmidt%2C_2005_%28looking_left%29.jpg"
                alt="user"
                class="user-image"
            />
            <div class="user-details">
                <h4 class="username"> Eric Schmidt </h4>
                <p class="role">Software Engineer</p>
            </div>
        </div>
    </div>






</body>
@endsection
@section('js')
<script>
    const testimonialsContainer = document.querySelector(".testimonials-container");
    const testimonial = document.querySelector(".testimonial");
    const userImage = document.querySelector(".user-image");
    const username = document.querySelector(".username");
    const role = document.querySelector(".role");

    const testimonials = [
        {
            name: "Kim Dotcom",
            position: "Founder of Mega",
            photo: "https://upload.wikimedia.org/wikipedia/commons/e/e2/Kim_dotcom_crowd_cropped.jpg",
            text:
"“Bitcoin is a very exciting development, it might lead to a world currency. I think over the next decade it will grow to become one of the most important ways to pay for things and transfer assets.” "
        },
        {
            name: "Paul Graham",
            position: "Programmer",
            photo: "https://i.insider.com/5e6bb1bd84159f39f736ee32?width=700",
            text:
" “I am very intrigued by Bitcoin. It has all the signs. Paradigm shift, hackers love it, yet it’s derided as a toy. Just like microcomputers.”"        },
        {
            name: "Bill Gates",
            position: "Software developer, Investor",
            photo: "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Bill_Gates_2018.jpg/220px-Bill_Gates_2018.jpg",
            text:
"“Bitcoin is a techno tour de force.” "        },
        {
            name: "Julian Assange",
            position: "Founder of Wikileaks",
            photo: "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Julian_Assange_August_2014.jpg/220px-Julian_Assange_August_2014.jpg",
            text:
                "“Bitcoin actually has the balance and incentives right, and that is why it is starting to take off.”",
        },
        {
            name: "Adam Draper",
            position: "CEO and Founder of Boost",
            photo: "https://assets.bwbx.io/images/users/iqjWHBFdfxIU/iF8zUfJy_D5g/v4/140x140.png",
            text:
"“Bitcoin is here to stay. There would be a hacker uproar to anyone who attempted to take credit for the patent of cryptocurrency. And I wouldn’t want to be on the receiving end of hacker fury.”"        },
        {
            name: " Hal Finney",
            position: "Computer Scientist",
            photo:
                "https://upload.wikimedia.org/wikipedia/en/thumb/5/52/Hal_Finney_%28computer_scientist%29.jpg/220px-Hal_Finney_%28computer_scientist%29.jpg",
            text:
"“Bitcoin seems to be a very promising idea. I like the idea of basing security on the assumption that the CPU power of honest participants outweighs that of the attacker. It is a very modern notion that exploits the power of the long tail.”"        },
        {
            name: "Marc Kenigsberg",
            position: "Founder of BlockSmarter",
            photo: "https://res-3.cloudinary.com/crunchbase-production/image/upload/c_thumb,h_170,w_170,f_auto,g_faces,z_0.7,b_white,q_auto:eco/v1488108886/rmpaui0uur6dz4yigccz.png",
            text:
" “Blockchain is the tech. Bitcoin is merely the first mainstream manifestation of its potential.”"        },
    ];

    let index = 1;

    const updateTestimonial = () => {
        const { name, position, photo, text } = testimonials[index];
        testimonial.innerHTML = text;
        userImage.src = photo;
        username.innerHTML = name;
        role.innerHTML = position;
        index++;
        if (index > testimonials.length - 1) index = 0;
    };

    setInterval(updateTestimonial, 3000);

</script>

@if(\Illuminate\Support\Facades\Session::has('login_success'))
    <script>
        swal("Welcome Again!", "You can buy and sell your wish coins,Lucrative days", "success");

    </script>
    {!!\Illuminate\Support\Facades\Session::forget('login_success')  !!}


@endif

@endsection
