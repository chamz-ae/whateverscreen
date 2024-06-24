<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
</head>
<?php $this->load->view('_partials/navbar.php'); ?>

<body class="bg-black">
    <div class="relative h-[900px] bg-cover p-20" style="background-image: url('https://res.cloudinary.com/dhyufaqzh/image/upload/v1719208082/t0c9jslleqmfoeinr89t.jpg');">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="relative mt-32 z-10">
            <h1 data-aos="zoom-in" data-aos-duration="900" class="text-8xl dm-sans text-neutral-200 text-center tracking-tight font-bold max-w-3xl mx-auto">Welcome to <span class="text-blue-600">ChamShop </span></h1>
            <p data-aos="zoom-in" data-aos-duration="2000" class="text-center max-w-4xl mx-auto text-lg mt-3 archivo text-neutral-200">ChamShop is a website that website e-commers that have been released and shown in this world, even we collect a lot of information about e-commers and shop.</p>
            <div class="flex items-center justify-center mt-5 gap-2">
                <a data-aos="zoom-in" data-aos-duration="2400" class="flex justify-center" href="#thank-saying">
                    <button class="px-5 py-2 text-neutral-200 archivo text-sm rounded-full hover:scale-95 duration-300 hover:bg-red-700 bg-blue-600">read More</button>
                </a>
                <a data-aos="zoom-in" data-aos-duration="3000" href="<?= site_url('auth/login') ?>">
                    <button class="border px-7 py-2 text-neutral-200 rounded-full text-sm archivo hover:scale-95 duration-300 border-neutral-200">Login</button>
                </a>
            </div>
            <p data-aos="zoom-in" data-aos-duration="3000" class="text-center text-red-600 mt-10 text-sm font-normal">Trusted by many people</p>
        </div>
    </div>

    <!-- Reviews List -->
    <div>
        <h1 data-aos="fade-up" data-aos-duration="500" class="text-neutral-200 dm-sans font-semibold text-3xl mt-28 text-center">Reviews And Comment</h1>
        <p data-aos="fade-up" data-aos-duration="800" class="text-neutral-300 mt-4 text-center max-w-lg mx-auto archivo">Give opinions.any comments as well as suggestions and criticism, we are very receptive to it for our change</p>
        <div class="flex justify-center">
            <div id="reviewsList" data-aos="zoom-in" data-aos-duration="1000" class="carousel-container-automatic flex gap-12 mt-24 rounded-3xl"></div>
        </div>
    </div>

    <section id="thank-saying">
        <div class="flex items-center mt-32 bg-neutral-950 p-20 justify-center gap-20">
            <div data-aos="fade-down-right" data-aos-duration="800">
                <h1 class="text-5xl font-semibold dm-sans text-start text-neutral-200 leading-tight">Thanks for <br>
                    <span class="text-3xl">SMK MUHAMMADYAH 1 YOGYAKARTA</span>
                </h1>
                <p class="max-w-xl text-neutral-200 text-lg mt-6 archivo text-start leading-10">I am a student of SMK MUHAMMADYAH 1 YOGYAKARTA who majors in Software Engineering. I really like majoring in Software Engineering because the digital world is very broad.</p>
            </div>
            <div><img data-aos="flip-left" data-aos-delay="600" src="https://res.cloudinary.com/ddy7p8yrj/image/upload/v1717001528/pf2frcn8tujynmvxqrho.png" width="600px" alt=""></div>
        </div>
    </section>

    <section title="people-create-project">
        <div class="flex items-center justify-center mt-20 gap-16 p-14 pt-0">
            <div><img data-aos="flip-right" data-aos-delay="600" class="rounded-full" src="https://res.cloudinary.com/ddy7p8yrj/image/upload/v1717412010/q0zalc23qw3w3o6kpxga.jpg" width="600px" alt=""></div>
            <div data-aos="fade-down-left" data-aos-duration="800">
                <h1 class="text-5xl text-neutral-200 font-semibold dm-sans">Hi, im <span class="text-blue-600">Hisyam</span></h1>
                <p class="max-w-2xl text-neutral-200 text-lg mt-6 archivo text-start leading-10">Hello! I'm Hisyam, the creator of ChamShop, ChamShop is designed to provide concise and engaging summaries that capture the essence of each Shop, making it easier for viewers to decide what to buying.</p>
            </div>
        </div>
    </section>



    

    <section title="content-for-open-source">
        <div class="flex items-center gap-10 p-32 justify-center mt-12">
            <div data-aos="zoom-out-right" data-aos-delay="650">
                <h1 class=" text-5xl text-neutral-200 font-semibold dm-sans">E-Commers Website</h1>
                <p class="max-w-2xl text-neutral-200 text-lg mt-6 archivo text-start leading-10">This website is officially open and can be used by anyone. we provide many features for describing or providing website.</p>
            </div>
            <div>
                <img data-aos="zoom-out-left" data-aos-delay="750" src="https://res.cloudinary.com/ddy7p8yrj/image/upload/v1717430510/screenpicture_og5lyk.png" width="700px" alt="">
            </div>
        </div>
    </section>

    <section title="for-faq-import-components">
        <div class="flex items-start justify-center mt-14 gap-32">
            <div><?php $this->load->view('section/faq.php'); ?> </div>
            <div title="for-form-reviews">
                <div class="text-neutral-200">
                    <div class="mt-[100px]">
                        <h1 class="text-3xl dm-sans font-semibold mt-32 text-center">Send your Opini!</h1>
                        <p class="max-w-xl text-center archivo text-neutral-400 mt-3 mx-auto">Any opinions, inputs, conclusions, suggestions, and criticisms will be very influential for us in developing this website.</p>
                    </div>
                    <div class="xl:flex gap-10 grid items-center justify-cente">
                        <div class="w-full max-w-4xl mx-auto xl:mx-0 p-5 glassmorphism rounded-3xl shadow-md">
                            <form id="reviewForm" class="mb-6" autocomplete="off">
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-200 dm-sans">Name:</label>
                                    <input type="text" id="name" class="w-full text-neutral-300 p-3 text-sm rounded-lg mt-2 border-b border-neutral-800 bg-transparent focus:outline-none" autocomplete="off" required placeholder="Your Name" />
                                </div>
                                <div class="mb-4">
                                    <label for="review" class="block text-gray-200 dm-sans">Comments:</label>
                                    <input type="text" id="review" class="w-full text-neutral-300 p-2 text-sm h-32 mt-2 border-b border-neutral-800 bg-transparent rounded-2xl focus:outline-none" autocomplete="off" required placeholder="40 words of feedback, suggestions and ratings" />
                                    <div id="word-count" class="word-count">0/40 Words</div>
                                </div>
                                <div class="flex justify-center">
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 hover:scale-95 duration-300 archivo text-white px-10 p-2 rounded-full">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>
<script>
    AOS.init();
