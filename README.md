# 🎌 Shusi - Modern Japanese Restaurant Website

Shusi is a beautifully crafted, highly immersive Japanese restaurant website built with Laravel. It features a modern, minimalist design enriched with smooth scroll animations, a cohesive dark/light typography system, and an elegant visual flow.

## 🚀 Key Features
- **Splash Screen Entry:** A smooth, 2-second logo zoom-in introduction using GSAP.
- **Dynamic Smart Navbar:** Responsive navigation that changes from white to black on scroll, complete with distinctive red hover accents.
- **Premium Aesthetics:** "Rounded" design elements applied to images, cards, and buttons for a softer, highly modern presence.
- **Atmospheric Menu:** Custom Japanese background textures (`bgjapan2.jpg`) rendered with dark overlays and targeted opacity.
- **Smooth Animations:** Animate On Scroll (AOS) integration for zooming content into view.

## 🛠 Tech Stack
- **Framework:** Laravel 11
- **Frontend Stack:** HTML, CSS, JavaScript, Tailwind CSS (via Vite)
- **Animation Libraries:**
  - [GSAP](https://greensock.com/gsap/): Used for complex sequencing (Splash screen, Hero zoom).
  - [AOS](https://michalsnik.github.io/aos/): Used for effortless scroll-triggered animations.
- **Typography & Icons:** Google Fonts (Outfit & Playfair Display), Font Awesome.

## ⚙️ Installation & Usage
1. Clone this repository.
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Install frontend dependencies and build the assets:
   ```bash
   npm install
   npm run build
   ```
4. Copy the environment file and generate the application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. Run the local development server:
   ```bash
   php artisan serve
   ```
6. (Optional) Start the Vite dev server for frontend hot-reloading:
   ```bash
   npm run dev
   ```

*Crafted with precision to deliver a premium dining preview experience.*
