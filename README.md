# Starbucks Coffee — Responsive Product Landing Page

**ITST 302 – Client-Server Technologies | Week 5 | Mini Project 04**

---

## Table of Contents

1. [Project Title](#1-project-title)
2. [Introduction](#2-introduction)
3. [Objectives](#3-objectives)
4. [Responsive Web Design](#4-responsive-web-design)
5. [Tailwind CSS](#5-tailwind-css)
6. [Blade Components](#6-blade-components)
7. [User Interface Design](#7-user-interface-design)
8. [Folder Structure](#8-folder-structure)
9. [Screenshots](#9-screenshots)

---

## 1. Project Title

**Starbucks Coffee — Responsive Product Landing Page**

A modern, fully responsive product landing page built with **Laravel 11**, **Blade Components**, and **Tailwind CSS v4**. The landing page is inspired by the real-world brand **Starbucks Coffee** — one of the world's most recognized specialty coffee companies, founded in Seattle, Washington in 1971.

---

## 2. Introduction

### What is a Product Landing Page?

A product landing page is a standalone web page specifically designed to present a product, service, or brand to potential customers. Unlike a full website, a landing page is focused on a single goal — to capture attention, communicate value, and convert visitors into customers or subscribers. It typically includes a hero section with a strong headline, feature highlights, pricing plans, testimonials, and a clear call-to-action.

### Why Landing Pages Are Important for Businesses

Landing pages are among the most valuable digital marketing tools available to businesses today. A well-designed landing page:

- Creates a strong **first impression** that reflects the brand's identity
- **Increases conversion rates** by guiding visitors toward a specific action
- **Builds trust** through testimonials, feature highlights, and clear pricing
- Provides a **focused experience** without the distractions of a full website
- Serves as a **24/7 digital storefront** accessible from any device

For a brand like Starbucks, a landing page helps communicate their menu offerings, loyalty rewards program, and brand story to both new and returning customers in a clean, modern format.

### Purpose of the Project

This project was developed as part of **ITST 302 – Client-Server Technologies (Week 5)**. The goal was to apply Laravel Blade Components and Tailwind CSS to build a professional, responsive, and component-based landing page for a real-world business — in this case, Starbucks Coffee. The project demonstrates skills in frontend architecture, responsive UI design, and reusable component development.

---

## 3. Objectives

Upon completing this project, the following learning objectives were accomplished:

- ✅ Built a fully responsive web interface using **Tailwind CSS v4** utility classes
- ✅ Created **reusable Laravel Blade Components** to eliminate duplicated HTML code
- ✅ Applied **responsive design principles** optimized for desktop, tablet, and mobile
- ✅ Organized frontend components following **Laravel best practices** (layouts, components, pages)
- ✅ Implemented **consistent UI design** using a defined color palette, typography system, spacing utilities, and card patterns
- ✅ Documented the **frontend architecture** and component design in this README
- ✅ Published the project to a **public GitHub repository** for portfolio purposes

---

## 4. Responsive Web Design

### Mobile-First Design

This project follows a **mobile-first design approach**, meaning all base styles are written for small screens first, and larger screen styles are layered on using Tailwind's responsive prefixes (`sm:`, `md:`, `lg:`). This ensures the page performs well on the smallest devices before scaling up to larger viewports.

For example, the hero section stacks content vertically on mobile and switches to a two-column grid on large screens:

```html
<div class="grid items-center gap-10 lg:grid-cols-2">
```

### Responsive Breakpoints

Tailwind CSS provides a set of screen breakpoints used throughout this project:

| Prefix | Minimum Width | Usage |
|--------|--------------|-------|
| *(none)* | 0px | Mobile base styles |
| `sm:` | 640px | Small tablets |
| `md:` | 768px | Tablets / landscape phones |
| `lg:` | 1024px | Laptops and desktops |
| `xl:` | 1280px | Wide desktop screens |

### Flexbox

Flexbox is used extensively throughout the layout for alignment and distribution of elements. Key usages include:

- **Navbar** — `flex items-center justify-between` for logo, nav links, and buttons
- **Feature cards** — `flex items-start gap-4` for icon + text layout
- **Menu rows** — `flex gap-4` for thumbnail + item details in the scrollable columns
- **Footer grid columns** — `inline-flex items-center gap-3` for logo + brand name

```html
<!-- Navbar layout using Flexbox -->
<div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-3">
```

### CSS Grid

CSS Grid handles the multi-column section layouts. Examples used in the project:

- **Features section** — `grid grid-cols-1 gap-4 lg:grid-cols-3` (bento-style grid)
- **Menu section** — `grid gap-5 lg:grid-cols-3` (three scrollable columns)
- **Pricing section** — `grid gap-6 lg:grid-cols-3` (three pricing cards)
- **Testimonials** — `grid gap-5 md:grid-cols-3` (three testimonial cards)
- **Footer** — `grid gap-12 md:grid-cols-2 lg:grid-cols-4`

```html
<!-- Pricing section grid -->
<div class="mt-14 grid gap-6 lg:grid-cols-3">
```

### User Experience (UX)

Responsive design is not just about fitting content on different screen sizes — it directly impacts user experience:

- **Readability** — font sizes and line heights are comfortable on all screens
- **Touch targets** — buttons and interactive elements are large enough for mobile taps
- **Navigation** — the navbar collapses into a mobile menu with a hamburger toggle on small screens
- **Content priority** — on mobile, the most important content (headline, CTA) appears first
- **Performance** — images use Unsplash's `auto=format&fit=crop` parameters to serve appropriately sized assets

---

## 5. Tailwind CSS

### Utility-First CSS

Tailwind CSS is a **utility-first CSS framework** — instead of writing custom CSS classes, styles are applied directly in HTML using small, single-purpose utility classes. This approach eliminates the need for a separate stylesheet for most UI work and keeps styles co-located with their markup.

```html
<!-- Traditional approach -->
<button class="btn-primary">Order Now</button>

<!-- Tailwind utility-first approach -->
<a class="rounded-full bg-green px-5 py-2.5 text-xs font-bold uppercase tracking-widest text-white transition hover:-translate-y-0.5 hover:bg-green-mid">
    Order Now
</a>
```

### Advantages of Tailwind CSS

- **No naming conflicts** — no need to invent class names like `.card-header-wrapper`
- **Rapid prototyping** — styles are applied instantly without switching files
- **Consistency** — using a defined scale (spacing, colors, font sizes) prevents arbitrary values
- **PurgeCSS built-in** — only the classes actually used are included in the final CSS bundle
- **Responsive by default** — every utility can be prefixed with a breakpoint modifier

### Responsive Utility Classes

This project uses Tailwind's responsive prefix system throughout:

```html
<!-- Mobile: full width, Desktop: 2 columns -->
<div class="grid grid-cols-1 lg:grid-cols-2">

<!-- Hidden on mobile, visible on medium screens and up -->
<div class="hidden md:flex items-center gap-7">

<!-- Text sizes scale up on larger screens -->
<h2 class="text-4xl font-bold lg:text-5xl">
```

### Component Styling with Tailwind v4

This project uses **Tailwind CSS v4** with a custom `@theme` block in `resources/css/app.css` to define design tokens as CSS custom properties:

```css
@theme {
    --font-serif:          'Playfair Display', ui-serif, Georgia, serif;
    --color-green:         #1E3932;   /* Starbucks dark green */
    --color-green-bright:  #00A862;   /* Starbucks accent green */
    --color-cream:         #F2F0EB;   /* warm off-white background */
    --color-latte:         #CBA258;   /* gold accent */
    --color-charcoal:      #2C2C2C;   /* dark card background */
}
```

These tokens become usable as Tailwind utility classes like `bg-green`, `text-green-bright`, `bg-cream`, etc. — keeping the design system consistent across all components.

---

## 6. Blade Components

### What Are Blade Components?

**Blade Components** are reusable, self-contained UI building blocks in Laravel's Blade templating engine. A component is defined once in `resources/views/components/` and can be reused anywhere using the `<x-component-name />` syntax. Components can accept **props** (data passed from the parent) and **slots** (HTML content injected into them).

```html
<!-- Using a component -->
<x-feature-card title="Handcrafted Beverages" description="Every drink made with precision.">
    <svg><!-- icon SVG --></svg>
</x-feature-card>

<!-- Component definition (feature-card.blade.php) -->
@props(['title' => 'Feature', 'description' => ''])
<div class="group rounded-3xl border bg-white p-6 ...">
    <div class="...">{{ $slot }}</div>
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
</div>
```

### Why Reusable Components Improve Maintainability

Without components, the same card HTML would be copy-pasted 6 times for the features section. If the design changes, every copy needs to be updated. With components:

- **Single source of truth** — change the component once, all instances update
- **Reduced code duplication** — the features section renders 6 cards with 6 lines of Blade code
- **Easier debugging** — all card logic lives in one file
- **Separation of concerns** — the page file focuses on data/content, the component handles presentation

### Benefits of Modular UI Development

| Benefit | Description |
|---------|-------------|
| **Reusability** | The same `pricing-card` is used for all 3 pricing tiers with different props |
| **Consistency** | Every testimonial card has the same layout, spacing, and typography |
| **Scalability** | Adding a 4th pricing plan requires only one extra `<x-pricing-card />` call |
| **Readability** | `home.blade.php` reads like a clear document of sections, not a wall of HTML |
| **Testability** | Each component can be reviewed and adjusted in isolation |

### Components Built for This Project

| Component | File | Props / Slots |
|-----------|------|---------------|
| Navbar | `navbar.blade.php` | None — self-contained with JS mobile toggle |
| Hero | `hero.blade.php` | None — full section component |
| Feature Card | `feature-card.blade.php` | `title`, `description`, `$slot` (SVG icon) |
| Pricing Card | `pricing-card.blade.php` | `name`, `price`, `period`, `description`, `features[]`, `featured`, `reserve` |
| Testimonial Card | `testimonial-card.blade.php` | `image`, `name`, `position`, `review` |
| Button | `button.blade.php` | `text`, `href`, `style` |
| Footer | `footer.blade.php` | None — self-contained |

---

## 7. User Interface Design

### Color Palette

The color system is based on **Starbucks' official brand colors**, extended with supporting neutrals and accent tones:

| Token | Hex | Usage |
|-------|-----|-------|
| `green` | `#1E3932` | Primary — navbar, hero, section headers, card backgrounds |
| `green-mid` | `#2D6A4F` | Hover states, Cold Drinks column header |
| `green-bright` | `#00A862` | Accent — badges, CTA buttons, checkmarks |
| `green-mist` | `#D4E9E2` | Light backgrounds, testimonials section |
| `green-light` | `#9DC4B6` | Subtle text on dark green backgrounds |
| `cream` | `#F2F0EB` | Page background, section backgrounds |
| `cream-dark` | `#E8E4DC` | Alternating section backgrounds |
| `latte` | `#CBA258` | Gold accent — Food Pairings column, Reserve badge |
| `charcoal` | `#2C2C2C` | Food Pairings header, Reserve Access card |
| `espresso` | `#1A1A1A` | Body text |
| `parchment` | `#CFC9BC` | Borders, dividers |

### Typography

Three typefaces are loaded from **Google Fonts**:

| Font | Variable | Usage |
|------|----------|-------|
| **Playfair Display** | `font-serif` | All headings (h1–h4), prices, card titles |
| **Lato** | `font-display` | Eyebrow labels, category tags, italic subheadings |
| **Inter** | `font-sans` | Body text, descriptions, UI elements |

This combination creates a **luxury editorial feel** — the serif heading font evokes premium brand positioning while Inter keeps body text clean and highly readable.

### Iconography

All icons are **inline SVG** sourced from the Lucide icon set. Benefits of this approach:

- No external dependency or font file required
- Icons scale perfectly at any size
- Color is controlled via `currentColor` — icons inherit their parent's text color
- Icons change color on hover using Tailwind's `group-hover:` variant

```html
<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
     fill="none" stroke="currentColor" stroke-width="1.5">
    <path d="M17 8h1a4 4 0 0 1 0 8h-1"/>
    <path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z"/>
</svg>
```

The **Starbucks siren logo** in the navbar and footer is a custom inline SVG drawing that renders the iconic siren emblem (green circle, star crown, siren figure, twin tails) with no external image dependency.

### Button Styles

Three button variants are used across the page:

| Variant | Style | Usage |
|---------|-------|-------|
| **Primary** | `bg-green text-white` + rounded-full | Main CTAs — "Get Started", "Order Now" |
| **Secondary** | Transparent + border | Alternative actions — "Join Rewards", "Visit Us" |
| **Ghost** | `bg-white text-green` | Buttons on dark backgrounds (hero, CTA section) |

All buttons share: `rounded-full`, `uppercase tracking-widest`, `text-xs font-bold`, `hover:-translate-y-0.5`, `transition duration-300`.

### Card Design

Four card types are used consistently:

- **Feature Cards** — white bg, `rounded-3xl`, `border-parchment`, green icon box that turns dark green on hover, animated bottom accent line
- **Menu Item Rows** — `flex` layout with 80×80 thumbnail, name + price right-aligned, small Order button
- **Pricing Cards** — three distinct dark-background variants (white, dark green, dark charcoal) with matching dividers, checkmarks, and CTA buttons
- **Testimonial Cards** — white bg, opening quote SVG, green star rating, avatar with ring

### Layout Consistency

All sections share a consistent container: `mx-auto max-w-7xl px-6 lg:px-8`. Section padding is uniformly `py-24`. Section headers follow the same pattern: eyebrow tag → serif heading → accent bar → description text.

---

## 8. Folder Structure

```
week05-product-landing-page/
│
├── resources/
│   ├── css/
│   │   └── app.css              # Tailwind v4 @theme tokens + base styles
│   ├── js/
│   │   └── app.js               # Laravel Echo / Axios bootstrap
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php    # Master layout — Google Fonts, Vite assets, body wrapper
│       ├── components/
│       │   ├── navbar.blade.php          # Sticky navigation bar + mobile menu
│       │   ├── hero.blade.php            # Full-viewport hero section
│       │   ├── feature-card.blade.php    # Reusable feature card (icon + title + desc)
│       │   ├── pricing-card.blade.php    # Pricing card (3 style variants)
│       │   ├── testimonial-card.blade.php # Customer review card
│       │   ├── button.blade.php          # Reusable CTA button
│       │   └── footer.blade.php          # Site footer + contact section
│       └── pages/
│           └── home.blade.php   # Main landing page — assembles all sections
│
├── public/
│   └── index.php                # Laravel entry point
│
├── screenshots/                 # Required screenshots for documentation
│   ├── desktop-view.png
│   ├── tablet-view.png
│   ├── mobile-view.png
│   ├── navbar.png
│   ├── hero-section.png
│   ├── features-section.png
│   ├── pricing-section.png
│   ├── testimonials.png
│   ├── footer.png
│   ├── blade-components-folder.png
│   └── github-repository.png
│
├── documentation/               # Before-and-after design comparison
│   ├── before-design.png
│   └── after-design.png
│
├── routes/
│   └── web.php                  # Single route: GET / → pages.home
│
├── vite.config.js               # Vite + Laravel plugin + Tailwind v4 plugin
├── package.json                 # Node dependencies (Tailwind, Vite, Laravel plugin)
└── README.md                    # This documentation file
```

### Folder Purposes

**`resources/views/layouts/`**
Contains the master layout file `app.blade.php`. Every page extends this layout using `@extends('layouts.app')`. It defines the HTML shell — `<head>` with meta tags, Google Fonts imports, and Vite asset loading — and a `@yield('content')` placeholder where page content is injected.

**`resources/views/components/`**
Contains all reusable Blade Components. Each file represents a self-contained UI element that can be used anywhere with `<x-component-name />`. Props and slots allow components to be customized without duplicating markup.

**`resources/views/pages/`**
Contains the full page views. `home.blade.php` extends the main layout and assembles all sections by calling components in order: navbar → hero → features → menu → pricing → testimonials → CTA → footer.

**`public/`**
The web server's document root. Contains `index.php` (Laravel's entry point), compiled CSS/JS assets (output from `npm run build`), and static files like `robots.txt` and `favicon.ico`.

**`screenshots/`**
Contains visual documentation of the final interface across different viewports and sections. Required for the README and submission.

**`documentation/`**
Contains before-and-after design comparison images showing the evolution from the initial layout to the final polished interface.

---

## 9. Screenshots

> 📸 Screenshots are saved in the `/screenshots` folder of this repository.

### Desktop View
![Desktop View](screenshots/desktop-view.png)

### Tablet View
![Tablet View](screenshots/tablet-view.png)

### Mobile View
![Mobile View](screenshots/mobile-view.png)

### Navigation Bar
![Navbar](screenshots/navbar.png)

### Hero Section
![Hero](screenshots/hero-section.png)

### Features Section
![Features](screenshots/features-section.png)

### Pricing Section
![Pricing](screenshots/pricing-section.png)

### Testimonials
![Testimonials](screenshots/testimonials.png)

### Footer
![Footer](screenshots/footer.png)

### Blade Components Folder
![Components Folder](screenshots/blade-components-folder.png)

### GitHub Repository
![GitHub](screenshots/github-repository.png)

---

## Before & After Design Comparison

> 📁 Comparison images are saved in the `/documentation` folder.

### Before
The initial version used the default Laravel welcome page with no custom styling — plain HTML, no components, and no design system.

![Before Design](documentation/before-design.png)

### After
The final version is a fully designed, responsive, component-based landing page with a professional Starbucks-inspired design system, custom SVG icons, scrollable menu columns, and a consistent green/cream/charcoal palette.

![After Design](documentation/after-design.png)

---

## Technical Stack

| Technology | Version | Purpose |
|------------|---------|---------|
| Laravel | 11.x | Backend framework, routing, Blade templating |
| Tailwind CSS | v4.0 | Utility-first CSS styling |
| Vite | v7.x | Asset bundling and hot reload |
| PHP | 8.2+ | Server-side language |
| Google Fonts | — | Playfair Display, Lato, Inter typefaces |
| Unsplash | — | Product and food photography |
| Lucide Icons | — | Inline SVG icon set |

---

## How to Run Locally

```bash
# 1. Clone the repository
git clone https://github.com/YOUR_USERNAME/week05-product-landing-page.git
cd week05-product-landing-page

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Copy environment file
cp .env.example .env
php artisan key:generate

# 5. Build CSS/JS assets
npm run build

# 6. Start the development server
php artisan serve
```

Then open `http://localhost:8000` in your browser.

---

## Author

**[Your Name]**
ITST 302 – Client-Server Technologies
Week 5 Laboratory Activity — Mini Project 04

---

*This project is an academic exercise inspired by Starbucks Coffee. All brand references are used for educational purposes only.*
