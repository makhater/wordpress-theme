# Khater Booth Theme

A responsive WordPress theme for an app or digital-product landing page, adapted from the Booth landing-page design. It includes editable theme options, widget areas, custom navigation menus, featured-image support, and RTL stylesheet support.

## Features

- Landing-page layout with app-download sections.
- Customizer settings for footer text, statistics, and app screenshots.
- Widget areas for newsletter, questions, downloads, features, and pricing plans.
- Primary and social navigation menus.
- RTL stylesheet selection for right-to-left sites.
- Single-post template with featured images, categories, tags, post navigation, and comments.

## Requirements

- WordPress 5.8 or later.
- PHP 7.4 or later.

## Installation

1. Download the repository as a ZIP from GitHub.
2. In WordPress admin, select **Appearance → Themes → Add New Theme → Upload Theme**.
3. Upload the ZIP and activate **Khater Booth Theme**.
4. Under **Appearance → Menus**, assign a menu to **Khater Main Menu** and social links to **Khater Social Menu**.
5. Under **Appearance → Widgets**, configure the landing-page sections.
6. Under **Appearance → Customize → Khater Theme Options**, configure footer text, statistics, and app screenshots.

## Content setup

The landing page contains sections based on the original Booth demo. It uses posts assigned to the `about` and `app` categories and includes custom widgets. Add your content and configure the widgets/Customizer before production use. Some section copy and sample testimonials still use demo content and should be replaced for each project.

## Development status

The source has been updated for theme metadata, navigation registration, WordPress body hooks, footer escaping, main content markup, and the single-post template. These changes have not been tested on a live WordPress installation during this review. Before production use, test theme activation, mobile and desktop layouts, RTL, menus, widgets, Customizer controls, and comments on a staging site.

## License

GNU General Public License v2 or later. See <https://www.gnu.org/licenses/gpl-2.0.html>.
