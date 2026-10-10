# Khater Booth Theme

A responsive WordPress theme for an app or digital-product landing page, adapted from the Booth landing-page design. It includes editable theme options, widget areas, custom navigation menus, featured-image support, and an RTL stylesheet.

## Features

- Responsive landing-page layout with app-download sections.
- WordPress Customizer settings for footer text, statistics, and app screenshots.
- Widget areas for newsletter, questions, downloads, feature blocks, and pricing plans.
- Primary and social navigation menus.
- Right-to-left stylesheet selection when the site language is RTL.
- Standard single-post template with featured images, categories, tags, navigation, and comments.
- GPL-2.0-or-later licensing.

## Requirements

- WordPress 5.8 or later.
- PHP 7.4 or later.

These are the theme's declared minimum requirements. The theme has not yet been tested against a live WordPress installation in this repository-maintenance session.

## Installation

1. Download the repository as a ZIP archive from GitHub.
2. In WordPress admin, open **Appearance → Themes → Add New Theme → Upload Theme**.
3. Upload the ZIP and activate **Khater Booth Theme**.
4. Open **Appearance → Menus** and assign a menu to **Khater Main Menu**. Assign social links to **Khater Social Menu**.
5. Open **Appearance → Widgets** to configure the landing-page sections.
6. Open **Appearance → Customize → Khater Theme Options** to configure footer text, statistics, and app screenshots.

## Important setup notes

The landing page is designed around WordPress posts and categories such as `about` and `app`, plus custom widgets. Add the relevant content and configure the widgets and Customizer settings before using it on a production site. Some landing-page copy and sample sections in the current template are still based on the original Booth demo and should be customized for each site.

## Development status

This theme has been reviewed and updated for theme metadata, WordPress navigation setup, document/body hooks, footer escaping, page structure, and the single-post template. These source-level updates do not replace installation and browser testing. Before production use, verify the theme on a staging WordPress site, including desktop/mobile layouts, RTL rendering, widgets, Customizer controls, navigation, and comments.

## License

GNU General Public License v2 or later. See <https://www.gnu.org/licenses/gpl-2.0.html>.
