<a
href="/login"
class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"
>
Get started
<svg
    class="w-5 h-5 ml-2 -mr-1"
    fill="currentColor"
    viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg"
>
    <path
        fill-rule="evenodd"
        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
        clip-rule="evenodd"
    ></path>
</svg>
</a>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('[data-link]');
        links.forEach(link => {
            link.addEventListener('click', function() {
                links.forEach(l => l.classList.remove('text-blue-700', 'dark:text-blue-500'));
                this.classList.add('text-blue-700', 'dark:text-blue-500');
            });
        });

        // Optionally, add logic to highlight the current section based on the URL hash
        const currentHash = window.location.hash;
        if (currentHash) {
            const activeLink = document.querySelector(`[data-link="${currentHash.substring(1)}"]`);
            if (activeLink) {
                activeLink.classList.add('text-blue-700', 'dark:text-blue-500');
            }
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        const button = document.querySelector('[data-collapse-toggle]');
        const navbar = document.getElementById('navbar-default');

        button.addEventListener('click', function() {
            navbar.classList.toggle('hidden');
        });
    });
</script>



<section id="contact" class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2
            class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white"
        >
            Contact Us
        </h2>
        <p
            class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl"
        >
            Got a technical issue? Want to send feedback about a beta feature?
            Need details about our Business plan? Let us know.
        </p>
        <form action="/contact" class="space-y-8" method="post">
            @csrf
            <div>
                <label
                    for="name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Your Name</label
                >
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="John Doe"
                    required
                />
            </div>
            <div>
                <label
                    for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Your email</label
                >
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="name@email.com"
                    required
                />
            </div>
            <div>
                <label
                    for="number"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Your Phone Number(Optional)</label
                >
                <input
                    type="number"
                    id="number"
                    name="phone"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="019xxxxxxx"
                />
            </div>
            <div>
                <label
                    for="subject"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Subject</label
                >
                <input
                    type="text"
                    id="subject"
                    name="subject"
                    class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Let us know how we can help you"
                    required
                />
            </div>
            <div class="sm:col-span-2">
                <label
                    for="message"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                    >Your message</label
                >
                <textarea
                    id="message"
                    name="message"
                    rows="6"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Leave a message..."
                ></textarea>
            </div>
            <button
                type="submit"
                class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
            >
                Send message
            </button>
        </form>
    </div>
</section>
