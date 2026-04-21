<style>
    .hamburger {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #2563eb;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 24px;
        z-index: 1000;
        transition: background-color 0.3s ease;
    }
    .hamburger:hover {
        background-color: #1d4ed8;
    }
    .nav-menu {
        position: fixed;
        top: 0;
        right: -250px;
        width: 250px;
        height: 100vh;
        background-color: #333;
        padding: 80px 20px 20px;
        z-index: 999;
        transition: right 0.3s ease;
    }
    .nav-menu.active {
        right: 0;
    }
    .nav-menu a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 12px;
        margin-bottom: 10px;
        background-color: #2563eb;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .nav-menu a:hover {
        background-color: #1d4ed8;
    }
</style>

<button class="hamburger" onclick="toggleMenu()">☰</button>

<nav class="nav-menu" id="navMenu">
    <a href="{{ route('notes.index') }}">Notes</a>
    <a href="{{ route('notes.showNote') }}">Student Info</a>
</nav>

<script>
    function toggleMenu() {
        document.getElementById('navMenu').classList.toggle('active');
    }
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('navMenu');
        const btn = document.querySelector('.hamburger');
        if (!menu.contains(event.target) && !btn.contains(event.target)) {
            menu.classList.remove('active');
        }
    });
</script>