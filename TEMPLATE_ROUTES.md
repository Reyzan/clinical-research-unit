# Ophtical Template Routes

All template pages are accessible under the `/templates` prefix.

## Homepage Variations
- **Homepage 1**: http://localhost:8000/templates
- **Homepage 2**: http://localhost:8000/templates/homepage-2
- **Homepage 3**: http://localhost:8000/templates/homepage-3

## About Pages
- **About Us**: http://localhost:8000/templates/about-us
- **Our History**: http://localhost:8000/templates/our-history

## Services
- **Services List**: http://localhost:8000/templates/services
- **Service Details**: http://localhost:8000/templates/service-details

## Doctors
- **Our Doctors**: http://localhost:8000/templates/our-doctors
- **Doctor Detail**: http://localhost:8000/templates/doctor-detail

## Other Pages
- **Appointment**: http://localhost:8000/templates/appointment
- **Contact Us**: http://localhost:8000/templates/contact-us
- **FAQ**: http://localhost:8000/templates/faq
- **Elements**: http://localhost:8000/templates/element

## Blog Pages
- **Blog Classic**: http://localhost:8000/templates/blog-classic
- **Blog Grid 3 Columns**: http://localhost:8000/templates/blog-grid-col-3
- **Blog Grid 4 Columns**: http://localhost:8000/templates/blog-grid-col-4
- **Blog Masonry Wide**: http://localhost:8000/templates/blog-masonry-wide
- **Blog Masonry Grid 2 Columns**: http://localhost:8000/templates/blog-m-grid-col-2
- **Blog Masonry Grid 3 Columns**: http://localhost:8000/templates/blog-m-grid-col-3
- **Blog Masonry Grid 4 Columns**: http://localhost:8000/templates/blog-m-grid-col-4
- **Blog Single Detail**: http://localhost:8000/templates/blog-single-detail
- **Blog Sortable Grid**: http://localhost:8000/templates/blog-sortable-grid-view

## Portfolio Pages
- **Portfolio Detail Style 1**: http://localhost:8000/templates/portfolio-detail-style-01
- **Portfolio Detail Style 2**: http://localhost:8000/templates/portfolio-detail-style-02
- **Portfolio Grid 2 Columns**: http://localhost:8000/templates/portfolio-grid-col-2
- **Portfolio Grid 3 Columns**: http://localhost:8000/templates/portfolio-grid-col-3
- **Portfolio Grid 4 Columns**: http://localhost:8000/templates/portfolio-grid-col-4
- **Portfolio Grid No Gap**: http://localhost:8000/templates/portfolio-grid-no-gap
- **Portfolio Masonry Grid 2 Columns**: http://localhost:8000/templates/portfolio-m-grid-col-2
- **Portfolio Masonry Grid 3 Columns**: http://localhost:8000/templates/portfolio-m-grid-col-3
- **Portfolio Masonry Grid 4 Columns**: http://localhost:8000/templates/portfolio-m-grid-col-4
- **Portfolio Masonry Grid Wide**: http://localhost:8000/templates/portfolio-m-grid-wide
- **Portfolio Sortable Grid 2 Columns**: http://localhost:8000/templates/portfolio-sortable-grid-col-2
- **Portfolio Sortable Grid 3 Columns**: http://localhost:8000/templates/portfolio-sortable-grid-col-3
- **Portfolio Sortable Grid 4 Columns**: http://localhost:8000/templates/portfolio-sortable-grid-col-4

---

## Quick Start

1. Start the development server:
   ```bash
   composer dev
   # or
   php artisan serve
   ```

2. Visit any of the URLs above to view the templates

## File Locations

- **Blade Templates**: `resources/views/frontend/pages/`
- **Controller**: `app/Http/Controllers/Frontend/PagesController.php`
- **Routes**: `routes/web.php` (under `templates` prefix)
- **Assets**: `public/Ophtical HTML Files/` (css, js, images, fonts)

## Notes

- All templates are exact copies of the original HTML with only asset paths updated
- Assets are referenced using Laravel's `asset()` helper
- Templates are organized under `/templates` prefix to avoid conflicts with application routes
