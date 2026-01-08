# Portfolio Website

A simple HTML portfolio website with theme and language toggles.

## Features
- Light/Dark theme toggle
- English/Indonesian language toggle
- Responsive design
- Contact form (using Formspree)
- Portfolio videos
- Skills section with progress bars

## Local Testing
1. Open `index.html` in your browser.
2. Navigate to `about.html` for the about page.
3. Test theme toggle (sun/moon icon).
4. Test language toggle (EN/ID button).
5. Submit the contact form (notifications will appear).

## Deployment
- Automatically deploys to GitHub Pages on push to `Portfolio` branch.
- Uses GitHub Actions to upload the root directory.

## Toggle Logic
- Theme: Stored in `localStorage` as 'light' or 'dark'.
- Language: Stored in `localStorage` as 'en' or 'id'.
- Toggles persist across page reloads.
- Language switches text content using `data-en` and `data-id` attributes.

## File Structure
- `index.html`: Home page
- `about.html`: About page
- `app.js`: JavaScript for toggles, form, videos
- Assets: Images, videos, PDFs in root
