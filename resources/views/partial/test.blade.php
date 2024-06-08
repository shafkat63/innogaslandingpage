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