</script>
<script>
    // send opini ss\ystem
    function displayReviews() {
        const reviews = JSON.parse(localStorage.getItem("reviews")) || [];
        const reviewsList = document.getElementById("reviewsList");
        reviewsList.innerHTML = "";
        reviews.forEach((review) => {
            const reviewElement = document.createElement("div");
            reviewElement.classList.add(
                "carousel-item-automatic",
                "relative",
                // nek di absolute dadi ketumpuk anjir, kwere
                "p-8",
                "rounded-xl",
                "hover:bg-none",
                "bg-neutral-950",
                "hover:border",
                "hover:border-neutral-800",
                "hover:scale-95",
                "duration-300",
                "transition-all",
                "hover:shadow-2xl",
                "hover:shadow-neutral-800",
                "border",
                "border-neutral-950",
                "shadow-3xl"
            );
            reviewElement.innerHTML = `
            <h3 class="text-xl dm-sans text-neutral-200 font-semibold">${review.name}</h3>
            <p class="max-w-sm leading-loose mt-2 text-sm archivo text-neutral-400">${review.text}</p>
        `;
            reviewsList.appendChild(reviewElement);
        });
    }

    document
        .getElementById("reviewForm")
        .addEventListener("submit", function(event) {
            event.preventDefault();
            const name = document.getElementById("name").value;
            const review = document.getElementById("review").value;
            const reviews = JSON.parse(localStorage.getItem("reviews")) || [];
            reviews.push({
                name: name,
                text: review,
            });

            localStorage.setItem("reviews", JSON.stringify(reviews));
            displayReviews();
            document.getElementById("reviewForm").reset();
        });

    window.addEventListener("load", displayReviews);

    function autoScrollCarousel() {
        const reviewsList = document.getElementById("reviewsList");
        const scrollAmount = 300;
        let scrollPosition = 0;
        setInterval(() => {
            scrollPosition += scrollAmount;

            if (scrollPosition >= reviewsList.scrollWidth - reviewsList.clientWidth) {
                scrollPosition = 0;
            }
            reviewsList.scrollTo({
                left: scrollPosition,
                behavior: "smooth",
            });
        }, 2000);
    }

    window.addEventListener("load", autoScrollCarousel);



    ///////////////////////////////////////////////////////////////////////////////////////
    // for limit text input //
    const textarea = document.getElementById("review");
    const wordCountDisplay = document.getElementById("word-count");
    const maxWords = 40;
    textarea.addEventListener("input", () => {
        const words = textarea.value.trim().split(/\s+/);
        const wordCount = words.filter((word) => word.length > 0).length;

        if (wordCount > maxWords) {
            const trimmedWords = words.slice(0, maxWords);
            textarea.value = trimmedWords.join(" ");
        }

        wordCountDisplay.textContent = `${Math.min(
					wordCount,
					maxWords
				)}/${maxWords} words`;
    });
</script>

</html>